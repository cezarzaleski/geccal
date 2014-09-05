<?php

/**
 * @package Base_Acl
 * @author Cezar Zaleski
 * @version 1.0.0
 */
/**
 * @namespace
 */

namespace Base\Acl;

/**
 * @uses Doctrine\ORM\EntityManager
 * @uses Zend\Permissions\Acl\Acl
 * @uses Zend\Permissions\Acl\Role\GenericRole
 * @uses Zend\Permissions\Acl\Resource\GenericResource
 * @uses Application\Auth\UsuarioAuth
 */
use Doctrine\ORM\EntityManager;
use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Role\GenericRole as Role;
use Zend\Permissions\Acl\Resource\GenericResource as Resource;
use Application\Auth\UsuarioAuth;

/**
 * Classe para definição dos papéis, recursos e privilégios dos usuários na aplicação 
 */
class Authorization extends Acl {

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * Repository autilizado
     * @var Doctrine\ORM\EntityRepository
     */
    protected $repository;

    /**
     * Papéis utilizados na aplicação
     * @var Zend\Permissions\Acl\Role\GenericRole
     */
    protected $_roles;

    /**
     * Recursos utilizados na aplicação
     * @var Zend\Permissions\Acl\Resource\GenericResource
     */
    protected $_resources;

    /**
     * Perfil do usuário autencicado
     * @var integer
     */
    protected $_idPerfil;

    /**
     * Construtor
     * @access public
     * @param EntityManager $em
     * @return void
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
        $this->_initialize();
    }

    /**
     * Inicializa os métodos de criar os papéis e recursos da aplicação
     * @access private
     * @return void
     */
    private function _initialize()
    {
        $this->_addRoles();
        $this->_addResources();
        $usuarioAuth = new UsuarioAuth();
        if ($usuarioAuth->getLoggedUser()) {
            $this->_setupPrivileges($usuarioAuth->getLoggedUser()->idPerfil);
        }
    }

    /**
     * Define os papéis da aplicação
     * @access private
     * @return void
     */
    private function _addRoles()
    {
        $this->repository = $this->em->getRepository('Application\Entity\Perfil');
        $this->_roles = $this->repository->findAll();
        if (!empty($this->_roles)) {
            foreach ($this->_roles as $val) {
                $this->addRole(new Role($val->getNoPerfil()));
            }
        }
        $this->getRoles();
    }

    /**
     * Define os recursos da aplicação
     * @access private
     * @return void
     */
    private function _addResources()
    {
        $this->repository = $this->em->getRepository('Application\Entity\Submodulo');
        $this->_resources = $this->repository->findAll();
        $this->addResource(new Resource("loading-menu"));
        if (!empty($this->_resources)) {
            foreach ($this->_resources as $val) {
                $resource = $val->getIdModulo()->getNoModulo() . ':' . $val->getNoSubmodulo();
                $this->addResource(new Resource($resource));
            }
        }
    }

    /**
     * Define os privilégios dos usuários
     * @access private
     * @param $idPerfil
     * @return void
     */
    private function _setupPrivileges($idProfile)
    {
        $this->repository = $this->em->getRepository('Application\Entity\Funcionalidade');
        $functionality = $this->repository->findAll();
        if (!empty($functionality)) {
            $this->addDenyRole($functionality);
            //buscar funcionalidades do perfil
            $this->repository = $this->em->getRepository('Application\Entity\Funcionalidade');
            $profileFeat = $this->repository->findByFuncPerfil($idProfile);
            if (!empty($profileFeat)) {
                $this->addAllowFunctionality($profileFeat);
            }
        }
    }

    public function verifyAuthorization($controller, $action, $perfil)
    {
        if (!$this->hasResource($controller)) {
            return FALSE;
        } else if (!$this->isAllowed($perfil, $controller, $action)) {
            return FALSE;
        }
        return TRUE;
    }

    private function addDenyRole($functionality)
    {
        foreach ($functionality as $val) {
            $resource = $val->getIdSubmodulo()->getIdModulo()->getNoModulo() . ':' . $val->getIdSubmodulo()->getNoSubmodulo();
            foreach ($this->_roles as $value) {
                $this->deny($value->getNoPerfil(), $resource, $val->getIdTipoFuncionalidade()->getNoTipoFuncionalidade());
            }
        }
    }

    private function addAllowFunctionality($profileFeat)
    {
//        $this->allow($value->getNoPerfil(), "loading-menu");
        foreach ($profileFeat as $val) {
            $resource = $val['noModulo'] . ':' . $val['noSubmodulo'];
            foreach ($this->_roles as $value) {
                $this->allow($value->getNoPerfil(), $resource, $val['noTipoFuncionalidade']);
            }
        }
    }

}

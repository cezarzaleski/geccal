<?php

namespace Application\View\Helper;

use Zend\View\Helper\AbstractHelper,
    Application\Auth\UsuarioAuth;

class Menu extends AbstractHelper {

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * Repository autilizado
     * @var Doctrine\ORM\EntityRepository
     */
    protected $repository;
    protected $acl;
    protected $perfilFunc;
    protected $usuarioAuth;
    protected $utils;
    protected $menuLateral = NULL;

    public function __construct($em, $utils)
    {
        $this->em = $em;
        $this->utils = $utils;
        $this->usuarioAuth = new UsuarioAuth();
        $this->repository = $this->em
                ->getRepository('Application\Entity\Funcionalidade');
    }

    public function topMenu()
    {
        $this->perfilFunc = $this->repository
                ->findByFuncPerfil($this->usuarioAuth
                        ->getLoggedUser()->idPerfil);
        $menu = "<li>";
        $moduloAnterior = "";
        foreach ($this->perfilFunc as $val) {
            if ($moduloAnterior != $val['noModulo']) {
                $menu.="<a rel='{$val['noModulo']}"
                . "' href='/{$val['noModulo']}/{$val['noSubmodulo']}/"
                . "{$val['noTipoFuncionalidade']}'>{$val['noMenu']}</a>";
                $moduloAnterior = $val['noModulo'];
            }
        }
        $menu .="</li>";
        return $menu;
    }

    public function sideMenu()
    {
        $module = $this->utils->getModule();
        $this->perfilFunc = $this->repository
                ->findByFuncPerfilMod($this->usuarioAuth->getLoggedUser()
                ->idPerfil, $module);
        $this->sideMenuList();
        return $this->menuLateral;
    }

    private function sideMenuList()
    {
        $subModAnterior = "";
        foreach ($this->perfilFunc as $val) {
            $url = "/{$val['noModulo']}/{$val['noSubmodulo']}/"
            . "{$val['noTipoFuncionalidade']}";
            if ($subModAnterior != $val['noMenuSubmodulo']) {
                $this->initialItem($val, $url);
                $subModAnterior = $val['noMenuSubmodulo'];
            } else {
                $this->menuLateral .="
	           <li>
	           <a href='{$url}'>{$val['noMenuFuncionalidade']}</a>
	           </li>";
            }
        }
        $this->menuLateral .="</ul>";
    }

    private function initialItem($val, $url)
    {
        $this->closeUlLi();
        $this->menuLateral.="<li>
	           <a href='#'>
	           <i class='{$val['noImg']}'></i> {$val['noMenuSubmodulo']}
	           <span class='fa arrow'></span>
	           </a>
	           <ul class='nav nav-second-level collapse'>
	           <li>
	           <a href='{$url}'>{$val['noMenuFuncionalidade']}</a>
	           </li>";
    }

    private function closeUlLi()
    {
        if ($this->menuLateral) {
            $this->menuLateral .="</ul></li>";
        }
    }

}

<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Funcionalidade
 *
 * @ORM\Table(name="funcionalidade")
 * @ORM\Entity(repositoryClass="Application\Repository\FuncionalidadeRepository")
 */
class Funcionalidade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_funcionalidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="funcionalidade_id_funcionalidade_seq", allocationSize=1, initialValue=1)
     */
    private $idFuncionalidade;

    /**
     * @var string
     *
     * @ORM\Column(name="no_funcionalidade", type="string", length=45, nullable=false)
     */
    private $noFuncionalidade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="date", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="st_ativo", type="boolean", nullable=false)
     */
    private $stAtivo;

    /**
     * @var string
     *
     * @ORM\Column(name="no_menu", type="string", length=45, nullable=true)
     */
    private $noMenu;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Application\Entity\Perfil", inversedBy="idFuncionalidade")
     * @ORM\JoinTable(name="funcionalidade_perfil",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_funcionalidade", referencedColumnName="id_funcionalidade")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_perfil", referencedColumnName="id_perfil")
     *   }
     * )
     */
    private $idPerfil;

    /**
     * @var \Application\Entity\Submodulo
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Submodulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_submodulo", referencedColumnName="id_submodulo")
     * })
     */
    private $idSubmodulo;

    /**
     * @var \Application\Entity\TipoFuncionalidade
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\TipoFuncionalidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_funcionalidade", referencedColumnName="id_tipo_funcionalidade")
     * })
     */
    private $idTipoFuncionalidade;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idPerfil = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idFuncionalidade
     *
     * @return integer 
     */
    public function getIdFuncionalidade()
    {
        return $this->idFuncionalidade;
    }

    /**
     * Set noFuncionalidade
     *
     * @param string $noFuncionalidade
     * @return Funcionalidade
     */
    public function setNoFuncionalidade($noFuncionalidade)
    {
        $this->noFuncionalidade = $noFuncionalidade;
    
        return $this;
    }

    /**
     * Get noFuncionalidade
     *
     * @return string 
     */
    public function getNoFuncionalidade()
    {
        return $this->noFuncionalidade;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return Funcionalidade
     */
    public function setDtCadastro($dtCadastro)
    {
        $this->dtCadastro = $dtCadastro;
    
        return $this;
    }

    /**
     * Get dtCadastro
     *
     * @return \DateTime 
     */
    public function getDtCadastro()
    {
        return $this->dtCadastro;
    }

    /**
     * Set stAtivo
     *
     * @param boolean $stAtivo
     * @return Funcionalidade
     */
    public function setStAtivo($stAtivo)
    {
        $this->stAtivo = $stAtivo;
    
        return $this;
    }

    /**
     * Get stAtivo
     *
     * @return boolean 
     */
    public function getStAtivo()
    {
        return $this->stAtivo;
    }

    /**
     * Set noMenu
     *
     * @param string $noMenu
     * @return Funcionalidade
     */
    public function setNoMenu($noMenu)
    {
        $this->noMenu = $noMenu;
    
        return $this;
    }

    /**
     * Get noMenu
     *
     * @return string 
     */
    public function getNoMenu()
    {
        return $this->noMenu;
    }

    /**
     * Add idPerfil
     *
     * @param \Application\Entity\Perfil $idPerfil
     * @return Funcionalidade
     */
    public function addIdPerfil(\Application\Entity\Perfil $idPerfil)
    {
        $this->idPerfil[] = $idPerfil;
    
        return $this;
    }

    /**
     * Remove idPerfil
     *
     * @param \Application\Entity\Perfil $idPerfil
     */
    public function removeIdPerfil(\Application\Entity\Perfil $idPerfil)
    {
        $this->idPerfil->removeElement($idPerfil);
    }

    /**
     * Get idPerfil
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    /**
     * Set idSubmodulo
     *
     * @param \Application\Entity\Submodulo $idSubmodulo
     * @return Funcionalidade
     */
    public function setIdSubmodulo(\Application\Entity\Submodulo $idSubmodulo = null)
    {
        $this->idSubmodulo = $idSubmodulo;
    
        return $this;
    }

    /**
     * Get idSubmodulo
     *
     * @return \Application\Entity\Submodulo 
     */
    public function getIdSubmodulo()
    {
        return $this->idSubmodulo;
    }

    /**
     * Set idTipoFuncionalidade
     *
     * @param \Application\Entity\TipoFuncionalidade $idTipoFuncionalidade
     * @return Funcionalidade
     */
    public function setIdTipoFuncionalidade(\Application\Entity\TipoFuncionalidade $idTipoFuncionalidade = null)
    {
        $this->idTipoFuncionalidade = $idTipoFuncionalidade;
    
        return $this;
    }

    /**
     * Get idTipoFuncionalidade
     *
     * @return \Application\Entity\TipoFuncionalidade 
     */
    public function getIdTipoFuncionalidade()
    {
        return $this->idTipoFuncionalidade;
    }
}
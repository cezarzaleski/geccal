<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Submodulo
 *
 * @ORM\Table(name="submodulo")
 * @ORM\Entity
 */
class Submodulo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_submodulo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="submodulo_id_submodulo_seq", allocationSize=1, initialValue=1)
     */
    private $idSubmodulo;

    /**
     * @var string
     *
     * @ORM\Column(name="no_submodulo", type="string", length=45, nullable=false)
     */
    private $noSubmodulo;

    /**
     * @var string
     *
     * @ORM\Column(name="no_menu", type="string", length=45, nullable=false)
     */
    private $noMenu;

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
     * @ORM\Column(name="no_img", type="text", nullable=true)
     */
    private $noImg;

    /**
     * @var \Application\Entity\Modulo
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Modulo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_modulo", referencedColumnName="id_modulo")
     * })
     */
    private $idModulo;



    /**
     * Get idSubmodulo
     *
     * @return integer 
     */
    public function getIdSubmodulo()
    {
        return $this->idSubmodulo;
    }

    /**
     * Set noSubmodulo
     *
     * @param string $noSubmodulo
     * @return Submodulo
     */
    public function setNoSubmodulo($noSubmodulo)
    {
        $this->noSubmodulo = $noSubmodulo;
    
        return $this;
    }

    /**
     * Get noSubmodulo
     *
     * @return string 
     */
    public function getNoSubmodulo()
    {
        return $this->noSubmodulo;
    }

    /**
     * Set noMenu
     *
     * @param string $noMenu
     * @return Submodulo
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
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return Submodulo
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
     * @return Submodulo
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
     * Set noImg
     *
     * @param string $noImg
     * @return Submodulo
     */
    public function setNoImg($noImg)
    {
        $this->noImg = $noImg;
    
        return $this;
    }

    /**
     * Get noImg
     *
     * @return string 
     */
    public function getNoImg()
    {
        return $this->noImg;
    }

    /**
     * Set idModulo
     *
     * @param \Application\Entity\Modulo $idModulo
     * @return Submodulo
     */
    public function setIdModulo(\Application\Entity\Modulo $idModulo = null)
    {
        $this->idModulo = $idModulo;
    
        return $this;
    }

    /**
     * Get idModulo
     *
     * @return \Application\Entity\Modulo 
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }
}
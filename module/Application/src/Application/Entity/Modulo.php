<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modulo
 *
 * @ORM\Table(name="modulo")
 * @ORM\Entity
 */
class Modulo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_modulo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="modulo_id_modulo_seq", allocationSize=1, initialValue=1)
     */
    private $idModulo;

    /**
     * @var string
     *
     * @ORM\Column(name="no_modulo", type="string", length=45, nullable=false)
     */
    private $noModulo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="date", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="no_menu", type="string", length=45, nullable=false)
     */
    private $noMenu;

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
     * @var string
     *
     * @ORM\Column(name="no_descricao", type="text", nullable=true)
     */
    private $noDescricao;



    /**
     * Get idModulo
     *
     * @return integer 
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }

    /**
     * Set noModulo
     *
     * @param string $noModulo
     * @return Modulo
     */
    public function setNoModulo($noModulo)
    {
        $this->noModulo = $noModulo;
    
        return $this;
    }

    /**
     * Get noModulo
     *
     * @return string 
     */
    public function getNoModulo()
    {
        return $this->noModulo;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return Modulo
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
     * Set noMenu
     *
     * @param string $noMenu
     * @return Modulo
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
     * Set stAtivo
     *
     * @param boolean $stAtivo
     * @return Modulo
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
     * @return Modulo
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
     * Set noDescricao
     *
     * @param string $noDescricao
     * @return Modulo
     */
    public function setNoDescricao($noDescricao)
    {
        $this->noDescricao = $noDescricao;
    
        return $this;
    }

    /**
     * Get noDescricao
     *
     * @return string 
     */
    public function getNoDescricao()
    {
        return $this->noDescricao;
    }
}
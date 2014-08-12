<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perfil
 *
 * @ORM\Table(name="perfil")
 * @ORM\Entity
 */
class Perfil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_perfil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="perfil_id_perfil_seq", allocationSize=1, initialValue=1)
     */
    private $idPerfil;

    /**
     * @var string
     *
     * @ORM\Column(name="no_perfil", type="string", length=45, nullable=false)
     */
    private $noPerfil;

    /**
     * @var boolean
     *
     * @ORM\Column(name="st_ativo", type="boolean", nullable=false)
     */
    private $stAtivo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Application\Entity\Funcionalidade", mappedBy="idPerfil")
     */
    private $idFuncionalidade;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFuncionalidade = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idPerfil
     *
     * @return integer 
     */
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    /**
     * Set noPerfil
     *
     * @param string $noPerfil
     * @return Perfil
     */
    public function setNoPerfil($noPerfil)
    {
        $this->noPerfil = $noPerfil;
    
        return $this;
    }

    /**
     * Get noPerfil
     *
     * @return string 
     */
    public function getNoPerfil()
    {
        return $this->noPerfil;
    }

    /**
     * Set stAtivo
     *
     * @param boolean $stAtivo
     * @return Perfil
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
     * Add idFuncionalidade
     *
     * @param \Application\Entity\Funcionalidade $idFuncionalidade
     * @return Perfil
     */
    public function addIdFuncionalidade(\Application\Entity\Funcionalidade $idFuncionalidade)
    {
        $this->idFuncionalidade[] = $idFuncionalidade;
    
        return $this;
    }

    /**
     * Remove idFuncionalidade
     *
     * @param \Application\Entity\Funcionalidade $idFuncionalidade
     */
    public function removeIdFuncionalidade(\Application\Entity\Funcionalidade $idFuncionalidade)
    {
        $this->idFuncionalidade->removeElement($idFuncionalidade);
    }

    /**
     * Get idFuncionalidade
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdFuncionalidade()
    {
        return $this->idFuncionalidade;
    }
}
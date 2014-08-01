<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefone
 *
 * @ORM\Table(name="telefone")
 * @ORM\Entity
 */
class Telefone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_telefone", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="telefone_id_telefone_seq", allocationSize=1, initialValue=1)
     */
    private $idTelefone;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_telefone", type="integer", nullable=false)
     */
    private $nuTelefone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="st_ativo", type="boolean", nullable=false)
     */
    private $stAtivo;

    /**
     * @var \Application\Entity\Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoa;

    /**
     * @var \Application\Entity\TipoTelefone
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\TipoTelefone")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_telefone", referencedColumnName="id_tipo_telefone")
     * })
     */
    private $idTipoTelefone;



    /**
     * Get idTelefone
     *
     * @return integer 
     */
    public function getIdTelefone()
    {
        return $this->idTelefone;
    }

    /**
     * Set nuTelefone
     *
     * @param integer $nuTelefone
     * @return Telefone
     */
    public function setNuTelefone($nuTelefone)
    {
        $this->nuTelefone = $nuTelefone;
    
        return $this;
    }

    /**
     * Get nuTelefone
     *
     * @return integer 
     */
    public function getNuTelefone()
    {
        return $this->nuTelefone;
    }

    /**
     * Set stAtivo
     *
     * @param boolean $stAtivo
     * @return Telefone
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
     * Set idPessoa
     *
     * @param \Application\Entity\Pessoa $idPessoa
     * @return Telefone
     */
    public function setIdPessoa(\Application\Entity\Pessoa $idPessoa = null)
    {
        $this->idPessoa = $idPessoa;
    
        return $this;
    }

    /**
     * Get idPessoa
     *
     * @return \Application\Entity\Pessoa 
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * Set idTipoTelefone
     *
     * @param \Application\Entity\TipoTelefone $idTipoTelefone
     * @return Telefone
     */
    public function setIdTipoTelefone(\Application\Entity\TipoTelefone $idTipoTelefone = null)
    {
        $this->idTipoTelefone = $idTipoTelefone;
    
        return $this;
    }

    /**
     * Get idTipoTelefone
     *
     * @return \Application\Entity\TipoTelefone 
     */
    public function getIdTipoTelefone()
    {
        return $this->idTipoTelefone;
    }
}
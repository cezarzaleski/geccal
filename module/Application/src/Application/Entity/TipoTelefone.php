<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoTelefone
 *
 * @ORM\Table(name="tipo_telefone")
 * @ORM\Entity
 */
class TipoTelefone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_telefone", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipo_telefone_id_tipo_telefone_seq", allocationSize=1, initialValue=1)
     */
    private $idTipoTelefone;

    /**
     * @var string
     *
     * @ORM\Column(name="no_tipo_telefone", type="string", length=45, nullable=false)
     */
    private $noTipoTelefone;

    /**
     * @var boolean
     *
     * @ORM\Column(name="st_ativo", type="boolean", nullable=false)
     */
    private $stAtivo;



    /**
     * Get idTipoTelefone
     *
     * @return integer 
     */
    public function getIdTipoTelefone()
    {
        return $this->idTipoTelefone;
    }

    /**
     * Set noTipoTelefone
     *
     * @param string $noTipoTelefone
     * @return TipoTelefone
     */
    public function setNoTipoTelefone($noTipoTelefone)
    {
        $this->noTipoTelefone = $noTipoTelefone;
    
        return $this;
    }

    /**
     * Get noTipoTelefone
     *
     * @return string 
     */
    public function getNoTipoTelefone()
    {
        return $this->noTipoTelefone;
    }

    /**
     * Set stAtivo
     *
     * @param boolean $stAtivo
     * @return TipoTelefone
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
}
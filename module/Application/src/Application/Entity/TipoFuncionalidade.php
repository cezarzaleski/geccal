<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoFuncionalidade
 *
 * @ORM\Table(name="tipo_funcionalidade")
 * @ORM\Entity
 */
class TipoFuncionalidade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_funcionalidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipo_funcionalidade_id_tipo_funcionalidade_seq", allocationSize=1, initialValue=1)
     */
    private $idTipoFuncionalidade;

    /**
     * @var string
     *
     * @ORM\Column(name="no_tipo_funcionalidade", type="string", length=45, nullable=false)
     */
    private $noTipoFuncionalidade;

    /**
     * @var boolean
     *
     * @ORM\Column(name="st_ativo", type="boolean", nullable=false)
     */
    private $stAtivo;



    /**
     * Get idTipoFuncionalidade
     *
     * @return integer 
     */
    public function getIdTipoFuncionalidade()
    {
        return $this->idTipoFuncionalidade;
    }

    /**
     * Set noTipoFuncionalidade
     *
     * @param string $noTipoFuncionalidade
     * @return TipoFuncionalidade
     */
    public function setNoTipoFuncionalidade($noTipoFuncionalidade)
    {
        $this->noTipoFuncionalidade = $noTipoFuncionalidade;
    
        return $this;
    }

    /**
     * Get noTipoFuncionalidade
     *
     * @return string 
     */
    public function getNoTipoFuncionalidade()
    {
        return $this->noTipoFuncionalidade;
    }

    /**
     * Set stAtivo
     *
     * @param boolean $stAtivo
     * @return TipoFuncionalidade
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
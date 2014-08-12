<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DesativacaoUsuario
 *
 * @ORM\Table(name="desativacao_usuario")
 * @ORM\Entity
 */
class DesativacaoUsuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_desativacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="desativacao_usuario_id_desativacao_seq", allocationSize=1, initialValue=1)
     */
    private $idDesativacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_desativacao", type="date", nullable=false)
     */
    private $dtDesativacao;

    /**
     * @var string
     *
     * @ORM\Column(name="no_motivo_desat", type="text", nullable=false)
     */
    private $noMotivoDesat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="st_ativo", type="boolean", nullable=false)
     */
    private $stAtivo;

    /**
     * @var string
     *
     * @ORM\Column(name="no_motivo_ativacao", type="text", nullable=true)
     */
    private $noMotivoAtivacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_ativacao", type="date", nullable=true)
     */
    private $dtAtivacao;

    /**
     * @var \Application\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_usuario")
     * })
     */
    private $idUsuario;



    /**
     * Get idDesativacao
     *
     * @return integer 
     */
    public function getIdDesativacao()
    {
        return $this->idDesativacao;
    }

    /**
     * Set dtDesativacao
     *
     * @param \DateTime $dtDesativacao
     * @return DesativacaoUsuario
     */
    public function setDtDesativacao($dtDesativacao)
    {
        $this->dtDesativacao = $dtDesativacao;
    
        return $this;
    }

    /**
     * Get dtDesativacao
     *
     * @return \DateTime 
     */
    public function getDtDesativacao()
    {
        return $this->dtDesativacao;
    }

    /**
     * Set noMotivoDesat
     *
     * @param string $noMotivoDesat
     * @return DesativacaoUsuario
     */
    public function setNoMotivoDesat($noMotivoDesat)
    {
        $this->noMotivoDesat = $noMotivoDesat;
    
        return $this;
    }

    /**
     * Get noMotivoDesat
     *
     * @return string 
     */
    public function getNoMotivoDesat()
    {
        return $this->noMotivoDesat;
    }

    /**
     * Set stAtivo
     *
     * @param boolean $stAtivo
     * @return DesativacaoUsuario
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
     * Set noMotivoAtivacao
     *
     * @param string $noMotivoAtivacao
     * @return DesativacaoUsuario
     */
    public function setNoMotivoAtivacao($noMotivoAtivacao)
    {
        $this->noMotivoAtivacao = $noMotivoAtivacao;
    
        return $this;
    }

    /**
     * Get noMotivoAtivacao
     *
     * @return string 
     */
    public function getNoMotivoAtivacao()
    {
        return $this->noMotivoAtivacao;
    }

    /**
     * Set dtAtivacao
     *
     * @param \DateTime $dtAtivacao
     * @return DesativacaoUsuario
     */
    public function setDtAtivacao($dtAtivacao)
    {
        $this->dtAtivacao = $dtAtivacao;
    
        return $this;
    }

    /**
     * Get dtAtivacao
     *
     * @return \DateTime 
     */
    public function getDtAtivacao()
    {
        return $this->dtAtivacao;
    }

    /**
     * Set idUsuario
     *
     * @param \Application\Entity\Usuario $idUsuario
     * @return DesativacaoUsuario
     */
    public function setIdUsuario(\Application\Entity\Usuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;
    
        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \Application\Entity\Usuario 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
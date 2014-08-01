<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historico
 *
 * @ORM\Table(name="historico")
 * @ORM\Entity
 */
class Historico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_historico", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historico_id_historico_seq", allocationSize=1, initialValue=1)
     */
    private $idHistorico;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="date", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="no_acao", type="text", nullable=false)
     */
    private $noAcao;

    /**
     * @var boolean
     *
     * @ORM\Column(name="st_ativo", type="boolean", nullable=false)
     */
    private $stAtivo;

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
     * Get idHistorico
     *
     * @return integer 
     */
    public function getIdHistorico()
    {
        return $this->idHistorico;
    }

    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return Historico
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
     * Set noAcao
     *
     * @param string $noAcao
     * @return Historico
     */
    public function setNoAcao($noAcao)
    {
        $this->noAcao = $noAcao;
    
        return $this;
    }

    /**
     * Get noAcao
     *
     * @return string 
     */
    public function getNoAcao()
    {
        return $this->noAcao;
    }

    /**
     * Set stAtivo
     *
     * @param boolean $stAtivo
     * @return Historico
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
     * Set idUsuario
     *
     * @param \Application\Entity\Usuario $idUsuario
     * @return Historico
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
<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_cadastro", type="date", nullable=false)
     */
    private $dtCadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_ult_visita", type="datetime", nullable=true)
     */
    private $dtUltVisita;

    /**
     * @var boolean
     *
     * @ORM\Column(name="st_ativo", type="boolean", nullable=false)
     */
    private $stAtivo;

    /**
     * @var string
     *
     * @ORM\Column(name="no_usuario", type="string", length=45, nullable=false)
     */
    private $noUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="no_senha", type="text", nullable=false)
     */
    private $noSenha;

    /**
     * @var string
     *
     * @ORM\Column(name="st_cookie", type="text", nullable=true)
     */
    private $stCookie;

    /**
     * @var \Application\Entity\Perfil
     *
     * @ORM\ManyToOne(targetEntity="Application\Entity\Perfil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_perfil", referencedColumnName="id_perfil")
     * })
     */
    private $idPerfil;

    /**
     * @var \Application\Entity\PessoaFisica
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Application\Entity\PessoaFisica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id_pessoa_fisica")
     * })
     */
    private $idUsuario;



    /**
     * Set dtCadastro
     *
     * @param \DateTime $dtCadastro
     * @return Usuario
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
     * Set dtUltVisita
     *
     * @param \DateTime $dtUltVisita
     * @return Usuario
     */
    public function setDtUltVisita($dtUltVisita)
    {
        $this->dtUltVisita = $dtUltVisita;
    
        return $this;
    }

    /**
     * Get dtUltVisita
     *
     * @return \DateTime 
     */
    public function getDtUltVisita()
    {
        return $this->dtUltVisita;
    }

    /**
     * Set stAtivo
     *
     * @param boolean $stAtivo
     * @return Usuario
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
     * Set noUsuario
     *
     * @param string $noUsuario
     * @return Usuario
     */
    public function setNoUsuario($noUsuario)
    {
        $this->noUsuario = $noUsuario;
    
        return $this;
    }

    /**
     * Get noUsuario
     *
     * @return string 
     */
    public function getNoUsuario()
    {
        return $this->noUsuario;
    }

    /**
     * Set noSenha
     *
     * @param string $noSenha
     * @return Usuario
     */
    public function setNoSenha($noSenha)
    {
        $this->noSenha = $noSenha;
    
        return $this;
    }

    /**
     * Get noSenha
     *
     * @return string 
     */
    public function getNoSenha()
    {
        return $this->noSenha;
    }

    /**
     * Set stCookie
     *
     * @param string $stCookie
     * @return Usuario
     */
    public function setStCookie($stCookie)
    {
        $this->stCookie = $stCookie;
    
        return $this;
    }

    /**
     * Get stCookie
     *
     * @return string 
     */
    public function getStCookie()
    {
        return $this->stCookie;
    }

    /**
     * Set idPerfil
     *
     * @param \Application\Entity\Perfil $idPerfil
     * @return Usuario
     */
    public function setIdPerfil(\Application\Entity\Perfil $idPerfil = null)
    {
        $this->idPerfil = $idPerfil;
    
        return $this;
    }

    /**
     * Get idPerfil
     *
     * @return \Application\Entity\Perfil 
     */
    public function getIdPerfil()
    {
        return $this->idPerfil;
    }

    /**
     * Set idUsuario
     *
     * @param \Application\Entity\PessoaFisica $idUsuario
     * @return Usuario
     */
    public function setIdUsuario(\Application\Entity\PessoaFisica $idUsuario)
    {
        $this->idUsuario = $idUsuario;
    
        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \Application\Entity\PessoaFisica 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
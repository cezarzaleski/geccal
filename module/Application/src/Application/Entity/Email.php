<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Email
 *
 * @ORM\Table(name="email")
 * @ORM\Entity
 */
class Email
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_email", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="email_id_email_seq", allocationSize=1, initialValue=1)
     */
    private $idEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="text", nullable=false)
     */
    private $email;

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
     * Get idEmail
     *
     * @return integer 
     */
    public function getIdEmail()
    {
        return $this->idEmail;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set stAtivo
     *
     * @param boolean $stAtivo
     * @return Email
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
     * @return Email
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
}
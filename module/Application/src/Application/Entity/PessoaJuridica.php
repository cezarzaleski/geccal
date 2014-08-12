<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PessoaJuridica
 *
 * @ORM\Table(name="pessoa_juridica")
 * @ORM\Entity
 */
class PessoaJuridica
{
    /**
     * @var string
     *
     * @ORM\Column(name="sg_empresa", type="string", length=45, nullable=true)
     */
    private $sgEmpresa;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_cnpj", type="integer", nullable=true)
     */
    private $nuCnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="no_fantasia", type="text", nullable=true)
     */
    private $noFantasia;

    /**
     * @var \Application\Entity\Pessoa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Application\Entity\Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa_juridica", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoaJuridica;



    /**
     * Set sgEmpresa
     *
     * @param string $sgEmpresa
     * @return PessoaJuridica
     */
    public function setSgEmpresa($sgEmpresa)
    {
        $this->sgEmpresa = $sgEmpresa;
    
        return $this;
    }

    /**
     * Get sgEmpresa
     *
     * @return string 
     */
    public function getSgEmpresa()
    {
        return $this->sgEmpresa;
    }

    /**
     * Set nuCnpj
     *
     * @param integer $nuCnpj
     * @return PessoaJuridica
     */
    public function setNuCnpj($nuCnpj)
    {
        $this->nuCnpj = $nuCnpj;
    
        return $this;
    }

    /**
     * Get nuCnpj
     *
     * @return integer 
     */
    public function getNuCnpj()
    {
        return $this->nuCnpj;
    }

    /**
     * Set noFantasia
     *
     * @param string $noFantasia
     * @return PessoaJuridica
     */
    public function setNoFantasia($noFantasia)
    {
        $this->noFantasia = $noFantasia;
    
        return $this;
    }

    /**
     * Get noFantasia
     *
     * @return string 
     */
    public function getNoFantasia()
    {
        return $this->noFantasia;
    }

    /**
     * Set idPessoaJuridica
     *
     * @param \Application\Entity\Pessoa $idPessoaJuridica
     * @return PessoaJuridica
     */
    public function setIdPessoaJuridica(\Application\Entity\Pessoa $idPessoaJuridica)
    {
        $this->idPessoaJuridica = $idPessoaJuridica;
    
        return $this;
    }

    /**
     * Get idPessoaJuridica
     *
     * @return \Application\Entity\Pessoa 
     */
    public function getIdPessoaJuridica()
    {
        return $this->idPessoaJuridica;
    }
}
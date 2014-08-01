<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PessoaFisica
 *
 * @ORM\Table(name="pessoa_fisica")
 * @ORM\Entity
 */
class PessoaFisica
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_nascimento", type="date", nullable=true)
     */
    private $dtNascimento;

    /**
     * @var integer
     *
     * @ORM\Column(name="nu_cpf", type="integer", nullable=true)
     */
    private $nuCpf;

    /**
     * @var string
     *
     * @ORM\Column(name="no_sexo", type="string", length=45, nullable=false)
     */
    private $noSexo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Application\Entity\FuncaoAtividade", inversedBy="idPessoaFisica")
     * @ORM\JoinTable(name="pessoa_fisica_funcao_atividade",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_pessoa_fisica", referencedColumnName="id_pessoa_fisica")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_funcao_atividade", referencedColumnName="id_funcao_atividade")
     *   }
     * )
     */
    private $idFuncaoAtividade;

    /**
     * @var \Application\Entity\Pessoa
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Application\Entity\Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pessoa_fisica", referencedColumnName="id_pessoa")
     * })
     */
    private $idPessoaFisica;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFuncaoAtividade = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set dtNascimento
     *
     * @param \DateTime $dtNascimento
     * @return PessoaFisica
     */
    public function setDtNascimento($dtNascimento)
    {
        $this->dtNascimento = $dtNascimento;
    
        return $this;
    }

    /**
     * Get dtNascimento
     *
     * @return \DateTime 
     */
    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    /**
     * Set nuCpf
     *
     * @param integer $nuCpf
     * @return PessoaFisica
     */
    public function setNuCpf($nuCpf)
    {
        $this->nuCpf = $nuCpf;
    
        return $this;
    }

    /**
     * Get nuCpf
     *
     * @return integer 
     */
    public function getNuCpf()
    {
        return $this->nuCpf;
    }

    /**
     * Set noSexo
     *
     * @param string $noSexo
     * @return PessoaFisica
     */
    public function setNoSexo($noSexo)
    {
        $this->noSexo = $noSexo;
    
        return $this;
    }

    /**
     * Get noSexo
     *
     * @return string 
     */
    public function getNoSexo()
    {
        return $this->noSexo;
    }

    /**
     * Add idFuncaoAtividade
     *
     * @param \Application\Entity\FuncaoAtividade $idFuncaoAtividade
     * @return PessoaFisica
     */
    public function addIdFuncaoAtividade(\Application\Entity\FuncaoAtividade $idFuncaoAtividade)
    {
        $this->idFuncaoAtividade[] = $idFuncaoAtividade;
    
        return $this;
    }

    /**
     * Remove idFuncaoAtividade
     *
     * @param \Application\Entity\FuncaoAtividade $idFuncaoAtividade
     */
    public function removeIdFuncaoAtividade(\Application\Entity\FuncaoAtividade $idFuncaoAtividade)
    {
        $this->idFuncaoAtividade->removeElement($idFuncaoAtividade);
    }

    /**
     * Get idFuncaoAtividade
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdFuncaoAtividade()
    {
        return $this->idFuncaoAtividade;
    }

    /**
     * Set idPessoaFisica
     *
     * @param \Application\Entity\Pessoa $idPessoaFisica
     * @return PessoaFisica
     */
    public function setIdPessoaFisica(\Application\Entity\Pessoa $idPessoaFisica)
    {
        $this->idPessoaFisica = $idPessoaFisica;
    
        return $this;
    }

    /**
     * Get idPessoaFisica
     *
     * @return \Application\Entity\Pessoa 
     */
    public function getIdPessoaFisica()
    {
        return $this->idPessoaFisica;
    }
}
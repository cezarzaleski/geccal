<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuncaoAtividade
 *
 * @ORM\Table(name="funcao_atividade")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Application\Repository\FuncaoAtividadeRepository") 
 */
class FuncaoAtividade {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_funcao_atividade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="funcao_atividade_id_funcao_atividade_seq", allocationSize=1, initialValue=1)
     */
    private $idFuncaoAtividade;

    /**
     * @var string
     *
     * @ORM\Column(name="no_funcao_atividade", type="text", nullable=false)
     */
    private $noFuncaoAtividade;

    /**
     * @var boolean
     *
     * @ORM\Column(name="st_ativo", type="boolean", nullable=false)
     */
    private $stAtivo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Application\Entity\PessoaFisica", mappedBy="idFuncaoAtividade")
     */
    private $idPessoaFisica;

    /**
     * Constructor
     */
    public function __construct($options = null)
    {
        $this->idPessoaFisica = new \Doctrine\Common\Collections\ArrayCollection();
        Configurator::configure($this, $options);
    }

    /**
     * Get idFuncaoAtividade
     *
     * @return integer 
     */
    public function getIdFuncaoAtividade()
    {
        return $this->idFuncaoAtividade;
    }

    /**
     * Set noFuncaoAtividade
     *
     * @param string $noFuncaoAtividade
     * @return FuncaoAtividade
     */
    public function setNoFuncaoAtividade($noFuncaoAtividade)
    {
        $this->noFuncaoAtividade = $noFuncaoAtividade;

        return $this;
    }

    /**
     * Get noFuncaoAtividade
     *
     * @return string 
     */
    public function getNoFuncaoAtividade()
    {
        return $this->noFuncaoAtividade;
    }

    /**
     * Set stAtivo
     *
     * @param boolean $stAtivo
     * @return FuncaoAtividade
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
     * Add idPessoaFisica
     *
     * @param \Application\Entity\PessoaFisica $idPessoaFisica
     * @return FuncaoAtividade
     */
    public function addIdPessoaFisica(\Application\Entity\PessoaFisica $idPessoaFisica)
    {
        $this->idPessoaFisica[] = $idPessoaFisica;

        return $this;
    }

    /**
     * Remove idPessoaFisica
     *
     * @param \Application\Entity\PessoaFisica $idPessoaFisica
     */
    public function removeIdPessoaFisica(\Application\Entity\PessoaFisica $idPessoaFisica)
    {
        $this->idPessoaFisica->removeElement($idPessoaFisica);
    }

    /**
     * Get idPessoaFisica
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPessoaFisica()
    {
        return $this->idPessoaFisica;
    }

    public function toArray()
    {
        return array(
            'idFuncaoAtividade' => $this->getIdFuncaoAtividade(),
            'noFuncaoAtividade' => $this->getNoFuncaoAtividade(),
            'stAtivo' => $this->getStAtivo()
        );
    }

}

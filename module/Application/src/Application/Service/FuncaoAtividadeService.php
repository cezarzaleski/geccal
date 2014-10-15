<?php

namespace Application\Service;

use Doctrine\ORM\EntityManager;

class FuncaoAtividadeService extends AbstractService
{

    protected $entity;

    public function __construct (EntityManager $em)
    {
        parent::__construct($em);
        $this->entity = "Application\Entity\FuncaoAtividade";
    }


}

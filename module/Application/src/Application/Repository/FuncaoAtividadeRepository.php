<?php

namespace Application\Repository;

use Doctrine\ORM\EntityRepository;

class FuncaoAtividadeRepository extends EntityRepository{
    
    public function findAll()
    {
        return $this->findBy(array('stAtivo'=>TRUE));
    }
	
	
	
}
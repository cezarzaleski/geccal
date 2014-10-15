<?php

namespace Application\Service;

use Doctrine\ORM\EntityManager;
use Application\Entity\Configurator;

abstract class AbstractService {

    /**
     * @var EntityManager
     */
    protected $em;
    protected $entity;
    
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }
    
    public function insert(array $data) {
        \Zend\Debug\Debug::dump($data);
        $entity = new $this->entity($data);
        \Zend\Debug\Debug::dump($entity);
        $this->em->persist($entity);
        $this->em->flush();
        return $entity;
    }
    
    public function update($id , array $data) {
        $entity = $this->em->getReference($this->entity, $id);
        $entity = Configurator::configure($entity, $data);
        
        $this->em->persist($entity);
        $this->em->flush();
        
        return $entity;
    }
    
    public function delete($id) {
        $entity = $this->em->getReference($this->entity, $id);
        if($entity) {
            $this->em->remove($entity);
            $this->em->flush();
            return $id;
        }
    }
    
    
    
}

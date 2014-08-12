<?php

namespace Administrator\Controller;
use Base\Mvc\Controller\ControllerAbstract;

class FuncaoAtividade extends ControllerAbstract {
    
    public function __construct()
    {
        $this->entity = "Application\Entity\FuncaoAtividade";
        $this->form = "";
        $this->service = "";
        $this->controller="";
               
    }
    
}


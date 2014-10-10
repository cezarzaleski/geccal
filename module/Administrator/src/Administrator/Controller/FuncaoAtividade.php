<?php

namespace Administrator\Controller;

use Base\Mvc\Controller\ControllerAbstract;

class FuncaoAtividade extends ControllerAbstract {

    public function __construct()
    {
        $this->entity = "Application\Entity\FuncaoAtividade";
        $this->form = "Administrator\Form\FuncaoAtividadeForm";
        $this->configHtmlHelper = array('attributes' => array(
                'class' => 'form-group'
            ),  'label' => array('attributes' => array()));
//        $this->service = "";
//        $this->controller="";
    }

}

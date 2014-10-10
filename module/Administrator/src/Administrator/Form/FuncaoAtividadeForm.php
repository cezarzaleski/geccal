<?php

namespace Administrator\Form;

use Base\Form\AbstractForm;
use Administrator\Filter\FuncaoAtividadeFilter;

class FuncaoAtividadeForm extends AbstractForm {

    public function __construct($name = null)
    {
        parent::__construct('funcaoAtividade');
        $this->setAttribute('method', 'post');
        $this->setAttribute('class', 'form');
        $this->setInputFilter(new FuncaoAtividadeFilter());
        $atributes = array('placeholder' => 'Função/Atividade',
            'maxlength' => '45',
            'class' => 'form-control',
            'autofocus' => TRUE);
        $this->addElement('noFuncaoAtividade', 'text', 'Função Atividade', 
                $atributes);
        $atributesSubmit = array('value' => 'Cadastrar',
            'class' => 'btn btn-default');
        $this->addElement('submit', 'submit', 'Cadastrar', $atributesSubmit);
    }

}

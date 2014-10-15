<?php

namespace Administrator\Filter;

use Zend\InputFilter\InputFilter;

class FuncaoAtividadeFilter extends InputFilter{
    
    public function __construct()
    {
        $this->add(array(
            'name' => 'noFuncaoAtividade',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim')
                ),
            'validators' => array(
                array(
                    'name' => 'NotEmpty',
                    'options' => array(
                        'messages' => array('isEmpty' => 'Função/Atividade'
                            . ' não pode estar em branco'),
                    )
                )
            )
        ));
    }
}


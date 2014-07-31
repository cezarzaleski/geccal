<?php

namespace Application\Filter;

use Zend\InputFilter\InputFilter;

class LoginFilter extends InputFilter {

    public function __construct()
    {
        $this->add(array(
            'name' => 'noLogin',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim')
            ),
            'validators' => array(
                array(
                    'name' => 'NotEmpty',
                    'options' => array(
                        'messages' => array('isEmpty' => 'Nome de usuário não pode estar em branco'),
                    )
                )
            )
        ));

        $this->add(array(
            'name' => 'noSenha',
            'required' => true,
            'filters' => array(
                array('name' => 'StripTags'),
                array('name' => 'StringTrim')
            ),
            'validators' => array(
                array(
                    'name' => 'NotEmpty',
                    'options' => array(
                        'messages' => array('isEmpty' => 'Senha não pode estar em branco'),
                    )
                )
            )
        ));
    }

}

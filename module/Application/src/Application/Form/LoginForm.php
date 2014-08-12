<?php

namespace Application\Form;

use Base\Form\AbstractForm;
use Application\Filter\LoginFilter;

class LoginForm extends AbstractForm {

    public function __construct($name = null) {
        parent::__construct('login');
        $this->setAttribute('method', 'post');
        $this->setInputFilter(new LoginFilter());
        $atributes = array('placeholder' => 'Usuário',
            'maxlength' => '45',
            'class' => 'form-control',
            'autofocus' => true);
//            'required' => true);
        $this->addElement('noLogin', 'text', NULL, $atributes);
        $atributes = array('placeholder' => 'Senha',
            'class' => 'form-control');
//            'required' => true);
        $this->addElement('noSenha', 'password', NULL,$atributes);
        $atributes = array('value' => 'Lembre-me');
        $this->addElement('stLembreme', 'checkbox', 'Lembre-me',$atributes);
        $atributes = array('value' => 'Login',
            'class' => 'btn btn-lg btn-primary btn-block');
        $this->addElement('submit', 'submit', 'Login',$atributes);
    }

}

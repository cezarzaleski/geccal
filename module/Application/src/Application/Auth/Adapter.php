<?php

namespace Application\Auth;

use Zend\Authentication\Adapter\AdapterInterface;
use Zend\Crypt\Password\Bcrypt;
use Application\Auth\UsuarioAuth;
use Zend\Log\Logger;
use Zend\Log\Writer\Stream;

class Adapter implements AdapterInterface {

    protected $em;
    protected $bcrypt;
    protected $data;

    function __construct($em)
    {
        $this->em = $em;
        $this->bcrypt = new Bcrypt();
        $this->bcrypt->setCost(11);
        $this->bcrypt->setSalt('Grupo Espírita Cristão à Caminho da Luz');
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function authenticate()
    {
        $repository = $this->em->getRepository('Application\Entity\Usuario');
        $data = $this->data;
        $senha = $this->bcrypt->create($data['senha']);
        $user = $repository->findByUsuarioAndSenha($data['noUsuario'], $senha);
        if ($user) {
            $this->sessionStart($user);
        }
    }

    protected function sessionStart($user)
    {
        UsuarioAuth::_populatyIdentity($user);
    }

    protected function recordLog()
    {
        
    }

}

<?php

namespace Application\Auth;

use Zend\Authentication\Adapter\AdapterInterface;
use Zend\Crypt\Password\Bcrypt;
use Application\Auth\UsuarioAuth;
use Zend\Log\Logger;
use Zend\Log\Writer\Stream;
use Zend\Log\Filter\Priority as LogFilter;

class Adapter implements AdapterInterface {

    private $em;
    private $bcrypt;
    private $data;
    public $ip;

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
        $senha = $this->bcrypt->create($data['noSenha']);
        $user = $repository->findByUsuarioAndSenha($data['noLogin'], $senha);
        if ($user) {
            $this->sessionStart($user);
            $this->recordLog(TRUE);
            return $user;
        }
        return FALSE;
    }

    private function sessionStart($user)
    {
        UsuarioAuth::_populatyIdentity($user);
    }

    private function recordLog($state)
    {
        $messages = $this->getData();
        $datetime = new \DateTime('now');
        $logger = new Logger();
        $writer = new Stream(__DIR__ . '/../../../../../data/log/usuario/' .
                'geccal' . $datetime->format('Y-m-d') . '.log');
        $logger->addWriter($writer);
        $filter = new LogFilter(Logger::DEBUG);
        $writer->addFilter($filter);
        foreach ($messages as $i => $message) {
            if ($i == 'senha' && $state) {
                continue;
            }
            $message = str_replace("\n", "\n", $message);
            $logger->debug("Autentication: $i: $message");
        }
        $logger->alert("IP: " . $this->ip);
        ($state) ? $logger->alert('Status: Usuário Logado \n') :
                        $logger->alert('Status: Falha ao Logar\n');
    }

}

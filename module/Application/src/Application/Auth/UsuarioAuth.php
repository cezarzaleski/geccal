<?php

/**
 * @package Application_Auth
 * @author Cezar Zaleski e Reginaldo Júnior
 * @version 1.0.0
 */
/**
 *
 * @namespace
 */

namespace Application\Auth;

/**
 * @uses Zend\Session\Container
 */
use Zend\Session\Container;

/**
 * Retorna informações do usuário autenticado no sistema
 */
class UsuarioAuth {

    /**
     * Instância Única na Memória
     * @var UsuarioAuth
     */
    private static $container = null;

    /**
     * Acesso Singleton
     * @return UsuarioAuth Único Objeto na Memória
     */
    public static function getInstance()
    {
        if (self::$container == null) {
            self::$container = new Container();
        }
        return self::$container;
    }

    /**
     * Retorna as informações da sessão do usuário logado
     * @return \stdClass
     */
    public static function getLoggedUser()
    {
        return UsuarioAuth::getInstance()->offsetGet('obUser');
    }

    public static function _populatyIdentity($obUser)
    {
        UsuarioAuth::getInstance()->offsetSet('obUser', $obUser);
    }

    public function logout()
    {
        return $this->container->offsetUnset('obUser');
    }
}

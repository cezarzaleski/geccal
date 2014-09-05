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
    private static $container = NULL;

    /**
     * Acesso Singleton
     * @return UsuarioAuth Único Objeto na Memória
     */
    public static function getInstance()
    {
        if (self::$container == NULL) {
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
        $objSessao = new \stdClass();
        $objSessao->idUsuario = $obUser->getIdUsuario()->getIdPessoaFisica()->getidPessoa();
        $objSessao->noUsuario = $obUser->getNoUsuario();
        $objSessao->noPessoa = $obUser->getIdUsuario()->getIdPessoaFisica()->getNoPessoa();
        $objSessao->idPerfil = $obUser->getIdPerfil()->getIdPerfil();
        $objSessao->noPerfil = $obUser->getIdPerfil()->getNoPerfil();
        $dtUltLog = new \DateTime('now');
        if($obUser->getDtUltVisita()){
        	$dtUltLog = $obUser->getDtUltVisita();
        }
        $objSessao->dtUltLog = $dtUltLog->format('d/m/Y H:i:s');
        $objSessao->inicioSessao = time();
        UsuarioAuth::getInstance()->offsetSet('obUser', $objSessao);
    }

    public function logout()
    {
        return UsuarioAuth::getInstance()->offsetUnset('obUser');
    }
}

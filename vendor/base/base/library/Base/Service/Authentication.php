<?php

/**
 * @package Base_Service
 * @author Cezar Zaleski
 * @version 1.0.0
 */
/**
 *
 * @namespace
 *
 */

namespace Base\Service;

/**
 *
 * @uses Zend\Mvc\MvcEvent
 * @uses User\Controller\Plugin\UserAuthentication
 * @uses Base\Acl\Authorization
 */
use Zend\Mvc\MvcEvent as MvcEvent,
    Application\Auth\UsuarioAuth;

class Authentication {

    protected $_session = null;
    protected $_tempoSession = 1800;
    protected $_acl = null;
    protected $_usuarioAuth = null;

    public function __construct()
    {
        $usuarioAuth = new UsuarioAuth ();
        $this->_session = $usuarioAuth->getLoggedUser();
        $this->_usuarioAuth = $usuarioAuth;
    }

    public function preDispatch(MvcEvent $event)
    {

        if ($this->_session) {
            if ($this->sessionTime()) {
                $request = $event->getRequest();
                $uri = $request->getRequestUri();
                //separamos os segmentos do URL e recuperamos o primeiro
                $uri = explode('/', $uri);
                $module = $uri[1];
                $controller = $event->getRouteMatch()->getParam('controller');
                $action = $event->getRouteMatch()->getParam('action');
                $this->_acl = $event->getApplication()->getServiceManager()->get('Base\Acl\Authorization');
                if (!$this->_acl->verifyAuthorization($module . ":" . $controller, $action, $this->_session->noPerfil)) {
                    $this->redirectHome($event);
                }
            } else {
                $this->redirectHome($event);
                $this->_usuarioAuth->logout();
            }
        } else {
            $this->redirectHome($event);
        }
    }

    protected function sessionTime()
    {
        if ((time() - $this->_session->inicioSessao) > $this->_tempoSession) {
            return false;
        }
        $this->_session->inicioSessao = time();
        return true;
    }

    protected function redirectHome(MvcEvent $event)
    {
        $route = $event->getRouteMatch()->getMatchedRouteName();
        if ($route !== 'home') {
            $this->_usuarioAuth->logout();
            $url = $event->getRouter()->assemble(array(), array("name" => "home"));
            $event->getResponse()->getHeaders()->addHeaderLine('Location', $url);
            $event->getResponse()->setStatusCode(302);
            $event->getResponse()->sendHeaders();
        }
    }

}

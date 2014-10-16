<?php

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Application\Auth\Adapter;
use Application\Auth\UsuarioAuth;
use Base\Acl\Authorization;
use Base\Service\Authentication;
use Base\Service\Utils;
use Application\View\Helper\Menu;
use Application\View\Helper\UtilHelper;
use Application\Service\FuncaoAtividadeService;

class Module {

    private $mvcEvent;

    public function onBootstrap(MvcEvent $e)
    {
        $eventManager = $e->getApplication()->getEventManager();
        $this->mvcEvent = $e;
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $this->setLayout($eventManager);
//        
        $eventManager->attach(MvcEvent::EVENT_DISPATCH, array($this, 'mvcPreDispatch'), 0);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                    'Base' => realpath(__DIR__
                            . '/../../vendor/base/base/library/Base'),
                ),
            ),
        );
    }

    public function getViewHelperConfig()
    {
        return array(
            'invokables' => array(
                'HtmlHelper' => 'Application\View\Helper\HtmlHelper',
                'Criptografia' => 'Application\View\Helper\Criptografia'
            ),
            'factories' => array(
                'Menu' => function ($sm) {
            $service = $sm->getServiceLocator();
            return new Menu($service->get('Doctrine\ORM\EntityManager'), $service->get('Base\Service\Utils'));
        },
                'UtilHelper' => function ($sm) {
            $service = $sm->getServiceLocator();
            return new UtilHelper($service->get('Base\Service\Utils'));
        },
            )
        );
    }

    /**
     * Registra Servicos
     * @return array Service
     */
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Zend\Session\SessionManager' => function ($sm) {
            $config = $sm->get('config');
            if (isset($config['session'])) {
                $session = $config['session'];

                $sessionConfig = null;
                if (isset($session['config'])) {
                    $class = isset($session['config']['class']) ? $session['config']['class'] : 'Zend\Session\Config\SessionConfig';
                    $options = isset($session['config']['options']) ? $session['config']['options'] : array();
                    $sessionConfig = new $class();
                    $sessionConfig->setOptions($options);
                }

                $sessionStorage = null;
                if (isset($session['storage'])) {
                    $class = $session['storage'];
                    $sessionStorage = new $class();
                }

                $sessionSaveHandler = null;
                if (isset($session['save_handler'])) {
                    // class should be fetched from service manager 
                    // since it will require constructor arguments
                    $sessionSaveHandler = $sm->get($session['save_handler']);
                }

                $sessionManager = new SessionManager($sessionConfig, $sessionStorage, $sessionSaveHandler);

                if (isset($session['validators'])) {
                    $chain = $sessionManager->getValidatorChain();
                    foreach ($session['validators'] as $validator) {
                        $validator = new $validator();
                        $chain->attach('session.validate', array($validator, 'isValid'));
                    }
                }
            } else {
                $sessionManager = new SessionManager();
            }
            Container::setDefaultManager($sessionManager);
            return $sessionManager;
        },
                'Application\Auth\Adapter' => function ($service) {
            return new Adapter($service->get('Doctrine\ORM\EntityManager'));
        },
                'Base\Acl\Authorization' => function ($service) {
            return new Authorization($service->get('Doctrine\ORM\EntityManager'));
        },
                'Application\Auth\UsuarioAuth' => function () {
            return new UsuarioAuth();
        },
                'Base\Service\Authentication' => function () {
            return new Authentication();
        },
                'Base\Service\Utils' => function () {
            return new Utils($this->mvcEvent);
        },
                'FuncaoAtividadeService' => function ($sm) {
            return new FuncaoAtividadeService($sm->get('Doctrine\ORM\EntityManager'));
        }
            ),
        );
    }

    /**
     * Renederiza o layout de acordo com o controller conforme configurado 
     * no module.config.php
     * @param type $eventManager
     */
    private function setLayout($eventManager)
    {

        $eventManager->getSharedManager()
                ->attach('Zend\Mvc\Controller\AbstractActionController', 'dispatch', function($e) {
                    $controller = $e->getTarget();
                    $routeName = $e->getRouteMatch()->getMatchedRouteName();
                    $config = $e->getApplication()->getServiceManager()->get('config');
                    if (isset($config['route_layouts'][$routeName])) {
                        $controller->layout($config['route_layouts'][$routeName]);
                    }
                }, 1);
    }

    /**
     * MVC preDispatch Event
     *
     * @param $event
     * @return mixed
     */
    public function mvcPreDispatch($event)
    {
        $application = $event->getApplication();
        $services = $application->getServiceManager();
        $authentication = $services->get('Base\Service\Authentication');
        $authentication->preDispatch($event);
    }

}

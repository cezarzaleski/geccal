<?php

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Application\Auth\Adapter;

class Module {

    public function onBootstrap(MvcEvent $e)
    {
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $this->setLayout($eventManager);
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
                'HtmlHelper' => 'Application\View\Helper\HtmlHelper'
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
                'Application\Auth\Adapter' => function ($service) {
            return new Adapter($service->get('Doctrine\ORM\EntityManager'));
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
//                        \Zend\Debug\Debug::dump($config['route_layouts'][$routeName]);
                        $controller->layout($config['route_layouts'][$routeName]);
                    }
                }, 1);
    }

}

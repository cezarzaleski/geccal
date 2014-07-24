<?php

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module {

    public function onBootstrap(MvcEvent $e) {
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $this->setLayout($eventManager);
    }

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    /**
     * Renederiza o layout de acordo com o controller conforme configurado 
     * no module.config.php
     * @param type $eventManager
     */
    private function setLayout($eventManager) {
        $eventManager->getSharedManager()
                ->attach('Zend\Mvc\Controller\AbstractActionController', 
                        'dispatch', function($e) {
            $controller = $e->getTarget();
            $routeName = $e->getRouteMatch()->getMatchedRouteName();
            $config = $e->getApplication()->getServiceManager()->get('config');
                    if (isset($config['route_layouts'][$routeName])) {
                      $controller->layout($config['route_layouts'][$routeName]);
                    }
                }, 1);
    }

}

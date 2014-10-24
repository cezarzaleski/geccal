<?php

namespace Administrator;

return array(
    'router' => array(
        'routes' => array(
            'administrator' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/admin',
                    'defaults' => array()
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]][/:id]',
                            'constraints' => array(
                                'module' => '(admin)',
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id' => '[0-9]*'
                            )
                        )
                    )
                )
            )
        )
    ),
    'route_layouts' => array(
        'laboratorio' => 'layout/layout'
    ),
    'controllers' => array(
        'invokables' => array(
            'funcaoAtividade' => 'Administrator\Controller\FuncaoAtividade',
            'administrator' => 'Administrator\Controller\AdministratorController'
            
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../../Application/view/layout/layout.phtml',
            'error/404' => __DIR__ . '/../../Application/view/error/404.phtml',
            'error/index' => __DIR__ . '/../../Application/view/error/index.phtml',
            'layout/error' => __DIR__ . '/../../Application/view/layout/layout-error.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view'
        ),
        'strategies' => array(
            'ViewJsonStrategy'
        )
    ),
   
);
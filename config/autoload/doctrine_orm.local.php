<?php

return array(
    'doctrine' => array(
        'connection' => array(
            'orm_default' => array(
                'driverClass' => 'Doctrine\DBAL\Driver\PDOPgSql\Driver',
                'params' => array(
                    //'host' => '10.195.180.38',
                    'host' => 'localhost', //local
                    'port' => '5432',
                    'user' => 'postgres',
                    //'password' => '$develinfo@*',
                    'password' => 'postgres',
                    'dbname' => 'geccal',
                    'charset' => 'utf8',
                    'driverOptions' => array(
                        1002 => 'SET NAMES utf8'
                    )
                )
            )
        )
    ),
);

<?php

$config = [
    // Database
    'db_host' => 'localhost',
    'db_user' => 'user',
    'db_pass' => 'pass',
    'db_name' => 'database',
    // Default route
    'default_route' => ['site', 'index'], // controller, action
    'app_namespace' => 'app',
    /*'route_rules' => [
        ':controller/:action/:id' => [
            'controller' => 'site',
            'action' => 'index',
        ]
    ],*/
];

return $config;

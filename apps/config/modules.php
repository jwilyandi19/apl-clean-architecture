<?php

return array(
 
    'ticket' => [
        'namespace' => 'App\Ticket',
        'webControllerNamespace' => 'App\Ticket\Controllers\Web',
        'apiControllerNamespace' => 'App\Ticket\Controllers\Api',
        'className' => 'App\Ticket\Module',
        'path' => APP_PATH . '/modules/ticket/module.php',
        'defaultRouting' => false,
        'defaultController' => 'dashboard',
        'defaultAction' => 'index'
    ],
);
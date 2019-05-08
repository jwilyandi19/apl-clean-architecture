<?php

return array(
 
    'ticket' => [
        'namespace' => 'App\Ticket',
        'webControllerNamespace' => 'App\Ticket\Controllers\Web',
        'apiControllerNamespace' => 'App\Ticket\Controllers\Api',
        'className' => 'App\Ticket\Module',
        'path' => APP_PATH . '/modules/Ticket/module.php',
        'defaultRouting' => true,
        'defaultController' => 'dashboard',
        'defaultAction' => 'index'
    ],
);
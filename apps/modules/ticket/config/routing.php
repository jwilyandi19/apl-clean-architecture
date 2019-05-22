<?php
use Phalcon\Mvc\Router;
// Create the router
$router = new Router();
$router->add('/', [
    'namespace' => 'App\Ticket\Controllers\Web',
    'module' => 'ticket',
    'controller' => 'schedule',
    'action' => 'index'
]);

$router->addGet('/schedule/{scheduleId}', [
    'namespace' => 'App\Ticket\Controllers\Web',
    'module' => 'ticket',
    'controller' => 'schedule',
    'action' => 'findSchedule'
]);

$router->addPost('/schedule', [
    'namespace' => 'App\Ticket\Controllers\Api',
    'module' => 'ticket',
    'controller' => 'schedule',
    'action' => 'addSchedule'
]);

$router->addGet('/schedule',[
    'namespace' => 'App\Ticket\Controllers\Web',
    'module' => 'ticket',
    'controller' => 'schedule',
    'action' => 'formAddSchedule'
]);

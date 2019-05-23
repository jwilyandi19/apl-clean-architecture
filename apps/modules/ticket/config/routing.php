<?php
use Phalcon\Mvc\Router;
// Create the router
$router = new Router();
$router->add('/schedule', [
    'namespace' => 'App\Ticket\Controllers\Web',
    'module' => 'ticket',
    'controller' => 'schedule',
    'action' => 'index'
]);

$router->addGet('/schedule/{scheduleId}', [
    'namespace' => 'App\Ticket\Controllers\Api',
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


$router->addPost('/schedule/{scheduleId}/update', [
    'namespace' => 'App\Ticket\Controllers\Api',
    'module' => 'ticket',
    'controller' => 'schedule',
    'action' => 'updateSchedule'
]);

$router->addGet('/', [
    'namespace' => 'App\Ticket\Controllers\Web',
    'module' => 'ticket',
    'controller' => 'attendant',
    'action' => 'showAddAttendantForm'
]);

$router->addPost('/', [
    'namespace' => 'App\Ticket\Controllers\Web',
    'module' => 'ticket',
    'controller' => 'attendant',
    'action' => 'addAttendant'
]);

$router->addPost('/attendant', [
    'namespace' => 'App\Ticket\Controllers\Api',
    'module' => 'ticket',
    'controller' => 'attendant',
    'action' => 'addAttendant'
]);

$router->addGet('/attendant/{attendantId}', [
    'namespace' => 'App\Ticket\Controllers\Api',
    'module' => 'ticket',
    'controller' => 'attendant',
    'action' => 'findAttendant'
]);


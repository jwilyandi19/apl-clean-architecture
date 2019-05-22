<?php

namespace App\Ticket\Controllers\Api;

use Phalcon\Mvc\Controller;

class ScheduleController extends Controller {
    protected $scheduleService;

    public function initialize() 
    {
        $this->scheduleService = $this->di->get('scheduleService');
    }

    public function addScheduleAction() 
    {
        $schedule = $this->scheduleService->addSchedule($_POST);
        $scheduleJson = $this->serializer->toJson($schedule);

        $this->response->setContent($scheduleJson);        
        $this->response->send();
    }
}
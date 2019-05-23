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
        $request = $this->request;
        $scheduleRequest = $this->scheduleService->map($request);
        $schedule = $this->scheduleService->addSchedule($scheduleRequest);
        $scheduleJson = $this->serializer->toJson($schedule);

        $this->response->setContent($scheduleJson);        
        $this->response->send();
    }

    public function findScheduleAction($scheduleId) 
    {
        $schedule = $this->scheduleService->findSchedule($scheduleId);
        $scheduleJson = $this->serializer->toJson($schedule);
        
        $this->response->setContent($scheduleJson);
        $this->response->send();
    }

    public function updateScheduleAction($scheduleId)
    {
        $request = $this->request;
        $scheduleRequest = $this->scheduleService->map($request);
        $schedule = $this->scheduleService->updateSchedule($scheduleId, $scheduleRequest);
        $scheduleJson = $this->serializer->toJson($schedule);
        
        $this->response->setContent($scheduleJson);
        $this->response->send();
    }

    





}
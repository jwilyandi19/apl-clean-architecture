<?php

namespace App\Ticket\Controllers\Web;

use Phalcon\Mvc\Controller;

class ScheduleController extends Controller {
    protected $scheduleService;

    public function initialize() 
    {
        $this->scheduleService = $this->di->get('scheduleService');
    }

    public function indexAction() 
    {
        $schedules = $this->scheduleService->getAllSchedules();
        $this->view->schedules = $schedules;
        return $this->view->pick('ticket/index');
    }

    public function findScheduleAction($scheduleId) 
    {
        $schedule = $this->scheduleService->findSchedule($scheduleId);
        $this->view->schedule = $schedule;
        return $this->view->pick("ticket/schedule");
    }

    public function addScheduleAction() 
    {
        $schedule = $this->scheduleService->addSchedule($_POST);
        $this->response->redirect('/');
    }

    public function formAddScheduleAction() {
        return $this->view->pick("ticket/scheduleForm");
    }




}
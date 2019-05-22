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
        $request = $this->request;
        $scheduleRequest['schedulename'] = $request->get('schedulename');
        $scheduleRequest['scheduleday'] = $request->get('scheduleday');
        $scheduleRequest['starttime'] = $request->get('starttime');
        $scheduleRequest['endtime'] = $request->get('endtime');
        $schedule = $this->scheduleService->addSchedule($scheduleRequest);
        $this->response->redirect('/');
    }

    public function formAddScheduleAction() 
    {
        return $this->view->pick("ticket/scheduleform");
    }

    public function updateScheduleAction($scheduleId)
    {
        $request = $this->request;
        $scheduleRequest['schedulename'] = $request->get('schedulename');
        $scheduleRequest['scheduleday'] = $request->get('scheduleday');
        $scheduleRequest['starttime'] = $request->get('starttime');
        $scheduleRequest['endtime'] = $request->get('endtime');
        $schedule = $this->scheduleService->updateSchedule($scheduleId, $scheduleRequest);
        $this->response->redirect('/schedule/'.$scheduleId);
    }

    public function formUpdateScheduleAction($scheduleId) 
    {
        $schedule = $this->scheduleService->findSchedule($scheduleId);
        $this->view->schedule = $schedule;
        return $this->view->pick("ticket/updatescheduleform");
    }




}
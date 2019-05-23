<?php

namespace App\Ticket\Controllers\Web;

use Phalcon\Mvc\Controller;

class AttendantController extends Controller {
    protected $attendantService;

    public function initialize() 
    {
        $this->attendantService = $this->di->get('attendantService');
    }

    public function addAttendantAction() 
    {
        $request = $this->request;
        $attendantRequest = $this->attendantService->map($request);
        $attendant = $this->attendantService->addAttendant($attendantRequest);
        $this->response->redirect('/');
    }

    public function showAddAttendantFormAction() {
        $this->view->pick('/ticket/attendantform');
    }
}
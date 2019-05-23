<?php

namespace App\Ticket\Controllers\Api;

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
        $attendantJson = $this->serializer->toJson($attendant);

        $this->response->setContent($attendantJson);        
        $this->response->send();
    }

    public function findAttendantAction($attendantId) {
        $attendant = $this->attendantService->findAttendant($attendantId);
        $attendantJson = $this->serializer->toJson($attendant);

        $this->response->setContent($attendantJson);        
        $this->response->send();
    }


}
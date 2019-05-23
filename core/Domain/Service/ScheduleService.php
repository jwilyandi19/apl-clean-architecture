<?php

namespace CleanArch\TicketOnline\Domain\Service;

use CleanArch\TicketOnline\Domain\Repository\ScheduleRepositoryInterface;
use CleanArch\TicketOnline\UseCase\AddSchedule\AddScheduleRequest;
use CleanArch\TicketOnline\UseCase\AddSchedule\AddScheduleUseCase;
use CleanArch\TicketOnline\UseCase\AddSchedule\AddScheduleResponse;
use CleanArch\TicketOnline\UseCase\UpdateSchedule\UpdateScheduleRequest;
use CleanArch\TicketOnline\UseCase\UpdateSchedule\UpdateScheduleResponse;
use CleanArch\TicketOnline\UseCase\UpdateSchedule\UpdateScheduleUseCase;
use CleanArch\TicketOnline\UseCase\ViewAllSchedule\ViewAllScheduleResponse;
use CleanArch\TicketOnline\UseCase\ViewAllSchedule\ViewAllScheduleUseCase;
use CleanArch\TicketOnline\UseCase\FindSchedule\FindScheduleResponse;
use CleanArch\TicketOnline\UseCase\FindSchedule\FindScheduleUseCase;

class ScheduleService {
    protected $scheduleRepository;

    protected $viewAllScheduleUseCase;
    protected $addScheduleUseCase;
    protected $updateScheduleUseCase;
    protected $findScheduleUseCase;

    public function __construct(ScheduleRepositoryInterface $scheduleRepository,
    AddScheduleUseCase $addScheduleUseCase,UpdateScheduleUseCase $updateScheduleUseCase,
    ViewAllScheduleUseCase $viewAllScheduleUseCase,FindScheduleUseCase $findScheduleUseCase) 
    {
        $this->scheduleRepository = $scheduleRepository;
        $this->addScheduleUseCase = $addScheduleUseCase;
        $this->updateScheduleUseCase = $updateScheduleUseCase;
        $this->findScheduleUseCase = $findScheduleUseCase;
        $this->viewAllScheduleUseCase = $viewAllScheduleUseCase;
    }

    public function addSchedule($scheduleRequest) : AddScheduleResponse 
    {
        $scheduleRequestAdded = new AddScheduleRequest($scheduleRequest);
        return $this->addScheduleUseCase->addSchedule($scheduleRequestAdded);
    }

    public function findSchedule($scheduleId) : FindScheduleResponse 
    {
        return $this->findScheduleUseCase->findSchedule($scheduleId);
    }

    public function updateSchedule($scheduleId, $scheduleRequest) : UpdateScheduleResponse
    {
        $scheduleRequest = new UpdateScheduleRequest($scheduleRequest);
        return $this->updateScheduleUseCase->updateSchedule($scheduleId,$scheduleRequest);
    }

    public function getAllSchedules() : ViewAllScheduleResponse
    {
        return $this->viewAllScheduleUseCase->getAllSchedules();
    }

    public function map($entity) : array
    {
        $arr['schedulename'] = $entity->get('schedulename');
        $arr['scheduleday'] = $entity->get('scheduleday');
        $arr['starttime'] = $entity->get('starttime');
        $arr['endtime'] = $entity->get('endtime');

        return $arr;
    }




}
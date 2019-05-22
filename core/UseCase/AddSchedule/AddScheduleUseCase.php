<?php

namespace CleanArch\TicketOnline\UseCase\AddSchedule;

use CleanArch\TicketOnline\Domain\Entity\Schedule;
use CleanArch\TicketOnline\Domain\Repository\ScheduleRepositoryInterface;

class AddScheduleUseCase {
    protected $scheduleRepository;

    public function __construct(ScheduleRepositoryInterface $scheduleRepository)
    {
        $this->scheduleRepository = $scheduleRepository;
    }

    public function addSchedule(AddScheduleRequest $request) {
        $schedule = new Schedule();
        $schedule->setScheduleName($request->getScheduleName());
        $schedule->setDay($request->getDay());
        $schedule->setStartTime($request->getStartTime());
        $schedule->setEndTime($request->getEndTime());

        $scheduleNew = $this->scheduleRepository->addSchedule($schedule);
        return new AddScheduleResponse($scheduleNew->getScheduleName(),$scheduleNew->getDay(),$scheduleNew->getStartTime(),$scheduleNew->getEndTime());
    }
}
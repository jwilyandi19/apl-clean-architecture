<?php

namespace CleanArch\TicketOnline\UseCase\FindSchedule;

use CleanArch\TicketOnline\Domain\Repository\ScheduleRepositoryInterface;

class FindScheduleUseCase {
    protected $scheduleRepository;

    public function __construct(ScheduleRepositoryInterface $scheduleRepository)
    {
        $this->scheduleRepository = $scheduleRepository;
    }

    public function findSchedule($scheduleId) : FindScheduleResponse {
        $schedule = $this->scheduleRepository->findSchedule($scheduleId);
        return new FindScheduleResponse($schedule->getscheduleName(),$schedule->getDay(),$schedule->getStartTime(),$schedule->getEndTime());
    }
}
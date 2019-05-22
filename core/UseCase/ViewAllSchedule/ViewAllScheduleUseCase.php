<?php

namespace CleanArch\TicketOnline\UseCase\ViewAllSchedule;

use CleanArch\TicketOnline\Domain\Repository\ScheduleRepositoryInterface;

class ViewAllScheduleUseCase {
    protected $scheduleRepository;

    public function __construct(ScheduleRepositoryInterface $scheduleRepository) {
        $this->scheduleRepository = $scheduleRepository;
    }

    public function getAllSchedules() : ViewAllScheduleResponse {
        $schedules = $this->scheduleRepository->allSchedules();
        $scheduleResponse = new ViewAllScheduleResponse($schedules);
        return $scheduleResponse;
    }
}
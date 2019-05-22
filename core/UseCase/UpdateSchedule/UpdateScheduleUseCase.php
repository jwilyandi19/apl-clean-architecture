<?php

namespace CleanArch\TicketOnline\UseCase\UpdateSchedule;

use CleanArch\TicketOnline\Domain\Repository\ScheduleRepositoryInterface;

class UpdateScheduleUseCase {
    protected $scheduleRepository;

    public function __construct(ScheduleRepositoryInterface $scheduleRepository) 
    {
        $this->scheduleRepository = $scheduleRepository;
    }

    public function updateSchedule($scheduleId, UpdateScheduleRequest $request): UpdateScheduleResponse 
    {
        $schedule = $this->scheduleRepository->getById($scheduleId);
        $schedule->setScheduleName($request->getScheduleName());
        $schedule->setDay($request->getDay());
        $schedule->setStartTime($request->getStartTime());
        $schedule->setEndTime($request->getEndTime());
        $scheduleUpdated = $this->scheduleRepository->addSchedule($schedule);
        return new UpdateScheduleResponse($scheduleUpdated);
    }
}
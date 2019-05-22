<?php

namespace CleanArch\TicketOnline\UseCase\ViewAllSchedule;

class ViewAllScheduleResponse {
    protected $schedules = [];

    public function __construct(array $schedules) {
        $this->map($schedules);
    }

    public function map(array $schedules) {
        foreach($schedules as $schedule) {
            $this->schedules [] = ['schedule_id' => $schedule->getId(), 'scheduleName' => $schedule->getScheduleName(), 
            'day' => $schedule->getDay(), 'startTime' => $schedule->getStartTime(), 
            'endTime' => $schedule->getEndTime()];
        }
    }

    public function getSchedules() {
        return $this->schedules;
    }
}
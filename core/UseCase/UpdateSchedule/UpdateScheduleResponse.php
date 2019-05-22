<?php

namespace CleanArch\TicketOnline\UseCase\UpdateSchedule;

use CleanArch\TicketOnline\Domain\Entity\Schedule;

class UpdateScheduleResponse {
    protected $scheduleName;
    protected $day;
    protected $startTime;
    protected $endTime;

    public function __construct(Schedule $schedule) {
        $this->scheduleName = $schedule->getScheduleName();
        $this->day = $schedule->getDay();
        $this->startTime = $schedule->startTime();
        $this->endTime = $schedule->endTime();
    }

    public function setScheduleName($scheduleName) {
        $this->scheduleName = $scheduleName;
    }

    public function getScheduleName() {
        return $this->scheduleName;
    }

    public function setDay($day) {
        $this->day = $day;
        
    }

    public function getDay() {
        return $this->day;
    }

    public function setStartTime($startTime) {
        $this->startTime = $startTime;
        
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setEndTime($endTime) {
        $this->endTime = $endTime;
        
    }

    public function getEndTime() {
        return $this->endTime;
    }
}
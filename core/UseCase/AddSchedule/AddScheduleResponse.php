<?php

namespace CleanArch\TicketOnline\UseCase\AddSchedule;

class AddScheduleResponse{
    protected $scheduleName;
    protected $day;
    protected $startTime;
    protected $endTime;

    public function __construct($scheduleName,$day,$startTime,$endTime) {
        $this->scheduleName = $scheduleName;
        $this->day = $day;
        $this->startTime = $startTime;
        $this->endTime = $endTime;
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
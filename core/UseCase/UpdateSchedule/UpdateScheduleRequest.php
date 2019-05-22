<?php

namespace CleanArch\TicketOnline\UseCase\UpdateSchedule;


class UpdateScheduleRequest {
    protected $scheduleName;
    protected $day;
    protected $startTime;
    protected $endTime;

    public function __construct($scheduleData) {
        $this->scheduleName = $scheduleData['schedulename'];
        $this->day = $scheduleData['scheduleday'];
        $this->startTime = $scheduleData['starttime'];
        $this->endTime = $scheduleData['endtime'];
    }

    public function setScheduleName($scheduleName) {
        $this->scheduleName = $scheduleName;
        return $this;
    }

    public function getScheduleName() {
        return $this->scheduleName;
    }

    public function setDay($day) {
        $this->day = $day;
        return $this;
    }

    public function getDay() {
        return $this->day;
    }

    public function setStartTime($startTime) {
        $this->startTime = $startTime;
        return $this;
    }

    public function getStartTime() {
        return $this->startTime;
    }

    public function setEndTime($endTime) {
        $this->endTime = $endTime;
        return $this;
    }

    public function getEndTime() {
        return $this->endTime;
    }
}
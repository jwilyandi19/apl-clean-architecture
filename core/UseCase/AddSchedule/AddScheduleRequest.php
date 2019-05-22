<?php

namespace CleanArch\TicketOnline\UseCase\AddSchedule;

class AddScheduleRequest {
    protected $scheduleName;
    protected $day;
    protected $startTime;
    protected $endTime;

    public function __construct($scheduleRequest) {
        $this->scheduleName = $scheduleRequest['schedulename'];
        $this->day = $scheduleRequest['scheduleday'];
        $this->startTime = $scheduleRequest['starttime'];
        $this->endTime = $scheduleRequest['endtime'];
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
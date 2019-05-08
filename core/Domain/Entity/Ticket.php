<?php

namespace CleanArch\TicketOnline\Domain\Entity;

class Ticket extends AbstractEntity {
    protected $schedule;
    protected $attendant;
    protected $description;
    protected $startTime;
    protected $endTime;

    public function setSchedule(Schedule $schedule) {
        $this->schedule = $schedule;
        return $this;
    }

    public function getSchedule() {
        return $this->schedule;
    }

    public function setAttendant(Attendant $attendant) {
        $this->attendant = $attendant;
        return $this;
    }

    public function getAttendant() {
        return $this->attendant;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function getDescription() {
        return $this->description;
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
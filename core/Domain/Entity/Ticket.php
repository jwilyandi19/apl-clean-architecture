<?php

namespace CleanArch\TicketOnline\Domain\Entity;

class Ticket extends AbstractEntity {
    protected $schedule;
    protected $attendant;
    protected $description;
    protected $ticketNumber;
    protected $total;

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

    public function getTicketNumber() {
        return $this->ticketNumber;
    }

    public function setticketNumber($ticketNumber) {
        $this->ticketNumber = $ticketNumber;
        return $this;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function getTotal() {
        return $this->total;
    }

    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }
}
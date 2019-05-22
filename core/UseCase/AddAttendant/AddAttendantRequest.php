<?php

namespace CleanArch\TicketOnline\UseCase\AddAttendant;

class AddAttendantRequest {
    protected $name;
    protected $email;

    public function __construct($attendantRequest) {
        $this->name = $attendantRequest['name'];
        $this->email = $attendantRequest['email'];
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }
}
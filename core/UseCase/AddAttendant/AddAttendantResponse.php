<?php

namespace CleanArch\TicketOnline\UseCase\AddAttendant;

class AddAttendantResponse{
    protected $name;
    protected $email;

    public function __construct($name,$email) {
        $this->name = $name;
        $this->email = $email;
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
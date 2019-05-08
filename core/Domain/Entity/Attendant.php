<?php

namespace CleanArch\TicketOnline\Domain\Entity;

class Attendant extends AbstractEntity {
    protected $name;
    protected $email;

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }
}
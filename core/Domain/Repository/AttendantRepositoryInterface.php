<?php

namespace CleanArch\TicketOnline\Domain\Repository;

interface AttendantRepositoryInterface extends RepositoryInterface {
    public function addAttendant($attendant);
    public function findAttendant($attendantId);
}
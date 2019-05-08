<?php

namespace CleanArch\TicketOnline\Domain\Repository;

interface ScheduleRepositoryInterface extends RepositoryInterface {
    public function getUnverifiedSchedules();
}
<?php

namespace CleanArch\TicketOnline\Domain\Repository;

interface ScheduleRepositoryInterface extends RepositoryInterface {
    public function allSchedules();
    public function findSchedule($scheduleId);
    public function addSchedule($schedule);
}
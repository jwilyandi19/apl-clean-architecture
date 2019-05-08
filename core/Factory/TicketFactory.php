<?php

namespace CleanArch\TicketOnline\Domain\Factory;

use CleanArch\TicketOnline\Domain\Entity\Attendant;
use CleanArch\TicketOnline\Domain\Entity\Schedule;
use CleanArch\TicketOnline\Domain\Entity\Ticket;

class TicketFactory {
    public function createFromSchedule(Schedule $schedule) {
        $ticket = new Ticket();
        $ticket->setSchedule($schedule);
        $ticket->setDay($schedule->getDay());
        $ticket->setStartTime($schedule->getStartTime());
        $ticket->setEndTime($schedule->getEndTime());

        return $ticket;

    }
}


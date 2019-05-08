<?php

namespace CleanArch\TicketOnline\Domain\Service;

use CleanArch\TicketOnline\Domain\Factory\TicketFactory;
use CleanArch\TicketOnline\Domain\Repository\ScheduleRepositoryInterface;

class TicketingService {
    protected $ticketFactory;
    protected $scheduleRepository;

    public function __construct(TicketFactory $ticketFactory, 
    ScheduleRepositoryInterface $scheduleRepository) {
        $this->scheduleRepository = $scheduleRepository;
        $this->ticketFactory = $ticketFactory;
    }

    public function generateTickets() {
        $schedules = $this->scheduleRepository->getUnverifiedSchedules();

        $tickets = [];

        foreach($schedules as $schedule) {
            $tickets[] = $this->ticketFactory->createFromSchedule($schedule);
        }
    }


}
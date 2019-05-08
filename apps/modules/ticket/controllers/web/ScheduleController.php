<?php

namespace App\Ticket\Controllers\Web;

use Phalcon\Mvc\Controller;
use CleanArch\TicketOnline\Domain\Repository\ScheduleRepositoryInterface;

class ScheduleController extends Controller
{
    public $scheduleRepository;
    public function __construct(ScheduleRepositoryInterface $scheduleRepository) {
        $this->scheduleRepository = $scheduleRepository;
    }

    public function indexAction()
    {
        return [
            'schedule' => $this->scheduleRepository->getAll()
        ];
    }
}
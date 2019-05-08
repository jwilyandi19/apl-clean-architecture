<?php

namespace App\Ticket\Controllers\Web;

use Phalcon\Mvc\Controller;
use CleanArch\TicketOnline\Domain\Repository\TicketRepositoryInterface;

class ScheduleController extends Controller
{
    public $ticketRepository;
    public function __construct(TicketRepositoryInterface $ticketRepository) {
        $this->ticketRepository = $ticketRepository;
    }

    public function indexAction() {
        return [
            'ticket' => $this->ticketRepository->getAll()
        ];
    }

    public function newAction() {

    }
}
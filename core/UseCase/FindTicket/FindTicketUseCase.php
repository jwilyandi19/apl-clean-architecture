<?php

namespace CleanArch\TicketOnline\UseCase\FindTicket;

use CleanArch\TicketOnline\Domain\Repository\TicketRepositoryInterface;

class FindTicketUseCase {
    protected $ticketRepository;

    public function __construct(TicketRepositoryInterface $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }

    public function findTicket($ticketId) : FindTicketResponse {
        $ticket = $this->ticketRepository->findTicket($ticketId);
        return new FindTicketeResponse($ticket->getscheduleName());
    }
}
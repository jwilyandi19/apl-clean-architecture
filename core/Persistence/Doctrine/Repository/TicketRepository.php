<?php

namespace CleanArch\TicketOnline\Persistence\Doctrine\Repository;
use CleanArch\TicketOnline\Domain\Repository\TicketRepositoryInterface;

class TicketRepository extends AbstractDoctrineRepository implements TicketRepositoryInterface {
    protected $entityClass = 'CleanArch\TicketOnline\Domain\Entity\Ticket';

    public function addTicket($ticket)
    {
        $ticket = $this->persist($ticket);
        return $ticket;
    }

    public function findTicket($ticketId)
    {
        $ticket = $this->getById($ticketId);
        return $ticket;
    }



}
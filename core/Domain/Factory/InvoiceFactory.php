<?php

namespace CleanArch\TicketOnline\Domain\Factory;

use CleanArch\TicketOnline\Domain\Entity\Ticket;

class InvoiceFactory {
    public function createFromTicket(Ticket $ticket) {
        $invoice = new Invoice();
        $invoice->setTicket($ticket);
        $invoice->setInvoiceDate(new \DateTime());
        $invoice->setTotal($ticket->getTotal());

        return $invoice;

    }
}


<?php

namespace CleanArch\TicketOnline\Domain\Repository;

interface TicketRepositoryInterface extends RepositoryInterface {
    public function getUninvoicedTickets();
}
<?php

namespace CleanArch\TicketOnline\Persistence\Doctrine\Repository;
use CleanArch\TicketOnline\Domain\Repository\InvoiceRepositoryInterface;

class InvoiceRepository extends AbstractDoctrineRepository implements InvoiceRepositoryInterface {
    protected $entityClass = 'CleanArch\TicketOnline\Domain\Entity\Invoice';
}
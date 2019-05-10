<?php

namespace CleanArch\TicketOnline\Persistence\Doctrine\Repository;
use CleanArch\TicketOnline\Domain\Repository\TicketRepositoryInterface;

class TicketRepository extends AbstractDoctrineRepository implements TicketRepositoryInterface {
    protected $entityClass = 'CleanArch\TicketOnline\Domain\Entity\Ticket';

    public function getUninvoicedTickets()
    {
        $builder = $this->entityManager->createQueryBuilder()
            ->select('o')
            ->from($this->entityClass, 'o')
            ->leftJoin(
                'CleanArch\TicketOnline\Domain\Entity\Ticket',
                'i',
                Join::WITH,
                'i.ticket = 0'
            )
            ->where('i.id IS NULL');
        return $builder->getQuery()->getResult();
    }
}
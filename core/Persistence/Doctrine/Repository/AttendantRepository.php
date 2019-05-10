<?php

namespace CleanArch\TicketOnline\Persistence\Doctrine\Repository;
use CleanArch\TicketOnline\Domain\Repository\AttendantRepositoryInterface;

class AttendantRepository extends AbstractDoctrineRepository implements AttendantRepositoryInterface {
    protected $entityClass = 'CleanArch\TicketOnline\Domain\Entity\Attendant';
}
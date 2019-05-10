<?php

namespace CleanArch\TicketOnline\Persistence\Doctrine\Repository;
use CleanArch\TicketOnline\Domain\Repository\ScheduleRepositoryInterface;

class ScheduleRepository extends AbstractDoctrineRepository implements ScheduleRepositoryInterface {
    protected $entityClass = 'CleanArch\TicketOnline\Domain\Entity\Schedule';

    
}
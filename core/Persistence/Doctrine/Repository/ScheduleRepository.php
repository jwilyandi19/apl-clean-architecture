<?php

namespace CleanArch\TicketOnline\Persistence\Doctrine\Repository;
use CleanArch\TicketOnline\Domain\Repository\ScheduleRepositoryInterface;

class ScheduleRepository extends AbstractDoctrineRepository implements ScheduleRepositoryInterface {
    protected $entityClass = 'CleanArch\TicketOnline\Domain\Entity\Schedule';

    public function persist($entity)
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
        return $entity;
    }

    public function allSchedules() 
    {
        $schedules = $this->getAll();
        return $schedules;
    }

    public function findSchedule($scheduleId)
    {
        $schedule = $this->getById($scheduleId);
        return $schedule;
    }

    public function addSchedule($schedule)
    {
        $schedule = $this->persist($schedule);
        return $schedule;
    }


    
}
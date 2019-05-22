<?php

namespace CleanArch\TicketOnline\Persistence\Doctrine\Repository;
use CleanArch\TicketOnline\Domain\Repository\AttendantRepositoryInterface;

class AttendantRepository extends AbstractDoctrineRepository implements AttendantRepositoryInterface {
    protected $entityClass = 'CleanArch\TicketOnline\Domain\Entity\Attendant';
    public function persist($entity)
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
        return $entity;
    }

    public function addAttendant($attendant) {
        $attendant = $this->persist($attendant);
        return $attendant;
    }

    public function findAttendant($attendantId) {
        $attendant = $this->getById($attendantId);
        return $attendant;
    }
}
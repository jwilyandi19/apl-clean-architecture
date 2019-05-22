<?php

namespace CleanArch\TicketOnline\UseCase\AddAttendant;

use CleanArch\TicketOnline\Domain\Entity\Attendant;
use CleanArch\TicketOnline\Domain\Repository\AttendantRepositoryInterface;

class AddAttendantUseCase {
    protected $attendantRepository;

    public function __construct(AttendantRepositoryInterface $attendantRepository)
    {
        $this->attendantRepository = $attendantRepository;
    }

    public function addAttendant(AddAttendantRequest $request) {
        $attendant = new Attendant();
        $attendant->setName($request->getName());
        $attendant->setEmail($request->getEmail());

        $attendantNew = $this->attendantRepository->addAttendant($attendant);
        return new AddattendantResponse($attendantNew->getName(),$attendantNew->getEmail());
    }
}
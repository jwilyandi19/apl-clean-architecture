<?php

namespace CleanArch\TicketOnline\UseCase\FindAttendant;

use CleanArch\TicketOnline\Domain\Repository\AttendantRepositoryInterface;

class FindAttendantUseCase {
    protected $attendantRepository;

    public function __construct(AttendantRepositoryInterface $attendantRepository)
    {
        $this->attendantRepository = $attendantRepository;
    }

    public function findAttendant($attendantId) : FindAttendantResponse {
        $attendant = $this->attendantRepository->findAttendant($attendantId);
        return new FindAttendantResponse($attendant->getName(),$attendant->getEmail());
    }
}
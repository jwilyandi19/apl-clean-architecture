<?php

namespace CleanArch\TicketOnline\Domain\Service;

use CleanArch\TicketOnline\Domain\Repository\AttendantRepositoryInterface;
use CleanArch\TicketOnline\UseCase\AddAttendant\AddAttendantRequest;
use CleanArch\TicketOnline\UseCase\AddAttendant\AddAttendantResponse;
use CleanArch\TicketOnline\UseCase\FindAttendant\FindAttendantResponse;
use CleanArch\TicketOnline\UseCase\FindAttendant\FindAttendantUseCase;
use CleanArch\TicketOnline\UseCase\AddAttendant\AddAttendantUseCase;

class AttendantService {
    protected $attendantRepository;

    protected $addAttendantUseCase;
    protected $findAttendantUseCase;

    public function __construct(AttendantRepositoryInterface $attendantRepository, AddAttendantUseCase $addAttendantUseCase, FindAttendantUseCase $findAttendantUseCase)
    {
        $this->attendantRepository = $attendantRepository;
        $this->addAttendantUseCase = $addAttendantUseCase;
        $this->findAttendantUseCase = $findAttendantUseCase;
    }

    public function addAttendant($attendantRequest) : AddAttendantResponse
    {
        $attendantRequestAdded = new AddAttendantRequest($attendantRequest);
        return $this->addAttendantUseCase->addAttendant($attendantRequestAdded);
    }

    public function findAttendant($attendantId) : FindAttendantResponse
    {
        return $this->findAttendantUseCase->findAttendant($attendantId);
    }
}
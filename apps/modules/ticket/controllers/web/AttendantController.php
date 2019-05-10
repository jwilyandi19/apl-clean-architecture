<?php

namespace App\Ticket\Controllers\Web;

use Phalcon\Mvc\Controller;
use CleanArch\TicketOnline\Domain\Repository\AttendantRepositoryInterface;

class DashboardController extends Controller
{
    public $attendantRepository;
    public function __construct(AttendantRepositoryInterface $attendantRepository) {
        $this->attendantRepository = $attendantRepository;
    }

    public function indexAction()
    {
        return [
            'attendant' => $this->attendantRepository->getAll()
        ];
    }
}
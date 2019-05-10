<?php
namespace CleanArch\TicketOnline\Domain\Service;
use CleanArch\TicketOnline\Domain\Factory\InvoiceFactory;
use CleanArch\TicketOnline\Domain\Repository\OrderRepositoryInterface;
class InvoicingService
{
    protected $ticketRespository;
    protected $invoiceFactory;
    public function __construct(OrderRepositoryInterface $ticketRepository, InvoiceFactory $invoiceFactory)
    {
        $this->ticketRespository = $ticketRepository;
        $this->invoiceFactory = $invoiceFactory;
    }
    public function generateInvoices()
    {
        $tickets = $this->ticketRespository->getUninvoicedTickets();
        $invoices = [];
        foreach ($tickets as $ticket)
        {
            $invoices[] = $this->invoiceFactory->createFromTicket($ticket);
        }
        return $invoices;
    }
}
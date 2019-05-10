<?php

namespace CleanArch\TicketOnline\Domain\Entity;

class Invoice {
    protected $ticket;
    protected $invoiceDate;
    protected $total;
    public function getTicket() {
        return $this->ticket;
    }
    public function setTicket(Ticket $ticket) {
        $this->ticket = $ticket;
        return $this;
    }
    public function getInvoiceDate() {
        return $this->invoiceDate;
    }
    public function setInvoiceDate(\DateTime $invoiceDate) {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }
    public function getTotal() {
        return $this->total;
    }
    public function setTotal($total) {
        $this->total = $total;
        return $this;
    }
}

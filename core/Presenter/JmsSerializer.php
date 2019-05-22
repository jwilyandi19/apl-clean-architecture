<?php
namespace CleanArch\TicketOnline\Presenter\Serializer;

class JmsSerializer 
{
    protected $serializer;

    public function __construct($serializer)
    {
        $this->serializer = $serializer;
    }

    public function toJson($entity)
    {
        $jsonContent = $this->serializer->serialize($entity, 'json');
        return $jsonContent;
    }
}
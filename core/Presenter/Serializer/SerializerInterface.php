<?php
namespace CleanArch\TicketOnline\Presenter\Serializer;

interface SerializerInterface {
    public function toJson($entity);
}
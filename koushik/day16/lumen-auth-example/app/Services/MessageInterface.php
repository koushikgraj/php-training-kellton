<?php
namespace App\Services;

interface MessageInterface
{

    public function send(string $message);
}
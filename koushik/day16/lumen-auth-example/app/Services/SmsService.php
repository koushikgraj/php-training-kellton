<?php
namespace App\Services;

use SomeSmsProvider\Client;

class SmsService implements MessageInterface
{
    protected $smsProvider;
    
    public function __construct(Client $smsProvider)
    {
        $this->smsProvider = $smsProvider;
    }
    
    public function send($message)
    {
        echo "I am in containier";
        return $this->smsProvider->send($message)
    }
}
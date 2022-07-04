<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use PhpAmqpLib\connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RMQController extends Controller{
    private $rmq_channel;
    private $rmq_conn;
    public function __construct(){
        $this->rmq_conn = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $this->rmq_channel = $this->rmq_conn->channel();
    }
    public function getConnection(){
        dd($this->req_channel);
    }
    public function publishMessage(){
        $this->rmq_channel->queue_declare('hello', false, false, false, false);
        $msg = new AMQPMessage('Hello World!');
        $this->rmq_channel->basic_publish($msg, '', 'hello');
        echo "  'Hello World!'\n";
        $channel->close();
        $connection->close();
    }
    public function consumeMessage(){
        $callback = function ($msg) {
            echo ' [x] Received ', $msg->body, "\n";
          }; 
          $channel->basic_consume('hello', '', false, true, false, false, $callback);       
    } 
    public static function close_connection(){
        $channel->close();
        $connection->close();
    }
}


?>
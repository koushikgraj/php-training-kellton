<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RmqController extends Controller
{
	private $rmq_conn;
	public function __construct()
	{
		$this->rmq_conn = $this->RMQConnection();;
	}

	public function RMQConnection()
	{
		$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
		return $connection->channel();
	}

	public function declareMessage()
	{
		$this->rmq_conn->queue_declare('hello', false, false, false, false);

		$msg = new AMQPMessage('Hello World!');
		$this->rmq_conn->basic_publish($msg, '', 'hello');

		echo " [x] Sent 'Hello World!'\n";
	}

	public function readMessages()
	{
		$callback = function ($msg) {
		  echo ' [x] Received ', $msg->body, "\n";
		};

		$this->rmq_conn->basic_consume('hello', '', false, true, false, false, $callback);

		/*while ($this->rmq_conn->is_open()) {
		    $this->rmq_conn->wait();
		}*/
	}
}
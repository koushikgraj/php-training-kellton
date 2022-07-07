<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RMQController extends Controller{
	
	private $rmq_channel;
	private $rmq_conn;
	public function __construct()
	{
		$this->rmq_conn = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
		$this->rmq_channel = $this->rmq_conn->channel();
	}


	public function getConnection()
	{
		dd($this->rmq_channel);
	}

	public function publishMessage()
	{
		$this->rmq_channel->queue_declare('laravel-first-queue', false, false, false, false);

		$msg = new AMQPMessage('Testing our first message in to RMQ!');
		$this->rmq_channel->basic_publish($msg, '', 'laravel-first-queue');
		echo "Sent first message to RMQ\n";
		$this->close_connection();
	}

	public function consumeMessage()
	{
		$callback = function ($msg) {
		  echo ' [x] Received ', $msg, "\n";
		  sleep(substr_count($msg, '.'));
		  echo " [x] Done\n";
		};

		$ok = $this->rmq_channel->basic_consume('laravel-first-queue', '', false, true, false, false, $callback);

		dd($callback($ok));

		$this->close_connection();
	}

	private function close_connection()
	{
		$this->rmq_channel->close();
		$this->rmq_conn->close();
	}
}
?>
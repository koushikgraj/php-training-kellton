<?php

class BankAccount
{
	private $accountNumber;

	private $balance;

	public function __construct(
		$accountNumber,
		$balance
	) {
		$this->accountNumber = $accountNumber;
		$this->balance = $balance;
	}
}

$account = new BankAccount('123456789', 100);
echo $account;
?>
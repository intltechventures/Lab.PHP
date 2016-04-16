<?php 

class DemoClass
{
	protected $customerID;
	private $accountNumber;
	private $userName;

	public function getAccountNumber() 
	{
		return $this->accountNumber;
	}

	public function setAccountNumber($accountNumber) 
	{
		$this->accountNumber = $accountNumber;
	}
}

$demo = new DemoClass();
$demo->setAccountNumber("12345");
echo $demo->getAccountNumber();

?>

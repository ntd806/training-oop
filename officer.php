<?php
include 'employee.php';
/**
 * 
 */
class Officer extends Employee
{
	private $duty;

	public function set_duty($duty)
    {
    	$this->duty = $duty;
    }
 	public function get_duty()
 	{
 		return $this->duty;
 	}

	public function show_employee()
	{
		parent::show_employee();
		echo $this->get_duty();
	}

	function __construct($name, $address, $phone_number, $duty)
	{
		parent::__construct($name, $address, $phone_number);
		$this->duty = $duty;
	}
}
<?php
include 'employee.php';
/**
 * 
 */
class Worker extends Employee
{
	private $level;

	public function set_level($level)
    {
    	$this->level = $level;
    }
 	public function get_level()
 	{
 		return $this->level;
 	}

	public function show_employee()
	{
		parent::show_employee();
		echo $this->get_level();
	}

	function __construct($name, $address, $phone_number, $level)
	{
		parent::__construct($name, $address, $phone_number);
		$this->level = $level;
	}
}
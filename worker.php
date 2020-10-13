<?php
include 'employee.php';
/**
 * 
 */
class Worker extends Employee
{
	private $salary_coefficients;

	public function set_salary_coefficients($Salary_coefficients)
    {
    	$this->salary_coefficients = $Salary_coefficients;
    }
 	public function get_salary_coefficients()
 	{
 		return $this->salary_coefficients;
 	}

	public function show_employee()
	{
		parent::show_employee();
		echo $this->get_salary_coefficients();
	}

	function __construct($name, $address, $phone_number, $salary_coefficients)
	{
		parent::__construct($name, $address, $phone_number);
		$this->salary_coefficients = $salary_coefficients;
	}
}
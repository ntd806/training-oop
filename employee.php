<?php
/**
 *  
 */
class Employee
{
	private $name, $address, $phone_number;

	public function set_name($Name)
    {
    	$this->name = $Name;
    }
 	public function get_name()
 	{
 		return $this->name;
 	}

	public function set_address($Address)
    {
    	$this->address = $Address;
    }
 	public function get_address()
 	{
 		return $this->address;
 	}

 	public function set_phone_number($Phone_number)
    {
    	$this->phone_number = $Phone_number;
    }
 	public function get_phone_number()
 	{
 		return $this->phone_number;
 	}

 	public function show_employee()
 	{
 		echo "Employee: ".$this->get_name().": ".$this->get_address().": ".$this->get_phone_number().": ";
 	}

	function __construct($name, $address, $phone_number)
	{
		$this->name = $name;
		$this->address = $address;
		$this->phone_number = $phone_number;
	}
}
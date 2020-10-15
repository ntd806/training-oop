<?php
<?php
include 'employee.php';
/**
 * 
 */
class Engineer extends Employee
{
	private $major;

	public function set_major($major)
    {
    	$this->major = $major;
    }
 	public function get_major()
 	{
 		return $this->major;
 	}

	public function show_employee()
	{
		parent::show_employee();
		echo $this->get_major();
	}

	function __construct($name, $address, $phone_number, $major)
	{
		parent::__construct($name, $address, $phone_number);
		$this->major = $major;
	}
}
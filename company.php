<?php
include 'worker.php';

/**
 * 
 */
class Company 
{
	const ENGINEERS = 1;
	const OFFICERS  = 2;
	const WORKERS   = 3;

	private $Engineers = [];
	private $Officers  = [];
	private $Workers   = [];

	function __construct($Engineers, $Officers, $Workers)
	{
		$this->Engineers = $Engineers;
		$this->Officers  = $Officers;
		$this->Workers   = $Workers;
		$this->end_emloyee($this->Engineers, $this->Officers, $this->Workers);
	}

	public function show()
	{
		foreach ($this->Engineers as $Engineer) {
			$Engineer->show_employee();
		}

		foreach ($this->Officers as $Officer) {
			$Officer->show_employee();
		}

		foreach ($this->Workers as $Worker) {
			$Worker->show_employee();
		}
	}

	public function end_emloyee($Engineers, $Officers, $Workers)
	{
		foreach ($Engineers as $Engineer) {
			$this->$Engineers[] = $Engineer;
		}

		foreach ($Officers as $Officer) {
			$this->$Officers[] = $Officer;
		}

		foreach ($Workers as $Worker) {
			$this->$Workers[] = $Worker;
		}
	}

	public function find_emloyee($key, $type)
	{
		switch ($type) {
			case self::ENGINEERS;
				search_list($this->$Engineers, $key);
				break;
			case self::OFFICERS;
				search_list($this->$OFFICERS, $key);
				break;
			case self::WORKERS;
				search_list($this->$Workers, $key);
				break;

			default:
				echo "NOT FOUND";
				break;
		}
	}

	public function search_list($list, $key)
	{
		foreach ($list as $object) {
			if ($key == $object->name) {
				return $object;
			}
		}
	}
}


$company = new Company();

$company->show();
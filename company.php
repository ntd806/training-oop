<?php
include 'worker.php';

/**
 * 
 */
class Company 
{
	public function show()
	{
		$worker = new Worker("nguyễn Tiến Đạt", "Tân Bình", "0123456", 30);
	    $worker->show_employee();
	}
}


$company = new Company();

$company->show();
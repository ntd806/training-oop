<?php

class Triangle{
	private $point_A;
	private $point_B;
	private $point_C;

 	function __construct($point_A, $point_B, $point_C)
 	{
 		$this->point_A = $point_A;
 		$this->point_B = $point_B;
 		$this->point_C = $point_C;
 	}

	public function area()
	{
		$a = $this->point_A->distance($this->point_B);
		$b = $this->point_B->distance($this->point_C);
		$c = $this->point_C->distance($this->point_A);

		return $a + $b + $c;
	}
}
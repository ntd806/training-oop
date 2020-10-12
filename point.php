<?php

 /**
  * 
  */
 class Point
 {
 	private $x = 0;
 	private $y = 0;

    public function set_x($X)
    {
    	$this->x = $X;
    }
 	public function get_x()
 	{
 		return $this->x;
 	}

 	public function set_y($Y)
    {
    	$this->y = $Y;
    }
 	public function get_y()
 	{
 		return $this->y;
 	}

 	function __construct($X, $Y)
 	{
 		$this->set_x($X);
 		$this->set_y($Y);
 	}

 	public function distance($point)
 	{
 		$distance = ($this->get_x()*$point->get_x())*($this->get_x()*$point->get_x())
 		+ ($this->get_y()*$point->get_y())*($this->get_y()*$point->get_y());
 		
 		return sqrt($distance);
 	}
 }

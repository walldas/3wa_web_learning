<?php

class Trikampis extends Shape{
	protected $x1,$y1;
	protected $x2,$y2;
	protected $x3,$y3;
	
	public function __construct(){
		parent::__construct();
		$this->x1=0;
		$this->y1=0;
		$this->x2=0;
		$this->y2=0;
		$this->x3=0;
		$this->y3=0;
		
	}
	public function setPoints($x1,$y1,$x2,$y2,$x3,$y3){
		$this->x1=$x1;
		$this->y1=$y1;
		$this->x2=$x2;
		$this->y2=$y2;
		$this->x3=$x3;
		$this->y3=$y3;
	}
	public function draw() {
		return '<polygon
				points="' . 
				$this->x1 . ',' . 
				$this->y1 . ' ' . 
				$this->x2 . ',' . 
				$this->y2 . ' ' . 
				$this->x3 . ',' . 
				$this->y3 . ' "
				style="fill:' . 
				$this->color . 
				';stroke:purple;stroke-width:1"
				opacity="' . 
				$this->opacity . '"
				/>';
	}
}
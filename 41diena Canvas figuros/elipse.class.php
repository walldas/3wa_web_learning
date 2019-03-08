<?php

class Elipse extends Shape{
	protected $a;
	protected $b;

	public function __construct(){
		parent::__construct();
		$this->a=0;
		$this->b=0;
	}
	public function setA($a){
		$this ->a=$a;
	}
	public function setB($b){
		$this ->b=$b;
	}
	public function draw(){
		return "<ellipse 
					cx='".$this->location->getX()."'
					cy='".$this->location->getY()."'
					rx='".$this->a."' 
					ry='".$this->b."' 
					fill='".$this->color."' 
					opacity='".$this->opacity."' />
					<text 
					x='".$this->location->getX()."'
					y='".$this->location->getY()."'>".$this->text." </text>";
	}
}
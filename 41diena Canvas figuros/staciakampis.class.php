<?php

class Staciakampis extends Shape{
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
		return "<rect
					x='".$this->location->getX()."'
					 y='".$this->location->getY()."'
					  width='".$this->a."' 
					  height='".$this->b."' 
					  fill='".$this->color."' 
					  opacity='".$this->opacity."' />";
	}
}
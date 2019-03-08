<?php 

abstract class Shape{
	protected $color ;
	protected $location ;
	protected $opacity;
	protected $text;

	abstract public function draw();
	public function __construct(){
		$this->color="black";
		$this->location = new Point();
		$this->opacity=1;
		$this->text="text";
	}
	public function setColor($color){
		$this->color=$color;
	}
	public function setLocation($x,$y){
		$this->location->setXY($x,$y);
	}
	public function setOpacity($opacity){
		$this->opacity=$opacity;
	}
	public function setText($text){
		$this->text=$text;
	}


}



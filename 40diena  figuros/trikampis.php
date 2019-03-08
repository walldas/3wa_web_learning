<?php

class Triangle{
	public $a;
	public $b;
	public $c;

	public function __construct($a,$b){
		$this->a=$a;
		$this->b=$b;
		$this->c=$this->getC();
		$this->S=$this->getS();
		$this->P=$this->getP();
	}
	private function getC(){
		return sqrt($this->a*$this->a+$this->b*$this->b);
	}
	private function getS(){
		return (($this->a*$this->b)/2);
	}
	private function getP(){
		return (($this->a+$this->b+$this->c));
	}
}
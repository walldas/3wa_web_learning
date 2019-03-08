<?php



class Cirkle{
	public $r;

	public function __construct($r){
		$this->r=$r;
		$this->S=$this->getS();
		$this->C=$this->getC();
	}
	private function getS(){
		return PI()*$this->r*$this->r;
	}
	private function getC(){
		return PI()*$this->r*2;
	}

}
<?php



class staciakampis{
	public $a;
	public $b;

	public function __construct($a,$b){
		$this->a=$a;
		$this->b=$b;
		$this->S=$this->getS();
		$this->P=$this->getP();
	}
	private function getS(){
		return $this->a*$this->b;
	}
	private function getP(){
		return ($this->a+$this->b)*2;
	}

}
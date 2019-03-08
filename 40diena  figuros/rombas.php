<?php



class rombas extends kvadratas{
	public $h;

	public function __construct($a,$h){
		parent::__construct($a);
		$this->h=$h;
		$this->S=$this->getS();
	}
	private function getS(){
		return $this->a*$this->h;
	}

}
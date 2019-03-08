
<?php






class Point{
	private $x;
	private $y;

	public function __construct(){
		$this->x=0;
		$this->y=0;

	}
	public function getX(){
		return $this->x;
	}
	public function getY(){
		return $this->y;
	}
	public function setX($x){
		return $this->y=$x;
	}
	public function setY($y){
		return $this->y=$y;
	}
	public function setXY($x, $y){
		$this->y=$y;
		$this->x=$x;
	}
}
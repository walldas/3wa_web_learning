<?php

class Circle extends Elipse{

	public function setRadius($radius){
		parent::setA($radius);
		parent::setB($radius);
	}

}
<?php
class 	Join{
	public $a,$b;
	private static $c;

	function __construct($a=5,$b=6){
		$this->a=$a;
		$this->b=$b;
	}
	function sum(){
		$this->c=$this->a*$this->b;
	}
	function vivod_c(){
		return $this->c;
		
	}
	function grin_v() {
		$this->c=$this->c+45;
	}
	function __destruct(){
		echo " Память очищена";
	}
	    private static function abc() {
        return self::$c;
    }
	
}
?>
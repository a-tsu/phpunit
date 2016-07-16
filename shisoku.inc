<?php
//TODO:use namespace
//    namespace UnitTest\Sample;
    class shisoku{
	/**
	 * 
	 * 
	 */
        var $a, $b;
        public function __construct($a,$b){
		$this->setNum($a,$b);
	    }
        function setNum($a,$b){
		$this->a = $a;
		$this->b = $b;
	}
        function add(){
		return $this->a + $this->b;
	}
	function sub(){
		return $this->a - $this->b;
	}
	function mul(){
		return $this->a * $this->b;
	}
	function div(){
		return $this->a / $this->b;
	}
    }
?>

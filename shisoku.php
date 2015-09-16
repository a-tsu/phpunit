<?php
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
    $ans = new shisoku(6,2);
    echo $ans->add()."\n";
    echo $ans->sub()."\n";
    echo $ans->mul()."\n";
    echo $ans->div()."\n";
?>

<?php
  
  class persegi {
  	public $s;

  	function set_nilai ($sisi){
  		$this->s = $sisi;
  	}
  	function get_nilai(){
  		return $this->s * 4;
  	}
  }
  class  persegi_panjang{
  	public $p,$l;

  	function set_nilai($panjang,$lebar){
  		$this->p = $panjang;
  		$this->l = $lebar;
  	}
  	function get_nilai(){
  		return $this->p * $this->l;
  	}
  }
   
   class  segitiga{
  	public $a,$t;

  	function set_nilai($alas,$tinggi){
  		$this->a = $alas;
  		$this->t = $tinggi;
  	}
  	function get_nilai(){
  		return $this->a * $this->t /2;
  	}
  }
  $luas1 = new persegi;
  $luas1-> set_nilai(4);
  echo "luas persegi : ".$luas1->get_nilai().'<br>';

  $luas2 = new persegi_panjang;
  $luas2-> set_nilai(4,6);
  echo "luas persegi panjang : ".$luas2->get_nilai().'<br>';

  $luas3 = new segitiga;
  $luas3-> set_nilai(4,6);
  echo "luas segitiga : ".$luas3->get_nilai();

?>
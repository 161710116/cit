<?php

class penjumlah {
	public $bil1,$bil2;
	function set_nilai ($bilangan1, $bilangan2){

    		$this->bil1 = $bilangan1;
    		$this->bil2 = $bilangan2;
    	}
    	public function get_nilai1()
    {
    return $this->bil1 + $this ->bil2;
    }
    	public function get_nilai2()
    {
    return $this->bil1 - $this ->bil2;
    }
    	public function get_nilai3()
    {
    return $this->bil1 / $this ->bil2;
}
public function get_nilai4()
{
return $this->bil1 * $this ->bil2;
}
    }
    $penjumlah1 = new penjumlah;
    $penjumlah1-> set_nilai (21,3);

    echo "hasil penjumlahan:".$penjumlah1-> get_nilai1() ."<br>";
    echo "hasil pengurangan:" .$penjumlah1-> get_nilai2() ."<br>";
    echo "hasil pembagian:" .$penjumlah1-> get_nilai3() ."<br>";
    echo "hasil perkalian:" .$penjumlah1-> get_nilai4() ."<br>";


 ?>
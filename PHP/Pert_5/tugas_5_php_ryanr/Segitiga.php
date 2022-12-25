<!-- Ryan Ramadhan || Kelompok 5 || Universitas Singaperbangsa Karawang || Fullstack Web Developer -->

<?php
require_once 'Bentuk2D.php';
class Segitiga extends Bentuk2D
{
    //variabel
    protected $alas;
    protected $tinggi;

    //constuktor
    public function  __construct($alas, $tinggi){
        $this -> alas = $alas;
        $this -> tinggi = $tinggi;
    }

    //method namaBidang
    public function namaBidang(){
        echo 'Segitiga';
    }

    //method keterangan
    public function keterangan(){
        echo 'Alas = ' . $this -> alas . '<br>Tinggi = ' . $this -> tinggi;
    }

    //method luasBidang
    public function luasBidang(){
        echo ($this -> alas * $this -> tinggi) * 0.5;
    }

    //method kelilingBidang
    public function kelilingBidang(){
        $a = $this -> alas;
        $b = $this -> tinggi;
        $c = sqrt(pow($a, 2) + pow($b, 2));
        echo $a + $b + $c;
    }
}
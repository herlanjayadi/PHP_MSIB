<?php 
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D{
    public $jari2;
    public function  __construct($jari2){
        $this->jari2 = $jari2;
      
    }
    public function namabidang(){
        $bidang = "lingkaran";
        return $bidang;

    }
    public function luasbidang(){
        $luas = pow($this->jari2, 2) * 3.14;
        return $luas;
    }
    public function kelilingbidang(){
        $keliling = 2 * 3.14 * $this-> jari2;
        return $keliling;
    }
    public function keterangan(){
        return '
        keterangan jari jari : '.$this-> jari2.'
        ';
    }


}
?>
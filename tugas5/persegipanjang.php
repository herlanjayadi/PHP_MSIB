<?php 
require_once 'Bentuk2D.php';
class PersegiPanjang extends Bentuk2D{
    public $panjang;
    public $lebar;
    public function  __construct($panjang,$lebar){
        
        $this->panjang = $panjang;
        $this->lebar = $lebar;

      
    }

public function namabidang(){
    $bidang = "persegipanjang";
    return $bidang;

}
public function luasbidang(){
    $luas = $this->panjang * $this->lebar;
    return $luas;
}
public function kelilingbidang(){
    $keliling = 2 * ($this->panjang + $this->lebar);
    return $keliling;
}
public function keterangan(){
    return '
    keterangan panjang : '.$this-> panjang.'
    keterangan lebar : '.$this->lebar.'
    ';
}

}
?>
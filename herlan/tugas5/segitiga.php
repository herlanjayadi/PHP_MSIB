<?php 
require_once 'Bentuk2D.php';
class segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;
    public $s1;
    public $s2;
    public $s3;

    
    public function  __construct($alas,$tinggi,$s1,$s2,$s3){
        
        $this->alas = $alas;
        $this->tinggi =$tinggi;
        $this->s1 = $s1;
        $this->s2 = $s2;
        $this->s3 = $s3;

      
    }
    public function namabidang(){
        $bidang = "segitiga";
        return $bidang;
    
    }
    public function luasbidang(){
        $luas = 1/2 * $this->alas * $this->tinggi;
        return $luas;
    }

    public function kelilingbidang(){
        $keliling = $this->s1 + $this->s2 + $this->s3;
        return $keliling;
    }
    public function keterangan(){
        return '
        keterangan alas: '.$this-> alas.'
        keterangan tinggi : '.$this->tinggi.'
        keterangan s1 : '.$this->s1.'
        keterangan s2 : '.$this->s2.'
        keterangan s3 : '.$this->s3.'
        ';
    }
    
    
}
?>
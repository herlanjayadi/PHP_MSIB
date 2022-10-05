<?php 
require 'tugas4.php';

//ciptakan object
$neur = new Pegawai('001','Neur','Manager','Kristen Katholik','Belum Menikah');
$salah = new Pegawai('011','Mohammed Salah','Asisten Manager','Islam','Menikah');
$mohammed = new Pegawai('0111','Mohammed','Kabag','kristen katholik','Belum Menikah', );
$abang = new Pegawai('0112','abang','Staff','kristen katholik','Belum Menikah', );
$mahmud = new Pegawai('0131','mahmud','Manager','kristen katholik','Menikah', );
//dst ...
//cetak struktur gaji

echo '<h3 align="center">'.Pegawai::PT.'</h3>';
$neur->mencetak();
$salah->mencetak();
$mohammed->mencetak();
$abang->mencetak();
$mahmud->mencetak();
//dst ...
echo 'Jumlah Pegawai: '.Pegawai::$jml;
?>
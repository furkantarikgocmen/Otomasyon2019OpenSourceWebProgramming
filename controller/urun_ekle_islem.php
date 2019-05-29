<?php

$urunAdi = $_POST['txtAdi'];
$kategoriId = $_POST['kategori'];
$urunFiyati = $_POST['txtFiyati'];
$tabloadi = "urun";
$kolonlar = "u_adi,uk_id,u_fiyat";
$degerler = "$urunAdi,$kategoriId,$urunFiyati";

if(isset($kategoriId) && isset($urunAdi)){
	include('../lib/sql.php');
	veriEkle($tabloadi,$kolonlar,$degerler);
	header('location:../otomasyon/otomasyon.php?s=urun&kayit=true');
}
else{
	   header('location:../otomasyon/otomasyon.php?s=urun&kayit=false');
   }
?>
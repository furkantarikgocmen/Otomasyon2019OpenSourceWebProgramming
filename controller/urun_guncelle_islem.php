<?php

$urunId = $_GET['u_id'];
$kategoriAdi = $_POST['txtAdi'];
$kategoriId = $_POST['kategori'];
$urunFiyati = $_POST['txtFiyati'];
$tabloadi = "urun";
$kolonlar = "u_adi,uk_id,u_fiyat";
$degerler = "$kategoriAdi,$kategoriId,$urunFiyati";
if(isset($urunId)){
	include('../lib/sql.php');
	veriGuncelle($tabloadi,$kolonlar,$degerler,"u_id",$urunId);
	header('location:../otomasyon/otomasyon.php?s=urun&guncelle=true');
}
else{
	header('location:../otomasyon/otomasyon.php?s=urun&guncelle=false');
}
?>
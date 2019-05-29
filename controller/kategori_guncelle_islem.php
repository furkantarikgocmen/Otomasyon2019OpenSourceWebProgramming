<?php

$urunKategoriId = $_GET['uk_id'];
$kategoriAdi = $_POST['txtAdi'];
$tabloadi = "urun_kategori";
if(isset($urunKategoriId)){
	include('../lib/sql.php');
	veriGuncelle($tabloadi,"uk_adi",$kategoriAdi,"uk_id",$urunKategoriId);
	header('location:../otomasyon/otomasyon.php?s=kategori&guncelle=true');
}
else{
	header('location:../otomasyon/otomasyon.php?s=kategori&guncelle=false');
}
?>
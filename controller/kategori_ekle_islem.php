<?php

$kategoriAdi = $_POST['txtAdi'];
$tabloadi = "urun_kategori";
$kolonlar = "uk_adi";
$degerler = "$kategoriAdi";
if(isset($kategoriAdi)){
	include('../lib/sql.php');
	veriEkle($tabloadi,$kolonlar,$degerler);
	header('location:../otomasyon/otomasyon.php?s=kategori&ekle=true');
}
else{
	header('location:../otomasyon/otomasyon.php?s=kategori&ekle=false');
}

?>
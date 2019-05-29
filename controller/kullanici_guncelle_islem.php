<?php

$kullaniciId = $_GET['k_id'];
$kullaniciAdi = $_POST['txtAdi'];
$kullaniciSifre = $_POST['txtSifre'];
$tabloadi = "kullanici";
if(isset($kullaniciId) && isset($kullaniciAdi) && isset($kullaniciSifre)){
	include('../lib/sql.php');
	veriGuncelle($tabloadi,"k_adi,k_sifre","$kullaniciAdi,$kullaniciSifre","k_id",$kullaniciId);
	header('location:../otomasyon/otomasyon.php?s=kullanici&guncelle=true');
}
else{
	header('location:../otomasyon/otomasyon.php?s=kullanici&guncelle=false');
}
?>
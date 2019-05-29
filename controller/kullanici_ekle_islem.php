<?php

$kullaniciAdi = $_POST['txtAdi'];
$kullaniciSifre = $_POST['txtSifre'];
$tabloadi = "kullanici";
$kolonlar = "k_adi,k_sifre";
if(isset($kullaniciAdi) && isset($kullaniciSifre)){
	include('../lib/sql.php');
	veriEkle($tabloadi,$kolonlar,"$kullaniciAdi,$kullaniciSifre");
	header('location:../otomasyon/otomasyon.php?s=kullanici&ekle=true');
}
else{
	header('location:../otomasyon/otomasyon.php?s=kullanici&ekle=false');
}

?>
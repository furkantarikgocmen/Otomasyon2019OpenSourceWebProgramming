<?php

$adi = $_POST['m_adi'];
$telefon = $_POST['m_telefon'];
$mail = $_POST['m_mail'];
$firmaadi = $_POST['m_firmaadi'];
$adres = $_POST['m_adres'];
$tarih = date("y-m-d");
$musteriId = $_GET['m_id'];

if(isset($musteriId)){
	include('../lib/sql.php');
	veriGuncelle("musteri","m_adi, m_tel, m_adres, m_mail, m_firmaadi, m_tarih","$adi,$telefon,$adres,$mail,$firmaadi,$tarih","m_id","$musteriId");	header('location:../otomasyon/otomasyon.php?s=musteri&guncelle=true');
}
else{
	header('location:../otomasyon/otomasyon.php?s=musteri&guncelle=false');
}
?>
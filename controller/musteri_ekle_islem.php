<?php
$adi = $_POST['m_adi'];
$telefon = $_POST['m_telefon'];
$mail = $_POST['m_mail'];
$firmaadi = $_POST['m_firmaadi'];
$adres = $_POST['m_adres'];
$tarih = date("y-m-d");

if(isset($adi)&& isset($telefon)){
	include('../lib/sql.php');
	veriEkle("musteri","m_adi, m_tel, m_adres, m_mail, m_firmaadi, m_tarih","$adi,$telefon,$adres,$mail,$firmaadi,$tarih");
	header('location:../otomasyon/otomasyon.php?s=musteri&kayit=true');
}
else{
	header('location:../otomasyon/otomasyon.php?s=musteri&kayit=false');
}
?>
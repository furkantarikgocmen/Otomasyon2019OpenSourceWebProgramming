<?php
$musteriId = $_GET['m_id'];
$urunId = $_GET['u_id'];
$adet = $_POST['adet'];
$tarih = date("y-m-d");

if(isset($musteriId)&& isset($urunId)){
	include('../lib/sql.php');
	veriEkle("satis","m_id, u_id, s_adet, s_tarih","$musteriId,$urunId,$adet,$tarih");
	header('location:../otomasyon/otomasyon.php?s=satis&kayit=true');
}
else{
	header('location:../otomasyon/otomasyon.php?s=satis&kayit=false');
}
?>
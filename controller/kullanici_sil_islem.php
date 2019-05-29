<?php 
$kullaniciId = $_GET['id'];

if(isset($kullaniciId))
{
	include("../lib/sql.php");
	veriSil("kullanici","k_id",$kullaniciId);
	header("location:../otomasyon/otomasyon.php?s=kullanici&sil=true");
}
else
	header("location:../otomasyon/otomasyon.php?s=kullanici&hata=1");
?>
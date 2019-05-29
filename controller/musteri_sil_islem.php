<?php 
$musteriId = $_GET['id'];

if(isset($musteriId))
{
	include("../lib/sql.php");
	veriSil("musteri","m_id",$musteriId);
	header("location:../otomasyon/otomasyon.php?s=musteri&sil=true");
}
else
	header("location:../otomasyon/otomasyon.php?s=musteri&sil=false");
?>
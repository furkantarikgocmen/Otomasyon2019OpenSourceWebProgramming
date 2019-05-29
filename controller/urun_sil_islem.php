<?php 
$urunId = $_GET['id'];

if(isset($urunId))
{
	include("../lib/sql.php");
	veriSil("urun","u_id",$urunId);
	header("location:../otomasyon/otomasyon.php?s=urun&sil=true");
}
else
	header("location:../otomasyon/otomasyon.php?s=urun&sil=false");
?>
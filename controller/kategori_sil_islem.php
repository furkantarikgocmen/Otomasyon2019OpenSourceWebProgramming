<?php 
$kategoriId = $_GET['id'];

if(isset($kategoriId))
{
	include("../lib/sql.php");
	veriSil("urun_kategori","uk_id",$kategoriId);
	header("location:../otomasyon/otomasyon.php?s=kategori&sil=true");
}
else
	header("location:../otomasyon/otomasyon.php?s=kategori&hata=1");
?>
<?php
session_start();
include("../lib/sql.php");
$userName = $_POST['userName'];
$userPassword = $_POST['userPassword'];

$status = loginAuthentication($userName,$userPassword);

if($status > 0)
{
	$_SESSION['login']="true";
	header('location:../otomasyon/otomasyon.php');
}
else
{
	header('location:../index.php?hata=1');
}
?>
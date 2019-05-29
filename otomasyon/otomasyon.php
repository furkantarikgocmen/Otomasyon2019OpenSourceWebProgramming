<?php
session_start();

if($_SESSION['login']=="true")
{
	if (isset($_GET['s']))
    {
        $sayfa = $_GET['s'];
    }
    else
    {
        $sayfa = "anasayfa";
    }
include('../lib/sql.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Otomasyon 2019</title>
	<link rel="stylesheet" href="../style/otomasyon.css" media="screen" type="text/css">
</head>

<body>
<div id="top">
		<div id="top-sol"><a href="otomasyon.php?s=anasayfa"><img src="../images/ftg.png"></a></div>
		<div id="top-sag"><a href="../controller/logout.php"><img src="../images/logout.png" width="95" height="95" alt=""/></a></div>
	</div>
	
	<div id="govde">
		<div id="govde-sol">
			<?php include('menu.php')?>
		</div>
		<div id="govde-sag">
			<?php include($sayfa . '.php')?>
		</div>
	</div>
	
	<div id="footer">
		<h2>Furkan Tarık Göçmen 174256006</h3>
	</div>
</body>
</html>
<?php
}
else
{
	header('location:../index.php?hata=2');
}
?>
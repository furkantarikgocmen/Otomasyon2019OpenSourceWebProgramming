<style>
	#tablo th{
		background-color: #941475;
	}
	.form button{
		background-color: #941475;
	}
</style>
<?php 
	$urunKategoriId = $_GET['uk_id'];
	$connection = mysqli_connect('localhost', 'root', '', 'akwp_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = "select * from urun_kategori where uk_id='".$urunKategoriId."' ";
	$query = mysqli_query($connection,$sql);
	$i=0;
	while($satir = mysqli_fetch_assoc($query))
	{
?>
<link rel="stylesheet" href="../style/otomasyon.css" media="screen" type="text/css">
<form id="form1" name="form1" method="post" action="../controller/kategori_guncelle_islem.php?uk_id=<?php echo $urunKategoriId?>" class="form">
  <table id="tablo">
    <tbody>
      <tr>
        <th colspan="2" style="text-align: center">Kategori Bilgileri</th>
      </tr>
      <tr>
        <th style="text-align: right">Kategori Adı</th>
        <td><input type="text" name="txtAdi" id="textfield2" value="<?php echo $satir['uk_adi'] ?>"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Güneclle</button></td>
      </tr>
    </tbody>
  </table>
</form>
<?php }?>
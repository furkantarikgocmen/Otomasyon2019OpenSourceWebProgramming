<style>
	#tablo th{
		background-color: blue;
	}
	.form button{
		background-color: blue;
	}
</style>
<?php 
	$urunId = $_GET['u_id'];
	$connection = mysqli_connect('localhost', 'root', '', 'akwp_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = "select * from urun where u_id='".$urunId."' ";
	$query = mysqli_query($connection,$sql);
	$i=0;
	while($satir = mysqli_fetch_assoc($query))
	{
?>
<link rel="stylesheet" href="../style/otomasyon.css" media="screen" type="text/css">
<form id="form1" name="form1" method="post" action="../controller/urun_guncelle_islem.php?u_id=<?php echo $urunId?>" class="form">
  <table id="tablo">
    <tbody>
      <tr>
        <th colspan="2" style="text-align: center">Müşteri Bilgileri</th>
      </tr>
      <tr>
        <th style="text-align: right">Ürün Kategorisi</th>
        <td>
            <select class="select" name="kategori" style="width: 100%">
                <?php
                $connect = mysqli_connect("localhost","root","","akwp_2019");
                mysqli_query($connect,"SET NAMES 'utf8'");
                $sql = "select * from urun_kategori order by uk_adi asc";
                $query = mysqli_query($connect,$sql);
                while ($kolon = mysqli_fetch_assoc($query))
                {
                    ?>
                    <option value="<?php echo $kolon['uk_id']?>" <?php if($kolon['uk_id'] == $satir['uk_id'])echo "selected"?>><?php echo $kolon['uk_adi']?></option>
                <?php } ?>
            </select>
		  </td>
      </tr>
      <tr>
        <th style="text-align: right">Ürün Adı</th>
        <td><input type="text" name="txtAdi" id="textfield2" value="<?php echo $satir['u_adi'] ?>"></td>
      </tr>
      <tr>
        <th style="text-align: right">Ürün Fiyatı</th>
        <td><input type="text" name="txtFiyati" id="textfield3" value="<?php echo $satir['u_fiyat'] ?>"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Güneclle</button></td>
      </tr>
    </tbody>
  </table>
</form>
<?php }?>
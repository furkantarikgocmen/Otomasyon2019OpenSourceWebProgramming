<style>
	#tablo th{
		background-color: #5cb85c;
	}
	.form button{
		background-color: #5cb85c;
	}
</style>
<?php 
	$musteriId = $_GET['m_id'];
	$connection = mysqli_connect('localhost', 'root', '', 'akwp_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = mysqli_query($connection,"select * from musteri where m_id='".$musteriId."' ");
	$i=0;
	while($satir = mysqli_fetch_assoc($sql))
	{
?>
<link rel="stylesheet" href="../style/otomasyon.css" media="screen" type="text/css">
<form id="form1" name="form1" method="post" action="../controller/musteri_guncelle_islem.php?m_id=<?php echo $musteriId?>" class="form">
  <table id="tablo">
    <tbody>
      <tr>
        <th colspan="2" style="text-align: center">Müşteri Bilgileri</th>
      </tr>
      <tr>
        <th style="text-align: right">Adı:</th>
        <td><input type="text" name="m_adi" id="textfield" value="<?php echo $satir['m_adi'] ?>"></td>
      </tr>
      <tr>
        <th style="text-align: right">Telefon:</th>
        <td><input type="text" name="m_telefon" id="textfield2" value="<?php echo $satir['m_tel'] ?>"></td>
      </tr>
      <tr>
        <th style="text-align: right">Mail Adresi</th>
        <td><input type="text" name="m_mail" id="textfield3" value="<?php echo $satir['m_mail'] ?>"></td>
      </tr>
      <tr>
        <th style="text-align: right">Firma Adı:</th>
        <td><input type="text" name="m_firmaadi" id="textfield4" value="<?php echo $satir['m_firmaadi'] ?>"></td>
      </tr>
      <tr>
        <th style="text-align: right">Adres:</th>
        <td><input type="text" name="m_adres" id="textfield5" value="<?php echo $satir['m_adres'] ?>"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Güncelle</button></td>
      </tr>
    </tbody>
  </table>
</form>
<?php } ?>
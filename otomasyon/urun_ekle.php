<style>
	#tablo th{
		background-color: blue;
	}
	.form button{
		background-color: blue;
	}
</style>
<form id="form1" name="form1" method="post" action="../controller/urun_ekle_islem.php" class="form">
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
                while ($satir = mysqli_fetch_assoc($query))
                {
                    ?>
                    <option value="<?php echo $satir['uk_id']?>"><?php echo $satir['uk_adi']?></option>
                <?php } ?>
            </select>
		  </td>
      </tr>
      <tr>
        <th style="text-align: right">Ürün Adı</th>
        <td><input type="text" name="txtAdi" id="textfield2"></td>
      </tr>
      <tr>
        <th style="text-align: right">Ürün Fiyatı</th>
        <td><input type="text" name="txtFiyati" id="textfield3"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Kaydet</button></td>
      </tr>
    </tbody>
  </table>
</form>
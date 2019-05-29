<style>
	#tablo th{
		background-color: #941475;
	}
	.form button{
		background-color: #941475;
	}
</style>
<form id="form1" name="form1" method="post">
<table border="1" id="tablo">
          <tbody>
            <tr>
              <th>#</th>
              <th>Kategori Adı</th>
              <th>İşlem</th>
            </tr>
			  <?php 
	$connection = mysqli_connect('localhost', 'root', '', 'akwp_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = mysqli_query($connection,"select * from urun_kategori order by uk_id desc");
	$i=0;
	$j = 0;
	while($satir = mysqli_fetch_assoc($sql))
	{
		$i++;
		$j++;
?>
            <tr style="background-color: #<?php if($j == 1)
				echo 'f2dede';
			if($j == 2)
				echo 'fcf8e3';
			if($j == 3)
				echo 'd9edf7';
			if($j == 4){
				echo 'dff0d8';
				$j = 0; 
			}
				?>">
              <td><?php echo($i)?></td>
              <td><?php echo $satir['uk_adi']?></td>
			  <td>
				  <a href="../controller/kategori_sil_islem?id=<?php echo $satir['uk_id']?>" class="buton buton-kirmizi">Sil</a>
				  <a href="otomasyon.php?s=kategori_guncelle&uk_id=<?php echo $satir['uk_id']?>" class="buton buton-mavi">Güncelle</a>
				</td>
            </tr>
			  <?php } ?>
          </tbody>
			<?php  mysqli_close($connection); ?>
        </table>
</form>
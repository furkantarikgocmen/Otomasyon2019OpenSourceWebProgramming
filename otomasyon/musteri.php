<style>
	#tablo th{
		background-color: #5cb85c;
	}
	.form button{
		background-color: #5cb85c;
	}
</style>
<form id="form1" name="form1" method="post">
		<table border="1" id="tablo">
          <tbody>
            <tr>
              <th width="93">#</th>
              <th width="245">Müşteri Adı</th>
              <th width="186">Firma Adı</th>
              <th width="218">Telefonu</th>
              <th width="253">Adresi</th>
              <th width="151">Mail</th>
              <th width="158">Tarih</th>
			  <th width="189">İşlem</th>
            </tr>
			  <?php 
	$connection = mysqli_connect('localhost', 'root', '', 'akwp_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = mysqli_query($connection,"select * from musteri order by m_id desc");
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
              <td><?php echo $satir['m_adi']?></td>
              <td><?php echo $satir['m_firmaadi']?></td>
              <td><?php echo $satir['m_tel']?></td>
              <td><?php echo $satir['m_adres']?></td>
              <td><?php echo $satir['m_mail']?></td>
              <td><?php echo $satir['m_tarih']?></td>	
			  <td>
				  <a href="../controller/musteri_sil_islem?id=<?php echo $satir['m_id']?>" class="buton buton-kirmizi">Sil</a>
				  <a href="otomasyon.php?s=musteri_guncelle&m_id=<?php echo $satir['m_id']?>" class="buton buton-mavi">Güncelle</a>
				</td>
            </tr>
			  <?php } ?>
          </tbody>
			<?php  mysqli_close($connection); ?>
        </table>
</form>
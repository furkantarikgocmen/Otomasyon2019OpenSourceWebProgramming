<style>
	#tablo th{
		background-color: #fdaf26;
	}
	.form button{
		background-color: #fdaf26;
	}
</style>


<form id="form1" name="form1" method="post">
<table border="1" id="tablo">
      <tr>
        <th>#</th>
        <th><strong>Firma Adı</strong></th>
        <th><strong>Yetkili</strong></th>
        <th><strong>Tel</strong></th>
        <th><strong>Mail</strong></th>
        <th><strong>Adres</strong></th>
        <th><strong>İŞLEMLER</strong></th>
      </tr>
      <?
	  $connection = mysqli_connect('localhost', 'root', '', 'akwp_2019');
	mysqli_query($connection,"SET NAMES 'utf8'");
	$sql = mysqli_query($connection,"select * from musteri order by m_id desc");
	$i=0;
	$j=0;
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
        <td align="center"><? echo $i;?></td>
        <td><? echo $satir['m_firmaadi'];?></td>
        <td><? echo $satir['m_adi'];?></td>
        <td><? echo $satir['m_tel'];?></td>
        <td><? echo $satir['m_mail'];?></td>
        <td><? echo $satir['m_adres'];?></td>
        <td>
			<a href="otomasyon.php?s=satis_urun&m_id=<? echo $satir['m_id'];?>" class="buton buton-yesil">Seç</a>
        </td>
      <?
	  }
	  ?>
    </table>
</form>
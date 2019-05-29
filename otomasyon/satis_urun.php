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
    <th>Ürün No</th>
    <th>Kategori Adı</th>
    <th>Ürün Adı</th>
    <th>Fiyatı</th>
    <th>#</th>
  </tr>
  <?	
	  $connection = mysqli_connect('localhost', 'root', '', 'akwp_2019');
		mysqli_query($connection,"SET NAMES 'utf8'");
		$sql = mysqli_query($connection,"select * from urun left join urun_kategori on urun.uk_id=urun_kategori.uk_id order by u_id desc");
		$i=0;
		$j=0;
		while($satir = mysqli_fetch_assoc($sql))
	  { $i++;
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
    <td><? echo $i;?></td>
    <td><? echo $satir['uk_adi'];?></td>
    <td><? echo $satir['u_adi'];?></td>
    <td><? echo $satir['u_fiyat'];?></td>
    <td style="text-align: center">
    <a href="otomasyon.php?s=satis_adet&m_id=<? echo $_GET['m_id'];?>&u_id=<? echo $satir['u_id']; ?>" class="buton buton-yesil">Seç</a>
    </td>
  <? }?>
</table>
</form>


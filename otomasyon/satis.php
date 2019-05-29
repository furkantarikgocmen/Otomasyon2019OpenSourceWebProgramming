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
        <th><strong>S.No</strong></th>
        <th><strong>Müşteri</strong></th>
        <th><strong>Kategori</strong></th>
        <th><strong>Tarih</strong></th>
		<th><strong>Ürün</strong></th>
        <th><strong>Adet</strong></th>
        <th><strong>Tutar</strong></th>
      </tr>
      <?
		$connection = mysqli_connect('localhost', 'root', '', 'akwp_2019');
		mysqli_query($connection,"SET NAMES 'utf8'");
		$sql = mysqli_query($connection,"SELECT ".
			" * ".
			" FROM `satis` left join musteri on satis.m_id=musteri.m_id ".
			" left join urun on satis.u_id=urun.u_id ".
			" left join urun_kategori on urun_kategori.uk_id=urun.uk_id order by s_id desc ");
     	$i=0;
		$j=0;
		while($veri = mysqli_fetch_assoc($sql))
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
        <td><? echo $veri['s_id'];?></td>
        <td><? echo $veri['m_firmaadi'];?></td>
        <td><? echo $veri['uk_adi'];?></td>
		<td><? echo $veri['s_tarih'];?></td>
        <td><? echo $veri['u_adi'];?></td>
        <td><? echo $veri['s_adet'];?></td>
        <td style="text-align: center"><? echo $veri['s_adet']*$veri['u_fiyat'];?> TL</td>
      </tr>
      <? }?>
      
    </table>
</form>
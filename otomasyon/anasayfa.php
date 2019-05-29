<div id="dashboard-anaBlok">
	<div id="dashboardBloksolust">
	  <div class="dashboardBlokUstKisim" style="background-color: blue">
			<div class="dashboardBlokUstKisimResim"><img src="../images/urun.png" width="140px" height="120px"/></div>
		  	<div class="dashboardBlokUstKisimSag">
		  		<div class="dashboardBlokUstKisimSagSayi"><?php echo howMany("urun")?></div>
				<div class="dashboardBlokUstKisimSagyazi">Stoktaki Ürün</div>
		  	</div>
	  	</div>
	  <a href="otomasyon.php?s=urun"><div class="dashboardBlokAltKisim" style="color: blue">
		  <div class="dashboardBlokAltKisimSolisaret"><img src="../images/arrowMavi.png" width="40" height="40" alt=""/></div>
		<div class="dashboardBlokAltKisimSolyazi">Detayları Gör</div>
		  </div></a>
	</div>
	<div id="dashboardBloksagust">
		<div class="dashboardBlokUstKisim" style="background-color: #5cb85c">
			<div class="dashboardBlokUstKisimResim"><img src="../images/musteri.png" width="140px" height="120px"/></div>
		  	<div class="dashboardBlokUstKisimSag">
		  		<div class="dashboardBlokUstKisimSagSayi"><?php echo howMany("musteri")?></div>
				<div class="dashboardBlokUstKisimSagyazi">Kayıtlı Müşteri</div>
		  	</div>
	  	</div>
	  <a href="otomasyon.php?s=musteri"><div class="dashboardBlokAltKisim" style="color: #5cb85c">
		  <div class="dashboardBlokAltKisimSolisaret"><img src="../images/arrowYeşil.png" width="40" height="40" alt=""/></div>
		<div class="dashboardBlokAltKisimSolyazi">Detayları Gör</div>
		  </div></a>
	</div>
	<div id="dashboardBloksolalt">
		<div class="dashboardBlokUstKisim" style="background-color: #f0ad4e">
			<div class="dashboardBlokUstKisimResim"><img src="../images/sepet.png" width="140px" height="120px"/></div>
		  	<div class="dashboardBlokUstKisimSag">
		  		<div class="dashboardBlokUstKisimSagSayi"><?php echo howMany("satis")?></div>
				<div class="dashboardBlokUstKisimSagyazi">Satılmış Ürün</div>
		  	</div>
	  	</div>
	  <a href="otomasyon.php?s=satis"><div class="dashboardBlokAltKisim" style="color: #f0ad4e">
		  <div class="dashboardBlokAltKisimSolisaret"><img src="../images/arrowSarı.png" width="40" height="40" alt=""/></div>
		<div class="dashboardBlokAltKisimSolyazi">Detayları Gör</div>
		  </div></a>
	</div>
	<div id="dashboardBloksagalt">
		<div class="dashboardBlokUstKisim" style="background-color: #941475">
			<div class="dashboardBlokUstKisimResim"><img src="../images/kategori.png" width="140px" height="120px"/></div>
		  	<div class="dashboardBlokUstKisimSag">
		  		<div class="dashboardBlokUstKisimSagSayi"><?php echo howMany("urun_kategori")?></div>
				<div class="dashboardBlokUstKisimSagyazi">Farklı Kategori</div>
		  	</div>
	  	</div>
	  <a href="otomasyon.php?s=kategori"><div class="dashboardBlokAltKisim" style="color: #941475">
		  <div class="dashboardBlokAltKisimSolisaret"><img src="../images/arrowKırmızı.png" width="40" height="40" alt=""/></div>
		<div class="dashboardBlokAltKisimSolyazi">Detayları Gör</div>
		  </div></a>
	</div>
</div>
<style>
	#tablo th{
		background-color: #941475;
	}
	.form button{
		background-color: #941475;
	}
</style>
<form name="form1" method="post" action="../controller/kategori_ekle_islem.php" class="form">
  <table border="1" id="tablo">
    <tbody>
      <tr>
        <th>Kategori Adı:</th>
        <th><input type="text" name="txtAdi" id="textfield"></th>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Kaydet</button></td>
      </tr>
    </tbody>
  </table>
</form>

<style>
	#tablo th{
		background-color: #5cb85c;
	}
	.form button{
		background-color: #5cb85c;
	}
</style>
<form id="form1" name="form1" method="post" action="../controller/musteri_ekle_islem.php" class="form">
  <table id="tablo">
    <tbody>
      <tr>
        <th colspan="2" style="text-align: center">Müşteri Bilgileri</th>
      </tr>
      <tr>
        <th style="text-align: right">Adı:</th>
        <td><input type="text" name="m_adi" id="textfield"></td>
      </tr>
      <tr>
        <th style="text-align: right">Telefon:</th>
        <td><input type="text" name="m_telefon" id="textfield2"></td>
      </tr>
      <tr>
        <th style="text-align: right">Mail Adresi</th>
        <td><input type="text" name="m_mail" id="textfield3"></td>
      </tr>
      <tr>
        <th style="text-align: right">Firma Adı:</th>
        <td><input type="text" name="m_firmaadi" id="textfield4"></td>
      </tr>
      <tr>
        <th style="text-align: right">Adres:</th>
        <td><input type="text" name="m_adres" id="textfield5"></td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Kaydet</button></td>
      </tr>
    </tbody>
  </table>
</form>
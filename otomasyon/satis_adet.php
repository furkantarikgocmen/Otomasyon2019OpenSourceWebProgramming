<style>
	#tablo th{
		background-color: #fdaf26;
	}
	.form button{
		background-color: #fdaf26;
	}
</style>
<form name="form1" method="post" action="../controller/satis_islem.php?m_id=<? echo $_GET['m_id'];?>&u_id=<? echo $_GET['u_id'];?>" class="form">
  <table border="1" id="tablo">
    <tbody>
      <tr>
        <th>Ürün Adeti:</th>
        <th><input type="number" name="adet"></th>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"><button>Satış Yap</button></td>
      </tr>
    </tbody>
  </table>
</form>
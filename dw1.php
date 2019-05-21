
<style>
	body{
		background-color: #3da4a3;
		width: 100%;
		margin: 0;
		padding: 0;
	}
</style>

<html>

<body>
	<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
</script>

<?php
$nama = $NIM = "";
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) {
$nama = $_POST["nama"];
$NIM = $_POST["NIM"];
}
?>
<center>
<table style="margin-top: 300px;">
	<tr>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<td>Nama:<input type="text" name="nama" required="required"><br></td>
<td>NIM: <input type="text" name="NIM" required="required" maxlength="10" onkeypress="return hanyaAngka(event)"/><br></td>
<td><input type="submit"></td>
</tr>

</form>
</table>
</center>
<?php

echo "<center>";
if(empty($nama) && empty($NIM) ){
echo "Nama dan Nim tidak boleh kosong!!";
}
else if (!is_numeric($_POST["NIM"])){
	echo "NIM HARUS ANGKA";
}
else if(strlen($_POST["NIM"])!=10){
	echo "NIM HARUS berjumlah 10 angka";
}
else if(!empty($nama) && !empty($NIM) ){
echo "<h2>Selamat Datang</h2>";
echo "Nama :". $nama;
echo "<br>";
echo "NIM  :". $NIM;
}
echo"</center>";
?>
</body></html>
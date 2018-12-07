<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="">
	<input type="date" name="tgl1" value="" />
	<input type="date" name="tgl2" value="" />
	<input type="submit" name="submit" />
	</form>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		echo "tanggal 1: ".$_POST['tgl1']."<br>";
		echo "tanggal 2: ".$_POST['tgl2']."<br>";
		//mencari selisih
		$tgl1=date_create($_POST['tgl1']);
		$tgl2=date_create($_POST['tgl2']);
		$selisih=date_diff($tgl1,$tgl2)->days;
		echo "selisih hari = ".$selisih;
	}
?>








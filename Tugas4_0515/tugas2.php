<form action="?action" method="post">
	NIM : <input type="text" name="nim">
	<br>Jumlah Kehadiran : <input type="number" name="kehadiran" min="0" max="14">
	<br>UTS : <input type="number" name="uts" min="0" max="100">
	<br>UAS : <input type="number" name="uas" min="0" max="100">
	<br>Tugas : <input type="number" name="tugas" min="0" max="100">
	<br>Kuis : <input type="number" name="kuis" min="0" max="100">
	<br><input type="submit" name="hitung" value="HitungNilai">
</form>

<?php

	$nim = $_POST['nim'];
	$presensi = $_POST['kehadiran'];
	$uts = $_POST['uts'];
	$uas = $_POST['uas'];
	$tugas = $_POST['tugas'];
	$kuis = $_POST['kuis'];

	$totalNilai = ($presensi*10/100)+($uts*30/100)+($uas*40/100)+(($tugas+$kuis)*20/100);

if (isset($_POST['hitung'])) {
	if ($totalNilai>80) {
		echo "<br>NIM ", $nim, " Nilai Akhir Anda", $totalNilai, " Dengan Grade A";
	}
	elseif ($totalNilai>=60 and $totalNilai<=80) {
		echo "NIM ", $nim, " Nilai Akhir Anda", $totalNilai, " Dengan Grade B";
	}
	elseif ($totalNilai>=40 and $totalNilai>=60) {
		echo "NIM ", $nim, " Nilai Akhir Anda", $totalNilai, " Dengan Grade C";
	}
	elseif ($totalNilai>=20 and $totalNilai>=40) {
		echo "NIM ", $nim, " Nilai Akhir Anda ", $totalNilai, " Dengan Grade D";
	}
	elseif ($totalNilai<20) {
		echo "NIM ", $nim, " Nilai Akhir Anda", $totalNilai, " Dengan Grade E";
	}
}
	
?>
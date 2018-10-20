<form>
	<fieldset>
		<legend>Ticket Online</legend>
		
		<?php
			switch ($_POST['tujuan']) {
				case 'jksm':
					$temp = "Jakarta - Semarang";
					break;
				case 'jgsb':
					$temp = "Jogja - Surabaya";
					break;
				case 'mlbdn':
					$temp = "Malang - Bandung";
					break;

			}

			$tiket = $_POST['namaPenumpang'];
			$tujuan = $temp;
			$depart = $_POST['keberangkatan'];

			foreach ($tiket as $x => $value) {
				echo "Tujuan : "; echo $tujuan, "<br>";
				echo "Jam :";	echo $depart ,"<br>";
				echo "Penumpang :"; echo $value, "<br>";
				echo "================================================================<br>";
			}
		?>

	</fieldset>
</form>
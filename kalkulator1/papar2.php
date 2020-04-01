<br><br>
<center>
	<table border="2" width="70%">
		<tr>
			<th>Bil.</th>
			<th>Nombor Pertama</th>
			<th>Nombor Kedua</th>
			<th>Operasi Pilihan</th>
			<th>Hasil</th>
			
		</tr>
		
<?php
include "config.php";
		$bil=0;
		$query="SELECT * FROM sejarah where by='$username'";
		$result=mysqli_query($conn,$query);
		
		if (mysqli_num_rows($result)>0){
			while ($row=mysqli_fetch_assoc($result)){
				$fn=$row['fn'];
				$sn=$row['sn'];
				$ch=$row['ch'];
				$res=$row['res'];

				$bil++;

			echo "<tr><th>$bil</th>";
			echo "<th>$fn</th>";
			echo "<th>$sn</th>";
			echo "<th>$ch</th>";
			echo "<th>$res</th>";

						
			}
		}else{
			echo "<p>-- JADUAL KOSONG -- </p><br><br>";
		}
?>

</table>
</center>
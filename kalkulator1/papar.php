
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
		$query="SELECT * FROM hasil where oleh='$username'";
		$result=mysqli_query($conn,$query);
		
		if (mysqli_num_rows($result)>0){
			while ($row=mysqli_fetch_assoc($result)){
				$no1=$row['no1'];
				$no2=$row['no2'];
				$operasi=$row['operasi'];
				$hasil=$row['hasil'];
				$masa=$row['masa'];
				$id=$row['id'];
				$bil++;

			echo "<tr><th>$bil</th>";
			echo "<th>$no1</th>";
			echo "<th>$no2</th>";
			echo "<th>$operasi</th>";
			echo "<th>$hasil</th>";

			echo "<th><a href='padam.php?id=$id'><button>Padam</button></a></th></tr>";
			
			}
		}else{
			echo "<p>-- JADUAL KOSONG -- </p><br><br>";
		}
?>

</table>
</center>
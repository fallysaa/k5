<?php
if(isset($_POST['kira'])){
	$no1=$_POST['no1'];
	$no2=$_POST['no2'];
	$operasi=$_POST['operasi'];
	
	if($operasi=="error"){
		echo "<script language='javascript'>alert('Operasi Salah')</script>";
	}
	else{
		if($operasi=="Tambah"){
		$hasil=$no1+$no2;
		}elseif($operasi=="Darab"){
			$hasil=$no1*$no2;
         }elseif($operasi=="Bahagi"){
			$hasil=$no1/$no2;
			}elseif($operasi=="Modulus"){
			$hasil=$no1%$no2;
			}
			$query="INSERT INTO hasil SET oleh='$username',no1='$no1',no2='$no2',operasi='$operasi',hasil='$hasil',masa='$masa'";
			$result=mysqli_query($conn,$query);
			
			echo "<script language='javascript'>alert('Hasil $no1 $operasi $no2 ialah $hasil')</script>";
			header("Refresh:1; url=login.php",true,303);
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Calculator- switch</title>
		<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #00FBA0;
}
</style>

	</head>
	<body background="bg.jpg">
		

<ul>
  <li><a class="active" href="papar.php">Home</a></li>
  <li><a href="kira.php">Calculator</a></li>
  <li><a href="logout.php">Logout</a></li>

</ul>

<br><br>
		
		<form method="post">
		<table border="1" align="center" style="color: white">
			
			<br><br>
			<tr>
				<th>Masukkan Nombor Pertama</th>
				<th><input type="number" name="no1" value="<?php  echo @$no1;?>"/></th>
			</tr> 
			<tr>
				<th>Masukkan Nombor Kedua</th>
				<th><input type="number" name="no2" value="<?php  echo @$no2;?>"/></th>
			</tr>
			<tr>
				<th>Pilih Operasi</th>
				<th>
				<select name="operasi">
					<option>Operasi</option>
					<option>Tambah</option>
					<option>Tolak</option>
					<option>Darab</option>
					<option>Bahagi</option>
					<option>Bahagi</option>
				</select>
				</th>
				<tr>
				<th>Jawapannya ialah</th>
				<th><input type="number" readonly="readonly" disabled="disabled" value="<?php  echo @$hasil;?>"/></th>
			</tr> 
			</tr>
			<tr>
				
				<th colspan="2">
				<input type="submit" 
				name="save" value="Show Result"/>
				</th>
			</tr>
		</table>
		</form>
	</body>
</html>
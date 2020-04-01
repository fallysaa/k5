<?php
include('config.php');

$username=$_POST['username'];
$password=$_POST['password'];

echo"<br>";

$query="INSERT INTO admin(username,password) VALUES('$username','$password')";
if(mysqli_query($conn,$query)){
echo "<script>alert ('Login Kembali')

window.location='index.php'</script>";
}
else
	{echo "Pendaftan Tidak Barjaya.Sila Cuba Lagi. <a href='login.php'>Cuba Lagi</a>";}
?>
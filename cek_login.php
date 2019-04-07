<?php
error_reporting(0);

include('libs/koneksi.php');
$sql = "select username,password from  user where username='".$_POST['username']."' and password=MD5('".$_POST['password']."')";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if ($result->num_rows == 1) {
	session_start();
	//include ('timeout.php');
	$_SESSION[username]=$row[username];
	//$_SESSION[userlevel]=$row[level];
	//$_SESSION[passwd]=$row[password];
	header("location:home.php?ref=home");
} else {
    echo "<center>LOGIN GAGAL! <br> 
        Username atau Password Anda tidak benar.<br>";
	echo "<a href=index.php><b>Try Again</b></a></center>";	
}
$conn->close();

?>
     <?php
$username=$_POST['username'];
$password=$_POST['password'];
if(($username=="nisa"||$username=="satsat")&&$password=="2104"){
session_start();
$_SESSION["user"]=$username;
	echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="../home.php";</script>';
}else{
     	echo '<script language="javascript">alert("Login anda gagal!");document.location="../index.html";</script>'; 
}
?>

<?php
session_start();
if($_POST['password']!=2104){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../index.html";</script>';
}
?>

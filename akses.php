<?php
session_start();
if(empty($_SESSION['user'])){
	echo '<script language="javascript">alert("Anda harus Login!"); document.location="../index.html";</script>';
}
?>

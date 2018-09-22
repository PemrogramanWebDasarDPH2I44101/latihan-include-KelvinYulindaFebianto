<?php 
	include("header.html"); 
	session_start();
	$akses = $_SESSION["akses"];
	if ($akses == "admin") 
		header("Location: form.html");
	else
		echo "Halaman Boleh Diakses";
 ?>
 <a href="form.html">Halaman FORMULIR</a>
 <a href="hal1.php">Halaman 1</a>
 <a href="hal2.php">Halaman 2</a>
 <a href="hal3.php">Halaman 3</a>

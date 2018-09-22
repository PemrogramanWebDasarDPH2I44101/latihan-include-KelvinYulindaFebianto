<?php 
	include("header.html"); 
	session_start();
	print_r($_SESSION);
	$akses = $_SESSION["akses"];
	if ($akses == "admin") 
		echo "Halaman Boleh Diakses";
	else
		header("Location: form.html")
 ?>
 <a href="hal1.php">Halaman 1</a>
 <a href="hal2.php">Halaman 2</a>
 <a href="hal3.php">Halaman 3</a>
<?php
	include("header.html");
	session_start();
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['akses'] = $_POST['akses'];
	$_SESSION['iduser'] = 1234;
	print_r($_SESSION);
 ?>
 <a href="form.html">Halaman Formulir</a>
 <a href="hal2.php">Halaman 2</a>
 <a href="hal3.php">Halaman 3</a>
 <?php
	include("footer.html");
 ?>

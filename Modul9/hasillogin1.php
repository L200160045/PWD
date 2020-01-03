<?php
session_start();
echo "Anda Berhasil Login Sebagai ".$_SESSION['username'].
"Dan Anda Terdaftar Sebagai ".$_SESSION['status'];
?>
<html>
<title>Dashboard</title>
<body>
<h1><marquee>Selamat Datang</marquee><h1>
<br>
<br>
<br>
<br>
Silakan Logout dengan klik link <a href='logout.php'> Disini </a>
</body>
</html>
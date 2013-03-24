<html>
<head>
<title>Admin MOS Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Hallo, Administrator<br>
		<a href="../index.php">Lihat website</a> | <a href="">Help</a> | <a href="logout.php">Keluar</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<?php include "kiri.php";?>
	</ul>
	</div>
	<div id="rightContent">
		<?php include "kanan.php"?>
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2013 MOS css template | <a href="../index.php">SMP Muhammadiyah 2 Mlati</a> | design <a href="http://arirusmanto.com" rel="nofollow" target="_blank">arirusmanto.com</a><br>
	redesign <a href="#">UIN TIF10-Riawan-Faradina</a> 
</div>
</div>
</body>
</html>
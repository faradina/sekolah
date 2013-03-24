<?php
session_start();
$con = mysql_connect("localhost","root","");
$con_db = mysql_select_db('db_new',$con);
if(!$con_db){
die('could not connecty:'. mysql_error());
mysql_close($con_db);
}
?>
<?php

include('../conn.php');

//tangkap data dari form login
$username = $_POST['username'];
$password = $_POST['password'];



//cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
	//kalau username dan password kosong
	header('location:login.php?error= 1');
	break;
} else if (empty($username)) {
	//kalau username saja yang kosong
	header('location:login.php?error= 2');
	break;
} else if (empty($password)) {
	//kalau password saja yang kosong
	header('location:login.php?error=3');
	break;
}
$perintahnya = "select * from tabel_admin where nama_admin='$username' and psswd='$password'";
$jalankanperintahnya= mysql_query($perintahnya); 
$ada_apa_enggak = mysql_num_rows($jalankanperintahnya);


if ($ada_apa_enggak == 1) {
$DATA=mysql_fetch_array($jalankanperintahnya);
	//kalau username dan password sudah terdaftar di database
$_SESSION['username'] = $_POST['username'];
$_SESSION['ID_ADMIN'] = $DATA['ID_admin'];
header("Location: index.php");

	//header('location:index.php');
} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login.php?error= 4');
}
?>




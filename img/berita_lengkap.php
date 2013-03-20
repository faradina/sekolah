<?php
include "conn.php";
if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Berita Lengkap</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<a href="index.php">Halaman Depan</a> | <a href="arsip_berita.php">Arsip Berita</a> | <a href="input_berita.php">Input Berita</a><br>
<br>
<h2>Berita Lengkap</h2>
<?php
$query = "SELECT A.id_berita, B.nm_kategori, A.judul, A.namafoto,A.lokasi, A.isi, A.pengirim, A.tanggal
FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori && A.id_berita='$id_berita'";

$sql = mysql_query ($query);
$hasil = mysql_fetch_array ($sql);
$id_berita = $hasil['id_berita'];
$kategori = stripslashes ($hasil['nm_kategori']);
$judul = stripslashes ($hasil['judul']);
$isi = nl2br(stripslashes ($hasil['isi']));
$pengirim = stripslashes ($hasil['pengirim']);
$tanggal = stripslashes ($hasil['tanggal']);	




 
echo "<font size=5 color=blue>$judul</font><br>";

$sql = mysql_query ($query);
while ($data = mysql_fetch_array($sql)) {
    echo"<table>";
        $loc = $data['lokasi'];


	
echo"<tr><td><img width=400 height=300 src=$loc /></td>";

    }echo"</tr></table>";
echo "<small>Berita dikirimkan oleh <b>$pengirim</b>
pada tanggal <b>$tanggal</b> dalam kategori<b>$kategori</b></small>";
 
//$q1 = "SELECT namafoto,lokasi from berita "; //memilih file dari database
   // $result = mysql_query($q1);
   
     


echo "<p>$isi</p>";
?>
</body>
</html>


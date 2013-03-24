<?php
include "conn.php";
$n=$_GET['bar'];
if ($n=='1'||$n==''||$n=='5')
{ ?>
		<div id="updates" class="boxed">
			<div class="title">
				<h2>Translate Our Web</h2>
			</div>
			<div class="content">
				<div id="google_translate_element"></div><script type="text/javascript">
				function googleTranslateElementInit() {
				  new google.translate.TranslateElement({pageLanguage: 'id', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
				}
				</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
			</div>
		</div>
		<div id="updates" class="boxed">
			<div class="title">
				<h2>Berita Terakhir</h2>
			</div>
			<div class="content">
				<ul>
				<?php
					$q = "SELECT id_berita,judul,tanggal FROM berita ORDER BY tanggal DESC";
					$sql = mysql_query($q);
					while ($hasil=mysql_fetch_array($sql)){
						$judul=$hasil['judul'];
						$id=$hasil['id_berita'];
						$tanggal=stripslashes ($hasil['tanggal']);
				?>
					<li>
						<h3><?php echo "$tanggal" ;?></h3>
						<p><a href="?bar=berita&id=<?php echo "$id" ;?>"><?php echo "$judul";?></a></p>
					</li>
				<?php
				}
				?>
				</ul>
				<div align="right"><a href="?bar=3">Lainnya >>></a></div>
			</div>
		</div>
<?php
}
elseif ($n=='2')
{
?>
		<div id="updates" class="boxed">
			<div class="title">
				<h2><a href="?bar=2&profil=visi">Visi Misi</a></h2>
			</div>
			<div class="title">
				<h2><a href="?bar=2&profil=fasilitas">Fasilitas</a></h2>
			</div>
			<div class="title">
				<h2><a href="?bar=2&profil=prestasi">Prestasi</a></h2>
			</div>
			<div class="title">
				<h2><a href="?bar=2&profil=ekskul">Ekstra Kurikuler</a></h2>
			</div>
			<div class="title">
				<h2><a href="?bar=2&profil=staf">Staf</a></h2>
			</div>
		</div>
<?php
}
elseif ($n=='3'||$n=='kategori'||$n=='berita')
{
?>
	<div id="updates" class="boxed">
<?php
	$q="SELECT id_kategori,nm_kategori FROM kategori ORDER BY id_kategori DESC";
	$sql=mysql_query($q);
	while ($hasil=mysql_fetch_array($sql)){
		$id=$hasil['id_kategori'];
		$kat=$hasil['nm_kategori'];
?>
			<div class="title">
				<h2><a href="?bar=kategori&idk=<?php echo "$id";?>"><?php echo "$kat" ;?></a></h2>
			</div>
	<?php
	}
	?>
	</div>
<?php
}
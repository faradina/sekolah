<?php
	$n=$_GET['bar'];
	if ($n==''||$n=='1')
	{
		?>
			<li class="active"><a href="index.php?bar=1" title="">Beranda</a></li>
			<li><a href="index.php?bar=2" title="">Profil</a></li>
			<li><a href="index.php?bar=3" title="">Info</a></li>
			<li><a href="index.php?bar=4" title="">Galeri</a></li>
			<li><a href="index.php?bar=5" title="">Kontak</a></li>
		<?php
	}
	elseif ($n=='2')
	{
		?>
			<li><a href="index.php?bar=1" title="">Beranda</a></li>
			<li class="active"><a href="index.php?bar=2" title="">Profil</a></li>
			<li><a href="index.php?bar=3" title="">Info</a></li>
			<li><a href="index.php?bar=4" title="">Galeri</a></li>
			<li><a href="index.php?bar=5" title="">Kontak</a></li>
		<?php
	}
	elseif ($n=='3'||$n=='kategori'||$n=='berita')
	{
		?>
			<li><a href="index.php?bar=1" title="">Beranda</a></li>
			<li><a href="index.php?bar=2" title="">Profil</a></li>
			<li class="active"><a href="index.php?bar=3" title="">Info</a></li>
			<li><a href="index.php?bar=4" title="">Galeri</a></li>
			<li><a href="index.php?bar=5" title="">Kontak</a></li>
		<?php
	}
	elseif ($n=='4')
	{
		?>
			<li><a href="index.php?bar=1" title="">Beranda</a></li>
			<li><a href="index.php?bar=2" title="">Profil</a></li>
			<li><a href="index.php?bar=3" title="">Info</a></li>
			<li class="active"><a href="index.php?bar=4" title="">Galeri</a></li>
			<li><a href="index.php?bar=5" title="">Kontak</a></li>
		<?php
	}
	elseif ($n=='5')
	{
		?>
			<li><a href="index.php?bar=1" title="">Beranda</a></li>
			<li><a href="index.php?bar=2" title="">Profil</a></li>
			<li><a href="index.php?bar=3" title="">Info</a></li>
			<li><a href="index.php?bar=4" title="">Galeri</a></li>
			<li class="active"><a href="index.php?bar=5" title="">Kontak</a></li>
		<?php
	}
?>
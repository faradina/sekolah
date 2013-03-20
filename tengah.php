<?php
	include "conn.php";
	$n=$_GET['bar'];
	if ($n==''||$n=='1')
	{
		$q="SELECT A.id_berita, B.nm_kategori,B.id_kategori, A.judul,A.namafoto,A.lokasi,A.headline, A.pengirim, A.tanggal
		FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori ORDER BY A.id_berita DESC limit 8";
		$sql = mysql_query ($q);
		while ($hasil = mysql_fetch_array ($sql)) {
		$id_berita = $hasil['id_berita'];
		$lokasi = stripslashes ($hasil ['lokasi']);
		$judul = stripslashes ($hasil['judul']);
		$pengirim = stripslashes ($hasil['pengirim']);
		$tanggal = stripslashes ($hasil['tanggal']);
		$headline = nl2br(stripslashes($hasil['headline']));
		$kategori = stripslashes ($hasil['nm_kategori']);
		$idk = $hasil['id_kategori']
		?>
			<div id="welcome" class="post">
				<h2 class="title"><span><a href="<?php echo "?bar=berita&id=$id_berita";?>"><?php echo "$judul";?></a></span></h2>
				<h3 class="date"><?php echo "$tanggal";?></h3>
				<div class="story"><img src="<?php echo "$lokasi";?>" alt="" width="120" height="120" class="left" />
					<p><?php echo "$headline";?>...<a href="<?php echo "?bar=berita&id=$id_berita";?>">selengkapnya</a></p>
				</div>
				<div class="meta">
					<p>Oleh <?php echo "$pengirim";?>, tag <a href="?bar=kategori&idk=<?php echo "$idk";?>"><?php echo "$kategori";?></a><br />
				</div>
			</div>
		<?php
		}
	}
	elseif ($n=='berita')
	{
		if ($_GET['id']!='')
		{
			$id=$_GET['id'];
			$query = "SELECT A.id_berita, B.nm_kategori, B.id_kategori, A.judul, A.namafoto,A.lokasi, A.isi, A.pengirim, A.tanggal
			FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori && A.id_berita='$id' ORDER BY A.id_berita DESC";
			$sql = mysql_query ($query);
			$hasil = mysql_fetch_array ($sql);
			$id_berita = $hasil['id_berita'];
			$kategori = stripslashes ($hasil['nm_kategori']);
			$judul = stripslashes ($hasil['judul']);
			$isi = nl2br(stripslashes ($hasil['isi']));
			$pengirim = stripslashes ($hasil['pengirim']);
			$tanggal = stripslashes ($hasil['tanggal']);
			$loc = $hasil['lokasi'];
			$idk = $hasil['id_kategori'];
		?>
			<div id="welcome" class="post">
				<h2 class="title"><span><a href="<?php echo "?bar=berita&id=$id_berita";?>"><?php echo "$judul";?></a></span></h2>
				<h3 class="date"><?php echo "$tanggal";?></h3>
				<div class="story"><img src="<?php echo "$loc";?>" alt="" width="300" height="300"/>
					<p> <!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
					<a class="addthis_button_tweet"></a>
					<a class="addthis_button_pinterest_pinit"></a>
					<a class="addthis_counter addthis_pill_style"></a>
					</div>
					<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5148749b5891686e"></script>
					<!-- AddThis Button END --></p>
					<p><?php echo "$isi";?></p>
				</div>
				<div class="meta">
					<p>Oleh <?php echo "$pengirim";?>, tag <a href="?bar=kategori&idk=<?php echo "$idk";?>"><?php echo "$kategori";?></a><br />
				</div>
			</div>
		<?php
		}
	}
	elseif ($n=='kategori')
	{
		$id=$_GET['idk'];
		$q="SELECT id_berita,judul,namafoto,lokasi,headline,pengirim,tanggal FROM berita WHERE id_kategori='$id' ORDER BY id_berita DESC";
		$sql = mysql_query ($q);
		while ($hasil = mysql_fetch_array ($sql)){
			$id_berita = $hasil['id_berita'];
			$judul = stripslashes ($hasil['judul']);
			$tanggal = stripslashes ($hasil['tanggal']);
		?>
			<div id="welcome" class="post">
				<h2 class="title"><span><a href="<?php echo "?bar=berita&id=$id_berita";?>"><?php echo "$judul";?></a></span></h2>
				<h3 class="date"><?php echo "$tanggal";?></h3>
			</div>
		<?php
		}
	}
	elseif ($n=='2')
	{
		$profil=$_GET['profil'];
		if ($profil=='visi')
		{?>
			<div id="welcome" class="post">
				<h2 class="title" align="center"><span>Visi</span></h2>
				<div class="story">
					<p>Berakhlaq mulia, terampil, unggul dalam prestasi, berwawasan lingkungan dan mitigasi bencana</p>
					<p><b>Indikator Visi:</b><br>
					1. 	Terwujudnya peningkatan/pengembangan tenaga kependidikan<br>
					2.	Terwujudnya peningkatan/pengembangan fasilitas pendidikan<br>
					3.	Terwujudnya pengembangan isi kurikulum<br>
					4.	Terwujudnya peningkatan standar proses<br>
					5.	Terwujudnya peningkatan standar kelulusan<br>
					6.	Terwujudnya pengembangan standar penilaian<br>
					7.	Terwujudnya peningkatan mutu kelembagaan<br>
					8.	Terwujudnya pengembangan standar pembiayaan pendidikan<br>
					9. 	Terwujudnya  lingkungan bersih dan sehat<br>
					10. Terwujudnya sekolah sebagai tempat pendidikan lingkungan dan mitigasi bencana<br>
					11. Terwujudnya peningkatan IMTAQ<br>
					</p>
				</div>
				<div class="meta">
				</div>
			</div>
			<div id="welcome" class="post">
				<h2 class="title" align="center"><span>Misi</span></h2>
				<div class="story">
					<p>	1.   Menumbuhkan penghayatan terhadap ajaran agama yang dianut dan budaya     
							  bangsa sehingga menjadi sumber untuk beramal dan menuntut ilmu yang lebih
							  tinggi.<br>
						2.   Menumbuhkan semangat kegotong-royongan untuk mencapai keunggulan kepada 
							  seluruh warga.<br>
						3.	Melaksanakan pembelajaran dan bimbingan secara efektif.<br>
						4.	Melaksanakan dalam meningkatan acuan proses pembelajaran secara utuh sehingga menjadikan kemandirian.<br>
						5.	Menumbuhkan tingkat proses pembelajaran yang tepat guna sehingga meningkatkan mutu kelulusan.<br>
						6.	Menumbuhkan dalam pelaksanaan proses pembelajaran secara terpadu yang menjadikan pola penilaian yang bermutu.<br>
						7.	Melaksanakan proses pengembangan kelembagaan secara terpadu dari tingkatan pelayanan sampai kepada pola pembelajaran yang bermutu.<br>
						8.	Melaksanakan pengembangan sistem pembiayaan pendidikan yang bisa dijangkau kalangan masyarakat kurang mampu dengan program beasiswa bagi peserta didik yang kurang mampu.<br>
						9.	Menumbuhkan sifat sadar lingkungan hidup.<br>
						10.	Menumbuhkan kesadaran peserta didik untuk tanggap bencana.<br>
						11.	Menanamkan budaya local sebagai wujud cinta tanah air.<br>

					</p>
				</div>
				<div class="meta">
				</div>
			</div>
			<div id="welcome" class="post">
				<h2 class="title" align="center"><span>Tujuan</span></h2>
				<div class="story">
					<p>	a.	Meningkatnya pengalaman agama dalam kehidupan sehari-hari di sekolah.<br>
						b.	Meningkatnya penguasan komputer dan internet pada setiap peserta didik. <br>
						c.	Meningkatnya ketercapaian nilai KKM oleh peserta didik pada semua mata pelajaran.<br> 
						d.	Meningkatnya nilai KKM pada semua mata pelajaran.<br>
						e.	Tercapainya nilai rata-rata semua mata pelajaran kategori A.<br>
						f.	Meningkatnya prestasi kejuaraan bidang keagamaan tingkat provinsi.<br>
						g.	Meningkatnya prestasi kejuaraan bidang kesenian tingkat provinsi.<br>
						h.	Menjadikan sekolah yang berwawasan lingkungan hidup dan mitigasi bencana
					</p>
				</div>
				<div class="meta">
				</div>
			</div>
		<?php
		}
		elseif ($profil=='fasilitas')
		{
			$q='SELECT id,fasilitas_sarana FROM fasilitas ORDER BY id';
			$sql=mysql_query($q);
			$i=1;
			?>
			<div id="welcome" class="post">
				<h2 class="title" align="center"><span>Fasilitas</span></h2>
				<div class="story">
			<?php
			while ($hasil=mysql_fetch_array($sql))
			{
				$fas=$hasil['fasilitas_sarana'];			
		?>
				
					<p>	<?php echo "$i. $fas";
						$i=$i+1;?>
					</p>
			<?php
			}?>
				</div>
				<div class="meta">
				</div>
			</div>
		<?php
		}
		elseif ($profil=='ekskul')
		{
			$q='SELECT id,ekskul FROM ekskul ORDER BY id';
			$sql=mysql_query($q);
			$i=1;
			?>
			<div id="welcome" class="post">
				<h2 class="title" align="center"><span>Ekstra Kurikuler</span></h2>
				<div class="story">
			<?php
			while ($hasil=mysql_fetch_array($sql))
			{
				$eks=$hasil['ekskul'];			
		?>
				
					<p>	<?php echo "$i. $eks";
						$i=$i+1;?>
					</p>
			<?php
			}?>
				</div>
				<div class="meta">
				</div>
			</div>
		<?php
		}elseif ($profil=='')
		{		
		?>
			<div id="welcome" class="post">
				<h2 class="title" align="center"><span>SMP Muhammadiyah 2 Mlati</span></h2>
				<div class="story">
					<p align="center"><b>CIPTAKAN IKLIM PENDIDIKAN YANG SEJUK DALAM RANGKA MEMPERSIAPKAN GENERASI BANGSA MENJADI MANUSIA BERAKHLAK MULIA DAN UNGGUL DALAM PRESTASI
					</b></p>
					<p align="center">STATUS TERAKREDITASI A</p>
					<p align="center">SK.NO:22.01/BAP/TU/XI/2008</p>
					<p align="center">TGL : 22 NOVEMBER 2008</p>
				</div>
				<div class="meta">
				</div>
			</div>
		<?php
		}
	}
	elseif ($n=='3')
	{
		$q="SELECT A.id_berita, B.id_kategori, B.nm_kategori, A.judul,A.namafoto,A.lokasi,A.headline, A.pengirim, A.tanggal
		FROM berita A, kategori B WHERE A.id_kategori=B.id_kategori ORDER BY A.id_berita DESC";
		$sql = mysql_query ($q);
		while ($hasil = mysql_fetch_array ($sql)) {
		$id_berita = $hasil['id_berita'];
		$lokasi = stripslashes ($hasil ['lokasi']);
		$judul = stripslashes ($hasil['judul']);
		$pengirim = stripslashes ($hasil['pengirim']);
		$tanggal = stripslashes ($hasil['tanggal']);
		$headline = nl2br(stripslashes($hasil['headline']));
		$kategori = stripslashes ($hasil['nm_kategori']);
		$idk = $hasil['id_kategori'];
		?>
			<div id="welcome" class="post">
				<h2 class="title"><span><a href="<?php echo "?bar=berita&id=$id_berita";?>"><?php echo "$judul";?></a></span></h2>
				<h3 class="date"><?php echo "$tanggal";?></h3>
				<div class="story"><img src="<?php echo "$lokasi";?>" alt="" width="120" height="120" class="left" />
					<p><?php echo "$headline";?>...<a href="<?php echo "?bar=berita&id=$id_berita";?>">selengkapnya</a></p>
				</div>
				<div class="meta">
					<p>Oleh <?php echo "$pengirim";?>, tag <a href="?bar=kategori&idk=<?php echo "$idk";?>"><?php echo "$kategori";?></a><br />
				</div>
			</div>
		<?php
		}
	}
	elseif ($n=='4')
	{
		?>
		<?php
	}
	elseif ($n=='5')
	{
		?>
			<div id="welcome" class="post">
				<h2 class="title" align="center"><span>Hubungi Kami</span></h2>
				<div class="story">
					<p><b>Alamat :</b><br>
					Sono, Sinduadi, Mlati<br>
					Jalan Kaliurang km 6,5<br>
					Sleman - D.I.Yogyakarta<br>
					</p>
					<p><b>Telp :</b><br>
					0274 - 7483317
					</p>
				</div>
				<div class="meta">
				</div>
			</div>
		<?php
	}
?>
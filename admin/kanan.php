<?php
include "../conn.php";
$n=$_GET['v'];
if ($n==''||$n=='dashboard')
{
?>
<h3>Dashboard</h3>
	<div class="quoteOfDay">
	<b>Quote of the day :</b><br>
	<i style="color: #5b5b5b;">"If you think you can, you really can"</i>
	</div>
		<div class="shortcutHome">
		<a href="?v=upload&u=info"><img src="mos-css/img/posting.png"><br>Tambah Info</a>
		</div>
		<div class="shortcutHome">
		<a href="?v=upload&u=fasilitas"><img src="mos-css/img/halaman.png"><br>Tambah Fasilitas</a>
		</div>
		<div class="shortcutHome">
		<a href="?v=upload&u=ekskul"><img src="mos-css/img/template.png"><br>Tambah Ekskul</a>
		</div>
		<div class="shortcutHome">
		<a href="?v=upload&u=prestasi"><img src="mos-css/img/quote.png"><br>Tambah Prestasi</a>
		</div>
		<div class="shortcutHome">
		<a href="?v=upload&u=galeri"><img src="mos-css/img/photo.png"><br>Upload Galeri</a>
		</div>
		<div class="shortcutHome">
		<a href="?v=upload&u=staf"><img src="mos-css/img/bukutamu.png"><br>Tambah Staf</a>
		</div>
		
		<div class="clear"></div>
		
		<div id="smallRight"><h3>Informasi web anda</h3>
		<?php
			$q1=" SELECT COUNT(id_berita) FROM berita";
			$sql1=mysql_query($q1);
			$hasil1=mysql_result($sql1,0);
			
			$q2=" SELECT COUNT(id) FROM fasilitas";
			$sql2=mysql_query($q2);
			$hasil2=mysql_result($sql2,0);
			
			$q3=" SELECT COUNT(id) FROM history_prestasi";
			$sql3=mysql_query($q3);
			$hasil3=mysql_result($sql3,0);
			
			$q4=" SELECT COUNT(id) FROM ekskul";
			$sql4=mysql_query($q4);
			$hasil4=mysql_result($sql4,0);
			
			$q5=" SELECT COUNT(id_berita) FROM berita";
			$sql5=mysql_query($q5);
			$hasil5=mysql_result($sql5,0);
			
			$q6=" SELECT COUNT(id_staff) FROM tabel_staff";
			$sql6=mysql_query($q6);
			$hasil6=mysql_result($sql6,0);
		?>
		<table style="border: none;font-size: 12px;color: #5b5b5b;width: 100%;margin: 10px 0 10px 0;">
			<tr><td style="border: none;padding: 4px;">Jumlah posting</td><td style="border: none;padding: 4px;"><b><?php echo "$hasil1";?></b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah fasilitas</td><td style="border: none;padding: 4px;"><b><?php echo "$hasil2";?></b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah prestasi</td><td style="border: none;padding: 4px;"><b><?php echo "$hasil3";?></b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah ekskul</td><td style="border: none;padding: 4px;"><b><?php echo "$hasil4";?></b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah foto dalam galeri</td><td style="border: none;padding: 4px;"><b><?php echo "$hasil5";?></b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah staf</td><td style="border: none;padding: 4px;"><b><?php echo "$hasil6";?></b></td></tr>
		</table>
		</div>
		<div id="smallRight"><h3>Berita Terakhir</h3>
		<table style="border: none;font-size: 12px;color: #5b5b5b;width: 100%;margin: 10px 0 10px 0;">
		<?php
			$q="SELECT judul FROM berita";
			$sql=mysql_query($q);
			while($hasil=mysql_fetch_array($sql)){
				$judul=$hasil['judul'];
		?>
			<tr><td style="border: none;padding: 4px;"><?php echo "$judul";?></tr>
		<?php }
		?>
			</table>
		</div>
<?php
}
elseif ($n=='upload'){
	$u=$_GET['u'];
	if ($u=='info'){?>
	<h3>Form</h3>
	<script>
	function validateForm()
	{
		var x=document.forms["input"]["judul"].value;
		var b=document.forms["input"]["isi"].value;
		var c=document.forms["input"]["headline"].value;
		var d=document.forms["input"]["pengirim"].value;
		if (x==""||b==""||c==""||d=="" )
		  {
		  alert("form harap diisi semua");
		  return false;
		  }
	}
	</script>
	<FORM ACTION="berita.php" METHOD="POST" NAME="input" ENCTYPE="multipart/form-data" onsubmit="return validateForm();" >
		<table width="95%">
			<tr><td><b>Judul</b></td><td><input type="text" class="sedang" name="judul"></td></tr>
			<tr><td><b>Foto</b></td><td><input name='foto' type='file' id='foto' ></td></tr>
			<tr><td><b>Kategori</b></td><td>
				<select name="kategori">
					<option selected>-- pilihan --</option>
					<?php
					$query = "SELECT id_kategori, nm_kategori
					FROM kategori ORDER BY nm_kategori";
					$sql = mysql_query ($query);
					while ($hasil = mysql_fetch_array ($sql)) {
					echo "<option value='$hasil[id_kategori]'>$hasil[nm_kategori]</option>";
					}
					?>
				</select>
			</td></tr>
			<tr><td><b>Headline</b></td><td><input type="text" class="panjang" name="headline"></td></tr>
			<tr><td><b>Isi Berita</b></td><td><textarea name="isi"></textarea></td></tr>
			<tr><td width="125px"><b>Pengirim</b></td><td><input name="pengirim" type="text" class="pendek"></td></tr>
			<tr><td></td><td>
			<input type="submit" class="button" value="Submit">
			<input type="reset" class="button" value="Reset">
			</td></tr>
		</table>
	</form>
	<?php
	}
?>
<?php 
}
?>
<html>
<head>
<title>Form Peminjaman Dosen</title>
</head>
<body>
<style TYPE="text/css">
	body{
	background-position:center;
	background-size:cover;
	margin-top:30px;
	}
	b{
	color:white;
	}
	.main{
	background-color:rgb(0,0,0,0.5);
	widht:100px;
	margin:auto;
	}
	form{
	padding:20px;
	color:white;
	}
	table{
	color:white;
	}
</style>
<div class="main">
<center><b>FORM PEMINJAMAN DOSEN</b>
<hr>
<table border=0>

<tr>
<td>Nama Lengkap</td>
<td>:</td>
<td><input type=text name=Nama size=50></td>
</tr>  

<tr>
<td>NIP</td>
<td>:</td>
<td><input type
=text name=
NISN></td>
</tr>

<tr>
<td>Dosen di prodi</td>
<td>:</td>
<td>
<input type=radio name="Prodi" value="TI">Teknik Informatika
<input type=radio name="Prodi" value="TRKJ">Teknik Rekayasa Komputer Jaringan
<input type=radio name="Prodi" value="TRKJ">Teknik Rekayasa Multimedia
</td>
</tr>

<tr>
<td>Barang Yang Ingin dipinjam</td>
<td>:</td>
<td><input type=text name=Nama size=20></td>
</tr>

<tr>
<td>Hari dan Tanggal Pinjam</td>
<td>:</td>
<td><input type=text name=Tempat size=15>
<select name=Tanggal>
<option name=Tanggal>Tanggal
<option name=Tanggal>1
<option name=Tanggal>2
<option name=Tanggal>3
<option name=Tanggal>4
<option name=Tanggal>5
<option name=Tanggal>6
<option name=Tanggal>7
<option name=Tanggal>8
<option name=Tanggal>9
<option name=Tanggal>10
<option name=Tanggal>11
<option name=Tanggal>12
<option name=Tanggal>13
<option name=Tanggal>14
<option name=Tanggal>15
<option name=Tanggal>16
<option name=Tanggal>17
<option name=Tanggal>18
<option name=Tanggal>19
<option name=Tanggal>20
<option name=Tanggal>21
<option name=Tanggal>22
<option name=Tanggal>23
<option name=Tanggal>24
<option name=Tanggal>26
<option name=Tanggal>27
<option name=Tanggal>28
<option name=Tanggal>29
<option name=Tanggal>30
<option name=Tanggal>31
</select>
<select name=Bulan>
<option name=Bulan>Bulan
<option name=Bulan>Januari
<option name=Bulan>Februari
<option name=Bulan>Maret
<option name=Bulan>April
<option name=Bulan>Mei
<option name=Bulan>Juni
<option name=Bulan>Juli
<option name=Bulan>Agustus
<option name=Bulan>September
<option name=Bulan>Oktober
<option name=Bulan>November
<option name=Bulan>Desember
</select>
<select name=Tahun>
<option name=Tahun>Tahun
<option name=Tahun>2021
</select>
</td>
</tr>

<tr>
<td>Alamat Lengkap</td>
<td>:</td>
<td><input type=textfield name=alamat size=50></td> 
</tr>

<tr>
<td>Email</td>
<td>:</td>
<td><input type=textfield name=alamat> @ <select name="Email">
<option value="TIK">Gmail.com</option>
</select> </td>
</tr>

<tr>
<td> </td>
<td> </td>
<td><a href="#"><input type="submit" name="pinjam" value="Pinjam"> </a>
<input type="reset" name="Teu janten" value="Cancel">
</tr>
</form>
</table>
</div>
</div>
</CENTER>
	</section>
	<footer>
		<div class="container">
			<small>Copyright &copy; 2021 - Ichsana Sabila. All Rights Reserved.</small>
		</div>
	</footer>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>
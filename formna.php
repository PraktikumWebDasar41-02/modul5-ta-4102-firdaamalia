<form method="POST"><center>
	<table>
		<h3>Isilah Data Diri di Bawah ini</h3>
		<tr>
			<td>NIM</td>
			<td><input type="text" name="nm" placeholder="harus 10  digit"></td>
		</tr>
		
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nma" placeholder="nama"></td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="text" name="eml" placeholder="@gmail.com"></td>
		</tr>

		<tr>
			<td>Tanggal Lahir</td>
			<td><input type="date" name="dt"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<input type="radio" name="jk" value="Perempuan">Perempuan
				<input type="radio" name="jk" value="Laki-laki">laki-laki 
			</td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td><select name="ps">
				<option>**choose**</option>
				<option value="Manajemen informatika">Manajemen informatika</option>
				<option value="Teknik Industri">Teknik Industri</option>
				<option value="Teknik komputer">Teknik komputer</option>
				<option value="Teknik informatika">Teknik informatika</option>
				<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
				<option value="Sistem Informasi">Sistem Informasi</option>
			</select></td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td><select name="fa">
				<option>**choose**</option>
				<option value="FIT">FIT</option>
				<option value="FTE">FTE</option>
				<option value="FKB">FRI</option>
				<option value="FEB">INFORMATIKA</option>
			</select></td>
		</tr>

		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	
	</table>
</center>
</form>




<?php 
include 'conek.php';

if (isset($_POST['submit'])) {
	
	if (strlen($_POST['nm'])==10 && $_POST['nm']!="" && is_numeric($_POST['nm'])) {
	$nmm = $_POST['nm'];	
	}else{
		echo "NIM kurang"."<br>";
	}

	if (strlen($_POST['nma'])>20 || $_POST['nma']=="") {
		echo "Nama anda tidak valid"."<br>";
	}else{
		$nmaa = $_POST['nma'];
	}

	if (!strpos($_POST['eml'], "@")||!strpos($_POST['eml'], ".com")) {
		echo "Email anda tidak sesuai"."<br>";
	}else{
		$emll = $_POST['eml'];
	}

	$tgl = $_POST['dt'];
	$pss = $_POST['ps'];
	$faa = $_POST['fa'];
	if (isset($_POST['jk'])) {
		$jkk = $_POST['jk'];	
	}
	
	

	if (isset($nmm) && isset($nmaa) && isset($emll)&& isset($tgl)
		&& isset($pss)&& isset($faa)&& isset($jkk)) {
		session_start();
		$_SESSION['idd'] = $nmm;

		$quer = "INSERT INTO t_jurnal1
		 VALUES ('$nmm','$nmaa','$emll','$tgl','$jkk','$pss','$faa')";

		$tam = $conn->query($quer);
	if ($tam == true ) {
		echo "DATA BERHASIL TERSIMPAN";

		header("Location:tampilna.php");
		}
		else{
			echo "DATA TIDAK BERHASIL TERSIMPAN";
		}
	}
	
}

 ?>
<?php 

session_start();
include 'conek.php';
$nmm = $_SESSION['idd'];

$quer = "SELECT * FROM t_jurnal1 WHERE  nm = '$nmaa'";
$tampilna = $conn->query($quer)
if($tampilna==true){
	foreach ($tampilna as $arr) {
	$nmaa=$arr['Nama'];
	$nmm=$arr['NIM'];	
	$emll=$arr['email'];	
	$tgl=$arr['tgl_lahir'];	
	$jkk=$arr['jk'];	
	$pss=$arr['jurusan'];	
	$faa=$arr['fakultas'];		
	}
}

?>


<form method="post">
<table>
	<tr>
		<td>NIM :</td>
		<td><?php echo $nmm. "<br>"; ?></td>
	</tr>

	<tr>
		<td>Nama :</td>
		<td><?php echo $nmaa. "<br>"; ?></td>
	</tr>

	<tr>
		<td>Email :</td>
		<td><?php echo $emll."<br>"; ?></td>
	</tr>

	<tr>
		<td>Tanggal lahir :</td>
		<td><?php echo $tgl."<br>"; ?></td>
	</tr>
	
	<tr>
		<td>Jenis kelamin :</td>
		<td><?php echo $jkk."<br>"; ?></td>
	</tr>
	<tr>
		<td>Jurusan :</td>
		<td><?php echo $pss."<br>"; ?></td>
	</tr>
	<tr>
		<td>fakultas :</td>
		<td><?php echo $faa."<br>"; ?></td>
	</tr>

	<tr>
		<td><input type="submit" name="valuena" value="Input Yang Baru"></td>
	</tr>
</table>
	
</form>


<?php 
if (isset($_POST['valuena'])) {
	session_destroy();
	header("Location:formna.php");
}
 ?>
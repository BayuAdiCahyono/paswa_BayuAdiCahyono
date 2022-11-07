<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$kelas = $_POST['kelas'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$foto = $_POST['foto'];
$agama = $_POST['agama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];

	$result = mysqli_query($mysqli, "INSERT INTO tab_peserta (nim, nama, prodi, semester, kelas, no_hp, email, alamat, jenis_kelamin, foto, agama, tempat_lahir, tanggal_lahir) VALUES('$nim', '$nama', '$prodi', '$semester', '$kelas', '$no_hp', '$email', '$alamat', '$jenis_kelamin', '$foto', '$agama', '$tempat_lahir', '$tanggal_lahir')");   
	echo "<script language=javascript>
		alert('Simpan Berhasil');
		window.location='peserta.php';
		</script>";
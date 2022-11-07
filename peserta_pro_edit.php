<?php session_start();
if (!isset($_SESSION['valid'])) {
    header('Location: login.php');
}

include_once("connection.php");
$id = $_POST ['id'];
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

if ( mysqli_query($mysqli, "UPDATE tab_peserta SET  nim=$nim, nama='$nama', prodi='$prodi', semester='$semester', kelas='$kelas', no_hp='$no_hp', email='$email', alamat='$alamat', jenis_kelamin=$jenis_kelamin, foto='$foto', agama='$agama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir' WHERE nim=$id ")) {
echo "<script language=javascript>
		alert('Edit Berhasil');
		window.location='peserta.php';
		</script>";
}else{
	echo mysqli_error($mysqli);
}
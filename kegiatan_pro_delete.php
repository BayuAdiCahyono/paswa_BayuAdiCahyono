<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = (int) $_GET['id'];
	
if(mysqli_query($mysqli, "DELETE FROM tab_kegiatan WHERE id= '$id' ")){
	echo "<script language=javascript>
			alert('Hapus Berhasil');
			window.location='kegiatan.php';
			</script>";
}else{
	echo "<script language=javascript>
			alert('Hapus Gagal');
			window.location='kegiatan.php';
			</script>";
}

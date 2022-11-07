<?php session_start(); 
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

include_once("connection.php");
$id = (int) $_GET['id'];
	
if(mysqli_query($mysqli, "DELETE FROM tab_panitia WHERE nim= $id ")){
	echo "<script language=javascript>
			alert('Hapus Berhasil');
			window.location='panitia.php';
			</script>";
}else{
	echo "<script language=javascript>
			alert('Hapus Gagal');
			window.location='panitia.php';
			</script>";
}

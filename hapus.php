<?php 
	include 'koneksi.php';

	$nama_depan  = $_GET['nama_depan'];

	$query = mysqli_query($koneksi, "DELETE FROM datadiri WHERE nama_depan='$nama_depan'");

	if($query){
		header("location:output.php");
	}
	else{
		echo "Data gagal dihapus";
	}   
?>
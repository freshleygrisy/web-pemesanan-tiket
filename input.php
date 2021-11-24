<?php
	include "koneksi.php";

	$nama_depan       = $_POST['nama_depan'];
	$nama_belakang       = $_POST['nama_belakang'];
	$email      = $_POST['email'];
	$nohp       = $_POST['nohp'];
	$penerbangan  = $_POST['penerbangan'];
	$hari      = $_POST['hari'];
	$destinasi =$_POST['destinasi'];


	$query = mysqli_query($koneksi, "INSERT INTO datadiri VALUES ('$nama_depan', '$nama_belakang', '$email', '$nohp', '$penerbangan', '$hari', '$destinasi')") or die(mysqli_error($connection));

	if($query){
		header("location:output.php");
	}
	else{
		echo "Proses input gagal";
	}
?>
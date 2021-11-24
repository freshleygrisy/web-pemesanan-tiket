<?php 
	include 'koneksi.php';

	$nama_depan       = $_POST['nama_depan'];
	$nama_belakang       = $_POST['nama_belakang'];
	$email      = $_POST['email'];
	$nohp       = $_POST['nohp'];
	$penerbangan  = $_POST['penerbangan'];
	$hari      = $_POST['hari'];
	$destinasi =$_POST['destinasi'];

	$query = mysqli_query($koneksi, "UPDATE datadiri SET nama_belakang= '$nama_belakang', email='$email', nohp='$nohp', penerbangan='$penerbangan', hari='$hari', destinasi='$destinasi' WHERE nama_depan='$nama_depan'");

	if($query){
		header("location:output.php");
	}
	else{
		echo "Data gagal diedit!";
	}
?>
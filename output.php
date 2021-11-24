<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Menu Output</title>
	<link rel="stylesheet" href="output.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">        

		
	
	</style>
</head>
<body>
<div class="nav">
                <div class="container">
                    <img src='./images/logo.png' class="logo">
                    <ul>
                        <li><a href="proyek.php">Home</a></li>
                        <li><a href="services.php">services</a></li>
                        <li><a href="aboutus.html">About us </a></li>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

	<div class="container">
		<div class="konten29">
			<h2 style="text-align:center">TAMPILAN PEMESANAN TIKET</h2>
			<table style="border:2px solid; margin-left: 20%; margin-right: 30px;">
				<tr style="border:1px solid;">
					<td><strong style="margin-left: 20px; margin-right: 20px;" >Nama Depan</strong></td>
					<td><strong style="margin-left: 20px; margin-right: 20px;" >Nama Belakang</strong></td>
					<td><strong style="margin-left: 20px; margin-right: 20px;" >E-mail</strong></td>
					<td><strong style="margin-left: 20px; margin-right: 20px;" >Nomor HP</strong></td>
					<td><strong style="margin-left: 20px; margin-right: 20px;" >Penerbangan</strong></td>
                    <td><strong style="margin-left: 20px; margin-right: 20px;" >Hari</strong></td>
					<td><strong style="margin-left: 20px; margin-right: 20px;" >Destinasi</strong></td>
				</tr>

				<?php
					include "koneksi.php";
					$query = mysqli_query($koneksi, "SELECT * FROM datadiri");
					while($data=mysqli_fetch_array($query)){
				?>
				<tr>
					<td><?php echo $data['nama_depan'];       ?></td>
					<td><?php echo $data['nama_belakang'];       ?></td>
					<td><?php echo $data['email'];      ?></td>
					<td><?php echo $data['nohp']; 	  ?></td>
					<td><?php echo $data['penerbangan'];      ?></td>
                    <td><?php echo $data['hari']; 	  ?></td>
					<td><?php echo $data['destinasi'];      ?></td>
					<td>
					<a href=edit.php?nama_depan=<?php echo $data['nama_depan'];?>>Edit</a>
					<a href=hapus.php?nama_depan=<?php echo $data['nama_depan'];?>>Hapus</a>
					
					</td>
				</tr>
				<?php
					}
				?>
			
			</table>
		</div>
		<div class="penutup">
		</div>
	</div>
</body>
</html>
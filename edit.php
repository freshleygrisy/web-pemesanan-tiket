<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Data</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>
	
<div class="nav">
                
                    <img src='./images/logo.png' class="logo" style="margin-left:10%" >
					
                    <ul>
                        <li><a href="proyek.php">Home</a></li>
                        <li><a href="#">services</a></li>
                        <li><a href="aboutus.html">About us </a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Blog</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="https://web.facebook.com/"target='_blank'>Facebook</a>
                                <a class="dropdown-item" href="https://www.instagram.com/"target='_blank'>Instagram</a>
                                </div>
                            </li>
                    </ul>
               
            </div>

	
		
			
				<h2 style="margin-left:2%">Edit Data</h2>
		
	
		<div class="konten">

			<?php 
				include 'koneksi.php';

				$nama_depan = $_GET['nama_depan'];
				$query = mysqli_query($koneksi, "SELECT * FROM datadiri WHERE nama_depan='$nama_depan'");
				while($hasil = mysqli_fetch_array($query)){
			?>

			<form method="POST" action="prosesedit.php">
				<table>
					<tr>
						<div>
							<td><label for="exampleFormControlInput1" class="form-label" style="margin-left:15%">Nama Depan</label></td>
						  <td style="width:80%;" ><input class="form-control" style="margin-left:40%" type="text" name="nama_depan" value="<?php echo $hasil['nama_depan'];?>" aria-label="readonly input example" readonly>
						</div>
					</tr>
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label" style="margin-left:15%">Nama Belakang</label></td>
						  <td style="width: 20px;;"><input type="text" class="form-control" style="margin-left:40%" id="exampleFormControlInput1" name="nama_belakang" value="<?php echo $hasil['nama_belakang'];?>"></td>
						</div>
					</tr>
					
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label" style="margin-left:15%">Email</label></td>
						  <td style="width:80%;"><input type="text" class="form-control"  style="margin-left:40%" id="exampleFormControlInput1" name="email" value="<?php echo $hasil['email'];?>"></td>
						</div>
					</tr>
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label" style="margin-left:15%">No.HP</label></td>
						  <td style="width:80%;"><input type="text" class="form-control"  style="margin-left:40%" id="exampleFormControlInput1" name="nohp" value="<?php echo $hasil['nohp'];?>"></td>
						</div>
					</tr>
					<tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label" style="margin-left:15%">Penerbangan</label></td>
						  <td style="width:80%;"> 
							  <select id="inputState"  style="margin-left:40%" class="form-control" name="penerbangan" value="<?php echo $hasil['penerbangan'];?>">
                        <option selected>Pilih..</option>
                        <option>Lion</option>
                        <option>Air asia</option>
                        <option>Citlink</option>
                        <option>Batik</option>
                        <option>Garuda</option>
                    </select>
						</div>
					</tr>
                    <tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label" style="margin-left:15%">Hari</label></td>
						  <td style="width:80%;">
						  <select id="inputState"  style="margin-left:40%" class="form-control" name="hari" value="<?php echo $hasil['hari'];?>">
                       <option selected>Pilih..</option>
                        <option>Senin</option>
                        <option>Selasa</option>
                        <option>Rabu</option>
                        <option>Kamis</option>
                        <option>Jumat</option>
                        <option>Sabtu</option>
                        <option>Minggu</option>
                    </select>
						</div>
					</tr>
                    <tr>
						<div class="mb-3">
						  <td><label for="exampleFormControlInput1" class="form-label" style="margin-left:15%">Destinasi</label></td>
						  <td style="width:80%;">
						  <select id="inputState" class="form-control"  style="margin-left:40%" name="destinasi" value="<?php echo $hasil['destinasi'];?>">
                       <option selected>Pilih..</option>
                        <option>Medan</option>
                        <option>Jakarta</option>
                        <option>Jogja</option>
                        <option>Bandung</option>
                        <option>Pontianak</option>
                        <option>Makassar</option>
                        <option>NTT</option>
                    </select> 
						  </div>
					</tr>
				</table>
				<br>
				<button type="submit" class="btn btn-outline-primary">Submit</button>
			</form>
			<?php } ?>
		</div>
		
	
</body>
</html>
<?php
include 'koneksi.php';
?>

<!DOCTYPE HTML>
<html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>           
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">        
        </head>

        <body>
              <div class="nav">
                <div class="container">
                    <img src='./images/logo.png' class="logo">
                    <ul>
                        <li><a href="proyek.php">Home</a></li>
                        <li><a href="services.php">services</a></li>
                        <li><a href="aboutus.html">About us </a></li>
                        <li><a href="output.php">Data</a></li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Blog</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://web.facebook.com/"target='_blank' >Facebook</a>
                            <a class="dropdown-item" href="https://www.instagram.com/" target='_blank'>Instagram</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
   
            <div class="header">
                <div class="search">
                    <form action="" method="post">
                    <input type="text" name="kata_kunci" placeholder="search your destination">
                    <button type="submit" name="submit">Search</button>
                    </form>
                    
                    <?php
                    //jika tombol Cari di klik akan menjalankan script berikutnya
                    if(isset($_POST['submit'])){
                        //membuat variabel $kata_kunci yang menyimpan data dari inputan kata kunci
                        $kata_kunci = $koneksi->real_escape_string(htmlentities(trim($_POST['kata_kunci'])));
                        
                        //cek apakah kata kunci kurang dari 3 karakter
                        if(strlen($kata_kunci)<3){
                            //pesan error jika kata kunci kurang dari 3 karakter
                            echo '<p>Kata kunci terlalu pendek.</p>';
                        }else{
                            //membuat variabel $where dengan nilai kosong
                            $where = "";
                            
                            //membuat variabel $kata_kunci_split untuk memecah kata kunci setiap ada spasi
                            $kata_kunci_split = preg_split('/[\s]+/', $kata_kunci);
                            //menghitung jumlah kata kunci dari split di atas
                            $total_kata_kunci = count($kata_kunci_split);
                            
                            //melakukan perulangan sebanyak kata kunci yang di masukkan
                            foreach($kata_kunci_split as $key=>$kunci){
                                //set variabel $where untuk query nanti
                                $where .= "kata_kunci LIKE '%$kunci%'";
                                //jika kata kunci lebih dari 1 (2 dan seterusnya) maka di tambahkan OR di perulangannya
                                if($key != ($total_kata_kunci - 1)){
                                    $where .= " OR ";
                                }
                            }
                            
                            //melakukan query ke database dengan SELECT, dan dimana WHERE ini mengambil dari $where
                            $results = $koneksi->query("SELECT judul, LEFT(deskripsi, 60) as deskripsi, url FROM artikel WHERE $where");
                            //menghitung jumlah hasil query di atas
                            $num = $results->num_rows;
                            //jika tidak ada hasil
                            if($num == 0){
                                //pesan jika tidak ada hasil
                                echo '<p>Pencarian dengan kata kunci <b>'.$kata_kunci.'</b> tidak ada hasil.</p>';
                            }else{
                                //pesan jika ada hasil pencarian
                                echo '<p>Pencarian dari kata kunci <b>'.$kata_kunci.'</b> mendapatkan '.$num.' hasil:</p>';
                                //perulangan untuk menampilkan data
                                while($row = $results->fetch_assoc()){
                                    //menampilkan data
                                    echo '
                                    <p>
                                        <b>'.$row['judul'].'</b><br>
                                        '.$row['deskripsi'].'...<br>
                                        <a href="'.$row['url'].'">'.$row['url'].'</a>
                                    </p>
                                    ';
                                }
                            }
                        }
                    }
                    ?>             
</div>
            </div>  
            <div class="footer">
                <p>copyright &copy; All rights reserved to DoctorCode</p>
            </div>
        </body>
    <script src="tab.js"></script>
</html>
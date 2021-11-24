<?php
include "koneksi.php";
?>
<!DOCTYPE HTML>
<html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>           
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
            <style type="text/css">
            </style>
        </head>

        <body>
              <div class="nav">
                <div class="container">
                    <img src='./images/logo.png' class="logo">
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
            </div>
   
            <div class="header"><br><br>
                <form method="POST" action="input.php" style="margin-left:30%">
                    <div class="form-row" style="margin-left:-2px">
                      <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputEmail4" name="nama_depan" placeholder="Nama depan">
                      </div>
                      <div class="form-group col-md-4">
                        <input type="text" class="form-control" id="inputname4" name="nama_belakang" placeholder="Nama belakang">
                      </div>
                    </div>
                    <div class="form-group col-md-8">            
                      <input type="email" class="form-control" id="inputAddress" name="email" placeholder="alamat email">
                    </div>
                    <div class="form-group col-md-8">
                      <input type="number" class="form-control" id="inputAddress2" name="nohp" placeholder="nomor telepon">
                    </div>
                    <div class="form-row" style="margin-left:5px">
                    <div class="form-row col-md-4" >
                       <select id="inputState" class="form-control" name="penerbangan">
                       <option selected>Pilih..</option>
                        <option>Lion</option>
                        <option>Air asia</option>
                        <option>Citlink</option>
                        <option>Batik</option>
                        <option>Garuda</option>
                    </select>
                    </div>
                    <div class="form-group col-md-4">
                       <select id="inputState" class="form-control" name="hari">
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
                    </div>
                    <div class="form-group col-md-8" >
                       <select id="inputState" class="form-control" name="destinasi">
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

                    <div class="form-group">
                      <div class="form-check" style="color:#fff;" style="margin-left:20%" >
                        <input class="form-check-input" type="checkbox" id="gridCheck" height="50%">
                        <label class="form-check-label" for="gridCheck" height="50%">
                          Check me out
                        </label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary center-block">Sign in</button>
                  </form>
                  
            </div>
            </div>  
           
            <div class="footer">
                <p>copyright &copy; All rights reserved to DoctorCode</p>
            </div>
        </body>
    <script src="tab.js"></script>
</html>
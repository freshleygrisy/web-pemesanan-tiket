<?php
$koneksi = new mysqli("localhost", "root", "", "web");
if ($koneksi->connect_errno) {
    echo "Gagal melakukan koneksi ke database: " . $koneksi->connect_error;
}
?>
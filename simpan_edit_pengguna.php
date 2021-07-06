<?php
include('config.php');
$koneksi = new database();
$koneksi->edit_pengguna($_POST['kode_pengguna'], $_POST['nama_pengguna'],
        $_POST['email'], $_POST['phone'], $_POST['alamat'], $_POST['password']);
header('location: index.php');
?>
<?php
    include('config.php');
    $koneksi = new database();
    $koneksi->register_user($_POST['kode_pengguna'], $_POST['email'],$_POST['password']);
    header('location: login.php');
?>
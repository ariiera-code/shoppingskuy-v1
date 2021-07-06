<?php 
    include('config.php');
    $koneksi = new database();

    $cekdir = is_dir("foto_product");
    if($cekdir) {
        opendir("foto_product");
    } else {
        mkdir("foto_product");
        chmod("foto_product", 0755);
        opendir("foto_product");
    }
    $daftar_list = array("jpeg", "jpg", "png");
    $name_file = $_FILES['foto_product']['name'];
    $pecah = explode(".", $name_file);
    $ekstensi = $pecah[1];
    if( in_array($ekstensi, $daftar_list) ) {
        $lokasi_foto_product = $_FILES['foto_product']['tmp_name'];
        $nama_foto_product = $_FILES['foto_product']['name'];
        $dir_foto_product = "foto_product/$nama_foto_product";
        move_uploaded_file($lokasi_foto_product, $dir_foto_product);
        $koneksi->tambah_produk_seller($_POST['code_product'],$_POST['kode_pengguna'],$_POST['product_name'],$_POST['code_cat'],
                    $_POST['prd_prc'],$_POST['prd_desc'],$_POST['prd_quantity'],$_POST['prd_date'], $dir_foto_product); 
        header('location: index.php');
    } else {
        echo"Type file harus berupa gambar <br>";
        header('location: index.php');
    }
?>


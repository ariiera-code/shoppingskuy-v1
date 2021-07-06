<?php
	class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "shoppingskuy";
    var $koneksi = "";
    function __construct(){
      $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
      if (mysqli_connect_errno()){
          echo "Koneksi database gagal : " . mysqli_connect_error();
      }
    }

    // sistem login akun
    function login($username) {
      $data = mysqli_query($this->koneksi, "SELECT * FROM user WHERE username = '$username'");
      if ( mysqli_num_rows($data) == 0 ) {
        echo "<b>Data user tidak ada</b>";
        $hasil = [];
        header("Location: login.php");
      } 
      else {
        while ( $row = mysqli_fetch_array($data) ) {
          $hasil[] = $row;
        }
      }
      return $hasil;
    }
    function kode_pengguna($kode_pengguna) {
      $data_akun = mysqli_query($this->koneksi, "SELECT FROM data_akun WHERE kode_pengguna='$kode_pengguna'");
      while ( $row_pengguna = mysqli_fetch_assoc($data_akun) ) {
          $hasil_pengguna[] = $row_pengguna;
      }
      return $hasil_pengguna;
    }

    // sistem register akun
    function register_user($kode_pengguna, $email, $password) {
      mysqli_query($this->koneksi, "INSERT INTO data_akun VALUES ('','$kode_pengguna','','$email','','','','','','','$password')");
      $ambil_id = mysqli_query($this->koneksi, "SELECT id FROM data_akun ORDER BY id DESC LIMIT 1");
      $row_id = mysqli_fetch_array($ambil_id);
      $hasil_id = $row_id['id'];
      mysqli_query($this->koneksi, "INSERT INTO user VALUES('', '$kode_pengguna', '$password', '2', '$hasil_id')" );
    }

    // tampil pengguna di profile.php
    function tampil_pengguna($kode_pengguna) {
      $data_akun = mysqli_query($this->koneksi, "SELECT a.*, c.password FROM data_akun a 
                                INNER JOIN user c ON c.data_pengguna_id = a.id
                                WHERE a.kode_pengguna='$kode_pengguna'");
      while ( $row_pengguna = mysqli_fetch_assoc($data_akun) ) {
          $hasil_pengguna[] = $row_pengguna;
      }
      return $hasil_pengguna;
    }

    // belum selesai di profile.php
    function tampil_data_jenis_kelamin() {
      $data_jenis_kelamin = mysqli_query($this->koneksi, "SELECT * FROM jenis_kelamin");
      while ($row_jenis_kelamin = mysqli_fetch_array($data_jenis_kelamin)){
          $hasil_jenis_kelamin[] = $row_jenis_kelamin;
      }
      return $hasil_jenis_kelamin;
    }

    // tampil pengguna di top bar dll
    function tampil_data() {
      $data = mysqli_query($this->koneksi, "SELECT FROM data_akun");
    }

    // edit pengguna di profile.php
    function edit_pengguna($kode_pengguna, $nama_pengguna, $email, $phone, $alamat, $password) {
      mysqli_query($this->koneksi, "UPDATE data_akun 
                  SET kode_pengguna = '$kode_pengguna', nama_pengguna='$nama_pengguna', email='$email', phone='$phone', alamat='$alamat' 
                  WHERE kode_pengguna = '$kode_pengguna'");
      mysqli_query($this->koneksi, "UPDATE user SET password = '$password' WHERE username = '$kode_pengguna'");
    }

    // untuk mengambil data category agar bisa tampil di dropdown list category
    function ambil_category() {
      $category = mysqli_query($this->koneksi, "SELECT * FROM category");
      while ($row_category = mysqli_fetch_array($category)) {
          $hasil_category[] = $row_category;
      }
      return $hasil_category;
    }
    // tambah_product_seller untuk menyimpan data ke db product
    function tambah_produk_seller($code_product, $kode_pengguna, $product_name, $code_cat, $prd_prc, $prd_desc, $prd_quantity, $prd_date, $foto_product) {
      mysqli_query($this->koneksi, "INSERT INTO product 
              VALUES ('','$code_product','$kode_pengguna','$product_name', '$code_cat', '$prd_prc', '$prd_desc', '$prd_quantity','$prd_date','$foto_product','','')");
    }
    // tampil pengguna di top bar dll
    function tampil_data_category() {
      $data = mysqli_query($this->koneksi, "SELECT * FROM category");
      while ($row = mysqli_fetch_array($data)) {
        $hasil[] = $row;
      }
      return $hasil;
    }
    function tampil_data_produk_baru() {
      $data = mysqli_query($this->koneksi, "SELECT * FROM product ORDER BY prd_date DESC");
      while ($row = mysqli_fetch_array($data)) {
        $hasil[] = $row;
      }
      return $hasil;
    }
	}
?>
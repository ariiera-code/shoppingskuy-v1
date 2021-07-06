<?php
$q = mysqli_query($conn, "SELECT * FROM produk");
    $total = 0;
    $tot_bayar = 0;
    $no = 1;

    while ($r = $q->fetch_assoc()) {
    // total adalah hasil dari harga x qty
    $total = $r['harga'] * $r['qty'];
    // total bayar adalah penjumlahan dari keseluruhan total
    $tot_bayar += $total;
    while ($r = $q->fetch_assoc()) {
      // total adalah hasil dari harga x qty
      $total = $r['harga'] * $r['qty'];
      // total bayar adalah penjumlahan dari keseluruhan total
      $tot_bayar += $total;


    }}
    <?php
session_start();
include "koneksi.php";
$sid = session_id();
// fungsi untuk mendapatkan isi keranjang belanja
function isi_keranjang(){
    $isikeranjang = array();
    $sid = session_id();
    $sql = mysql_query("SELECT * FROM keranjang WHERE id_session='$sid'");
     
    while ($r=mysql_fetch_array($sql)) {
        $isikeranjang[] = $r;
    }
    return $isikeranjang;
}  
 
$tgl_skrg = date("Ymd");
 
// simpan data pemesanan 
mysql_query("INSERT INTO pembelian(tgl_beli) VALUES ('$tgl_skrg')");
 
// mendapatkan nomor orders dari tabel pembelian
$id_orders=mysql_insert_id();
 
// panggil fungsi isi_keranjang dan hitung jumlah produk yang dipesan
$isikeranjang = isi_keranjang();
$jml          = count($isikeranjang);
 
// simpan data detail pemesanan  
for ($i = 0; $i < $jml; $i++){
  mysql_query("INSERT INTO detail_beli(id_beli, id_produk, jumlah) VALUES('$id_orders',{$isikeranjang[$i]['id_produk']}, {$isikeranjang[$i]['jumlah']})");
}
   
// setelah data pemesanan tersimpan, hapus data pemesanan di tabel keranjang
for ($i = 0; $i < $jml; $i++) { mysql_query("DELETE FROM keranjang WHERE id_belanja = {$isikeranjang[$i]['id_belanja']}");}
 
 
echo"Nomor Order: <b>$id_orders</b><br /><br />";
 
echo"<h1>Rincian Belanja</h1>
          <table border=1>
          <tr>
                <th>Nama Produk</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Sub Total</th>
          </tr>
          ";    
$r=mysql_query("SELECT * FROM detail_beli,produk WHERE detail_beli.id_produk=produk.id_produk AND id_beli='$id_orders'");
   
while($d=mysql_fetch_array($r)){
        $subtotal    = $d[harga]* $d[jumlah];
        $total       = $total + $subtotal;
        echo"<tr><td>$d[nama_produk]</td>
            <td>$d[jumlah]</td>
            <td>$d[harga]</td>
            <td>$subtotal</td></tr>";
}
echo"</table>
<h2>Total Belanja : <b>$total</b></h2>";
?>
    ?>
    
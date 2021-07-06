<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "menu_admin.html";
    ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Peminjam</h1>
				</div>
			</div>
			<div class="card">
			<div class="card-header">
				<h3 class="card-title">Menampilkan Data Peminjam</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
                            <th>No</th>
                            <th>Kode Peminjam</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Pekerjaan</th>
                            <th>Foto</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
					</thead>
					<tbody>
						<tr>
                            <?php
                                include 'config.php';
                                $db = new Database();
                                $no = 1;
                                foreach($db->tampil_data() as $x){
                            ?>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $x['kode_peminjam']; ?></td>
                            <td><?php echo $x['nama_peminjam']; ?></td>
                            <td><?php echo $x['keterangan_jk']; ?></td>
                            <td><?php 
                                    $tanggal_lahir = $x['tanggal_lahir'];
                                    $tanggal_lahir_ganti_format = date("d-m-Y", strtotime($tanggal_lahir));
                                    echo $tanggal_lahir_ganti_format;    
                                ?>
                            </td>
                            <td><?php echo $x['alamat']; ?></td>
                            <td><?php echo $x['pekerjaan']; ?></td>
                            <td><?php
                                    if(empty($x['foto'])){
                                ?>
                                    <font color="red">Belum ada foto</font>
                                <?php
                                    }
                                    else{
                                ?>
                                    <img src="<?php echo $x['foto']; ?>" alt="" width="50" height="50">
                                <?php
                                    }
                                ?>
                            </td>
                            <td><a href="edit_data_peminjam.php?id=<?php echo $x['kode_peminjam']; ?>">Edit</a></td>
                            <td><a href="hapus_data_peminjam.php?id=<?php echo $x['kode_peminjam']; ?>">Hapus</a></td>
                        </tr>
						<?php
								}
						?>
					</tfoot>
				</table>
			</div>
			<!--/.card body-->
		</div>
		<!--/.card-->
	</div>
	<!--/.row-->
	</div>
	<!--/.container-fluid-->
	</section>
	<!--/.content-->
	</div>
	<!--/.content-wrapper-->
    <!-- jQuery -->
	<script src="admin_lte/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="admin_lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- DataTables -->
	<script src="admin_lte/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="admin_lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="admin_lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="admin_lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
	<!-- AdminLTE App -->
	<script src="admin_lte/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="admin_lte/dist/js/demo.js"></script>
	<!-- page script -->
	<script>
    $(function () {
        $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
        });
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    });
	</script>
</body>
</html>

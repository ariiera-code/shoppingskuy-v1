<?php
    session_start();
    $username = $_SESSION['username'];
    include'config.php';
    $db = new database();
    $koneksi = new mysqli("localhost","root","","shoppingskuy");

    foreach($db->login($username) as $x) {
        $akses_id = $x['akses_id'];
        if ( $akses_id == '2') {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ShoppingSkuy | Online Marketplace</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-22.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/lightslider.css" />

</head>

<body id="page-top">
    <?php 
        $data_akun = $db->tampil_pengguna($username);
    ?>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar static-top">
                    
                    <!-- Sidebar - Brand -->
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-laugh-wink"></i>
                        </div>
                    </a>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small ml-0" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Cart
                                </h6>
                                <a class="dropdown-item d-flex align-items-left" href="#">
                                    <div class="row">
                                    <?php 
                                    $no = 1;
                                    foreach ($_SESSION['newcart'] as $product_id => $jumlah):?>
                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM product WHERE product_id='$product_id'");
                                    $pecah = $ambil->fetch_assoc();
                                    $subharga = $pecah["prd_prc"]*$jumlah;?>
                                        <div class="col">
                                            <div class="img-square-wrapper text-left">
                                                <img style="width:5rem;height:5rem;object-fit:contain;" src="<?php echo $pecah["foto"];?>">
                                            </div>
                                        </div>
                                        <?php endforeach ?>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="cart.php">See My Cart</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $data_akun[0]['kode_pengguna']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="tambah_produk_seller.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Add Product
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <section style="background-color:white;">
                    <div class="story-container">
                        <label class="ml-3 mt-2" style="color:black;font-weight:bold;text-align: center;">Category</label>
                        <ul>
                            <?php 
                                $no = 1;
                                foreach ($db->tampil_data_category() as $x) {
                            ?>
                            <li class="has-story">
                                <div class="story">
                                    <img style="object-fit: cover;" src="<?php echo $x['cat_image']; ?>">
                                </div>
                                <span onclick="window.location.href='tambah_produk_seller.php';" style="color:black;font-weight:normal;text-align: center;"><?php echo $x['cat_shortname']; ?></span>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                </section>
                <section style="background:primary;">
                    <label class="ml-3 mt-2 mb-4" style="color:black;font-weight:bold;text-align: center;">New Release!</label>
                    <?php
                        //Columns must be a factor of 12 (1,2,3,4,6,12)
                        $numOfCols = 4;
                        $rowCount = 0;
                        $bootstrapColWidth = 12 / $numOfCols;
                        ?>
                        <div class="row mb-4 ml-1 mr-1">
                        <?php
                            foreach ($db->tampil_data_produk_baru() as $x){
                            ?>  
                                    <div class="col-<?php echo $bootstrapColWidth; ?>">
                                        <div class="card shadow">
                                            <div class="card">
                                                <a class="text-center" href="details.php?id=<?php echo $pecah["product_id"];?>"><img class="card-img-top" style="width:auto;height:10rem;object-fit:contain;" src="<?php echo $x['foto']; ?>"></a>
                                                <div class="card-body">
                                                    <span onclick="window.location.href='tambah_produk_seller.php';"
                                                        style="color:black;font-weight:normal;font-size:0.9rem;display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 30ch;">
                                                        <?php echo $x['product_name']; ?></span>
                                                    </span></br>
                                                    <span onclick="window.location.href='tambah_produk_seller.php';"
                                                        style="color:black;font-weight:bold;font-size:0.95rem;">
                                                        Rp. <?php $nilai = $x['prd_prc'];
                                                            $subtotal =  number_format($nilai, 0, ',', '.');
                                                            echo $subtotal; ?>
                                                    </span></br>
                                                    <span hidden><?php echo $x['code_product']; ?></span>
                                                    <span onclick="window.location.href='tambah_produk_seller.php';"
                                                        style="color:black;font-size:0.8rem;">
                                                        Stock: <span class="text-danger"><?php echo $x['prd_quantity']; ?></span></br>
                                                        <span style="font-size:0.7rem">by </span>
                                                        <span class="text-primary" style="font-size:0.8rem;"><?php echo $x['kode_pengguna']; ?></span>
                                                    </span>
                                                    <hr>
                                                    <div class="row">
                                                        <a href="addtocart.php?id=<?php echo $x['product_id'];?>" class="btn btn-primary col ml-2 mr-2 mt-2">Add to Cart</a>
                                                        <a href="details.php?id=<?php echo $x['product_id'];?>" class="btn btn-info col ml-2 mr-2 mt-2">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                $rowCount++;
                                if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
                                if (++$no == 5) break;
                            }
                        ?>
                        </div>
                </section>
                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white shadow-lg">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; ShoppingSkuy 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <style>
        .story-container ul {
            list-style-type: none;
            user-select: none;
            display: flex;
            overflow-y: auto;
            padding: 20px 0;
        }

        .story-text{
            color: rgba(255, 255, 255, .85);
            font-weight: 300;
            font-size: 15px;
            max-width: 85px;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-top: 5px;
        }

        .story-container ul li {
            padding: 0 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .story-container ul li:first-child {
            padding-left: 20px;
        }

        .story-container ul li:last-child {
            padding-right: 20px;
        }

        .story-container ul li .story {
            width: 75px;
            height: 75px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.75);
            padding: 1px;
            position: relative;
        }

        .story-container ul li.has-story .story {
            padding: 2px;
            background: linear-gradient(45deg, #F09433 0%, #E6683C 25%, #DC2743 50%, #CC2366 75%, #BC1888 100%);
        }

        .story-container ul li .story img {
            padding: 4px;
            background: currentColor;
            border-radius: 50%;
            width: 100%;
            height: 100%;
        }

        .story-container ul li span{
            color: rgba(255, 255, 255, .85);
            font-weight: 300;
            font-size: 15px;
            max-width: 85px;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-top: 5px;
        }

        /* end of slider product */
    </style>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>

</body>

</html>
<?php
    }
        else {
        }
    }
?>
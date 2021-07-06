<?php
    session_start();
    $username = $_SESSION['username'];
    include'config.php';
    $db = new database();
    $koneksi = new mysqli("localhost","root","","shoppingskuy");

    $product_id = $_GET['id'];
    $ambil = $koneksi->query("SELECT * FROM product WHERE product_id='$product_id'");
    $detail = $ambil->fetch_assoc();
    
    //echo "<pre>";
    //print_r($detail);
    //echo "</pre>";

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
                                    foreach ($cart as $product_id => $jumlah):?>
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
                                <a class="dropdown-item text-center small text-gray-500" href="#">See My Cart</a>
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
                <section class="mt-5" style="background-color:white;">
                    <div class="row">
                        <div class="col text-center mt-5 ml-2 mr-2">
                            <img style="width:25rem;height:25rem;object-fit:contain;" src="<?php echo $detail["foto"];?>">
                        </div>
                        <div class="col">
                            <div class="row mt-5"> <!-- Nama Produk -->
                                <div class="col">
                                    <span style="color:black;font-weight:bold;font-size:1.5rem"><?php echo $detail["product_name"];?></span>
                                </div>
                            </div>
                            <div class="row"> <!-- Harga -->
                                <div class="col">
                                    <span class="text-primary" style="font-weight:bold;font-size:1.5rem">Rp<?php echo number_format($detail["prd_prc"]);?></span>
                                </div>
                            </div><br>
                            <div class="row"> <!-- Category -->
                                <div class="col">
                                    <span style="font-size:1.1rem;">Category</span>
                                </div>
                                <div class="col-10">
                                    <span>: </span><a class="text-primary" href="category.php?id=<?php echo $x["id"];?>" style="font-size:1.1rem;"><?php echo $detail["code_cat"];?></a>
                                </div>
                            </div>
                            <div class="row mt-1"> <!-- Tersedia -->
                                <div class="col">
                                    <span style="font-size:1.1rem;">Availibility</span>
                                </div>
                                <div class="col-10">
                                    <span>: </span><span style="font-size:1.1rem;"><?php echo $detail["prd_quantity"];?></span></a>
                                </div>
                            </div>
                            <div class="row"> <!-- User -->
                                <div class="col">
                                    <span style="font-size:1.1rem;">Owner</span>
                                </div>
                                <div class="col-10">
                                    <span>: </span><a class="text-primary" href="google.com" style="font-size:1.1rem;"><?php echo $detail["kode_pengguna"];?></a>
                                </div>
                            </div><br>
                            <div class="row"> <!-- Desc -->
                                <div class="col pr-5">
                                    <p><?php echo $detail["prd_desc"];?></p>
                                </div>
                            </div>
                            <form method="post">
                                <div class="row"> <!-- Quanitty -->
                                    <div class="col-2 mt-3 pr-5">
                                        <span style="font-size:1.1rem;">Quanitty</span>
                                    </div>
                                    <div class="col-10 pr-5">
                                        <input class="form-group mt-3 text-center" style="width:4ch;" name="jumlah" type="number" min="1" required>
                                    </div>
                                </div>
                                <div class="row"> <!-- btn -->
                                    <div class="col-12 pr-5">
                                        <button class="btn btn-primary col mt-3 mb-5" name="buy" class="height:0.8rem;">Add to Cart</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST["buy"])) {
                                // mendapatkan jumlah yg di input
                                $jumlah = $_POST["jumlah"];
                                // input ke keranjang
                                $_SESSION["newcart"][$product_id] = $jumlah;
                            }
                            ?>
                        </div>
                    </div>
                </section>
                <section class="text-center" style="background-color:primary;">
                    <br><br><br><br>
                </section>
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
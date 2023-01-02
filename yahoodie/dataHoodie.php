<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles-sb-admin.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dashboardAd.php">YA-Hoodie</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dashboardAd.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="dataHoodie.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Hoodie
                            </a>
                            <a class="nav-link" href="dataPelanggan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Customers
                            </a>
                            <a class="nav-link" href="dataPembelian.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Sales Report
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Admin
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Hoodie</h1>    
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Data Hoodie
                                    <h1></h1>
                                    <a href="addData.php"> <button type="button" class='btn-primary btn-md'> Add Data </button></a>
                                </div>
                                    <div class="card-body">
                                        <table id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th>kodeHoodie</th>
                                                    <th>idAdmin</th>
                                                    <th>namaHoodie</th>
                                                    <th>tipe</th>
                                                    <th>ukuran</th>
                                                    <th>harga</th>
                                                    <th>stock</th>
                                                    <th>Gambar</th>
                                                    <th>aksi</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>kodeHoodie</th>
                                                    <th>idAdmin</th>
                                                    <th>namaHoodie</th>
                                                    <th>tipe</th>
                                                    <th>ukuran</th>
                                                    <th>harga</th>
                                                    <th>stock</th>
                                                    <th>Gambar</th>
                                                    <th>aksi</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php
                                                    $sqlGet = "SELECT * FROM hoodie";
                                                    $query = mysqli_query($mysqli, $sqlGet);

                                                    while($data = mysqli_fetch_array($query)){
                                                        echo "
                                                        
                                                            <tr>
                                                                <td>$data[kodeHoodie]</td>
                                                                <td>$data[idAdmin]</td>
                                                                <td>$data[namaHoodie]</td>
                                                                <td>$data[tipe]</td>
                                                                <td>$data[ukuran]</td>
                                                                <td>$data[harga]</td>
                                                                <td>$data[stock]</td>
                                                                <td>$data[gambar]</td>
                                                                <td>
                                                                    <div class='row'>
                                                                        <div class='col'>
                                                                            <a href='updateData.php?kodeHoodie=$data[kodeHoodie]' class='btn btn-sm btn-warning'>Update</a>
                                                                        </div>
                                                                        <div class='col'>
                                                                            <a href='deleteData.php?kodeHoodie=$data[kodeHoodie]' class='btn btn-sm btn-danger'>Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        
                                                        ";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

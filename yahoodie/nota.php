<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="shortcut icon" href="images/favicon.png" type="">
        <title>Nota Pembelian</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet"/>
        <link href="css/responsive.css" rel="stylesheet" />
    </head>
    <body>
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="dashboard.php"><img width="250" src="images/logo.png" alt="#" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="aboutUser.html">About</a></li>
                                    <li><a href="reviewUser.php">Testimonial</a></li>
                                </ul>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="product.php">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="riwayat.php">RIWAYAT PEMBELIAN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="keranjang.php">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                    <g>
                                        <g>
                                        <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                            c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                            C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                            c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                            C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                            c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                        </g>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <section class="konten">
            <div class="container">
                <?php
                    include 'db.php';
                    $hasil = mysqli_query($mysqli, "SELECT * FROM pembelian JOIN users ON pembelian.idUser=users.idUser WHERE pembelian.id_pembelian='$_GET[id]'");
                    $detail = $hasil->fetch_assoc();
                    $idpelangganyangbeli = $detail['idUser'];

                    $idpelangganyanglogin = $_SESSION['pelanggan']['idUser'];
                    if ($idpelangganyangbeli !== $idpelangganyanglogin) 
                    {
                        echo '<script>alert("Anda tidak memiliki akses ke halaman ini")</script>';
                        echo "<script>location='riwayat.php';</script>";
                        exit();
                    }
                ?>  
                <div class="row">
                    <div class="col-md-4">
                        <h3>Pembelian</h3>
                        <strong>No. Pembelian: <?php echo $detail['id_pembelian']?></strong><br>
                        Tanggal Pembelian: <?php echo $detail['tanggal_pembelian'];?> <br>
                        Total: <?php echo number_format($detail['total_pembelian']);?>
                    </div>
                    <div class="col-md-4">
                        <h3>Pelanggan</h3>
                        <strong><?php echo $detail['fullname'];?></strong>
                        <p>
                            <?php echo $detail['username']?>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h3>Pengiriman</h3>
                        <strong>Alamat Pelanggan</strong>
                        <p>
                            <?php echo $detail['alamat']?>
                        </p>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Hoodie</th>
                            <th>Ukuran</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $nomor = 1;
                            $hasil = mysqli_query($mysqli, "SELECT * FROM pembelian_produk JOIN hoodie ON pembelian_produk.kodeHoodie=hoodie.kodeHoodie 
                                WHERE pembelian_produk.id_pembelian='$_GET[id]'");
                            while ($pecah = $hasil->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $pecah['namaHoodie']; ?></td>
                            <td><?php echo $pecah['ukuran']; ?></td>
                            <td>Rp. <?php echo number_format($pecah['harga']); ?></td>
                            <td><?php echo $pecah['jumlah']; ?></td>
                            <td>
                                Rp. <?php echo number_format($pecah['harga']*$pecah['jumlah']); ?>
                            </td>
                        </tr>
                        <?php $nomor++;?>
                        <?php } ?>
                    </tbody>                    
                </table>
                <div class="row">
                    <div class="col-md-7">
                        <div class ="alert alert-info">
                            <p>
                                Silakan melakukan pembayaran dengan sistem COD sebesar Rp. <?php echo number_format($detail['total_pembelian']);?>
                            </p>
                            <p>
                                Pembelian anda akan kami proses segera!
                            </p>
                            <p>
                                Estimasi proses 2-3 hari sampai barang diterima, dan jangan lupa untuk siapkan pembayaran ketika paket hoodie anda datang!
                            </p>
                            <p>
                                Terima kasih telah memilih YA-Hoodie!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer section -->
        <footer class="footer_section">
            <div class="container">
                <div class="row">
                <div class="col-md-4 footer-col">
                    <div class="footer_contact">
                        <h4>
                            Reach at..
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                            Location
                            </span>
                            </a>
                            <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                            Call +62 823 2138 4132
                            </span>
                            </a>
                            <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
                            customerservice@yahoodie.com
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-col">
                    <div class="footer_detail">
                        <a href="dashboard.php" class="footer-logo">
                        YA-Hoodie
                        </a>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                        <div class="footer_social">
                            <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="">
                            <i class="fa fa-pinterest" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="footer-info">
                <div class="col-lg-7 mx-auto px-0">
                    <p>
                        &copy; <span id="displayYear"></span> All Rights Reserved By
                        <a href="dashboard.php">YA-Hoodie</a>
                    </p>
                </div>
                </div>
            </div>
        </footer>
        <!-- footer section -->
        <div class="cpy_">
            <p>© 2022 All Rights Reserved By <a href="dashboard.html">YA-Hoodie</a></p>
        </div>
        <!-- jQery -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
    </body>
</html>

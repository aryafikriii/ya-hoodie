<?php
    session_start();
    
    include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Checkout</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"/>
    <!-- responsive style -->
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
         <!-- end header section -->
<section class="Checkout">
    <div class="container">
        <h1>
            Checkout
        </h1>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Produk</th>
                    <th>Ukuran</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subharga</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $nomor = 1;
                    $totalbelanja = 0;
                ?>
                <?php foreach($_SESSION['keranjang'] as $id_produk => $jumlah):?>
                <?php
                    $hasil = mysqli_query($mysqli, "SELECT * FROM hoodie WHERE kodeHoodie = '".$id_produk."'");
                    $pecah = $hasil->fetch_assoc();
                    $subharga = $pecah['harga']*$jumlah;
                ?>
                <tr>
                    <td><?php echo $nomor?></td>
                    <td><?php echo $pecah['namaHoodie'];?></td>
                    <td><?php echo $pecah['ukuran'];?></td>
                    <td>Rp. <?php echo number_format($pecah['harga']);?></td>
                    <td><?php echo $jumlah?></td>
                    <td>Rp. <?php echo number_format($subharga);?></td>
                </tr>
                <?php $nomor++;?>
                <?php $totalbelanja+=$subharga;?>
                <?php endforeach?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="5">Total Belanja</th>
                    <th>Rp. <?php echo number_format($totalbelanja); ?></th>
                </tr>
            </tfoot>
        </table>
        <form method="POST">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" readonly value="<?php echo $_SESSION['pelanggan']['fullname'];?>" class="form-control">
                    </div>                    
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" readonly value="<?php echo $_SESSION['pelanggan']['username'];?>" class="form-control">
                    </div>                     
                </div>
                <div class="col-md-4">
                    <select class="form-control"> 
                        <option value=""> Free Ongkir </option> 
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat Pengiriman</label>
                <textarea class="form-control" name="alamat_pemgiriman" placeholder="Masukkan alamat lengkap pengiriman serta nomor penerima di akhir."></textarea>
            </div>
            <button class="btn btn-primary" name="checkout">Checkout</button>
            <div><br></div>
        </form>
        <?php
            if(isset($_POST['checkout']))
            {
                $idUser = $_SESSION['pelanggan']['idUser'];
                $tanggal_pembelian = date('Y-m-d');
                $total_pembelian = $totalbelanja;
                $alamat = $_POST['alamat_pemgiriman'];
                if($alamat == '')
                {
                    echo '<script>alert("Silakan isi alamat pengiriman")</script>';
                }
                else 
                {
                    $hasil = mysqli_query($mysqli, "INSERT INTO pembelian (idUser, tanggal_pembelian, total_pembelian, alamat) VALUES ('$idUser', '$tanggal_pembelian', '$total_pembelian', '$alamat')");
                    $id_pembelian_baru =  $mysqli->insert_id;
                    
                    foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) 
                    {
                        $query = mysqli_query($mysqli, "INSERT INTO pembelian_produk (id_pembelian, kodeHoodie, jumlah) VALUES ('$id_pembelian_baru', '$id_produk', '$jumlah')");
                    }

                    unset($_SESSION['keranjang']);

                    echo '<script>alert("Pembelian berhasil")</script>';
                    echo "<script>location='nota.php?id=$id_pembelian_baru';</script>";                    
                }

            }
        ?>
    </div>
</section>

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
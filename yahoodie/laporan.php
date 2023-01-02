<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Laporan - YA-HOODIE Owner</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles-sb-admin.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
                    <?php
                        include 'db.php';
                        $semuadata=array();
                        $tgl_mulai='-';
                        $tgl_selesai='-';
                        if(isset($_POST["kirim"])) 
                        {
                            $tgl_mulai = $_POST["tglm"];
                            $tgl_selesai = $_POST["tgls"];
                            $ambil = $mysqli->query("SELECT * FROM users us INNER JOIN pembelian pm ON us.idUser=pm.idUser INNER JOIN pembelian_produk pp ON pm.id_pembelian=pp.id_pembelian INNER JOIN hoodie hd ON pp.kodeHoodie=hd.kodeHoodie WHERE tanggal_pembelian BETWEEN '$tgl_mulai' AND '$tgl_selesai'
                                ");
                            while ($pecah = $ambil->fetch_assoc()) 
                            {
                                $semuadata[] = $pecah;
                            }                          
                        }
                    ?> 
        <main>
            <div class="container-fluid px-4">
                <h3 class="mt-4">Laporan Penjualan</h3>
                <hr>
                <div>
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                  <label>Tanggal Mulai</label>
                                  <input type="date" class="form-control" name="tglm">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Tanggal Selesai</label>
                                    <input type="date" class="form-control" name="tgls">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label>&nbsp;</label><br>
                                <button class="btn btn-primary" name="kirim">Lihat Laporan</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <br>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Laporan Pembelian dari <?php echo $tgl_mulai?> sampai <?php echo $tgl_selesai?>
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Pelanggan</th>
                                            <th>Tanggal</th>
                                            <th>Produk</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Pelanggan</th>
                                            <th>Tanggal</th>
                                            <th>Produk</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Total</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 
                                            $total=0;
                                            foreach($semuadata as $key => $value): 
                                            $subharga = $value['harga']*$value['jumlah'];
                                        ?>
                                        <tr>
                                            <td><?php echo $key+1; ?></td>
                                            <td><?php echo $value['fullname']; ?></td>
                                            <td><?php echo $value['tanggal_pembelian']; ?></td>
                                            <td><?php echo $value['namaHoodie']; ?></td>
                                            <td><?php echo $value['harga']; ?></td>
                                            <td><?php echo $value['jumlah']; ?></td>
                                            <td><?php echo $subharga; ?></td>
                                        </tr>
                                        <?php $total+=$subharga;?>
                                        <?php endforeach?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="6">Total Penjualan</th>
                                            <th>Rp. <?php echo number_format($total); ?></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts-owner.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>

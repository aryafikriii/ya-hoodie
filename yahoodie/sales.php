<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sales - YA-HOODIE Owner</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles-sb-admin.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tables Sales Reports</h1>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Sales Reports
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $nomor = 1;
                                            include 'db.php';
                                            $hasil = mysqli_query($mysqli, "SELECT * FROM pembelian JOIN users ON pembelian.idUser=users.idUser");
                                            while ($pecah = $hasil->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $pecah['fullname']; ?></td>
                                            <td><?php echo $pecah['tanggal_pembelian']; ?></td>
                                            <td>Rp. <?php echo number_format($pecah['total_pembelian']);?></td>
                                            <td>
                                                <a class="btn btn-info" href="dashboardOwner.php?halaman=detail&id=<?php echo $pecah['id_pembelian'];?>">Detail</a>
                                            </td>
                                        </tr>
                                        <?php $nomor++;?>
                                        <?php } ?>
                                    </tbody>
                                </table>
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

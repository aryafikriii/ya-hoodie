<div class="container-fluid px-4">
    <div class="card mb-4">
        <div class="card-body">
            <h2>Detail Pembelian</h2>
            <?php
                include 'db.php';
                $hasil = mysqli_query($mysqli, "SELECT * FROM pembelian JOIN users ON pembelian.idUser=users.idUser WHERE pembelian.id_pembelian='$_GET[id]'");
                $detail = $hasil->fetch_assoc()
            ?>
            <strong><?php echo $detail['fullname'];?></strong><br>
            <p>
                Username: <?php echo $detail['username'];?>
            </p>

            <p>
                Tanggal Pembelian: <?php echo $detail['tanggal_pembelian'];?> <br>
                Total: <?php echo $detail['total_pembelian'];?>
            </p> 
            
            <table id="datatablesSimple">
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
        </div>
    </div>
</div>
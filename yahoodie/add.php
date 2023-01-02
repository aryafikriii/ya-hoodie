<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Add Hoodie</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles-sb-admin.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="w-50 mx-auto border p-3 mt-5">
            <a href="dashboardAdmin.php">Back to dashboard</a> 
            <form action="add.php" method="post">
                <label for="kode">Kode</label>
                <input type="text" id="kode" name="kode" class="form-control" required >

                <label for="kode">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" required>

                <label for="kode">Tipe</label>
                <input type="text" id="tipe" name="tipe" class="form-control" required>

                <label for="ukuran">Ukuran</label>
                <select name="ukuran" id="ukuran" class="form-select" required>
                    <option>Pilih Ukuran</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                </select>

                <label for="kode">Harga</label>
                <input type="text" id="harga" name="harga" class="form-control" required>

                <label for="kode">Stock</label>
                <input type="text" id="stock" name="stock" class="form-control" required>

                <input class="btn btn-success mt-3" type="submit" name='tambah' value="Add Data">

            </form>
        </div>
        <?php
            if(isset($_POST['tambah'])){
                $kode = $_POST['kode'];
                $nama = $_POST['nama'];
                $tipe = $_POST['tipe'];
                $ukuran = $_POST['ukuran'];
                $harga = $_POST['harga'];
                $stock = $_POST['stock'];

                $sqlinsert = "INSERT INTO hoodie(kode,nama,tipe,ukuran,harga,stock)
                              VALUES('$kode','$nama','$tipe','$ukuran','$harga','$stock')";
                
            }  
        ?>
    </body>
</html>
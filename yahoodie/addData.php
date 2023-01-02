<?php
include "db.php";
?>

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
            <a href="dataHoodie.php">Back to Hoodie</a> 
            <form action="addData.php" method="post">
                <label for="kodeHoodie">kodeHoodie</label>
                <input type="number" min="1" id="kodeHoodie" name="kodeHoodie" class="form-control" required>

                <label for="idAdmin">idAdmin</label>
                <input type="number" min="1" max="4" id="idAdmin" name="idAdmin" class="form-control" required>

                <label for="namaHoodie">namaHoodie</label>
                <input type="text" id="namaHoodie" name="namaHoodie" class="form-control" required>

                <label for="tipe">Tipe</label>
                <select name="tipe" id="tipe" class="form-select" required>
                    <option>Pilih Tipe</option>
                    <option value="Hoodie">Hoodie</option>
                    <option value="Zipper">Zipper</option>
                    <option value="Street">Street</option>
                    <option value="Pullover">Pullover</option>
                    <option value="Fur">Fur</option>
                    <option value="Sporty">Sporty</option>
                    <option value="Sleeveless">Sleeveless</option>
                    <option value="Flanel">Flanel</option>
                    <option value="Knit">Knit</option>
                    <option value="Crewneck">Crewneck</option>
                    <option value="Jumper">Jumper</option>
                </select>

                <label for="ukuran">Ukuran</label>
                <select name="ukuran" id="ukuran" class="form-select" required>
                    <option>Pilih Ukuran</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>

                <label for="harga">Harga</label>
                <input type="number" min="0" max="999999999" id="harga" name="harga" class="form-control" required>

                <label for="stock">Stock</label>
                <input type="number" min="0" max='999999999'id="stock" name="stock" class="form-control" required>

                <label for="gambar">Gambar</label>
                <input type="text" id="gambar" name="gambar" class="form-control" required>

                <input class="btn btn-success mt-3" type="submit" name="tambah" value="Add Data">

            </form>
        </div>
        <?php
            if(isset($_POST['tambah'])){
                $kodeHoodie = $_POST['kodeHoodie'];
                $idAdmin = $_POST['idAdmin'];
                $namaHoodie = $_POST['namaHoodie'];
                $tipe = $_POST['tipe'];
                $ukuran = $_POST['ukuran'];
                $harga = $_POST['harga'];
                $stock = $_POST['stock'];
                $gambar = $_POST['gambar'];

                $sqlGet = "SELECT * FROM hoodie WHERE kodeHoodie='$kodeHoodie'";
                $queryGet = mysqli_query($mysqli, $sqlGet);
                $cek = mysqli_num_rows($queryGet);

                if ($cek <= 0){
                    $sqlInsert = "INSERT INTO hoodie(kodeHoodie,idAdmin,namaHoodie,tipe,ukuran,harga,stock,gambar)
                    VALUES ('$kodeHoodie','$idAdmin','$namaHoodie','$tipe','$ukuran','$harga','$stock','$gambar')";
                    $queryInsert=mysqli_query($mysqli, $sqlInsert);
                    echo "
                        <div class='alert alert-success'>Data berhasil ditambahkan<a href='dataHoodie.php'> Lihat Data </a></div> 
                    ";
                }else {
                    echo "
                        <div class='alert alert-danger'>Data gagal ditambahkan<a href='dataHoodie.php'> Lihat Data </a></div>
                    ";

                }
            }
            
        ?>
    
    
    </body>
</html>
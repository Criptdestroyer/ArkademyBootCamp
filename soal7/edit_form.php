<?php
    include("config.php");
    //kalau tidak ada id di query setting
    if(!isset($_GET['id'])){
       header('location : list.php');
    }

    $id = $_GET['id'];
    //ambil data dari database
    $sql = "select * from products where id = $id";
    $query = mysqli_query($db,$sql);
    $siswa = mysqli_fetch_assoc($query);

    //jika data query tidak ditemukan
    if (mysqli_num_rows($query)<1) {
        die("data tidak ada");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <h3>Form Edit</h3>
    </header>
    <form action="proses-edit.php" method="post">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">
        <p><label for="nama">Nama : </label><input type="text" name="nama" placeholder="nama Barang" value="<?php echo $siswa['name']; ?>"></p>
        <p><label for="Category">Category : </label>
            <?php $agama = $siswa['category_id']; ?>
            <select name="category">
                <option value="1" <?php echo ($agama == '1') ? "selected":"" ?>>Peralatan Mandi</option>
                <option value="2" <?php echo ($agama == '2') ? "selected":"" ?> >Minuman Kemasan</option>
                <option value="3" <?php echo ($agama == '3') ? "selected":"" ?> >Product Susu</option>
            </select>
        </p>
        <p>
            <input type="submit" value="simpan" name="simpan" />
        </p>
        </fieldset>
    </form>
</body>
</html>
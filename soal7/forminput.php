<!DOCTYPE html>
<html>
<head>
    <title>Form Input Barang</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <h3>Input Barang</h3>
    </header>
    <form action="proses-input.php" method="post">
        <fieldset>
        <p><label for="nama">Nama : </label><input type="text" name="nama" placeholder="nama Barang"></p>
        <p><label for="category">Category : </label>
            <select name="category">
                <option value="1">Peralatan Mandi</option>      
                <option value="2">Minuman Kemasan</option>
                <option value="3">Produk Susu</option>
            </select>
        </p>
        <p><input type="submit" value = "input" name="input"><input type="reset" value="reset" name="hapus"></p>
        </fieldset>
    </form>
    
</body>
</html>
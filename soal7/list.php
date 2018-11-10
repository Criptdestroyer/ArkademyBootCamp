<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>List Products</title>
</head>

<body>
    <header>
        <h3>List Product</h3>
    </header>

    <nav>
        <a href="form-input.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Tanggal</th>
			<th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM products";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
			$string;
			if($siswa['category_id']==1){
				$string = "Peralatan Mandi";
			}else if($siswa['category_id']==2){
				$string = "Minuman Kemasan";
			}else{
				$string = "Product Susu";
			}
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['name']."</td>";
            echo "<td>".$string."</td>";
            echo "<td>".$siswa['created_date']."</td>";

            echo "<td>";
            echo "<a href='edit_form.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>
<?php
    include("config.php");
    if(isset($_POST['simpan'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $kategori = $_POST['category'];

        $sql = "update products set name='$nama',category_id='$kategori' where id= $id";
        $query = mysqli_query($db,$sql);
        if($query){
            header("location : list.php");
        }else{
            die("gagal menyimpan");
        }

    }else{
        die("akses dilarang");
    }
?>

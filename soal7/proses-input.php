<?php
    include("config.php");
    if(isset($_POST['input'])){
        
        $nama = $_POST['nama'];
        $category = $_POST['category'];


        $sql = "INSERT INTO products values (null,'$nama', '$category',current_date)";
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: forminput.php?status=sukses');
        }else{
            header('Location: forminput.php?status=gagal');
        }

    }else{
        die("akses dilarang");
    }
?>
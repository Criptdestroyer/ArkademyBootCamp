<?php
    include("config.php");
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "delete from products where id = $id";
        $query = mysqli_query($db,$sql);
        if($query){
            header('location: list.php');
        }else{
           die('gagal menghapus'); 
        }
    }else{
        die('akses dilarang');
    }
?>
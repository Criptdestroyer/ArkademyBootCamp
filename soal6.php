<?php
    $query = "select product_categories.id,product_categories.name,count(products.id) as Jumlah_product from product_categories 
                inner join products on product_categories.id = products.category_id group by id, name";
    //database ada di folder dengan nama file arkademy.sql
?>  
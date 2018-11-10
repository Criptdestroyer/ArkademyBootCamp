<?php
    function segitigaAsli($n){
        for ($i=1; $i <=$n ; $i++) { 
            echo "<p>";
            for ($j=1; $j <=$i ; $j++) { 
                echo $j.", ";
            }
            echo "</p>";
        }
    }
    $n = 7;
    if($n>10){
        echo "error, maksimal 10";
    }else{
        segitigaAsli($n);
    }
    
?>
<?php
    function count_handsake($n){
        $total = 0;
        for ($i=0; $i < $n; $i++) { 
            for ($j=$i+1; $j < $n; $j++) { 
                $total = $total+1;
            }
        }
        return $total;
    }
    echo count_handsake(3);
    echo count_handsake(6);
?>
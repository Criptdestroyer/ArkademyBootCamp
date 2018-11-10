<?php
    function myCountChar($string,$char){
        $total = 0;
        for ($i=0; $i < strlength($string); $i++) { 
            if($string{$i}==$char){
                $total = $total+1;
            }
        }
        return $total;
    }

    function strlength($string){
        $total = 0;
        $i = 0;
        while ($string{$i} != null) {
            $total = $total +1;
            $i++;
        }
        return $total;
    }

    echo myCountChar("bootcamp",'o');
    echo myCountChar("arkademy",'k');
?>
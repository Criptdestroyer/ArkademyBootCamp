<?php
    function product($itemId, $itemName,$price, $availableColorAndSize, $freeShipping)
    {
        return ["itemId"=>$itemId,"itemName"=>$itemName,"price"=>$price,"availableColorAndSize"=>$availableColorAndSize,"freeShiping"=>$freeShipping];
    }
    var_dump(product("12341822","basic t-shirt",70000,["red"=>['S','M','L'],"solid black"=>['M','L']],false));
?>
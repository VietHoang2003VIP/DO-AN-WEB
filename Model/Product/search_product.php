<?php
    if($key!=""){
        $pvalues=$db->SearchProduct($key);
        $p_quantity=$db->num_rows();
    }
?>
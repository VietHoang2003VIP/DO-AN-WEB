<?php

    $action=isset($_GET['action'])?$_GET['action']:'';
    switch ($action) {
        case 'cart':
           
            break;
        case 'account':

            break;

        case 'info':

            break;
        case 'search':
            if(isset($_GET['txtKey'])){
                $key=$_GET['txtKey'];
                
                require('Model/Product/search_product.php');
            }
            require_once('View/Product/search_product.php');
            break;
        case 'home':
            
            
            require('View/Home/HomePage.php');           
            break;
        default:
           
            require('View/Home/HomePage.php');
            break;
    }
    
?>
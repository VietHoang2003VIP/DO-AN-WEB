<?php
    $action=isset($_GET['action'])?$_GET['action']:$action;
    switch ($action) {
        case 'add':
            require('View/Product/add_product.php');
            break;
        case 'delete':
            require('View/Product/delete_product.php');
            break;

        case 'edit':
            require('View/Product/edit_product.php');
            break;

        case 'detail':
            require('Model/Product/detail_product.php');
            require('View/Product/detail_product.php');
            
            break;
        case 'list':
            $cid=$_REQUEST['cid'];
            require('Model/Product/list_product.php');
            require('View/Product/list_product.php');
            break;
        case 'get_list_product_by_sql':
            $action="getDataBySQL";    
            require('Model/Product/list_product.php');
            break;
        case 'get_list_product_by_cid':
            $action="getDataBySQL"; 
            $sql="SELECT*FROM Product WHERE cid=".$_GET['cid'];
            require("Model/Product/list_product.php");
            require("View/Product/list_product.php");
            break;
        default:
            
            break;
    }
    ?>
<?php
    $action=isset($_GET['action'])?$_GET['action']:'';
    switch ($action) {
        case 'add':
           
            break;
        case 'delete':

            break;

        case 'edit':

            break;

        case 'view':{
            require_once('View/Categories/view_categories.php');
            break;
        }
        case "list":
            require('View/Categories/list_categories.php');
            break;
        default:{
            require_once('View/Categories/view_categories.php');
            break;
        }
    }
?>
<?php
    $action=isset($_GET['action'])?$_GET['action']:'';
    switch ($action) {
        case 'add':
            require_once('View/add_user.php');
            break;
        case 'delete':
            require_once('View/delete_user.php');
            break;
        case 'edit':
            require_once('View/edit_user.php');
            break;
        case 'list':
            $data=$db->getAllData("User");     
            require_once('View/view_user.php');
            break;
        default:
            $tblTable="Categories";
            $data=$db->getAllData($tblTable);
            require_once('View/view_user.php');
            break;
    }
?>
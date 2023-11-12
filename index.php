<?php
    include 'Model/DBConfig.php';
    $db=new Database;
    $db->connect();
    $controller=isset($_GET['controller'])?$_GET['controller']:'';
    switch ($controller) {
        case 'Categories':
            $action=isset($_GET['action'])?$_GET['action']:'';
            require_once('./Controller/Categories/index.php');
            break;
        case 'Product':
            
            $p_action=isset($_GET['action'])?$_GET['action']:'';
            require_once('./Controller/Product/index.php');
            break;
        case 'Home':
            $action=isset($_GET['action'])?$_GET['action']:'';
            require_once('./Controller/Home/index.php');
            break;
        case "Account":
            $action=isset($_GET['action'])?$_GET['action']:'';
            require_once("./Controller/Account/index.php");
            break;
        case "NewInfo":
            $action=isset($_GET['action'])?$_GET['action']:'';
            require_once("./Controller/NewInfo/index.php");
            break;
        case "Cart":
            $action=isset($_GET['action'])?$_GET['action']:'';
            require_once("./Controller/Cart/index.php");
            break;
        case "OldProduct":
            $action=isset($_GET['action'])?$_GET['action']:'';
            require_once("./Controller/OldProduct/index.php");
            break;
        default:
            $action=isset($_GET['action'])?$_GET['action']:'';
            require_once('./Controller/Home/index.php');
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">

<body>

</body>

</html>
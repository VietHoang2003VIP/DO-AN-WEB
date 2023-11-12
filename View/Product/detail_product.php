<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
* {
    margin: 0;
    padding: 0;
}

html,
body {
    height: 100%;
    width: 100%;
}

img {
    height: 250px;
    width: 250px;
}

.content {
    height: auto;
    width: 100%;
}
</style>

<body>

    <div class="content">
        <?php
    require_once "View/Home/Header.php";            
    require_once "View/Home/Menu.php";  
           
?>
        <div class="Product">
            <img src="View/Images/<?php echo $p_value['pimage']?>" alt="">
            <br>
            <?php
            echo $p_value['pimage']."<br>";
            echo $p_value['pname']."<br>";
            echo $p_value['pdesc']."<br>";
            echo $p_value['pid']."<br>";
            echo $p_value['pstatus']."<br>";
            echo $p_value['pprice']."<br>";
            echo $p_value['pquantity']."<br>";
            echo $p_value['cid']."<br>";
            echo $p_value['colorid']."<br>";

        ?>
            <div class="Product-Reviews">


            </div>
            <div class="aaa">
                <!--ask and answer - hỏi và đáp-->

            </div>
            <?php
            require_once "View/Home/Footer.php";
        ?>
        </div>


    </div>
</body>


</html>
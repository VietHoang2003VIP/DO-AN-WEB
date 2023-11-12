<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.Product {
    height: 350px;
    width: 20%;
    float: left;
    border: 1px black solid;
    color: black;
}

.Content {
    height: auto;
    width: 100%;
    background-color: bisque;
    float: left;

}


.Product-Price {
    color: black;
    font-style: italic;
}

.List-Product {
    width: 90%;
    height: auto;
    display: inline-block;
}
</style>

<body>
    <div class="Content">
        <?php
require "View/Home/Header.php";
require "View/Home/Menu.php";
require "View/Home/left.php";
?>
        <div class="List-Product">
            <?php 
        if($p_quantity==0){
            echo "danh sach san pham rong";
        }
        else{
            foreach ($pvalues as $p_value) { 
                ?>
            <a href="../DO_AN_WEB/index.php?controller=Product&action=detail&pid=<?php echo $p_value['pid'];?>">
                <div class="Product">
                    <div class="Product-Image">
                        <img src="View/Images/<?php echo $p_value['pimage'];?>" alt="" height=250px width=100%>
                    </div>
                    <div class="Product-Name">
                        <?php
                            echo $p_value['pname'];
                        ?>
                    </div>
                    <div class="Product-Price">
                        <?php
                        echo $p_value['pprice']."VND";
                        ?>
                    </div>

                </div>
            </a>
            <?php
            }
        }
       
         

        ?>
        </div>
        <?php 
        require "View/Home/footer.php";
        ?>

    </div>

</body>

</html>
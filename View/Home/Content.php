<?php
    
?>
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
    width: 1550px;
    box-sizing: border-box;
}

.Content {
    height: auto;
    width: 80%;
    background-color: bisque;
    float: left;
    margin-left: 10%;
    box-sizing: border-box;
}



.Product {
    height: 350px;
    width: 24%;
    float: left;
    border: 1px black solid;
    color: black;
}



.Product-Price {
    color: black;
    font-style: italic;
}

.categories {
    height: 50px;
    width: 100%;
    line-height: 50px;
}

.List-Product {
    width: 100%;
    height: auto;
    display: inline-block;
}
</style>

<body>
    <div class="Content">
        <?php
            $c_action="list";
            require "controller/Categories/index.php";
            foreach ($cvalue as $c_value) {
                echo "<div class='categories'>". $c_value['cname']."Nổi Bật</div>";
            ?>

        <div class="List-Product">
            <?php
            $action="get_list_product_by_sql";
            $sql="SELECT*FROM Product where cid=".$c_value['cid']."  ORDER BY psold DESC LIMIT 4";         
            require "Controller/Product/index.php";
            if($p_quantity>0){
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
        echo "</div>";
            }
        ?>
        </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.Header {
    width: 80%;
    margin-left: 10%;
    height: 60px;
    background-color: brown;
    display: flex;
    justify-content: space-around;
}

.container {
    margin-top: 10px;

}

input {
    height: 40px;
    width: 600px;
    font-size: 15px;
}

button {
    height: 40px;
    width: 80px;
    margin-left: 0;
}

.Logo,
.Account,
.NewInfomation,
.Cart,
.OldProduct {
    line-height: 60px;
}

a {
    text-decoration: none;
}
</style>

<body>
    <?php
    
    ?>
    <div class="Header">
        <div class="Logo">
            <a href="../DO_AN_WEB/index.php">FPT SHOP</a>
        </div>
        <div class="container">
            <form action="" method=get>
                <input type="hidden" name="Controller" value="Home">
                <input type="text" name="txtKey">
                <button type="submit" name="btnSearch">Search</button>
                <input type="hidden" name="action" value="search">
            </form>
        </div>
        <div class="Account">
            <a href="../DO_AN_WEB/index.php?controller=Account">Account</a>
        </div>
        <div class="NewInfomation">
            <a href="../DO_AN_WEB/index.php?controller=NewInfo">Thông tin mới</a>
        </div>
        <div class="Cart">
            <a href="../DO_AN_WEB/index.php?controller=Cart">Cart</a>
        </div>
        <div class="OldProduct">
            <a href="../DO_AN_WEB/index.php?controller=OldProduct">Hàng cũ</a>
        </div>

    </div>
</body>

</html>
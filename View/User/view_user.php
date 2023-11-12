<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>thong tin ca nhan</h1>
</body>
<table>
    <?php
    foreach ($data as $value) {
?>
    <tr>
        <td><?php echo $value['cid']?></td>
        <td><?php echo $value['cname']?></td>
        <td><?php echo $value['cimage']?></td>
        <td><?php echo $value['cdesc']?></td>
        <td><?php echo $value['cstatus']?></td>
    </tr>
    <?php
    }
?>
</table>


</html>
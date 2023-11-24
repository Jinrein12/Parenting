<?php

    require ("data/pages.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page["title"]?></title>

    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/<?= $page["stylesheet"]?>">

</head>
<body>
    <?php
        if($error){
                require ("pages/".$page["file"]);
        }else{
                require ("elements/header.php");
                require ("pages/".$page["file"]);
                require ("elements/footer.php");
        };
    ?>
</body>
</html>
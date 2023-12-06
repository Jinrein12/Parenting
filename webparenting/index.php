 <?php

    require ("data/pages.php");
    require ("_config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= CSS_PATH?>header.css">
    <link rel="stylesheet" href="<?= CSS_PATH?>footer.css">
    <link rel="stylesheet" href="<?= CSS_PATH?><?= $page["stylesheet"]?>">

    <title><?=$page["title"]?></title>

</head>
<body>
    <?php
        if($error){
                require ("pages/".$page["file"]);
        }else{
            if( $urlSegments[3] != "login")
                require (ELEMENTS."header.php");
                require (PAGE_PATH.$page["file"]);
            
            if( $urlSegments[3] != "login ")
                require (ELEMENTS."footer.php");
        }
        if ($_POST) {
            $username = isset($_POST["username"]) ? $_POST["username"] : "";
            $password = isset($_POST["password"]) ? $_POST["password"] : "";
        }
            
        


    ?>
</body>
</html>
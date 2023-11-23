<?php

    $pages = array("topics", "home", "attendance", "search", "404");

    $pages = array(
        "topics" => array (
                        "title" => "Home",
                        "style" => "topics.css",
                        "page" => "topics.php"
        ),
        "home" => array (
                        "title" => "Home",
                        "style" => "topics.css",
                        "page" => "topics.php"
                    ),
        "attendance" => array(
                        "title" => "Attendance Report",
                        "style" => "attendanceSummary.css",
                        "page" => "/attendanceSummary.php"
        ),
        "search" => array(
                        "title" => "Search",
                        "style" => "search-style.css",
                        "page" => "/search.php"
        ),
        "404" => array (
                        "title" => "Page not Found",
                        "style" => "404.css",
                        "page" => "404.php"     
        )
);
       
    $error = false;
    $page = $pages["topics"];

    $urlSegments = (explode("/",parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    // print_r ($urlSegments[3]);

    if(array_key_exists("3", $urlSegments) && !empty ($urlSegments[3])){
            
            if(array_key_exists($urlSegments[3], $pages)){
               
                $page = $pages[$urlSegments[3]];       
            
            }else{
            
                $page = $pages["404"];
                $error = true;
        }
};

    echo "<pre>";
        print_r($page);
    echo "</pre>";
// exit();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page["title"] ?></title>

    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/navBar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/<?= $page["style"]?>">

</head>
<body>
    <?php
        if($error){
                require ("pages/".$page["page"]);
        }else{
                require ("elements/header.php");
                require ("pages/".$page["page"]);
                require ("elements/footer.php");
        };
    ?>
</body>
</html>
<?php
    $pages = array(
        "main" => array (
                        "title" => "Home",
                        "style" => "home-style.css",
                        "page" => "main.php"
        ),
        "attendance" => array(
                        "title" => "Attendance Report",
                        "style" => "attendance-report-style.css",
                        "page" => "pages/attendance-report.php"
        ),
        "search" => array(
                        "title" => "Search",
                        "style" => "search-style.css",
                        "page" => "pages/search.php"
        ),
        "404" => array (
                        "title" => "Page not Found",
                        "style" => "404.css",
                        "page" => "404.php"     
        )
);


$urlSegments = (explode("/",parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
// print_r ($urlSegments[3]);       

$page = $pages["main"];
$error = false;
if(array_key_exists("3", $urlSegments)){
if(array_key_exists($urlSegments[3], $pages)){
    $page = $pages[$urlSegments[3]];       
}else{
    $page = $pages["404"];
    $error = true;
}
};

//     echo "<pre>";
//         print_r($page);
//     echo "</pre>";
// exit();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/topics.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/navBar.css">
    link
</head>
<body>
    <?php
        require ("elements/header.php");
        require ("elements/navBar.php");
        require ("elements/topics.php");
    ?>
</body>
</html>
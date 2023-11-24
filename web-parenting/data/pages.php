<?php


$pages = array(
    "dashboard" => array 
                (
                    "id" => 2,
                    "page" => "Home",
                    "title" => "Home",
                    "stylesheet" => "dashboard.css",
                    "script" => "",
                    "file" => "dashboard.php"
                ),
    "attendance" => array
                (
                    "id" => 3,
                    "page" => "Attendance Report",
                    "title" => "Attendance Report",
                    "stylesheet" => "attendanceSummary.css",
                    "script" => "",
                    "file" => "attendanceSummary.php"
                ),
    "search" => array(
                    "id" => 4,
                    "page" => "Search",
                    "title" => "Search",
                    "stylesheet" => "searchStudent.css",
                    "script" => "",
                    "file" => "searchStudent.php"
                ),
    "404" => array (
                    "id" => 5,
                    "page" => "Page not Found",
                    "title" => "Page not Found",
                    "stylesheet" => "404.css",
                    "script" => "",
                    "file" => "404.php"     
                )
);
   
$error = false;
$page = $pages["dashboard"];

$urlSegments = (explode("/",parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ));


if(array_key_exists("3", $urlSegments) && !empty ($urlSegments[3])){
        
        if(array_key_exists($urlSegments[3], $pages)){
           
            $page = $pages[$urlSegments[3]];       
        
        }else{
        
            $page = $pages["404"];
            $error = true;
    }
};

    // echo "<pre>";
    //     print_r($page);
    // echo "</pre>";
        // exit();

?>
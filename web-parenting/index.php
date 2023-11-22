<?php
//    //indexed array

// $page = array("s", "b", "d");    
// $page [100]= "sample";
// $page [0]="test";

///////////////////////////////////////////

//associated array
// $page = array (
//                 "title"=>"dashboard",
//                 "stylesheet" => "dashboard.css",
//                 "script"=>"dashboard.js"
// );

    /////////////////////////////////////////

//     $main = array (
//                     "title"=>"search",
//                     "stylesheet" => "style.css",
//                     "script"=>"__"
//     );

//     $search = array (
//                     "title"=>"search",
//                     "stylesheet" => "search-style.css",
//                     "script"=>"__"
//     );
    
//     $attendanceReport = array (
//                     "title"=>"attendance report",
//                     "stylesheet" => "attendance-report-style.css",
//                     "script"=>"__"
//     );

// ////////////////////////////////////////

// $mda = array(
//         array ("a", "b", "c"),
//         array ("x", "y", "z")
//     );
// $mda[1]["z"]="abc";


// change value
// specify key, change value
// print_r($page["title"] = "admin");

// $students = array(
//                 array(  "first_name"=>"No",
//                         "last_name" =>"Entry", 
//                         "section"=>"A",
//                         "batch"=>33),
            
//                 array(  "first_name"=>"Stay",
//                         "last_name" =>"Safe", 
//                         "section"=>"B",
//                         "batch"=>34),

//                 array(  "first_name"=>"Technical",
//                         "last_name" =>"School", 
//                         "section"=>"C",
//                         "batch"=>35),
        
//                 array(  "first_name"=>"Proper",
//                         "last_name" =>"Grooming", 
//                         "section"=>"D",
//                         "batch"=>36),     
// );
// $students[] = $mda;

// test area
//     echo "<pre>";
//     print_r($students);
//           print_r($page["keyword"] = "dashboard");
//     echo "</pre>";
// include ("elements/header.php");
// $pages = array ("a", "b", 1 , 0.5);


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
    if(array_key_exists("4", $urlSegments)){
        if(array_key_exists($urlSegments[4], $pages)){
            $page = $pages[$urlSegments[4]];       
        }else{
            $page = $pages["404"];
            $error = true;
        }
    };

    //     echo "<pre>";
    //         print_r($page);
    //     echo "</pre>";
    // exit();

    $searchData = array (
            array (
                "first name" => "First Name",
                "last name" => "Last Name",
                "batch" => "Batch",
                "section" => "Section",
                "adviser" => "Adviser",
            ),
            array (
                "first name" => "First Name",
                "last name" => "Last Name",
                "batch" => "Batch",
                "section" => "Section",
                "adviser" => "Adviser",
            )
        );
        
        echo "<pre>";
            print_r($searchData);
    exit();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parenting Attendance</title>
    <link rel="stylesheet" href="assets/css/header-nav-style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/css/<?= $page["style"] ?>" >
</head>
<body>
    
    <?php
        // if($error ){
        //         require ("pages/".$page["page"]);
        // }else{
        //     require ("elements/header.php");
        //     require ("elements/main.php");
        //     require ("elements/footer.php");
        // };
        
    ?>

</body>
</html>
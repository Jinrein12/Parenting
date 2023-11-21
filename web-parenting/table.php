<?php

$students = array(
                array(  "first_name"=>"No",
                        "last_name" =>"Entry", 
                        "section"=>"A",
                        "batch"=>33),
               
                array(  "first_name"=>"Stay",
                        "last_name" =>"Safe", 
                        "section"=>"B",
                        "batch"=>34),

                array(  "first_name"=>"Technical",
                        "last_name" =>"School", 
                        "section"=>"C",
                        "batch"=>35),
        
                array(  "first_name"=>"Proper",
                        "last_name" =>"Grooming", 
                        "section"=>"D",
                        "batch"=>36),     
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Section</th>
                <th>Batch</th>
            </tr>
        </thead>
   
        <tbody>
            <?php
                foreach ($students as $row){    
                    echo "<tr>";
                    foreach ($row as $column => $value){
                        // echo "$column => $value";
                        echo "<td>$value</td>";
                    }   
                    echo "</tr>";
                }
                exit();
            ?>
        </tbody>
   
    </table>

</body>
</html>
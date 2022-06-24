<?php

require_once __DIR__ . "/database.php";

header("Content-type: application/json");

$filter = $_GET["filter"];

if ($filter == "all"){
    echo json_encode($database);    
}else{
    $filtered_array = [];
    foreach ($database as $album){
        if ($album['genre'] == $filter){
            $filtered_array[] = $album;
        }
    }
    echo json_encode($filtered_array);
}


?>
<?php

require_once __DIR__ . "/database.php";

header("Content-type: application/json");




if (empty($_GET) || $_GET['filter'] == "all"){
    echo json_encode($database);    
}else{
    $filter = $_GET["filter"];
    $filtered_array = [];
    foreach ($database as $album){
        if ($album['genre'] == $filter){
            $filtered_array[] = $album;
        }
    }
    echo json_encode($filtered_array);
}


?>
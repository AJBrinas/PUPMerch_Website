<?php 
//     class Database 
//     {

//     }

    // Including configuration + Fetching data from SQL 
    require_once 'config.php';

    $sql = "SELECT cat_id, cat_title FROM categories ORDER BY cat_id ASC";
    $query = $connect->prepare($sql);
    $query->execute();
    $categories = $query->fetchAll(PDO::FETCH_ASSOC);


 ?>
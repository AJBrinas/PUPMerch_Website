<?php
require_once '../config/config.php';

    $get_id=$_GET['cat_id'];
    $sql = "Deelete from categories where cat_id = '$get_id'";

    $conn->exec($sql);
    header('location:category.php');

?>
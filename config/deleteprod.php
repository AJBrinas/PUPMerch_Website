<?php
    include 'config.php';

    $deleteprodID = $_GET['id'];
    $name = $_GET['name'];
    
    $db = new Database;
    $db->deleteproducts($name, $deleteprodID);
    header('Location: ../admin/products.php?Success');
?>
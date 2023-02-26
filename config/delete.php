<?php
    include 'config.php';

    $deleteID = $_GET['id'];
    $name = $_GET['name'];
    // echo $deleteID, ' <br /> ', $name;

    $db = new Database;
    $db->delete($name, $deleteID);
    header('Location: ../admin/category.php?Success');
?>
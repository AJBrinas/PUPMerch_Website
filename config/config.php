<?php 

    // Configuration 
    $host = "ANDREW\SQLEXPRESS"; // Server Name
    $user = "";
    $pass = "";
    $db_name = "merch_db"; // Database Name

    try{
        $connect = new PDO("sqlsrv:Server=$host;Database=$db_name", $user, $pass); // PDO dll Required
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        die("Unsuccessful Connection BOBO!: ".$e->getMessage());
    }
?>
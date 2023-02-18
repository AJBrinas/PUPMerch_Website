<?php

use LDAP\Result;

class Database {
    // Configuration 

    private $db_host = "ANDREW\SQLEXPRESS"; // Server Name
    private $user = "";
    private $pass = "";
    private $db_name = "merch_db"; // Database Name

    public function db_conn()
    {
        try{
            $connect = new PDO("sqlsrv:Server=$this->db_host;Database=$this->db_name", $this->user, $this->pass); // PDO dll Required
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return true;
        } 
        catch (PDOException $e){
            die("Unsuccessful Connection: ".$e->getMessage());
            return false;
        }
    }

    public function read($query)
    {
        $conn = $this->db_conn();
        $result = mysqli_query($conn, $query);
        
        if(!$result)
        {
            return false;
        }
        
    }

}

$DB = new Database();

$query = "SELECT * FROM categories";
$data = $DB->read($query);
//-----------------------------------------------------------------------
    // $db_host = "ANDREW\SQLEXPRESS"; // Server Name
    // $user = "";
    // $pass = "";
    // $db_name = "merch_db"; // Database Name

    // try{
    //     $connect = new PDO("sqlsrv:Server=$db_host;Database=$db_name", $user, $pass); // PDO dll Required
    //     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo 'Fuck this';
    // } catch (PDOException $e){
    //     die("Unsuccessful Connection: ".$e->getMessage());
    // }
?>
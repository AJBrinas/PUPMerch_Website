<?php 

class Database {
    // Configuration 

    private $db_host = "ANDREW\SQLEXPRESS"; // Server Name
    private $user = "";
    private $pass = "";
    private $db_name = "merch_db"; // Database Name

    public function conn()
    {
        try{
            $connect = new PDO("sqlsrv:Server=$this->db_host;Database=$this->db_name", $this->user, $this->pass); // PDO dll Required
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return;
        } catch (PDOException $e){
            die("Unsuccessful Connection: ".$e->getMessage());
        }
    
    }

}

$this->conn();
?>



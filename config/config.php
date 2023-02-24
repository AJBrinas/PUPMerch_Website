<?php

use LDAP\Result;

class Database 
{
    // Configuration 

    private $db_host = "sqlsrv:Server=ANDREW\SQLExpress;Database=likhamerch_db"; // Server Name
    private $user = "";
    private $pass = "";
    private $c = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    private $result = array();
    protected $connect;

    public function connections()
    {
        try{
            $this->connect = new PDO($this->db_host, $this->user,$this->pass,$this->c);
            // echo 'Panget si janna';
            return $this->connect;
        } 
        catch (PDOException $e){
            die("Unsuccessful Connection: ".$e->getMessage());
        }
    }

    public function select($table, $row = '*')
    {
        $database = new Database;
        $db = $database->connections();
        $sql = "SELECT $row FROM $table;";

        $query = $db->query($sql);
        $this->result = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getResults()
    {
        $values = $this->result;
        $this->result = array();
        return $values;
    }

    public function update()
    {

    }
    
}


?>
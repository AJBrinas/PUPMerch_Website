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

    public function insert()
    {
        $database = new Database;
        $db = $database->connections();
        $sql = "INSERT INTO $table ()";
    }
}


// $DB = new Database();
// $DB->connections();
// $query = "SELECT * FROM categories";
// $data = $DB->c_list($query);
//-----------------------------------------------------------------------
    // $db_host = "ANDREW\SQLEXPRESS"; // Server Name
    // $user = "";
    // $pass = "";
    // $db_name = "likhamerch_db"; // Database Name

    // try{
    //     $connect = new PDO("sqlsrv:Server=$db_host;Database=$db_name", $user, $pass); // PDO dll Required
    //     $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     // echo 'Fuck this';
    // } catch (PDOException $e){
    //     die("Unsuccessful Connection: ".$e->getMessage());
    // }

    //-------------------------------------------------------------------------
    // require_once 'config.php';


    // if (isset($_POST['userSubmit'])){
    //     $fname = $_POST['Fname'];
    //     $cnt = $_POST['country'];

    //     $sql = "INSERT INTO Members (FirstName, Country) VALUES (?,?);";
    //     $sd = array(&$fname, &$cnt);
    //     $query = $connect->prepare($sql);
    //     $insert = $query->execute($sd);
    //     }


    // header('location:index.php?Success');


?>
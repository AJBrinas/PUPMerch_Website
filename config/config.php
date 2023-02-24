<?php 

<<<<<<< Updated upstream
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
=======
use LDAP\Result;

class Database 
{
    // Configuration 

    private $db_host = "sqlsrv:Server=DESKTOP-GS1C0IK\SQLEXPRESS;Database=likhamerch_db"; // Server Name
    private $user = "";
    private $pass = "";
    private $c = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    private $result = array();
    protected $connect;

    public function connections()
    {
        try{
            $this->connect = new PDO($this->db_host, $this->user,$this->pass,$this->c);
            echo 'Panget si janna';
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

    public function getResults() //for viewing data
    {
        $values = $this->result;
        $this->result = array();
        return $values;
    }

    public function insertcat($params)
    {
        $database = new Database;
        $db = $database->connections();

        $sql = "INSERT INTO categories (cat_title) VALUES ('$params')";
        $query = $db->query($sql);
        
    }

    public function insert_prod($p_id, $pt, $pp, $pd, $pi, $pq, $pk, $pv, $ps){
        $database = new Database;
        $db = $database->connections();

        $sql = "INSERT INTO product (product_cat, product_title,product_price,product_desc,product_image,product_qty,product_keywords,product_views,product_status) VALUES ('$p_id, $pt, $pp, $pd, $pi, $pq, $pk, $pv, $ps')";
        $query = $db->query($sql);
        header ('Location: products.php');
    }

    public function insertimg($id, $name, $img)
    {
        $database = new Database;
        $db = $database->connections();

        $sql = "INSERT INTO samp_tb (img_id, img_name, img_img) VALUES ('$id', '$name', '$img')";
        $query = $db->query($sql);
        
    }
    // public function insert($table, $params=array())
    // {
    //     $database = new Database;
    //     $db = $database->connections();

    //     if($this->tableExists($table)){

    //     $table_columns = implode(', ',array_keys($params));
    //     $table_value =implode("', '", $params);
    //     // echo $arr_value; exit;

    //     $sql="INSERT INTO $table ($table_columns) VALUES ('$table_value')";

    //     $this->myQuery = $sql; // Pass back the SQL
    //  // Make the query to insert to the database
    //     if($this->mysqli->query($sql)){
    //     array_push($this->result,$this->mysqli->insert_id);
    //      //return true; // The data has been inserted
    // }else{
    //     array_push($this->result,$this->mysqli->error);
    //      return false; // The data has not been inserted
    // }
    // }else{
    //    return false; // Table does not exist
    // }
    // }
    
}

>>>>>>> Stashed changes
?>
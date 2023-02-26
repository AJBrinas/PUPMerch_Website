<?php

use LDAP\Result;

class Database 
{
    // Configuration 
    
    // Server Name
    private $db_host = "sqlsrv:Server=DESKTOP-D105JGC\SQLEXPRESS;Database=likhamerch_db";
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

    public function addCategory($categoryName)
    {
        $database = new Database;
        $db = $database->connections();
        $sql = "INSERT INTO categories (cat_title)
                VALUES ('$categoryName')";
        $query = $db->query($sql);
    }
    
    // Editing Categories
    public function editCategory($categoryID, $categoryName)
    {
        $database = new Database;
        $db = $database->connections();
        $sql = "UPDATE categories 
                SET cat_title = ?
                WHERE cat_id = ?";
        $param = array(&$categoryName, &$categoryID);
        $query = $db->prepare($sql);
        $run = $query->execute($param);
    }

    // Deleting for all
    public function delete($table, $id)
    {
        $database = new Database;
        $db = $database->connections();
        $sql = "DELETE FROM $table
                WHERE  cat_id=$id";
        $query = $db->prepare($sql);
        $query->execute([$id]);
    }
    public function deleteproducts($table, $id)
    {
        $database = new Database;
        $db = $database->connections();
        $sql = "DELETE FROM $table
                WHERE  product_id=$id";
        $query = $db->prepare($sql);
        $query->execute([$id]);
    }


    public function addProduct($cat_id, $title, $price, $desc, $img, $qty, $key, $status)
    {
        $database = new Database;
        $db = $database->connections();
        $sql = "INSERT INTO products (product_cat,product_title,product_price,product_desc,product_image,product_qty,product_keywords,product_status)
                VALUES (?,?,?,?,?,?,?,?)";
        $params = array(&$cat_id, &$title, &$price, &$desc, &$img, &$qty, &$key, &$status);
        $query = $db->prepare($sql);
        $run = $query->execute($params);
    }

     public function customer($lname, $fname, $address, $city, $phone, $email, $username, $password)
    {
        $database = new Database;
        $db = $database->connections();
        $sql = "INSERT INTO customer (cust_id, cust_fname, cust_lname, 
        cust_uname, cust_email, cust_pass, cust_mobile, cust_address,cust_city) VALUES
        (2,?,?,?,?,?,?,?,?)";
        $params = array($fname, $lname, $username, $email, $password, $phone, $address, $city);
        $query = $db->prepare($sql);
        $run = $query->execute($params);
    }

     public function checkUser($username, $password)
    {
        $database = new Database;
        $db = $database->connections();
        $sql = "SELECT * from customer WHERE cust_uname = '$username' and cust_pass = '$password'";
        $params = array($username, $password);
        $query = $db->prepare($sql);
        $run = $query->execute($params);
    }
    public function editprod($catID, $title, $price, $desc, $img, $qty, $status){
    $database = new Database;
    $db = $database->connections();
    $sql = "UPDATE products
            SET cat_id = ?, product_title =?, product_price=?, product_desc=?, product_image=?, product_qty=?, product_status=?
            WHERE product_id = ?";
    $param = array(&$catID, &$title, &$price, &$desc, &$img, &$qty, &$status);
    $query = $db->prepare($sql);
    $this->result = $query->fetchAll(PDO::FETCH_ASSOC);
}
}
?>

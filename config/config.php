<?php

// use LDAP\Result;

// class Database 
// {
//     // Configuration 

//     private $db_host = "ANDREW\SQLEXPRESS"; // Server Name
//     private $user = "";
//     private $pass = "";
//     private $db_name = "merch_db"; // Database Name

//     public function db_conn()
//     {
//         // try{
//             $connect = new PDO("sqlsrv:Server=$this->db_host;Database=$this->db_name", $this->user, $this->pass); // PDO dll Required
//             $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//             echo 'Panget si janna';
//             // return true;
//         // } 
//         // catch (PDOException $e){
//         //     die("Unsuccessful Connection: ".$e->getMessage());
//         //     return false;
//         // }
//     }

//     public function read($query)
//     {
//         $conn = $this->db_conn();
//         $result = execute($conn, $query);
        
//         if(!$result)
//         {
//             return false;
//         }
//         else 
//         {
//             echo 'sheesh';
//         }
        
//     }

//     public function c_list($query)
//     {
//         $conn = $this->db_conn();
//         // $sql = "SELECT MemberID, FirstName, Country FROM Members ORDER BY MemberID ASC";
//         $run = $cinn->prepare($query);
//         $run->execute($run);
//         $member = $run->fetchAll(PDO::FETCH_ASSOC);
//         if(!$member)
//         {
//         $count = 0;
//             foreach($member as $row){
//                 $count++;
//                 echo $row['cat_id'];
//                 echo $row['cat_title'];
//                 echo $row['products'];
//             }
//         }
//         else
//         {
//             echo 'The table is blank';
//         }
//     }
// }
// $DB = new Database();
// // $DB->db_conn();
// $query = "SELECT * FROM categories";
// $data = $DB->c_list($query);
//-----------------------------------------------------------------------
    $db_host = "ANDREW\SQLEXPRESS"; // Server Name
    $user = "";
    $pass = "";
    $db_name = "likhamerch_db"; // Database Name

    try{
        $connect = new PDO("sqlsrv:Server=$db_host;Database=$db_name", $user, $pass); // PDO dll Required
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Fuck this';
    } catch (PDOException $e){
        die("Unsuccessful Connection: ".$e->getMessage());
    }

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
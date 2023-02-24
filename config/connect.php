<?php 
$serverName = "DESKTOP-GS1C0IK\SQLEXPRESS"; 
$connectionInfo = array( "Database"=>"likhamerch_db");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r(sqlsrv_errors(), true));
}
?>

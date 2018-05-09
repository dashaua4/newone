<?php
$serverName = "diplomdbserver.database.windows.net";
$connectionOptions = array(
    "Database" => "Diplom_db",
    "Uid" => "diplomadmin",
    "PWD" => "Alexandra11"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>

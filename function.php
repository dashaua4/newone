<?php
function SelectT($table)
{
$servername = "diplomwork-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@diplomwork-mysqldbserver";
	
$password = "Alexandr11";
$dbname = "mysqldatabase";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//$sql ="SELECT MIN(price) as price FROM $table";
$sql ="SELECT id,name,price FROM $table";	
$result = mysqli_query($conn, $sql);
$date=mysqli_fetch_array($result);
	

$sql ="SELECT MIN(price) as price FROM $table";
$result = mysqli_query($conn, $sql);
$date=mysqli_fetch_array($result);
	echo $date["price"];
         


mysqli_close($conn);

}
function SelectTMAX($table)
{
$servername = "diplomwork-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@diplomwork-mysqldbserver";
$password = "Alexandr11";
$dbname = "mysqldatabase";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql ="SELECT MAX(price) as price FROM $table";
$result = mysqli_query($conn, $sql);
$date=mysqli_fetch_array($result);
	echo $date["price"];
         


mysqli_close($conn);

}

function Drop_table()
{
	$servername = "diplomwork-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@diplomwork-mysqldbserver";
$password = "Alexandr11";
$dbname = "mysqldatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	 $sql = "DROP TABLE WG_system";
       
         
         if($conn->query($sql) === TRUE ) {
            die('Could not delete table: ' . mysql_error());
         }
         echo "Table deleted successfully\n";
         mysql_close($conn);
}
function Cr_table($table)
{ 
	
 $servername = "diplomwork-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@diplomwork-mysqldbserver";
$password = "Alexandr11";
$dbname = "mysqldatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE $table (
id INTEGER AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(64) ,
price INTEGER,
id_site INTEGER
)";
if ($conn->query($sql) === TRUE) {
    echo "Table  created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

mysqli_close($conn);

}
function Insert($table,$object)
{ 
	
 $servername = "diplomwork-mysqldbserver.mysql.database.azure.com";
$username = "mysqldbuser@diplomwork-mysqldbserver";
$password = "Alexandr11";
$dbname = "mysqldatabase";;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $columns =array();
foreach($object as $key=>$value)
{
 $columns[]=$key;
 $masks[]=$value;
 if($value==null)
 {$object[$key]='NULL';}
}
	 $columns_s=implode(',',$columns);
 $masks_s=implode(',',$masks);
	foreach($masks_s as $value1)
	{echo $value1;
	}
$sql="INSERT INTO $table ($columns_s) VALUE ($masks_s)";
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);

} 
?>

<?php
function SelectT()
{
$servername = "diplomdb-mysqldbserver.mysql.database.azure.com";
$username = "diplomadmin@diplomdb-mysqldbserver";
$password = "Alexandra11";
$dbname = "mysqldatabase44500";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Table 'Tables'"."<br>";
$sql ="SELECT MAX(price) as max FROM Tables";
$result = mysqli_query($conn, $sql);

         echo  mysql_result($result);


mysqli_close($conn);

}


function Drop_table()
{
	$servername = "diplomdb-mysqldbserver.mysql.database.azure.com";
$username = "diplomadmin@diplomdb-mysqldbserver";
$password = "Alexandra11";
$dbname = "mysqldatabase44500";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	 $sql = "DROP TABLE Chairs";
       
         
         if($conn->query($sql) === TRUE ) {
            die('Could not delete table: ' . mysql_error());
         }
         echo "Table deleted successfully\n";
         mysql_close($conn);
}
function Cr_table()
{ 
	
 $servername = "diplomdb-mysqldbserver.mysql.database.azure.com";
$username = "diplomadmin@diplomdb-mysqldbserver";
$password = "Alexandra11";
$dbname = "mysqldatabase44500";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE Chairs (
id INTEGER AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(64) ,
price INTEGER
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

mysqli_close($conn);

}
function Insert($table,$object)
{ 
	
 $servername = "diplomdb-mysqldbserver.mysql.database.azure.com";
$username = "diplomadmin@diplomdb-mysqldbserver";
$password = "Alexandra11";
$dbname = "mysqldatabase44500";

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

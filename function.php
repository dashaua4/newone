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
$sql ="SELECT MIN(price) as price FROM $table";
$result = mysqli_query($conn, $sql);
$date=mysqli_fetch_array($result);
	return $date["price"];    
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
return $date["price"];
mysqli_close($conn);
}
function SMT($table,$diagonal)
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
$sql ="SELECT MIN(price) as price FROM $table WHERE diagonal=$diagonal";
$result = mysqli_query($conn, $sql);
$date=mysqli_fetch_array($result);
	return $date["price"];    
mysqli_close($conn);
}
function SMTM($table,$diagonal)
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
$sql ="SELECT MAX(price) as price FROM $table WHERE diagonal=$diagonal";
$result = mysqli_query($conn, $sql);
$date=mysqli_fetch_array($result);
	return $date["price"];    
mysqli_close($conn);
}
function W_PSMin($table,$area,$size)
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
$sql ="SELECT MIN(price) as price FROM $table WHERE area=$area AND size<$size";
$result = mysqli_query($conn, $sql);
$date=mysqli_fetch_array($result);
	return $date["price"];    
mysqli_close($conn);
}
function W_PSMax($table,$area,$size)
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
$sql ="SELECT MAX(price) as price FROM $table WHERE area=$area AND size<$size";
$result = mysqli_query($conn, $sql);
$date=mysqli_fetch_array($result);
	return $date["price"];    
mysqli_close($conn);
}
function PerMin($table)
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
$sql ="SELECT MIN(salary) as salary FROM $table WHERE position='Директор'";
$result = mysqli_query($conn, $sql);
$date=mysqli_fetch_array($result);

	return $date["salary"];    
mysqli_close($conn);
}
function PerMax($table)
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
$sql ="SELECT MAX(salary) as salary FROM $table WHERE position='Директор'";

$result = mysqli_query($conn, $sql);
	
$date=mysqli_fetch_array($result);

	return $date["salary"];    
mysqli_close($conn);
}
?>

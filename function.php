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
function PerMax($table,$kol,$empl)
{
// Create connection
$conn = mysqli_connect("diplomwork-mysqldbserver.mysql.database.azure.com", "mysqldbuser@diplomwork-mysqldbserver", "Alexandr11", "mysqldatabase");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql ="SELECT MAX(salary) as salary FROM $table WHERE position='Директор'";
$result = mysqli_query($conn, $sql);	
$date=mysqli_fetch_array($result);  
mysqli_close($conn);
	$conn = mysqli_connect("diplomwork-mysqldbserver.mysql.database.azure.com", "mysqldbuser@diplomwork-mysqldbserver", "Alexandr11", "mysqldatabase");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql2 ="SELECT MAX(salary) as salary FROM $table WHERE position='Менеджер'";
$result2 = mysqli_query($conn, $sql2);
$date2=mysqli_fetch_array($result2);  
mysqli_close($conn);
	$conn = mysqli_connect("diplomwork-mysqldbserver.mysql.database.azure.com", "mysqldbuser@diplomwork-mysqldbserver", "Alexandr11", "mysqldatabase");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql3 ="SELECT MAX(salary) as salary FROM $table WHERE position='Бухгалтер'";
$result3 = mysqli_query($conn, $sql3);
$date3=mysqli_fetch_array($result3);  
mysqli_close($conn);
	$conn = mysqli_connect("diplomwork-mysqldbserver.mysql.database.azure.com", "mysqldbuser@diplomwork-mysqldbserver", "Alexandr11", "mysqldatabase");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql4 ="SELECT MAX(salary) as salary FROM $table WHERE position=$empl";
$result4 = mysqli_query($conn, $sql4);
$date4=mysqli_fetch_array($result4);  
mysqli_close($conn);
	return $date['salary']+$date2['salary']+$date3['salary']+($kol*$date4['salary']);
}
?>

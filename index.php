<!DOCTYPE html>
<html>
<body>

<?php
$servername = "diplomdb-mysqldbserver.mysql.database.azure.com";
$username = "diplomadmin";
$password = "Alexandra11";
$dbname = "mysqldatabase44500";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, price FROM Table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["price
	"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>

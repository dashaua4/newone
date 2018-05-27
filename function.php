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
$sql = "SELECT id, name, price FROM Tables ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
         echo "id: " . $row["id"]. " - Name: " . $row["name"]. "-" . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
}
?>

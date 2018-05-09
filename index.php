<html>
	<head>
	</head>
	<boby>
		<h1>HELLO WORLD11111</h1>
	</body>	
</html>	


<?php

include_once('curl_query.php');
include_once('simple_html_dom.php');
include_once('SQL.php');
$html=curl_get('https://meblihit.com.ua/catalog/modul%60na_systema_ofys/');

$sql=SQL::Instance();
$dom=str_get_html($html);
$tables=$dom->find('.name_product');
foreach($tables as $table)
{ 

$tobd=array();
$a=$table->find('a',0);

	$tobd['name']=$a->plaintext;
	$one=curl_get('https://meblihit.com.ua'.$a->href);
	$one_dom=str_get_html($one);
	$cost=$one_dom->find('.item_current_price',0);
	$tobd['price']=(int)$cost->plaintext;
//	$sql->createTable();
//$sql->Insert('Tables',$tobd);
	
}	
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

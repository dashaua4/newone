<?php
function Insert()
{ 
	$servername = "diplomdb-mysqldbserver.mysql.database.azure.com";
$username = "diplomadmin@diplomdb-mysqldbserver";
$password = "Alexandra11";
$dbname = "mysqldatabase44500";
echo "GGGGGGGGGG";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//mysqli_close($conn);
 echo "GFGHJFGFHJK";
 //$this->db=new PDO('mysql:host=diplomdb-mysqldbserver.mysql.database.azure.com;port=3306;dbname=mysqldatabase44500','diplomadmin@diplomdb-mysqldbserver','Alexandra11');
 
 $query="INSERT INTO Tables (id,name,price) VALUE (1,'Модульна система Офис (ofіs)',13991)";
 $q=$this->conn->prepare($query);
 $q->execute($query);
$result= $this->conn->lastInsertId();
 if($result== true)
 {
  echo "ales im ordnung";
 }
 return $result;
 
 
} 

echo "lalala";
include('curl_query.php');
include('simple_html_dom.php');

$html=curl_get('https://meblihit.com.ua/catalog/modul%60na_systema_ofys/');
echo "Cget";

$dom=str_get_html($html);
echo "strgethtml";
$tables=$dom->find('.name_product');
echo "get table";

foreach($tables as $table)
{ 
	$tobd=array();
$a=$table->find('a',0);
$tobd['name']=$a->plaintext;
	
	$one=curl_get('https://meblihit.com.ua'.$a->href);
	$one_dom=str_get_html($one);
	$cost=$one_dom->find('.item_current_price',0);
	$tobd['price']=$cost->plaintext;
	
	
}
//echo (Insert());
$servername = "diplomdb-mysqldbserver.mysql.database.azure.com";
$username = "diplomadmin@diplomdb-mysqldbserver";
$password = "Alexandra11";
$dbname = "mysqldatabase44500";
echo "GGGGGGGGGG";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT id, name, price FROM Tables";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - name: " . $row["name"]. " " . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);


?>

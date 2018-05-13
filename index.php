 <?php
function CR_Table()
{$servername = "diplomdb-mysqldbserver.mysql.database.azure.com";
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
$sql = "CREATE TABLE Tables (
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
function Select()
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
}

echo "lalala";
include('curl_query.php');
include('simple_html_dom.php');

$html=curl_get('https://meblihit.com.ua/catalog/modul%60na_systema_ofys/');
$dom=str_get_html($html);
$tables=$dom->find('.name_product');
$i=1;
foreach($tables as $table)
{
$tobd=array();
	$tobd['id']=$i++;
	$a=$table->find('a',0);
	$tobd['name']="'".$a->plaintext."'";
	$one=curl_get('https://meblihit.com.ua'.$a->href);
	$one_dom=str_get_html($one);
	$cost=$one_dom->find('.item_current_price',0);
	$tobd['price']=(int)$cost->plaintext;
	Insert('Tables',$tobd);
}
Select();
?>

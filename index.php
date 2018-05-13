 <?php
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
	//Insert('Tables',$tobd);
}

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
 $sql = "SHOW TABLES FROM mysqldatabase44500";
$result = mysql_query($sql);

if (!$result) {
    echo "Ошибка базы, не удалось получить список таблиц\n";
    echo 'Ошибка MySQL: ' . mysql_error();
    exit;
}

while ($row = mysql_fetch_row($result)) {
    echo "Таблица: {$row[0]}\n";
}

mysql_free_result($result);

mysqli_close($conn);



?>

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
 $masks[]=":$key";
 if($value==null)
 {$object[$key]='NULL';}
}
 $columns_s=implode(',',$columns);
 $masks_s=implode(',',$masks);
 

 
 $sql="INSERT INTO $table (id,$columns_s) VALUE ($masks_s)";
	 $q=$this->conn->prepare($sql);
 $conn->execute($sql);
$result= $this->conn->lastInsertId();
 return $result;



 
 
} 

echo "lalala";
include('curl_query.php');
include('simple_html_dom.php');

$html=curl_get('https://meblihit.com.ua/catalog/modul%60na_systema_ofys/');


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

	echo(Insert('Tables',$tobd));
}



?>

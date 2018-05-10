<?php
function curl_get($url,$referer='http://www.google.com'){
	
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2');
curl_setopt($ch, CURLOPT_REFERER, $referer);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);
return($data);
}
?>
<?php
class SQL
{ 
 private static $instance;
private $db;
public static function Instance()
{if(self::$instance==null)
 {self::$instance=new SQL();}
 return self::$instance;
} 
private function _construct()
{ setlocale(LC_ALL,'ru_RU.UTF8');
 $this->db=new PDO('mysql:host=diplomdb-mysqldbserver.mysql.database.azure.com;port=3306;dbname=mysqldatabase44500','diplomadmin@diplomdb-mysqldbserver','Alexandra11');
 $this->db->exec('SET NAMES UTF8');
 $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 
}

public function Insert($table,$object)
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
 
 echo "GFGHJFGFHJK";
 //$this->db=new PDO('mysql:host=diplomdb-mysqldbserver.mysql.database.azure.com;port=3306;dbname=mysqldatabase44500','diplomadmin@diplomdb-mysqldbserver','Alexandra11');
 
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
 
 $query="INSERT INTO $table ($columns_s) VALUE ($masks_s)";
 $q=$this->conn->prepare($query);
 $conn->execute($object);
 if($q->errorCode()!=PDO::ERR_NONE)
 {$info=$q->errorInfo();echo($info[2]);}
$result= $this->conn->lastInsertId();
 return $result;
 
 
} 

 
}
             
?>


<?php
$html=curl_get('https://meblihit.com.ua/catalog/modul%60na_systema_ofys/');

$sql=Instance();
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
    echo $tobd;
$sql->Insert('Tables',$tobd);
	
}	
$servername = "diplomdb-mysqldbserver.mysql.database.azure.com";
$username = "diplomadmin@diplomdb-mysqldbserver";
$password = "Alexandra11";
$dbname = "mysqldatabase44500";
echo "sdfvgbhnjimk,lkjgf";
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

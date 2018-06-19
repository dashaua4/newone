 <?php
include('curl_query.php');
include('simple_html_dom.php');
//include('main.php');
include('function.php');
//Drop_table();

//Cr_table('Monitor');
//echo 'GGGGGGGG';
$html=curl_get('https://deshevshe.net.ua/monitors/2/');
$dom=str_get_html($html);
$tables=$dom->find('.product_title');
$i=9;
foreach($tables as $table)
{
$tobd=array();
	$tobd['id']=$i++;
	$a=$table->find('a',0);

$tobd['name']="'".$a->plaintext."'";
	$one=curl_get('https://deshevshe.net.ua'.$a->href);
$n=$tobd['name'];
		
	$one_dom=str_get_html($one);
	$cost=$one_dom->find('.product__price_current',0);
	$tobd['price']=(int)$cost->plaintext;
	$diagonal=$one_dom->find('.characteristic__product_value',0);
	$tobd['diagonal']=(int)$diagonal->plaintext;
	$tobd['id_site']=1;
//echo $tobd[name].'-'.$tobd[price].'-'.$tobd[diagonal].'='.$tobd[id_site].'<br>';
	//Insert('Monitor',$tobd);
}
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
$sql ="SELECT MAX(price) as price FROM Workplace WHERE size=50";
$result = mysqli_query($conn, $sql);
$date=mysqli_fetch_array($result);
	echo $date["price"];    
mysqli_close($conn);
//echo 'GGG';
?>

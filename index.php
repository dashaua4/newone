 <?php




include('curl_query.php');
include('simple_html_dom.php');
//include('main.php');
include('function.php');
//Drop_table();
//Cr_table();
$html=curl_get('https://hard.rozetka.com.ua/computers/c80095/filter/70553=432604/');
$dom=str_get_html($html);
$tables=$dom->find('.g-i-tile-i-title clearfix');
$i=1;
foreach($tables as $table)
{
$tobd=array();
	$tobd['id']=$i++;
	$a=$table->find('a',0);
	$tobd['name']="'".$a->plaintext."'";
	$one=curl_get('https://hard.rozetka.com.ua'.$a->href);


	$one_dom=str_get_html($one);
	$cost=$one_dom->find('.detail-price-uah',0);
	$tobd['price']=(int)$cost->plaintext;
	
	//Insert('Chairs',$tobd);
	
}
foreach($tobd as $value)
{
	echo $value;
}
?>

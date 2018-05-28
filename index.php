 <?php




include('curl_query.php');
include('simple_html_dom.php');
//include('main.html');
include('function.php');
//Drop_table();
//Cr_table();
$html=curl_get('https://meblihit.com.ua/ua/catalog/heads_of_chairs/');
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
	//Insert('Chairs',$tobd);
	
}


SelectT('Tables');


?>

 <?php



include('curl_query.php');
include('simple_html_dom.php');
//include('main.php');
include('function.php');
//Drop_table();
//Cr_table();
//echo 'GGGGGGGG';
$html=curl_get('https://deshevshe.net.ua/desktop/?sort=price');
$dom=str_get_html($html);

$tables=$dom->find('.product_title');

SelectT('WG_system');
$i=0;
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
	$p=$tobd['price'];
//echo $i.'-'.$n.'-'.$p.'<br>';
	//Insert('Office_comp',$tobd);
	
}


echo 'GGG';
?>

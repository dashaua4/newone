 <?php



include('curl_query.php');
include('simple_html_dom.php');
//include('main.php');
include('function.php');
//Drop_table();
//Cr_table('Office_comp');
//echo 'GGGGGGGG';
$html=curl_get('https://deshevshe.net.ua/desktop/');

$dom=str_get_html($html);
$tables=$dom->find('.product_title');

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
	$tobd['id_site']=1;
echo $n.' '.$p.'<br>';
	Insert('WG_system',$tobd);
	
}
//echo $tobd['id'][5];

echo 'GGG';
?>

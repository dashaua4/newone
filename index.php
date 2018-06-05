 <?php



include('curl_query.php');
include('simple_html_dom.php');
//include('main.php');
include('function.php');
//Drop_table();
Cr_table('WG_system');
//echo 'GGGGGGGG';
$html=curl_get('https://sofino.ua/stoly-ofisnie');
$dom=str_get_html($html);

$tables=$dom->find('.product-name');

//SelectT('WG_system');
$i=0;
foreach($tables as $table)
{
$tobd=array();
	$tobd['id']=$i++;
	$a=$table->find('a',0);
	
	$tobd['name']="'".$a->plaintext."'";
	$one=curl_get('https://sofino.ua'.$a->href);

$n=$tobd['name'];
		

	$one_dom=str_get_html($one);
	
	$cost=$one_dom->find('#mi-price',0);
	$tobd['price']=(int)$cost->plaintext;
	$p=$tobd['price'];
echo $i.'-'.$n.'-'.$p.'<br>';
	//Insert('Office_comp',$tobd);
	
}


echo 'GGG';
?>

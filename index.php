 <?php



include('curl_query.php');
include('simple_html_dom.php');
//include('main.php');
include('function.php');
//Drop_table();
//Cr_table('Office_comp');
//echo 'GGGGGGGG';
$html=curl_get('https://sofino.ua/ofisnie-kresla-i-stulia');
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
	$cost=str_replace(",",'.',$cost);
$cost=preg_replace("/[^x\d|*\.]/","",$cost);
	$tobd['price']=(int)$pr->plaintext;
	$p=$tobd['price'];
	$tobd['id_site']=1;
echo $cost.'<br>';
	//Insert('Tables',$tobd);
	
}
//echo $tobd['id'][5];

echo 'GGG';
?>

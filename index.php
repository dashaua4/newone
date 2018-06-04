 <?php



include('curl_query.php');
include('simple_html_dom.php');
//include('main.php');
include('function.php');
//Drop_table();
//Cr_table();
//echo 'GGGGGGGG';
$html=curl_get('http://www.mobilluck.com.ua/katalog/system-unit/');
$dom=str_get_html($html);
echo $dom.'lala';
$tables=$dom->find('.cci2_mdl');


//SelectT('WG_system');
$i=0;
foreach($tables as $table)
{
$tobd=array();
	$tobd['id']=$i++;
	$a=$table->find('a',0);
	
	$tobd['name']="'".$a->plaintext."'";
	$one=curl_get('http://www.mobilluck.com.ua'.$a->href);

$n=$tobd['name'];
		

	$one_dom=str_get_html($one);
	
	$cost=$one_dom->find('.price itemprice',0);
	$tobd['price']=(int)$cost->plaintext;
	$p=$tobd['price'];
echo $n.'-'.$p.'<br>';
	//Insert('WG_system',$tobd);
	
}


echo 'GGG';
?>

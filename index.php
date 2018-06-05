 <?php




include('curl_query.php');
include('simple_html_dom.php');

//include('main.php');
include('function.php');
//Drop_table();

//Cr_table('Workplace');
//echo 'GGGGGGGG';
$html=curl_get('https://www.real-estate.lviv.ua/orenda-commercialproperty-office/Lviv-Zaliznichniy');

$dom=str_get_html($html);

$tables=$dom->find('.col-sm-12');
$i=0;
foreach($tables as $table)
{
$tobd=array();
	$tobd['id']=$i++;
	$a=$table->find('a',0);
	
	
$tobd['adress']="'".$a->plaintext."'";
	$one=curl_get('https://www.real-estate.lviv.ua'.$a->href);

$n=$tobd['adress'];
		

	$one_dom=str_get_html($one);
	//echo $one;
	$b='Галицький';
	//$area=$one_dom->find('.text-muted',0);
	$tobd['area']="'".$b."'";
	$cost=$one_dom->find('.h1-under-main-menu',0);
	$tobd['price']=(int)$cost->plaintext;
	$size=$one_dom->find('.row row-dense',0);
	$tobd['size']=(int)$size->plaintext;
	$tobd['id_site']=3;
echo $tobd[adress].'-'.$tobd[area].'-'.$tobd[price].'='.$tobd[size].'<br>';
	
//Insert('Workplace',$tobd);
//echo $tobd['id'][5];
}

echo 'GGG';
?>

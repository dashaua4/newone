<html>
	<head>
	</head>
	<boby>
		<h1>HELLO WORLD11111</h1>
	</body>	
</html>	


<?php

include_once('curl_query.php');
include_once('simple_html_dom.php');
include_once('SQL.php');
$html=curl_get('https://meblihit.com.ua/catalog/modul%60na_systema_ofys/');

$sql=SQL::Instance();
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
	$sql->createTable();
//$sql->Insert('Tables',$tobd);
	
}

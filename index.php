<?php
if((include('curl_query.php'))==TRUE)
{echo "O!K";}
if((include('SQL.php'))==TRUE)
{echo "OK";}

echo "lalala";
$html=curl_get('https://meblihit.com.ua/catalog/modul%60na_systema_ofys/');
echo $html;
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
	$tobd['price']=(int)$cost->plaintext;
//NEW();//Insert('Tables',$tobd);
	
}

?>

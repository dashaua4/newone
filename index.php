<?php


echo "lalala";
include('curl_query.php');


$html=curl_get('https://meblihit.com.ua/catalog/modul%60na_systema_ofys/');
echo "Cget";

$dom=str_get_html($html);
echo "strgethtml";
$tables=$dom->find('.name_product');
echo "get table";
foreach($tables as $table)
{ 
	echo "NO";
echo $tables->plaintext;

	
}

?>

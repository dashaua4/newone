<?php


echo "lalala";
include('curl_query.php');


$html=curl_get('https://meblihit.com.ua/catalog/modul%60na_systema_ofys/');
$dom=str_get_html($html);

$tables=$dom->find('.name_product');
foreach($tables as $table)
{ 
echo $tables->plaintext.'<br>';

	
}

?>

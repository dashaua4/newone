<?php


echo "lalala";
include('curl_query.php');


$html=curl_get('http://mebli-lviv.com.ua/ru/pysmovi-kompyuterni-stoly1/');
$dom=str_get_html($html);

$tables=$dom->find('.name');
foreach($tables as $table)
{ 
	echo "NO";
echo $tables->plaintext;

	
}

?>

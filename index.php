<?php


echo "lalala";
include('curl_query.php');


$html=curl_get('http://mebli-lviv.com.ua/ru/pysmovi-kompyuterni-stoly1/');
echo "Cget";

$dom=str_get_html($html);
echo "strgethtml";
$tables=$dom->find('.name');
echo "get table";
foreach($tables as $table)
{ 
	echo "NO";
echo $tables->plaintext;

	
}

?>

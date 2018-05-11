<?php
function Insert($table,$object)
{ 
 echo "GFGHJFGFHJK";
 $this->db=new PDO('mysql:host=diplomdb-mysqldbserver.mysql.database.azure.com;port=3306;dbname=mysqldatabase44500','diplomadmin@diplomdb-mysqldbserver','Alexandra11');
 
$columns =array();
foreach($object as $key=>$value)
{
 $columns[]=$key;
 $masks[]=":$key";
 if($value==null)
 {$object[$key]='NULL';}
}
 $columns_s=implode(',',$columns);
 $masks_s=implode(',',$masks);
 
 $query="INSERT INTO $table ($columns_s) VALUE ($masks_s)";
 $q=$this->db->prepare($query);
 $q->execute($query);
 if($q->errorCode()!=PDO::ERR_NONE)
 {$info=$q->errorInfo();echo($info[2]);}
$result= $this->conn->lastInsertId();
 if($result== true)
 {
  echo "ales im ordnung";
 }
 return $result;
 
 
} 

echo "lalala";
include('curl_query.php');
include('simple_html_dom.php');

$html=curl_get('https://meblihit.com.ua/catalog/modul%60na_systema_ofys/');
echo "Cget";

$dom=str_get_html($html);
echo "strgethtml";
$tables=$dom->find('.name_product');
echo "get table";

foreach($tables as $table)
{ 
	$tobd=array();
$a=$table->find('a',0);
$tobd['name']=$a->plaintext;
	
	$one=curl_get('https://meblihit.com.ua'.$a->href);
	$one_dom=str_get_html($one);
	$cost=$one_dom->find('.item_current_price',0);
	$tobd['price']=$cost->plaintext;
	
echo Insert('Tables',$tobd);	
}


?>

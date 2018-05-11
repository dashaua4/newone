<?php
function NEW()
{
  echo "nichts in ordnung";
}
function Insert($table,$object)
{ 
// $servername = "diplomdb-mysqldbserver.mysql.database.azure.com";
//$username = "diplomadmin@diplomdb-mysqldbserver";
//$password = "Alexandra11";
//$dbname = "mysqldatabase44500";

// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
//if (!$conn) {
  //  die("Connection failed: " . mysqli_connect_error());
//}
 
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

?>

<?php
class SQL
{ 
 private static $instance;
private $db;
public static function Instance()
{if(self::$instance==null)
 {self::$instance=new SQL();}
 return self::$instance;
} 

private function _construct()
{ setlocale(LC_ALL,'ru_RU.UTF8');
 $this->db=new PDO('mysql:host=diplomdb-mysqldbserver.mysql.database.azure.com;port=3306;dbname=mysqldatabase44500','diplomadmin@diplomdb-mysqldbserver','Alexandra11');
 $this->db->exec('SET NAMES UTF8');
 $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 
}
public function Select($query)
{ $q=$this->db->prepare($query);
 $q->execute();
 if($q->errorCode()!=PDO::ERR_NONE)
 {$info=$q->errorInfo();echo($info[2]);}
return $q->fetchAll();
}
public function Insert($table,$object)
{ 
 $servername = "diplomdb-mysqldbserver.mysql.database.azure.com";
$username = "diplomadmin@diplomdb-mysqldbserver";
$password = "Alexandra11";
$dbname = "mysqldatabase44500";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
 echo "<h1>wkjdfwjdwid</h1>";
 //$this->db=new PDO('mysql:host=diplomdb-mysqldbserver.mysql.database.azure.com;port=3306;dbname=mysqldatabase44500','diplomadmin@diplomdb-mysqldbserver','Alexandra11');
 
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
 $q=$this->conn->prepare($query);
 $conn->execute($query);
 if($q->errorCode()!=PDO::ERR_NONE)
 {$info=$q->errorInfo();echo($info[2]);}


$result= $this->conn->lastInsertId();
 return $result;
 
 
} 
public function createTable()
{ $this->db=new PDO('mysql:host=diplomdb-mysqldbserver.mysql.database.azure.com;port=3306;dbname=mysqldatabase44500','diplomadmin@diplomdb-mysqldbserver','Alexandra11');
 
  $sqlList = ['CREATE TABLE IF NOT EXISTS Chair (
                        id  PRIMARY KEY,
                        name  varchar(64) NOT NULL UNIQUE,
                        price  int(255) NOT NULL UNIQUE 
                     );'];
foreach ($sqlList as $sql) {
            $this->db->exec($sql);
        }
        
        return $this;
 
}
      
            
            
            
            
            
            
?>

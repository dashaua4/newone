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
 $this->db=new PDO('mysql:host=localhost;dbname=mysqldatabase44500','diplomadmin','Alexandra11');
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
{ $this->db=new PDO('mysql:host=localhost;dbname=mysqldatabase44500','diplomadmin','Alexandra11');
 
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
 $q->execute($object);
 if($q->errorCode()!=PDO::ERR_NONE)
 {$info=$q->errorInfo();echo($info[2]);}


$result= $this->db->lastInsertId();
 return $result;
 
 
} 
public function createTable($table,$object)
{ $this->db=new PDO('mysql:host=localhost;dbname=mysqldatabase44500','diplomadmin','Alexandra11');
 
  $sqlList = ['CREATE TABLE IF NOT EXISTS Table (
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

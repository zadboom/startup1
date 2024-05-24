<?
class Db{ 
    private $connection;
    private static $db;
    public static function getInstance($option=null){
    if (self::$db==null){
        self::$db=new Db($option);
     
    }
    return self:: $db;

}
    public function __construct($option=null){
        
        // Create connection
        global $config;
        if($option!=null){
            $host=$option['host'];
            $user=$option['user'];
            $pass=$option['pass'];
            $name=$option['name'];
        }else{
            $host=$config['db']['host'];
            $user=$config['db']['user'];
            $pass=$config['db']['pass'];
            $name=$config['db']['name'];
        }

       $this->connection = new mysqli($host, $user, $pass, $name);
       // Check connection
    if ($this->connection->connect_error) {
    echo ("Connection failed: " . $this->connection->connect_error);
    exit;
}
$this->connection->query("SET NAMES 'utf8'");

    }
    /////////////////////////////
    public function first($sql){
        $records=$this->query($sql);
       if($records==null){
       return null;
       }
       return $records[0];
    }
//////////////////////////
public function modify($sql){
    $rowsAfected=$this->connection->query($sql);
    return $rowsAfected;

}
//insert into DB
public function insert($sql){
    $id=$this->connection->query($sql);
    return $id;
}
///End of insert function
public function query($sql){
        $result=$this->connection->query($sql);
        $records=array();
        if ($result->num_rows == 0) {
            return null;

        } 
            // output data of each row
        while($row = $result->fetch_assoc()) {
            $records[]=$row;
            }

            return $records;
          


    }
    ///////////////////////////////
    public function connection(){
        return $this->connection;

    }
    public function close(){
        $this->connection->close();
        echo"that is true";

    }
    
}
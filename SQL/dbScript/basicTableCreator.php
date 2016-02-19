<?php

class basicTableCreator
{
    private $quest;
    protected $tableName;
    protected static $prefix;
    protected static $conn;
    
    public function __construct()
    {
        $this->tableName = static::getClassName();
        $this->tableName = substr($this->tableName, 11);//regexp ?
        $this->quest = "CREATE TABLE " . self::$prefix . $this->tableName . " ";//regexp ?
//        echo $quest;
        
    }
    
    public function columnsMeta($params)
    {
        $this->quest .= $params;
//        echo $this->quest . '<br>';
    }
    
    public static function setPrefix($prefixGo)
    {
        self::$prefix = $prefixGo;
    }
    
    public static function setConn($connGo)
    {
        self::$conn = $connGo;
    }
    
    public function __destruct()
    {
//        echo self::$conn;
//        echo $this->quest . "<br>";
        $q = "DROP TABLE IF EXISTS " . self::$prefix . $this->tableName . ";";
        self::$conn->query($q);
        echo $q . "<br>";
//        echo "DROP TABLE IF EXISTS " . self::$prefix . $this->tableName . ";";
        $ok = self::$conn->query($this->quest);
        echo $this->quest . "<br>";
        if ($ok == false)
        {
            echo mysqli_errno(self::$conn) . "<br>";
            echo mysqli_error(self::$conn) . "<br>";
//            echo $this->quest . "<br>";
        }
//        echo $this->tableName;
    }
}

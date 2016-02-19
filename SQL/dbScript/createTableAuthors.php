<?php
require_once 'basicTableCreator.php';


class createTableAuthors extends basicTableCreator
{
private static $countRows = 0;
private $quest;
    
public function __construct($num)
{
    parent::__construct();
    self::$countRows = $num;
}

public function getClassName()
{
    return get_class($this);
}

public function columnsDataRandom($columnName, $dataType, $extentFrom, $extentTo)
{//0 => array("name", "Chr", 3, 8), 1 => array("middleName", "Chr", 5, 12),
//2 => array("surname", "Chr", 4, 10), 3 => array("birthYear", "Dec", 4, 4)
    $className = "randNums" . $dataType;
    $obj = new $className;
    $rec1 = "INSERT INTO " . parent::$prefix . $this->tableName . "(" . $columnName . ") "
            . "VALUES " . "(";
    
    for ($i = 0; $i < self::$countRows; $i ++)
    {
        $actualLength = $extentFrom;
        if ($extentFrom != $extentTo)
        {
            $actualLength = rand($extentFrom, $extentTo);
        }
//        echo "___" . $actualLength;
        $value = "";
        for ($j = 0; $j < $actualLength; $j ++)
        {
            $value .= $obj->Next();
            if ($j == 0 AND $value == 0)
                $j --;
        }
        $rec2 = $rec1 . $value . ");";
        $this->quest .= $rec2 . " ";
        unset($value);
    }
}

public function __destruct() {
    parent::__destruct();
    
    echo "<br />" . $this->quest . "<br />";//regexp dlja vstsvki <br> vmesto "; " ?
    $counter = parent::$conn -> multi_query($this->quest);
//    parent::$conn -> store_result();
    while (parent::$conn -> next_result())
        $counter += 1; // ++ ne idet zdes ...
    
    echo "Queries " . $counter . " complete. From " . self::$countRows . " total.<br /><br />";
    
}

}

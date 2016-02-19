<?php
//require_once 'conn.php';
require_once ('randNumsChars.php');
$prefix = "00EF_";

$conn = getConn();
$q = "DROP TABLE IF EXISTS " . $prefix . "LoadRawData";
$q .= "; CREATE TABLE " . $prefix . "LoadRawData ("
        . "id INTEGER NOT NULL auto_increment, "
        . "book_name NCHAR(255), "
        . "authors_name NCHAR(255), "
        . "KEY(id)"
        . "); ENGINE = MyISAM CHARSET = utf8";


//$res = $conn->multi_query($q);
$conn->store_result();

while ($res)
{
    echo (int)$res;
    $res = $conn->next_result();
}

require_once 'warehouseData.php';

$q = "INSERT INTO " . $prefix . "loadRawData(book_name, authors_name) VALUES " . $data;

//$res = $conn->multi_query($q);

//echo (int)$res;
//echo dirname(__FILE__);
//echo $_SERVER['PHP_SELF'];
//echo getcwd();
//$pathToFolder = dirname(__FILE__);

require_once 'createTableAuthors.php';
require_once 'createTableBooks.php';
require_once 'createTableGenres.php';
require_once 'createTablePublishers.php';
require_once 'createTableReaders.php';
require_once 'createTableRoles.php';
require_once 'createTableUserRoles.php';
require_once 'createTableUsers.php';
require_once 'createTableUsersTypes.php';
require_once 'createTableWorkers.php';

basicTableCreator::setPrefix($prefix);
basicTableCreator::setConn($conn);

$obj = new createTableAuthors(32);
$obj->columnsMeta("(name NCHAR(255), middleName NCHAR(255), surname NCHAR(255), ");
$obj->columnsMeta("birthYear INTEGER DEFAULT 0) ");
$obj->columnsMeta("ENGINE = MyISAM CHARSET = utf8;");
//unset($obj);
$prepReq = array
(
    0 => array("name", "Chr", 3, 8),
    1 => array("middleName", "Chr", 5, 12),
    2 => array("surname", "Chr", 4, 10),
    3 => array("birthYear", "Dec", 4, 4)
);

$obj->columnsDataRandom("birthYear", "Dec", 4, 4);//decimal

$obj = new createTableGenres();
$obj->columnsMeta("(genre NCHAR(255), description NCHAR(255)) ");
$obj->columnsMeta("ENGINE = MyISAM CHARSET = utf8;");

//echo $q;
//echo $conn->insert_id();

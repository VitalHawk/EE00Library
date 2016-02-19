<?php

abstract class randNumsChars
{
    private static $srandWasCalled = 0;
    private $result;
    
    public function __construct()
    {
        if (self::$srandWasCalled++ == 0)
        {
            srand((float)microtime()*1000);
            //echo self::$srandWasCalled . srand((float)microtime()*1000);
            //echo rand();
        }
        
    }
    public function Next()
    {
        return rand() % static::Extent();
    }
    
}

class randNumsDec extends randNumsChars
{
//    private $extent = 16;
//    public function __construct()
//    {
//        parent::__construct();
//    }
    
    public function Extent()
    {
        return 10;
    }
}


?>

<?php
require_once 'conf.php';

class tester
{
    public static function TEST($params)
    {
        if (empty($params))   return 0;
        $file = DIR_BASE."TEST.TXT";
        $current = null;
        if (file_exists($file))   $current = file_get_contents($file);
        if (isset($current))   $params .= "   \n" . $current;
        
        $current = $params;
        file_put_contents($file, $current);
    }

}

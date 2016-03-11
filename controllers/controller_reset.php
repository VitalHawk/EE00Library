<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class controllerReset
{
    public function Index()
    {
        require_once DIR_DB_SCR . 'LoadRawData.php';
//        Header('Location: /');
        Die();
    }
    
    public function __toString()
    {
        $name = get_class($this);
        
        return $name;
    }
}
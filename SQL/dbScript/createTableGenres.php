<?php
require_once 'basicTableCreator.php';

class createTableGenres extends basicTableCreator
{
    
public function __construct()
{
    parent::__construct();
}

public function getClassName()
{
    return get_class($this);
}

}

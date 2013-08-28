<?php

include_once './Foundation/Fdb.php';

class Store extends Fdb {

    // dichiarazione di proprietà
    protected $_table = "store";
    public $_key="store_name";
    public $_return_class="Store";
    
    public $store_name;
    public function __toString()
    {
        return $this->store_name;
    }
    

}

?>

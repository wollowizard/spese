<?php

include_once './Foundation/Fdb.php';

class Payer extends Fdb {

    // dichiarazione di proprietà
    protected $_table = "payer";
    public $_key="name";
    public $_return_class="Payer";
    
    public $payer_name;
    
      public function __toString()
    {
        return $this->payer_name;
    }
    

}

?>

<?php

include_once './Foundation/Fdb.php';

class Transaction extends Fdb {

    // dichiarazione di proprietà
    protected $_table = "transaction";
    public $_key="id";
    public $_return_class="Transaction";
    
    
    public $id;
    public $price;
    public $store;
    public $payer;
    public $date;
    public $imgpath=null;
    public $whypicturenotavailable=null;
    


}

?>

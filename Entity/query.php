<?php

class QueryString extends Fdb{

    // dichiarazione di proprietà
    protected $_table = "querystring";
    public $_key = "id";
    public $_return_class = "QueryString";
    public $id;
    public $querystring;

    public function __toString() {
        return $this->querystring;
    }

}

?>

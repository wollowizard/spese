<?php

global $DEBUG_ENABLED;
$DEBUG_ENABLED = false;


global $config;
$remote=false;
if($remote){
$config['mysql']['host'] = 'localhost';
$config['mysql']['password'] = 'iosenta321';
$config['mysql']['user'] = '427493_alfredo';
$config['mysql']['database'] = 'qwerasdfzxcv_zxq_test';

}
else{
$config['mysql']['host'] = 'localhost';
$config['mysql']['password'] = '';
$config['mysql']['user'] = 'root';
$config['mysql']['database'] = 'test';}


function debug($text) {
    global $DEBUG_ENABLED;
    if ($DEBUG_ENABLED) {
        print_r($text);
    }
}

?>

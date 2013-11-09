<?php

include './Foundation/Fdb.php';
include './Entity/transaction.php';
include './Entity/store.php';
include './Entity/payer.php';
include './Entity/query.php';
require('./libs/Smarty.class.php');

if (isset($_POST['newprice'])) {
    $newprice = $_POST['newprice'];
    $newstore = $_POST['newstore'];
    $newpayer = $_POST['newpayer'];
    $newwhydontyouhaveapicture = $_POST['nopicturetextarea'];
    if ($newwhydontyouhaveapicture == "") {
        $newwhydontyouhaveapicture = null;
    }


    $newtransaction = new Transaction();
    $newtransaction->payer = $newpayer;
    $newtransaction->price = $newprice;
    $newtransaction->store = $newstore;

    $newtransaction->whypicturenotavailable = $newwhydontyouhaveapicture;


    $newtransaction->date = date("Y-m-d--H-i-s");
    if (isset($_FILES["imgUploadInput"])) {
        $name = $_FILES["imgUploadInput"]["name"];
        $now = date("Y-m-d--H-i-s");
        $tmp = explode(".", $name);
        $ext = "." . end($tmp);

        $final = "upload" . "/" . $now . $ext;
        if (move_uploaded_file($_FILES["imgUploadInput"]["tmp_name"], $final)) {
            $newtransaction->imgpath = $final;
        };
    };
    $q = new QueryString();
    $now = date("Y-m-d--H-i-s");

    $newtransaction->store($newtransaction);
    $q->querystring = addslashes($newtransaction->_lastquery) . "   at " . $now;
    $q->store(($q));
}
if (!empty($_POST['check_list'])) {
    $delobj = new Transaction();
    foreach ($_POST['check_list'] as $check) {

        $deltrans = new Transaction();
        $deltrans = $deltrans->load($check);
        if ($deltrans) {
            if ((file_exists($deltrans->imgpath))) {
                unlink($deltrans->imgpath);
            }

            if ($delobj->delete($deltrans)) {
                $q = new QueryString();
                $now = date("Y-m-d--H-i-s");
                $q->querystring = addslashes($delobj->_lastquery) . "   at " . $now;
                $q->store(($q));
            };
        }
    }
}
$smarty = new Smarty;

$smarty->force_compile = true;

$smarty->caching = true;
$smarty->cache_lifetime = 120;
/*
  $s=new Store();
  $s->store_name="ICA";
  $s->store($s);
  $t=new Transaction();
  $t->payer="Alfredo";
  $arr = array($t); */

$t = new Transaction();
$transactions = $t->search();
if ($transactions == false || $transactions == null) {
    $transactions = array();
}

$s = new Store();
$stores = $s->search();

$p = new Payer();
$payers = $p->search();



$smarty->assign('transactions', $transactions);

$smarty->assign("stores_values", $stores);
$smarty->assign("stores_output", $stores);

$smarty->assign("payers_values", $payers);
$smarty->assign("payers_output", $payers);



$smarty->display('mobile3.tpl');
?>
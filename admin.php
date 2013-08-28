<?php

include './Foundation/Fdb.php';
include './Entity/transaction.php';
include './Entity/store.php';
include './Entity/payer.php';
include './Entity/query.php';
require('./libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->force_compile = true;

$smarty->caching = true;
$smarty->cache_lifetime = 120;


if (isset($_POST['newstore'])) {
    $newname = $_POST['newstore'];
    $newstore = new Store();
    $newstore->store_name = $newname;
    $newstore->store($newstore);
}

if (!empty($_POST['check_list'])) {
    $delobj = new Store();
    foreach ($_POST['check_list'] as $check) {
        $deltrans = new Store();
        $deltrans->store_name = $check;
        $delobj->delete($deltrans);
    }
}



$s = new Store();
$stores = $s->search();
if ($stores == false || $stores == null) {
    $stores = array();
}


$qs = new QueryString();
$qs = $qs->search();
if ($qs == false || $qs == null) {
    $qs = array();
}


$smarty->assign('queries', $qs);

$smarty->assign('stores', $stores);

$smarty->display('admin.tpl');
?>

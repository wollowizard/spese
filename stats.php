<?php

include './Foundation/Fdb.php';
include './Entity/transaction.php';
include './Entity/store.php';
include './Entity/payer.php';
require('./libs/Smarty.class.php');

$smarty = new Smarty;

$smarty->force_compile = true;

$smarty->caching = true;
$smarty->cache_lifetime = 120;

$tobj = new Transaction();
$transactions = $tobj->search();
$personalstats = array();
$personalstats2 = array();
$total=0;
foreach ($transactions as $t) {
    if (isset($personalstats[$t->payer])) {
        $personalstats[$t->payer] += $t->price;
    } else {
        $personalstats[$t->payer] = $t->price;
    }
    $total+=$t->price;
}
arsort($personalstats);

foreach ($personalstats as $key => $value) {
    $personalstats2[$key] = 100*$value/$total;
}


$smarty->assign("personalstats", $personalstats);
$smarty->assign("personalstats2", $personalstats2);

$smarty->display('stats.tpl');
?>
<?php

include './Foundation/Fdb.php';
include './Entity/transaction.php';
include './Entity/store.php';
include './Entity/payer.php';
require('./libs/Smarty.class.php');
//require_once ('jpgraph-src/jpgraph.php');
//require_once ('jpgraph-src/jpgraph_line.php');


$smarty = new Smarty;

$smarty->force_compile = true;

$smarty->caching = true;
$smarty->cache_lifetime = 120;
//get all transactions
$tobj = new Transaction();
$transactions = $tobj->search();
if (!$transactions) {
    $transactions = array();
}

//personal stats
$personalstats = array();
$personalstats2 = array();
$total = 0;
foreach ($transactions as $t) {
    if (isset($personalstats[$t->payer])) {
        $personalstats[$t->payer] += $t->price;
    } else {
        $personalstats[$t->payer] = $t->price;
    }
    $total+=$t->price;
}
arsort($personalstats);

$max=max($personalstats);
foreach ($personalstats as $key => $value) {
    $personalstats2[$key] = 100 * $value / $max;
}


//month stats
$years = Array();
$months = Array();
$monthly_expense = Array();
$store_expense = Array();

foreach ($transactions as $d) {
    list($y, $m) = explode("-", $d->date);
    $timestamp = strtotime($d->date);
    $php_date = getdate($timestamp);
    //print_r($php_date['year']);
    //echo("<br><br><br><br><br>");
    $years[$php_date['year']][] = $d;
    $months[$php_date['year'] . "-" . $php_date['month']][] = $d;
}
//$years = array_values($years);
//$months = array_values($months);
//var_dump($years,$months);

foreach ($months as $key => $value) {
    //  print_r($key);
    // echo(" -> ");
    for ($i = 0; $i < sizeof($value); $i++) {

        if (isset($monthly_expense[$key]))
            $monthly_expense[$key]+=$value[$i]->price;
        else
            $monthly_expense[$key]=$value[$i]->price;
        //print_r($value[$i]->date);
    }

  //  echo("<br><br><br><br><br>");
}


foreach ($transactions as $d){
    if(isset($store_expense[$d->store])){
        $store_expense[$d->store]+=$d->price;
    }
    else{
        $store_expense[$d->store]=$d->price;
    }
}
arsort($store_expense);


//assigns
$smarty->assign("personalstats", $personalstats);
$smarty->assign("personalstats2", $personalstats2);
$smarty->assign("max", $max);
//print_r($monthly_expense);
$smarty->assign("monthstats", $monthly_expense);
$smarty->assign("storestats", $store_expense);


$smarty->display('stats.tpl');

/*
  $datay1 = array(20,15,23,15);

  // Setup the graph
  $graph = new Graph(300,250);
  $graph->SetScale("textlin");
  $theme_class=new UniversalTheme;
  $graph->SetTheme($theme_class);
  $graph->img->SetAntiAliasing(false);
  $graph->title->Set('Filled Y-grid');
  $graph->SetBox(false);

  $graph->img->SetAntiAliasing();

  $graph->yaxis->HideZeroLabel();
  $graph->yaxis->HideLine(false);
  $graph->yaxis->HideTicks(false,false);

  $graph->xgrid->Show();
  $graph->xgrid->SetLineStyle("solid");
  $graph->xaxis->SetTickLabels(array('A','B','C','D'));
  $graph->xgrid->SetColor('#E3E3E3');

  // Create the first line
  $p1 = new LinePlot($datay1);
  $graph->Add($p1);
  $p1->SetColor("#6495ED");
  $p1->SetLegend('Line 1');
  $graph->Stroke();

 */
?>
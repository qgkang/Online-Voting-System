<?php
include ("src/jpgraph.php");
include ("src/jpgraph_line.php");

//创建统计数据，并保存到以为数组中去
$datay1 = array(20,15,23,15);
$datay2 = array(12,9,42,8);
$datay3 = array(5,17,32,24);
$datay4 = array(5,20,17,20);
$datay5 = array(4,25,22,10);

// Setup the graph
$graph = new Graph(600,400);
$graph->SetMarginColor('white');
$graph->SetScale("textlin");
$graph->SetFrame(false);
$graph->SetMargin(30,50,30,30);

$graph->title->Set(iconv('utf-8','gbk','图书销售走势'));
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);


$graph->yaxis->HideZeroLabel();
$graph->ygrid->SetFill(true,'#EFEFEF@0.5','#BBCCFF@0.5');
$graph->xgrid->Show();

$graph->xaxis->SetTickLabels($gDateLocale->GetShortMonth());

// Create the first line
$p1 = new LinePlot($datay1);
$p1->SetColor("navy");
$p1->SetLegend('C#');
$graph->Add($p1);

// Create the second line
$p2 = new LinePlot($datay2);
$p2->SetColor("red");
$p2->SetLegend('JAVA');
$graph->Add($p2);

// Create the third line
$p3 = new LinePlot($datay3);
$p3->SetColor("orange");
$p3->SetLegend('PHP');
$graph->Add($p3);
//Create the 5 line
$p4 = new LinePlot($datay4);
$p4->SetColor("yellow");
$p4->SetLegend('.net');
$graph->Add($p4);

//Create the 5 line
$p5 = new LinePlot($datay5);
$p5->SetColor("blue");
$p5->SetLegend("c++");
$graph->Add($p5);

$graph->legend->SetShadow('gray@0.4',5);
$graph->legend->SetPos(0.1,0.1,'right','top');
// Output line
$graph->Stroke();

?>



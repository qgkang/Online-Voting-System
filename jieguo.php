<?php
$conn=@mysql_connect("127.0.0.1","root","root") ;
@mysql_select_db("db_vote",$conn);
@mysql_query("set names gb2312");

include ("src/jpgraph.php");
include ("src/jpgraph_bar.php");

$id=$_GET['id'];
$sql="SELECT * FROM `ve_xvote` WHERE `vote_id`=".$id;
$query=mysql_query($sql);
while($array=mysql_fetch_array($query))
{
    $data[]=$array['Xvote_jie'];
    $datae[]=$array['xvote_title'];
    $name=$array['vote_title'];
}

//**********
function cbFmtPercentage($aVal) {
    return sprintf("%.1f%%",1*$aVal);
}

$graph = new Graph(600,300);
$graph->SetScale("textlin");
$graph->yaxis->scale->SetGrace(100);
$graph->img->SetMargin(40,30,30,40);
$graph->SetShadow();
$bar1 = new BarPlot($data);
$graph->title->Set($name);
$graph->xaxis->SetTickLabels($datae);
$graph->title->SetFont(FF_SIMSUN);
$graph->xaxis->SetFont(FF_SIMSUN);
$bar1->value->SetFormatCallback("cbFmtPercentage");
$bar1->value->Show();

$graph->Add($bar1);

$graph->Stroke();
?>





<?php
    include_once("class/mysql_class.php");
    include("src/jpgraph.php");
    include ("src/jpgraph_bar.php");
    $id = $_GET['id'];
    $sql = "select * from `ve_xvote` where `vote_id`=".$id ;
    $query = mysql_query($sql);
    while($array = mysql_fetch_array($query)){
        //把结果保存到数组中
        $data[] = $array['Xvote_jie'];
        $data[] = $array['xvote_title'];
        $data[] = $array['vote_title'];
    }

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








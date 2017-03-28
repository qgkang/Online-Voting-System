<?php
include_once("class/mysql_class.php");
include("src/jpgraph.php");
include ("src/jpgraph_bar.php");
$id = $_GET['id'];
$sql = "select * from `ve_xvote` where `vote_id`=".$id ;
$query = mysql_query($sql);
while($array = mysql_fetch_array($query)){

}







?>








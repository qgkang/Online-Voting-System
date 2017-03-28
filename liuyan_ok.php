<?php
    header("Content-Type:text/html; charset=utf-8");
    require("class/mysql_class.php");
    //get ip
    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date("Y-m-d");
    if($_POST['lytitle']!=null && $_POST['lycontent']!=null){
        $insert = $db->insert("ve_hiu","title,content,data,ip","'".$_POST['lytitle']."','".$_POST['lycontent']."','$date','$ip'");
        echo "<script>alert('留言成功！');window.location.href='index.php'</script>";
    }else{
        echo "<script>alert('请填写留言内容');window.location.href='liuyan.php';</script>";
    }

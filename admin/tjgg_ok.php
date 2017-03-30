<?php 
session_start();
header("Content-Type:text/html;charset=utf-8");
include("../class/mysql_class.php");
$date=date("Y-m-d");
if(isset($_SESSION['name']) && $_POST['zt']!=null && $_POST['nr']!=null) {
    $insert = $db->insert("ve_gong", "gao_title,gao_jj,gao_now,gao_admin", "'". $_POST['zt']."','".$_POST['nr']."', '$date' ,'" . $_SESSION['name'] . "'");
    if ($insert) {
        echo "<script>alert('公告添加成功！');window.location.href='gonggao.php'</script>";

    }else{
        echo "<script>alert('公告添加失败！');window.location.href='gonggao.php'</script>";
    }
}
?>
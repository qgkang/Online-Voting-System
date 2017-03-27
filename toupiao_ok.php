<?php
    require("class/mysql_class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>投票处理页</title>
</head>

<body>
<?php
    //获取客户端IP地址
    $ip = $_SERVER['REMOTE_ADDR'];
    $date=date("Y-m-d");
    if(isset($_POST['Submit']) and $_POST['Submit']=="投票"){
        $sel=$db->select("ve_ip","where ip='$ip' and title='".$_POST['title']."'");		//执行查询语句
        $row=$db->rows($sel);			//获取查询记录数
        if($row>=1){			//判断是否存在
            echo "<script>alert('您已经投过票了！');window.location.href='index.php';</script>";
        }else{
            $update=$db->update("ve_xvote","Xvote_jie=Xvote_jie+1","'".$_POST['radios']."'");
            $insert=$db->insert("ve_ip","ip,title,content,date","'$ip','".$_POST['title']."','".$_POST['radios']."','$date'");
            echo "<script>alert('投票成功！');window.location.href='index.php';</script>";
        }
    }
?>
</body>
</html>

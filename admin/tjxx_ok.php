<?php
header("Content-Type:text/html;charset=gb2312");
include("../class/mysql_class.php");
if(isset($_POST['Submit'])){
	$select=$db->select("ve_vote","where id='".$_POST['select']."'");
	$array=$db->arr_ay($select);
	for($i=0;$i<count($_POST['xx']);$i++){
		$_POST['xx'][$i];
		$insert=$db->insert("ve_xvote","xvote_title,vote_title,vote_id,Xvote_jie","'".$_POST['xx'][$i]."','".$array['vote_title']."','".$_POST['select']."','0'");	
	}
	echo "<script>alert('添加成功！');window.location.href='tpzt.php'</script>";
}else{
	echo "<script>alert('选项不能为空！');window.location.href=''</script>";
}
?>
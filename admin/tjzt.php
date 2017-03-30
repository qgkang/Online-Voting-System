<?php
session_start();
include("../class/mysql_class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加主题</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
.STYLE1 {font-size: 14px}
.STYLE3 {font-size: 14px; color: #990000; }
.STYLE4 {font-size: 14px; color: #990000; font-weight: bold; }
-->
</style></head>

<body>
<?php
include("header.php");
include("header1.php");
?>
<?php
$date=date("Y-m-d");
if(isset($_SESSION['name']) and $_SESSION['name']!=null and isset($_POST['Submit']) and $_POST['Submit']=="提交"){
	$insert=$db->insert("ve_vote","vote_title,vote_now,vote_admin","'".$_POST['zt']."','$date','".$_SESSION['name']."'");
	echo "<script>window.location.href='tpzt.php'</script>;";
}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="566" height="114" border="0" align="center" cellpadding="0" cellspacing="0">

    <tr>
      <td height="54" colspan="2"><div align="center" class="STYLE4">添加主题</div></td>
    </tr>
    <tr>
      <td width="401"><div align="center"><span class="STYLE3">主题名称：</span>
        <input name="zt" type="text" id="zt" size="40" />
      </div></td>
      <td width="165"><div align="center">
        <input type="submit" name="Submit" value="提交" />
      </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<?php
include("footer.php");
?>
</body>
</html>

<?php
session_start();
include("../class/mysql_class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加选项</title>
<style type="text/css">
<!--
.STYLE3 {font-size: 14px; color: #990000; }
.STYLE4 {font-size: 14px; color: #990000; font-weight: bold; }
.STYLE6 {font-size: 14px}
-->
</style>
</head>

<body>
<?php
include("header.php");
include("header1.php");
?>
<?php
if(isset($_SESSION['name']) and $_SESSION['name']!=null){
$select=$db->select("ve_vote","where id order by id desc");
}
?>
<form id="form1" name="form1" method="post" action="tjxx_ok.php">
  <table width="566" height="248" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="54" colspan="2"><div align="center" class="STYLE4">添加选项</div></td>
    </tr>
    <tr>
      <td width="401" height="78"><div align="center"><span class="STYLE3">主题：</span>
              <select name="select">
                <?php 
		while($array=$db->arr_ay($select)){
		?>
                <option value="<?php echo $array['id'];?>"><?php echo $array['vote_title'];?></option>
			
                <?php
		  }
		  ?>
              </select>
              
      </div></td>
      <td width="165"><div align="center"></div></td>
    </tr>

    <tr>
      <td height="78"><div align="center">
        <p><span class="STYLE3">选项</span><span class="STYLE6">1：</span>
          <input name="xx[]" type="text" id="xx[]" />
        </p>
        <p><span class="STYLE6">选项2：</span> 
          <input name="xx[]" type="text" id="xx[]" />
        </p>
      </div></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="38" colspan="2"><div align="center">
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

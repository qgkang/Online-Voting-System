<?php require("class/mysql_class.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>投票选项页</title>
    <style type="text/css">
        <!--
        body,td,th {
            font-size: 12px;
        }
        .STYLE1 {font-weight: bold}
        .STYLE3 {
            color: #990000;
            font-weight: bold;
        }
        -->
    </style>
    </head>

    <body>
    <?php
    include("header.php");
    include("header1.php");
    ?>
    <?php
    //判断页面中是否包含id变量，包含时执行sql查询，循环输出投票主题
    if(isset($_GET['id'])){
        $sel = $db->select("ve_xvote","where vote_id='".$_GET['id']."'");
        $array = $db->arr_ay($sel);
    }
    ?>
    <!--创建投票的表单-->
    <form id="form1" name="form1" method="post" action="toupiao_ok.php">
        <table  width="1000" height="68" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <blockquote>
                        <blockquote>
                            <p>
                                <span class="STYLE3">主题:<?php echo $array['vote_title'];?></span>
                                <input type="hidden" name="title" value="<?php echo $array['vote_title'];?>"/>
                            </p>
                        </blockquote>
                    </blockquote>
                </td>
                <td>
                    <div align="center"><span class="STYLE3"></span>
                        <div align="left">投票结果</div>
                    </div>
                </td>
            </tr>
        </table>
    </form>
    <?php
        $sele = $db->select("ve_xvote","where vote_id='".$_GET['id']."'");
        while($arr=$db->arr_ay($sele)){
    ?>
        <tr>
            <td width="646">
                <label>
                    <blockquote>
                        <blockquote>
                            <p>
                                <input type="radio" name="radios" value="<?php echo $arr['id'];?>" />
                                <?php echo $arr['xvote_title'];?>
                            </p>
                        </blockquote>
                    </blockquote>
                </label>
            </td>
            <td width="354"><?php echo $arr['Xvote_jie'];?>票</td>
        </tr>
        <?php
    }
    ?>
        <p align="center">
            <label></label>
            <input type="submit" name="Submit" value="投票" />
        </p>
    </form>
        <?php
        include("footer.php");
        ?>
    </body>
</html>









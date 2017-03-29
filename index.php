<?php require("class/mysql_class.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv = "Content-Type" content="text/html"; charset="utf-8" />
        <title>投票选项页</title>
        <style type="text/css">
            <!--
            .STYLE1 {
                color: #FFFFFF;
                font-weight: bold;
                font-size: 14px;
            }
            body,td,th {
                font-size: 12px;
            }
            .STYLE5 {color: #FF0000}
            .STYLE6 {
                font-size: 14px;
                font-weight: bold;
                color: #990000;
            }
            .STYLE7 {
                color: #993300;
                font-weight: bold;
            }
            a:link {
                text-decoration: none;
            }
            a:visited {
                text-decoration: none;
            }
            a:hover {
                text-decoration: none;
            }
            a:active {
                text-decoration: none;
            }
            .STYLE8 {
                color: #990033;
                font-weight: bold;
            }
            .STYLE9 {color: #F39500}
            .STYLE10 {color: #990000}
            -->
        </style>
    </head>
    <body>
    <?php
    include("header.php");
    include("header1.php");
    ?>
    <!--搜索模块-->
    <form id="form1" name="form1" method="post" action="sou.php">
        <table width="213" height="135" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td height="44" bgcolor="#FF9933">
                    <div align="center" class="STYLE6">主题搜索</div>
                </td>
            </tr>
            <tr><td bgcolor="#FF9933"></td></tr>
            <tr>
                <td height="91" bgcolor="#FF9933">
                    <p align="center">
                        <input name="content" type="text" id="content" />
                    </p>
                    <p align="center">
                        <input name="Submit" type="submit" value="提交"/>
                    </p>
                </td>
            </tr>
        </table>
    </form>

    </body>
</html>







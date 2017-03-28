<?php
//对数据库的连接和操作方法进行封装
class mysql{
    private $host; //服务器地址
    private $root;  //用户名
    private $pwd;
    private $database;
    private $conn;

    //初始化类
    function __construct($host,$root,$pwd,$database){
        $this->host = $host;
        $this->root = $root;
        $this->pwd = $pwd;
        $this->database = $database;
        $this->connect();
    }

    //数据库链接
    function connect(){
        $this->conn = mysql_connect($this->host,$this->root,$this->pwd);
        mysql_select_db($this->database,$this->conn);
        mysql_query("set names utf8");
    }

    function query($sql){
        return mysql_query($sql);
    }

    function arr_ay($result){
        return mysql_fetch_array($result);
    }

    function rows($result){
        return mysql_num_rows($result);
    }

    function db_close(){
        mysql_close($this->conn);
    }
    //查询
    function select($biao,$where){
        return $this->query("SELECT * FROM `$biao` WHERE `$where`");
    }

    //添加
    function insert($biaoming,$ziduan,$zhi){
        $this->query("INSERT INTO `db_vote`.`$biaoming`($ziduan) VALUES($zhi) ");
    }

    //删除
    function del($title,$where){
        $this->query("DELETE FROM `$title` WHERE $where");
    }

    //修改
    function update($title,$ziduan,$where){
        $this->query("UPDATE `db_vote`.`$title` SET $ziduan WHERE `$title`.`id` =".$where);
    }

    function up_date($title,$ziduan,$where){
        $this->query("UPDATE `db_vote`.`$title` SET $ziduan WHERE $where");
    }
}

//实例化数据库类
$db = new mysql("127.0.0.1","root","root","db_vote");
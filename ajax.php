<?php
include_once("opensql.php");
$name=$_POST['name'];
$sql1="select * from tb_consumer where name='$name'";
$xian=$mysqldb->select($sql1);
$r=mysql_num_rows($xian);

if($r>0){
    echo json_encode(["该用户已存在"]);
}

<?php
include_once("opensql.php");
$id=$_GET['id'];
$sql="select * from tb_single where id=$id";//准备sql语句
$xian=$mysqldb->select($sql);
$row=mysql_fetch_row($xian);


$filePath = "img/";//此处给出你下载的文件在服务器的什么地方
$fileName = "$row[11]";
//此处给出你下载的文件名
$file = fopen($filePath . $fileName, "r"); //   打开文件
//输入文件标签
Header("Content-type:application/octet-stream ");
Header("Accept-Ranges:bytes ");
Header("Accept-Length:   " . filesize($filePath . $fileName));
Header("Content-Disposition:   attachment;   filename= " . $fileName);
ob_clean();
flush();
//   输出文件内容
echo fread($file, filesize($filePath . $fileName));
fclose($file);
exit;

?>
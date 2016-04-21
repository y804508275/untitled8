<script src="jquery-1.12.3.min.js" type="text/javascript"></script>
<?php
header("Content-type:text/html;charset:utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/7
 * Time: 0:09
 */
$picname='upload';
if(!file_exists($picname)){
    mkdir($picname);
}


$file="./".$picname."/".$_FILES["pic"]["name"];
$test = addslashes($file);


$img="<img src=\"".$file."\">";
echo "<script>obj=top.document.getElementById('uploadimg');$(obj).append('$img');</script>";

if(isset($_POST["submit"])&&$_POST["submit"]=="注册"){
    $conn=mysql_connect("localhost","furui","1013");
    mysql_select_db("input");
    mysql_query("SET NAMES 'utf8'");
    $mysql_insert="insert into information(tele,title)VALUES('1099991','$file')";
    echo $mysql_insert;
    $res_insert=mysql_query($mysql_insert);


}
?>
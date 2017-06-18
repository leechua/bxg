<?php
header('Content-Type:text/html;charset=utf-8');
//include 'views/teacher/teacher_add.html';
//include 'views/dashboard/index.html';
//var_dump($_SERVER['PATH_INFO']);
//echo PATH_INFO;
//var_dump($_SERVER);
$path='';
if(array_key_exists('PATH_INFO',$_SERVER)){
$path=$_SERVER['PATH_INFO'];//通过[]字符串的方式访问
//echo $path;
$path=substr($path,1);
$arr=explode("/",$path);//以分隔符切割字符串
if(count($arr)==2){//count:检测数组长度
$path='/views/'.$arr[0].'/'.$arr[1];//php中，用.连接字符串，js中用+
}else if(count($arr)==1){
$path='/views/dashboard/'.$arr[0];
}
}else{
$path='/views/dashboard/index';
}
//echo $path;
$path=$path.'.html';//拼接字符串，使网址栏输入不带.html的网页，页面也能出现.html的对应页面，例输入teacher也为：teacher.html
//echo $path;
include $path;//输入任何不带.html的网页，都出现相应的网页
////上面这句，是将$path的路径返回浏览器，进行渲染
?>
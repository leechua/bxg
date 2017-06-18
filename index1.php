<?php
    header('Content-Type:text/html;charset=utf-8');
//极简模式的导航操作



//因为现在是后台的管理系统，不能再像之前那样访问哪个页面就访问哪个叶明
//如果想访问对应的页面，需要登录才能访问

//http://www.bxg.com/index.php/views/dashboard/index.html
//相当于访问http://www.bxg.com/views/dashboard/index.html

//include 'views/dashboard/index.html';
//include 'views/teacher/add.html';
//比如说我们输入域名就让我们看到views/dashboard/index.html
var_dump($_SERVER);

$path = "";
if(array_key_exists("PATH_INFO",$_SERVER)){


$path=$_SERVER['PATH_INFO'];//获取index.php后面的路劲信息
$path=substr($path,1);//截取字符串，把前面/去掉

}else{
//如果没有'PATH_INFO'的话，说明是用www.bxg.com或是www.bxg.com/index.php
$path='views/dashboard/index';
}
//获取浏览器输入的地址中的index.php后面的那些路径



$path=$path.'.html';//拼接字符串，拼接成对应文件的路径
include $path;
?>

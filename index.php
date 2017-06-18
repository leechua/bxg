<?php
    header('Content-Type:text/html;charset=utf-8');

    $path='';
    if(array_key_exists("PATH_INFO",$_SERVER)){
    $path=$_SERVER['PATH_INFO'];
    $path=substr($path,1);//用来截图字符串
//    $path=substr($path,1);
    $arr=explode("/",$path);//用来切割字符串
    if(count($arr)==2){
//    $path='/views/dashboard/index';
    $path='/views/'.$arr[0].'/'.$arr[1];
    }else if(count($arr)==1){
    $path='/views/dashboard/'.$arr[0];
    }

    }else{
    $path='views/dashboard/index';
    }
    $path=$path.'.html';//拼接字符串，拼接成对应文件的路径
    include $path;
?>

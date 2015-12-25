<?php
/**
 * Created by zxz's Tool.
 * User: zxz
 * Date: 2015/12/24
 * Time: 15:46
 */
header('Content-Type:text/html;charset=utf-8 ');
require_once('smartyConfig.php');
if($_GET['view']){
    $getView=trim($_GET['view']);
    $loadFile=THAT_FILE_ROOT.'controller/'.$getView.'.php';
    if(file_exists($loadFile)){
        require_once($loadFile);
    }else{
        echo $loadFile."--文件不存在";
    }
    exit;
}
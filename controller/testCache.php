<?php
/**
 * Created by zxz's Tool.
 * User: zxz
 * Date: 2016/1/23
 * Time: 15:31
 */
echo "D:\wamp\wamp\www\testFile\testSmarty\controller\testCache.php";
//定义一个时间来测试insert与普通assign的差别
$date = date("Y-m-d H:i:s");
$smarty->assign("date", $date);
//insert
function insert_get_current_time($date){
    return date("Y-m-d H:i:s");
}

//smarty 3
// function declaration
function smarty_block_nocache($param,$smarty)
{
    var_dump($param);
    return false;
}
//$smarty->clearCache($getView.'.htm');
// register with smarty
$smarty->registerPlugin("function","nocachZxz", "smarty_block_nocache");

$smarty->display($getView.'.htm');

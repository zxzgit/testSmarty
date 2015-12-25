<?php
/**
 * Created by zxz's Tool.
 * User: zxz
 * Date: 2015/12/25
 * Time: 12:18
 */
//在smarty3.1中根本就没有register_function()函数。
//在网上查了一些资料才知道smarty3.1用registerPlugin()替代了register_function()。
//registerPlugin()的三个参数分别是：类型（function），smarty中自定义的标签，你自己在php中的自定义函数

$smarty->registerPlugin("function","date_now", "print_current_date");
function print_current_date($params, $smarty)
{
    echo "<pre>";
    print_r($params);

    if(empty($params["format"])) {
        $format = "%b %e, %Y";
    } else {
        $format = $params["format"];
    }
    return strftime($format,time());
}
$smarty->display($getView.'.htm');
<?php
/**
 * Created by zxz's Tool.
 * User: zxz
 * Date: 2015/12/24
 * Time: 9:31
 */

$data=array('aValue','2value','3value','4value','5value','6value');

function zxzFn(){
    return "thisIsZxzFnReturn";
}
//普通select
$smarty->assign('myOptions', array(
        1800 => 'Joe Schmoe',
        9904 => 'Jack Smith',
        2003 => 'Charlie Brown')
);
$smarty->assign('mySelect', 9904);
//values属性数组和output属性数组分开的下拉列表
$smarty->assign('cust_ids', array(56,92,13));
$smarty->assign('cust_names', array(
    'Joe Schmoe',
    'Jane Johnson',
    'Charlie Brown'));
$smarty->assign('customer_id', 92);

//<optgroup>的下拉列表：
$arr['Sport'] = array(6 => 'Golf', 9 => 'Cricket',7 => 'Swim');
$arr['Rest'] = array(3 => 'Sauna',1 => 'Massage');
$smarty->assign('lookups', $arr);
$smarty->assign('fav', 7);


$smarty->assign(array(
    'data'=>$data,
    'name'=>'zxz',
    'sex'=>'man'
));
$smarty->display('testHtmlOptions.htm');
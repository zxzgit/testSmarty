<?php
/**
 * Created by zxz's Tool.
 * User: zxz
 * Date: 2015/12/24
 * Time: 16:23
 */

$smarty->assign('cust_radios', array(
    1000 => 'Joe Schmoe',
    1001 => 'Jack Smith',
    1002 => 'Jane Johnson',
    1003 => 'Charlie Brown'));

$people = array('tony','sweety','abc','four');
$smarty->assign('people',$people);
$smarty->assign('customer_id', 1001);

$smarty->display($getView.'.htm');
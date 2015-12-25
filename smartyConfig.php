<?php
/**
 * Created by zxz's Tool.
 * User: zxz
 * Date: 2015/12/24
 * Time: 15:44
 */
date_default_timezone_set('Asia/Shanghai');

ini_set('display_errors','On');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
define(THAT_FILE_ROOT,dirname(__FILE__).'/');
define(SMARTYTMP_DIR,dirname(__FILE__).'/templates/');//定义一个模版的路径
include('./smarty/libs/Smarty.class.php');//导入类文件所在位置 这里的地址都是相对于index.这个文件来查找相应的文件
$smarty=new Smarty;

//设置各个目录的路径，这里是安装的重点
$smarty->template_dir =SMARTYTMP_DIR."templates";//魔板地址，这里的地址都是相对于当前文件 即include Smarty的这个正在写的文件index.这个文件来查找相应的文件 下面几个参数的设置也死一样的
$smarty->compile_dir =SMARTYTMP_DIR."templates_c";//缓存文件
$smarty->config_dir = SMARTYTMP_DIR."config";//参数文件
$smarty->cache_dir =SMARTYTMP_DIR."cache";
//smarty模板有高速缓存的功能，如果这里是true的话即打开caching，但是会造成网页不立即更新的问题，当然也可以通过其他的办法解决
$smarty->caching = false;
$smarty->left_delimiter = "{#"; //重新定义边界，因为默认边界“{}“符，在html页面中嵌入js脚本文件编写代码段时使用的就是”{}“符，自定义边界符还可以是<{ }>, {/ /} 等
$smarty->right_delimiter = "#}";


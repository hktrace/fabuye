<?php 
/*##################################################
# xypaly 智能视频解析整合接口
# 纯洁博客源码分享 http://www.13bk.cn
###################################################*/
//运行目录
define("FCPATH", str_replace("\\", "/",dirname(__FILE__)));

//加载配置文件
require_once FCPATH.'/save/config.php';

//加载防火墙规则
Blacklist::parse($BLACKLIST);
//定义模板目录,请勿修改！
if(lsMobile())	{ define('TEMPLETS_PATH', 'templets/'.$templets['wap'].'/'); }else{define('TEMPLETS_PATH', 'templets/'.$templets['pc'].'/');}
include_once  TEMPLETS_PATH.$templets['html'].'/index.php';


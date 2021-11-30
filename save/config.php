<?php require_once dirname(__FILE__)."/../include/main.class.php";include "data.php"; header("Content-type: text/html; charset=utf-8");
$API_PATH='api.php';
$user='admin';
$pass='7fef6171469e80d32c0559f88b377245';
$TITLE='58源码发布页';
$keywords='58源码发布页';
$description='58源码永久发布页';
$HEADER='<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-language" content="zh-CN" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><!-- IE内核 强制使用最新的引擎渲染网页 -->
<meta name="renderer" content="webkit"/>  <!-- 启用极速模式(webkit) -->
<meta http-equiv="pragma" content="no-cache" /><meta http-equiv="expires" content="0" />    <!-- 不缓存网页 -->
<meta name="msapplication-tap-highlight" content="no"/> <!-- windows phone 点击无高光 -->
<meta name="HandheldFriendly" content="true" /> <!-- 优化老式移动设备 -->
<meta http-equiv="Access-Control-Allow-Origin" content="*"><!-- 允许跨域访问 -->
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0 ,maximum-scale=1.0, user-scalable=no" /><!-- 手机H5兼容模式 -->
<link type="image/x-icon" href="favicon.ico" rel="icon" /><link type="image/x-icon" href="favicon.ico" rel="shortcut icon" /><link type="image/x-icon" href="favicon.ico" rel="bookmark" />
';
$BOOK_INFO=array (
  'off' => '1',
  'info' => '<font color="#00FF00" size="6px">请用户收藏该网页.找不到路了.就来看一下,发布最新网址!</font>
<p>发送任意內容获取我爱看美剧最新訪問地址邮箱</p>
<p>58yuanma@gmail.com</p>
<p>推荐使用电信、联通网络，下载火狐浏览器或者谷歌浏览器訪問网站。</p>
<p>如遇浏览器屏蔽网站请切换浏览器，有网址安全检测请关闭，尝试更换网络环境，网页无法打开请耐心等待修复。</p>',
);
$templets=array (
  'off' => '0',
  'html' => 'html',
  'css' => '',
  'pc' => 'fby1',
  'wap' => 'fby1',
);
$chche_config=array (
  'type' => '1',
  'prot' => '6379',
  'time' => '86400',
);
$timecookie='2';
$timeout='10';
$from_timeout='5';
$BLACKLIST=array (
  'off' => '0',
  'match' => 
  array (
    0 => 
    array (
      'off' => '1',
      'type' => '0',
      'val' => 
      array (
        0 => 'mov.00000',
      ),
      'black' => '0',
      'name' => '授权网站',
      'match' => '0',
      'num' => '100',
    ),
    1 => 
    array (
      'off' => '1',
      'type' => '1',
      'val' => 
      array (
        0 => 'av.com',
      ),
      'black' => '1',
      'name' => '拦截非法网站',
      'match' => '1',
      'num' => '10',
    ),
    2 => 
    array (
      'off' => '1',
      'type' => '0',
      'val' => 
      array (
        0 => 'mov.00000',
      ),
      'black' => '2',
      'name' => '域名黑名单',
      'match' => '1',
      'num' => '6',
    ),
    3 => 
    array (
      'off' => '1',
      'type' => '3',
      'val' => 
      array (
        0 => '127.0.0.1',
      ),
      'black' => '0',
      'name' => '禁IP',
      'match' => '1',
      'num' => '100',
    ),
  ),
  'black' => 
  array (
    0 => 
    array (
      'type' => '1',
      'action' => '1',
      'info' => 'exit("本站已开启防盗链，获取授权请联系本站管理员");',
      'name' => '提示防盗链',
    ),
    1 => 
    array (
      'type' => '1',
      'action' => '1',
      'info' => 'exit("目标网站涉嫌非法信息,服务器已拒绝解析");',
      'name' => '提示非法信息',
    ),
    2 => 
    array (
      'type' => '1',
      'action' => '1',
      'info' => 'exit("目标网站在黑名单中,请联系网站管理员解除！");',
      'name' => '提示黑名单',
    ),
    3 => 
    array (
      'type' => '1',
      'action' => '1',
      'info' => 'echo "本站已开启防盗链，获取授权请联系本站管理员";header("Refresh:3;url=http://00000");',
      'name' => '跳转首页',
    ),
    4 => 
    array (
      'type' => '1',
      'action' => '1',
      'info' => 'header("HTTP/1.1 404 Not Found");exit("404,文件未找到");',
      'name' => '提示404',
    ),
    5 => 
    array (
      'type' => '0',
      'action' => '0',
      'info' => '',
      'name' => '植入广告',
    ),
  ),
);
$NULL_URL=array (
  'type' => '2',
  'url' => 'so.html',
  'info' => '   <style type="text/css">
    H1{margin:10% 0 auto; color:#C7636C; text-align:center; font-family: Microsoft Jhenghei;}
    p{font-size: 1.2rem;/*1.2 × 10px = 12px */;text-align:center; font-family: Microsoft Jhenghei;}
    </style>  
   <h1>请填写url地址</h1>
   <p>本解析接口仅用于学习交流，盗用必究！~</p>
',
);
$FOOTER_CODE='';
$play=array (
  'web_url' => 'https://www.fabu1.com
https://www.fabu2.com
https://www.fabu3.com
https://www.fabu4.com
https://www.fabu5.com
https://www.fabu6.com',
);

<?php 
 include "config.php"; 
 require_once(dirname(__FILE__).'/../include/db.class.php');
 session_start(); 
 if(isset($_SESSION['lock_config'])){ $time=(int)$_SESSION['lock_config']-(int)time(); if($time>0){ exit(json_encode(array('success'=>0,'icon'=>5,'m'=>"请勿频繁提交，".$time."秒后再试！")));}}
 $_SESSION['lock_config']= time()+ $from_timeout;
  
//定义API路径；
if(filter_has_var(INPUT_POST, "API_PATH")){$API_PATH=filter_input(INPUT_POST, "API_PATH");}


//用户名设置
if(filter_has_var(INPUT_POST, "username")){$user=filter_input(INPUT_POST, "username");}

//密码设置
if(filter_has_var(INPUT_POST, "pass")){$pass=filter_input(INPUT_POST, "pass");}

//SEO设置
if(filter_has_var(INPUT_POST, "title")){   
    $TITLE=filter_input(INPUT_POST, "title");    //网站标题设置
    $keywords=filter_input(INPUT_POST, "keywords");  //站点关键词
    $description=filter_input(INPUT_POST, "description"); //站点描述
    $HEADER=filter_input(INPUT_POST, "HEADER");  //自定义
}

//公告设置
if(filter_has_var(INPUT_POST, "BOOK_INFO_OFF")){
$BOOK_INFO=array(
 'off'=>filter_input(INPUT_POST, "BOOK_INFO_OFF"),        
 'info'=> filter_input(INPUT_POST, "BOOK_INFO_INFO") 
);}

//模板设置
if(filter_has_var(INPUT_POST, "templets_html")){
$templets=array ( 
      'off' => filter_input(INPUT_POST, "templets_off"),
     'html' => filter_input(INPUT_POST, "templets_html"),
      'css' => filter_input(INPUT_POST, "templets_css"),
      'pc' => filter_input(INPUT_POST, "templets_pc"),
     'wap' =>filter_input(INPUT_POST, "templets_wap")
);
}


//空URL设置
if(filter_has_var(INPUT_POST, "NULL_URL_TYPE")){

  $NULL_URL=array ( 
  'type' => filter_input(INPUT_POST, "NULL_URL_TYPE"),
  'url' =>filter_input(INPUT_POST, "NULL_URL_URL"),
  'info' => filter_input(INPUT_POST, "NULL_URL_INFO")
);
}



//缓存设置
if(filter_has_var(INPUT_POST, "chche_type")){
$chche_config=array (
  'type' =>filter_input(INPUT_POST, "chche_type"),
  'prot' =>filter_input(INPUT_POST, "chche_prot"),
  'time' =>filter_input(INPUT_POST, "chche_time"),
);
}
 

//广告代码
if(filter_has_var(INPUT_POST, "FOOTER_CODE")){$FOOTER_CODE=filter_input(INPUT_POST, "FOOTER_CODE");}

//有效期
if(filter_has_var(INPUT_POST, "timecookie")){$timecookie=filter_input(INPUT_POST, "timecookie");}

//访问超时
if(filter_has_var(INPUT_POST, "timeout")){$timeout=filter_input(INPUT_POST, "timeout");}

//提交间隔
if(filter_has_var(INPUT_POST, "from_timeout")){$from_timeout=filter_input(INPUT_POST, "from_timeout");}



//解析
if(filter_has_var(INPUT_POST, "jx_url")){ 
    $input=trim(filter_input(INPUT_POST, "jx_url"));
    if($input===""){$jx_url=array();}else{$jx_url=preg_split('/[\r\n]+/s',$input);}
       
}

//链接
if(filter_has_var(INPUT_POST, "jx_link")){
    $input=trim(filter_input(INPUT_POST, "jx_link"));
      if($input===""){
         $jx_link=[];        
     } else{
	$arr=preg_split('/[\r\n]+/s', $input);	
	foreach($arr as $key){$val=explode("=>",$key); $array[$val[0]]=$val[1];}
        $jx_link=$array;
     }
    
}


//直播
if(filter_has_var(INPUT_POST, "live_url")){
     $input=trim(filter_input(INPUT_POST, "live_url"));
     if($input===""){
         $live_url=[];        
     } else{
        $arr=preg_split('/[\r\n]+/s',$input );	
        foreach($arr as $key){$val=explode("=>",$key); $array[$val[0]]=$val[1];}
        $live_url=$array;
    }
  
}



//防火墙开关设置
if(filter_has_var(INPUT_POST, "BLACKLIST_OFF")){	
	$BLACKLIST['off']=filter_input(INPUT_POST, "BLACKLIST_OFF");
    $BLACKLIST['type']=filter_input(INPUT_POST, "BLACKLIST_TYPE");
}
//防火墙白名单设置

//发布页网址配置

if(filter_has_var(INPUT_POST, "web_url")){  
  $play['web_url']=filter_input(INPUT_POST, "web_url");
       
}


if( Main_db::save()){
	
	     exit(json_encode(array('success'=>1,'icon'=>1,'m'=>"保存成功!")));
	
	 }else{
		 exit(json_encode(array('success'=>0,'icon'=>0,'m'=>"保存失败!请检测配置文件权限")));
	} 
  

<?php
/*##################################################
# xypaly 智能视频解析 X3  by 00000
# 官方网站: http://00000
# 源码获取：00000
# 模块功能：云播放配置文件
###################################################*/

$ERROR_404='404|404错误：你访问的页面丢失了|那条视频不见了|出错提示|404页';  

//输出类型转换,支持正则,格式： 正则(匹配播放源或URL) => 输出类型
$type_match=array(

'!m3u8!i'=>'hls',
'!\/share\/!i'=>'url',
);

//网页标题分隔符正则设置,用于视频标题获取。

$title_match='!^(.*?)(?=-|—|_|——|-)!i';


//视频标题过滤
$title_replace= array("全集","高清在线观看",'英文版',"国语版","原声版","普通话版","《","》","【","】","（","）","(",")");

/* PHP正则简单语法(具体参考百度)
1.格式： /正则内容/i' , 其中，'/'为界定符,可以为任意成对字符，比如{}; 符号'i'标示匹配时不区分大小。
2.语法： ^ 匹配文本开头，$ 匹配文本结尾; \ 转义符,表示下个字符作普通文本处理 ; (表达式) 子表达式匹配文本; .*? 任意不包括换行符的字符; (?:表达式) 使用表达式,不获取匹配 ;
//目前各大视频站标题例子
1.腾讯	网页标题：创业时代 第01集_1080P在线观看平台_腾讯视频  
2.爱奇艺,芒果TV,搜狐,PPTV   网页标题：永远一家人 第13集 - 视频在线观看 - 永远一家人 - 芒果TV  
3.优酷	 网页标题：永远一家人 24—电视剧—视频高清在线观看-优酷
4.乐视，土豆        网页标题： 北京爱情故事01 - 在线观看 - 电视剧 - 乐视视频
5.B站动漫       网页标题： 嫁给非人类：第5话_番剧_bilibili_哔哩哔哩 
6.咪咕视频         网页标题：《为青春点赞》第02集-高清正版在线播放-咪咕视频
7.风行视频   网页标题： 我们的四十年-第4集-电视剧-全集在线观看-风行网

 */
 
 //视频标题和集数正则规则设置,请勿随意修改,否则出错！(匹配规则：子表达式1为标题,子表达式2为集数)
 $name_match=array(
	//腾讯,爱奇艺,芒果TV,搜狐,PPTV
	'!(qq.com|iqiyi.com|mgtv.com|sohu.com|pptv.com)!i'=>array('/^(.*?)(?:第|)(\d+)(?:集|期|话|)$/i'),        
    //优酷
	 '!youku.com!i'=>array('/^(.*?).(\d+)/i'),                               
    //乐视，土豆  
	 '!le.com|tudou.com!i'=>array('/^(.*?).(\d+)/i'),                              
    //B站番剧
	 '!bilibili.com!i'=>array('/^(.*?)：(?:第|)(\d+)(?=话|集)/i'),                             
    //咪咕视频
	 '!miguvideo.com!i'=>array('/^(?:《|)(.*?)(?:》|)(?:第|)(\d+)(?=话|集)/i'),   
	//通用
	'!^.*$!i'=>array('/^(.*?)(?:第|)(\d+)(?:集|期|话|)$/i','/^(.*?)$/i'),                     
 );	
 

//URL地址过滤
  $url_replace= array("&tdsourcetag=s_pcqq_aiomsg");
 
//视频地址转换,使用PHP正则,规则：'=>'后面的'(?n)'会用前面正则左起第n个小括号里的匹配内容替换。

  $url_match=array(
    '!m.v.qq.com.*?cid=(.*?)&vid=(.*?)[?:&|$]!i'=>'https://v.qq.com/x/cover/(?1)/(?2).html',
	'!m.v.qq.com.*?cid=(.*?)[?:&|$]!i'=>'https://v.qq.com/x/cover/(?1).html',
	'!m.v.qq.com/cover/r/(.*?)cid=(.*?)[?:&|$]!i'=>'https://v.qq.com/x/cover/(?1).html',
	'!m.v.qq.com/cover/./(.*?)\.html\?vid=(.*?)(?:&|$)!i'=>'https://v.qq.com/x/cover/(?1)/(?2).html',
	'!m.fun.tv/mplay/\?mid=(\d+)&vid=(\d+)(?:&|$)!i'=>'https://www.fun.tv/vplay/g-(?1).v-(?2)',
	'!http://(.*?mgtv.com/.*?html)!i'=>'https://(?1)',
	'!m.youku.com/video/id_(.*?)==.html!i'=>'https://v.youku.com/v_show/id_(?1)==.html',
	
 );


?>
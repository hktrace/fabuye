<?php include "config.php";  




?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
    <head>
        <title>系统设置-二胖发布页 v1.0</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-language" content="zh-CN">       
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="pragma" content="no-cache">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="./css/font.css">
        <link rel="stylesheet" href="./css/xadmin.css">
        <script type="text/javascript" src="./js/jquery.min.js"></script>
        <script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="./js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
          <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
          <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="x-nav">
            <span class="layui-breadcrumb">
                <a><cite>首页</cite></a>  
                <a><cite>系统设置</cite></a>
                <a><cite>基本设置</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                <ul class="layui-tab-title">
                    <li class="layui-this">基本设置</li>
                    <li>显示设置</li>
                </ul>
                <div class="layui-tab-content" >
                    <div class="layui-tab-item layui-show">
                        <form class="layui-form layui-form-pane" >
                            <fieldset class="layui-elem-field">

                                <legend>滚动公告设置 

                                    <input type="checkbox" id="BOOK_INFO_OFF" name="BOOK_INFO_OFF" lay-skin="switch"  lay-text="开|关"  <?php echo $BOOK_INFO['off'] == "1" ? "checked" : ''; ?> value=<?php echo $BOOK_INFO['off']; ?> >

                                </legend>
                                <div class="layui-field-box">


                                    <div class="layui-form-item layui-form-text">
                                        <label class="layui-form-label">
                                            公告内容（支持HTML）
                                        </label>
                                        <div class="layui-input-block">
                                            <textarea  name="BOOK_INFO_INFO"  class="layui-textarea" ><?php echo $BOOK_INFO['info']; ?></textarea>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>


                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">
                                    广告代码
                                </label>
                                <div class="layui-input-block">
                                    <textarea  name="FOOTER_CODE"  class="layui-textarea" ><?php echo $FOOTER_CODE; ?></textarea>
                                </div>
                            </div>



                            <div class="layui-form-item">
                                <button class="layui-btn" lay-submit="" lay-filter="*">
                                    保存
                                </button>
                            </div>

                        </form>

                    </div>



                    <div class="layui-tab-item">
                        <form class="layui-form layui-form-pane" action="">


                            <fieldset class="layui-elem-field">

                                <legend>SEO设置</legend>			 
                                <div class="layui-field-box">	 


                                    <div class="layui-form-item">
                                        <label class="layui-form-label">
                                            网站标题
                                        </label>
                                        <div class="layui-input-block">
                                            <input type="text" name="title" autocomplete="off"  value="<?php echo $TITLE ?>" class="layui-input">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">
                                            关键词
                                        </label>
                                        <div class="layui-input-block">
                                            <input type="text" name="keywords" autocomplete="off" value="<?php echo $keywords; ?>"
                                                   class="layui-input">
                                        </div>
                                    </div>
                                    <div class="layui-form-item">
                                        <label class="layui-form-label">
                                            描述
                                        </label>
                                        <div class="layui-input-block">
                                            <input type="text" name="description" autocomplete="off" value="<?php echo $description; ?>" 
                                                   class="layui-input">
                                        </div>
                                    </div>

                                   <div class="layui-form-item">
                                        <label class="layui-form-label">
                                            自定义
                                        </label>
                                        <div class="layui-input-block">
                                           <textarea  name="HEADER"  style="height:200px;" class="layui-textarea" ><?php echo $HEADER; ?></textarea>
                                                  
                                        </div>
                                    </div>
                                    
                             
                     

                                </div>
                            </fieldset>  		


                            <fieldset class="layui-elem-field">

                                <legend>模板设置</legend>
                                <div class="layui-field-box">
                                    <table class="layui-table">
                                        <tbody>
                                            <tr>
                                                <th>模板主目录</th>
                                                <td>

                                                    <input type="text" name="templets_html" autocomplete="off" value="<?php echo $templets['html']; ?>" class="layui-input" /></td>
                                            </tr>
                                            
                                               <tr>
                                                <th>
                                                 自定义css
                                                <input type="checkbox" id="templets_off" name="templets_off" lay-skin="switch"  lay-text="开|关"  <?php echo $templets['off'] == "1" ? "checked" : ''; ?> value=<?php echo $templets['off']; ?> >
                                              
                                                </th>
                                                <td>                                       						 
                                                     <textarea  name="templets_css"  class="layui-textarea" ><?php echo $templets['css']; ?></textarea>		         
                                                </td>
                                             </tr>
                                            
                                            
                                            <tr>
                                                <th>PC端使用模板</th>
                                                <td>
                                                    <?php $arr = GlobalBase::getdirs("../templets"); ?>

                                                    <select name="templets_pc" lay-filter="province">							 
                                                        <?php foreach ($arr as $key): ?>							 							 
                                                            <option <?php echo ($templets['pc'] == $key) ? "selected" : ''; ?> ><?php echo $key; ?></option>	   
                                                        <?php endforeach; ?>			         
                                                    </select>


                                                </td></tr>
                                            
                                          
                                            
                                            
                                            
                                            <tr>
                                                <th>移动端使用模板</th>
                                                <td>

                                                    <select name="templets_wap" lay-filter="province">							 
                                                        <?php foreach ($arr as $key): ?>							 							 
                                                            <option <?php echo ($templets['wap'] == $key) ? "selected" : ''; ?> ><?php echo $key; ?></option>	   
                                                        <?php endforeach; ?>			         
                                                    </select>

                                                </td></tr>
         

                                            
                                            
                                            


                                        </tbody>
                                    </table>
                                </div>
                            </fieldset>
                            <div class="layui-form-item">
                                <button class="layui-btn" lay-submit="" lay-filter="*" >
                                    保存
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>



        <script>
            var x_admin_interval_flag='';

            layui.use(['form', 'layer'], function () {
                $ = layui.jquery;
                var form = layui.form, layer = layui.layer;

                //监听提交
                 form.on('submit(*)', function (data) {   
 
                    //载入动画
                    layer.load(0); 
                    //添加滚动公告开关按钮数据
                    if ("undefined" !== typeof data.field.BOOK_INFO_INFO) {
                        data.field.BOOK_INFO_OFF = $("#BOOK_INFO_OFF").prop("checked") ? "1" : "0";
                    }
                     if ("undefined" !== typeof data.field.templets_css) {
                        data.field.templets_off = $("#templets_off").prop("checked") ?"1" :"0";
                    }
                    console.log(data.field);
                    //发异步，把数据提交给php    
                    $.ajax({
                        url: "save.php", 
                        data: data.field,
                        type: "post", dataType: 'json',
                        beforeSend: function () {
                            layer.load(0);
                        },
                        success: function (result) {
                            layer.closeAll("loading");
                            layer.alert(result['m'], {icon: result['icon']});                         
                        },
                        error: function () {
                            layer.closeAll("loading");
                            layer.alert("数据获取异常，请检查网络或防火墙设置!", {icon: 5});

                        }
                    });
                
                    return false;
                });


            });
        </script>



    </body>

</html>
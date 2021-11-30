<?php include "config.php"; ?>
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
                <a><cite>网址设置</cite></a>
            </span>
            <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
        </div>
        <div class="x-body">
            <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
                <ul class="layui-tab-title">
                    <li class="layui-this">发布页内网址设置 </li>
                </ul>
                <div class="layui-tab-content" >
                    
                    <div class="layui-tab-item layui-show">
                        <form class="layui-form layui-form-pane" action="">

                            <fieldset class="layui-elem-field">

                                <legend>网址配置--一行一个网址</legend>
                                <div class="layui-field-box">
                                    <table class="layui-table">
                                        <tbody>
                                            <textarea name="web_url" class="layui-textarea"><?php echo $play['web_url']; ?></textarea>
                                        </tbody>
                                    </table>
                                </div>
                            </fieldset>
                            <div class="layui-form-item">
                                <button class="layui-btn" lay-submit="" lay-filter="*">
                                    保存
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div> 
        </div>


        <script>


            layui.use(['form', 'layer'], function () {
                $ = layui.jquery;
                var form = layui.form, layer = layui.layer;

                //监听提交
                form.on('submit(*)', function (data) {

                    //添加开关按钮数据
                    if ("undefined" !== typeof data.field.play_line_all_autoline_val) {
                        data.field.play_line_all_autoline_off = $("#play_line_all_autoline_off").prop("checked") ? 1 : 0;
                    }
                    if ("undefined" !== typeof data.field.play_play_all_autoline_val) {
                        data.field.play_play_all_autoline_off = $("#play_play_all_autoline_off").prop("checked") ? 1 : 0;
                    }
                    if ("undefined" !== typeof data.field.play_style_off) {
                        data.field.play_style_off = $("#play_style_off").prop("checked") ? 1 : 0;
                    }


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
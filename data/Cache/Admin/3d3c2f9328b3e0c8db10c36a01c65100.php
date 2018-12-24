<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>


<!-- Mirrored from www.zi-han.net/theme/hplus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jan 2016 14:16:41 GMT -->
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="/static/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="/static/admin/css/style.min862f.css?v=4.1.0">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="/static/admin/css/index.css"/>
    <link rel="stylesheet" href="/static/admin/css/jquery-ui.css">
    <link href="/static/admin/css/jquery-ui-timepicker-addon.css" type="text/css" />
    <script type="text/javascript" src="/static/admin/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/static/admin/js/select.js"></script>
    <script type="text/javascript" src="/static/js/jquery.md5.js"></script>
    <script type="text/javascript" src="/static/admin/js/plupload-2.0.0/plupload.full.min.js"></script>
    <script src="/static/admin/js/jquery-ui.js"></script>
    <script src="/static/admin/js/jquery-ui-timepicker-addon.js" type="text/javascript"></script>
    <script src="/static/admin/js/jquery.ui.datepicker-zh-CN.js.js" type="text/javascript" charset="gb2312"></script>
    <script src="/static/admin/js/jquery-ui-timepicker-zh-CN.js" type="text/javascript"></script>
    <script type="text/javascript" src="/static/admin/js/posi-img.js"></script>
    <script type="text/javascript">
		var  __BASE__= '<?=$baseUrl?>';
    </script>
</head>
<body class="gray-bg">
    <div class="scrollbox" style="overflow-y: scroll; overflow-x: hidden;">
        <div id='append_parent'></div>
    	
<div class="tipsbox radius3">
    <div class="tips boxsizing radius3">
        <div class="tips-titbox">
            <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
            <span class="open-span span-icon"><i class="open-icon"></i></span>
        </div>
    </div>
    <ol class="tips-list" id="tips-list">

        <li> 1.启用后支持使用微信帐号来登录</li>
        <li> 2.微信开放平台相应的AppID</li>
        <li> 3.微信开放平台相应的AppSecret</li>
    </ol>
</div>

<div class="iframeCon">
<div class="iframeMain">
        <!--提示框结束-->
        <!--切换内容-->
    <ul class="transverse-nav">
        <li class="activeFour"><a href="javascript:;"><span>微信登录</span></a></li>
    </ul>
        <div id="sidebar-tab" class="white-bg">
            <div  class="tab-conbox">

                    <form method="post" class="form-horizontal" id="setting_form1" action="<?php echo U('Admin/Wx/wxloginOp');?>">
                        <div class="jurisdiction boxsizing"">
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar">*</span>微信登录：</dt>
                                <dd class="left text-l">
                                    <div class="switch">

                                        <div class="switch-box">
                                            <input type="checkbox" <?php if($config['wx_login'] == 'on'): ?>checked="true"<?php endif; ?> name="wx_login" class="switch-radio" id="example1">
                                            <span class="switch-half switch-open">ON</span>
                                            <span class="switch-half switch-close close-bg">OFF</span>
                                        </div>
                                    </div>
                                    <p class="remind1">启用后支持使用微信帐号来登录</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar">*</span>应用标识：</dt>
                                <dd class="left text-l">
                                    <input type="text" name="wx_AppID" class="com-inp1 radius3 boxsizing" placeholder="" value="<?php echo ($config['wx_AppID']); ?>" localrequired="">
                                    <a target="_blank" class="getpid" href="https://mp.weixin.qq.com/">在线申请</a>
                                    <p class="remind1">微信开放平台相应的AppID</p>
                                </dd>

                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar">*</span>应用密钥：</dt>
                                <dd class="left text-l">
                                    <input type="text" name="wx_AppSecret" class="com-inp1 radius3 boxsizing" placeholder="" value="<?php echo ($config['wx_AppSecret']); ?>" localrequired="">
                                    <p class="remind1">微信开放平台相应的AppSecret</p>
                                </dd>

                            </dl>
                        </div>
                        <div class="btnbox3 boxsizing">
                            <input type="hidden" name="sub" value="1">
                            <a type="button" id="wx_submit" class="btn1 radius3 marginT10  btn3-btnmargin"><?php echo (L("submit_btn")); ?></a>
                        </div>
                    </form>


            </div> 
        </div>
    </div>
    </div>
    <script type="text/javascript">
        $('#wx_submit').click(function(){
           $('#setting_form1').submit();
        });
        $(function(){
            //添加会员提示
            $('.add-li').mousemove(function(){
                e=arguments.callee.caller.arguments[0] || window.event;
                remindNeed($('.add-li'),e,'添加会员');
            })
            $('.add-li').mouseout(function(){
                $('.tip-remind').remove();
            });
            $('.refresh-li').mousemove(function(){
                e=arguments.callee.caller.arguments[0] || window.event;
                remindNeed($('.add-li'),e,'刷新');
            })
            $('.refresh-li').mouseout(function(){
                $('.tip-remind').remove();
            });

        })
    </script>
    <!--content结束-->









    </div>
		<script type="text/javascript" src="/static/admin/js/iscroll.js"></script>
        <script type="text/javascript" src="/static/admin/js/common.js"></script>
        <script type="text/javascript" src="/static/admin/js/common_branch.js"></script>
        <script type="text/javascript" src="/static/admin/js/remindMove.js"></script>
        <script type="text/javascript" src="/static/admin/js/getdata.js"></script>
        <script type="text/javascript" src="/static/admin/js/iframe.js"></script>
        <script type="text/javascript" src="/static/admin/js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="/static/admin/js/scrollbar.min.js"></script>
        <script type="text/javascript" src="/static/admin/js/buttons.js"></script>
		<script type="text/javascript">
				var settting = <?= $setting?>;
				//显示左侧标签
				var main_li="<?php echo (CONTROLLER_NAME); ?>";
				var second_li="<?php echo (ACTION_NAME); ?>";
				$('.main_'+main_li, window.parent.document).siblings().removeClass('activeOne');
				$('.main_'+main_li, window.parent.document).addClass('activeOne');
				$('.main_'+main_li, window.parent.document).find("ul").show().parents('li').siblings().find("ul").hide();
				$('.secondary_'+second_li, window.parent.document).siblings().removeClass('activeThree');
				$('.secondary_'+second_li, window.parent.document).addClass('activeThree');
				module = $('.activeOne',window.parent.document).find('a:eq(0)').text();
				action = $('.activeOne',window.parent.document).find('ul').find('.activeThree').text();
				$('title',window.parent.document).html(settting.shop_name +'-'+module+'-'+action);
		</script>
</body>

</html>
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
    	        <div class="tipsbox">
            <div class="tips boxsizing radius3">
                <div class="tips-titbox">
                    <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
                    <span class="open-span span-icon"><i class="open-icon"></i></span>
                </div>
            </div>
            <ol class="tips-list" id="tips-list">
                <li>1.平台优惠券发放。</li>
                <li>2.选择要发放的优惠券。</li>
                <li>3.填写用户名（即用户手机号）进行发放。</li>
            </ol>
        </div>
<!--内容开始-->
<div class="iframeCon">
<div class="iframeMain">
    <ul class="transverse-nav">
        <li class="activeFour"><a href="javascript:;"><span>发放优惠券</span></a></li>
    </ul>
    <div class="white-bg">
        <div class="tab-conbox">
            <form method="post" class="form-horizontal" name="redpacket_form" id="redpacket_form" action='<?php echo U("Coupon/grant");?>'>
                <div class="jurisdiction boxsizing">
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span>优惠券：</dt>
                        <dd class="left text-l">
                                <div class="search-boxcon boxsizing radius3 borderR-none" style="display: inline-block;">
                                    <select id="rpacket_t_id" name="rpacket_t_id">
                                    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["rpacket_t_id"]); ?>"><?php echo ($vo["rpacket_t_title"]); ?></option><?php endforeach; endif; ?>
                                    </select>
                                </div>
                            <p class="remind1">请选择要发放的优惠券</p>
                        </dd>
                    </dl>
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span>用户名：</dt>
                        <dd class="left text-l">
                            <input type="text"  localrequired="" class="com-inp1 radius3 boxsizing" name="tel" value=""/>
                            <p class="remind1">请输入用户名</p>
                        </dd>
                    </dl>
                </div>
                <div class="btnbox3 boxsizing">
                    <input type="hidden" name='submitcheck' value="yes" />
                    <a class="btn1 radius3 btn3-btnmargin" id="form_submitadd" href="javascript:;"><?php echo (L("submit_btn")); ?></a>
                    <a class="btn1 radius3" href='<?php echo U("coupon/lists");?>'>返回列表</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!--内容结束-->
<script type="text/javascript">
    $(function(){
        $('#form_submitadd').click(function(){
            flag=checkrequire('redpacket_form');
            if(!flag){
                $('#redpacket_form').submit();
            }
        });
        $('.search_type').click(function(){
            $(this).addClass('active-sele').siblings().removeClass('active-sele');
            $('#rpacket_t_id').val($(this).attr('field-data'));
            $('#search_html').val($(this).html());
        })
        $('#rpacket_t_id').val($('.search_list').find('.active-sele').attr('field-data'));
        $('#search_html').val($('.search_list').find('.active-sele').html());
    })
</script>
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
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
   <ol class="tips-list">
		<li><?php echo (L("points_setting_tips")); ?></li>
	</ol>
</div>
<!--内容开始-->
<div class="iframeCon">
<div class="iframeMain">
	<ul class="transverse-nav">
		<li><a href="<?php echo U('Member/points');?>"><span><?php echo (L("points_detail")); ?></span></a></li>
		<li class="activeFour"><a  href="#"><span><?php echo (L("points_setting")); ?></span></a></li>
		<li><a  href="<?php echo U('Member/points_add');?>"><span><?php echo (L("points_add")); ?></span></a></li>
	</ul>
	<div class="white-bg">
		<form method="post" class="form-horizontal" name="pointsForm" id="pointsForm" action="<?php echo U('Member/points_setting');?>">
		<input type="hidden" name="subval" id="subval" value="0"/>
		<div class="tab-conbox">
			<div class="jurisdiction boxsizing">
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><span class="redstar">*</span><?php echo (L("pset_register")); ?>：</dt>
					<dd class="left text-l">
						<input type="text" class="com-inp1 radius3 boxsizing" name="points_register" value="<?php echo ($config["points_register"]); ?>" localrequired=""/>
						<p class="remind1"><?php echo (L("pset_register_tips")); ?></p>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><span class="redstar">*</span><?php echo (L("points_sign_in")); ?>：</dt>
					<dd class="left text-l">
						<input type="text" class="com-inp1 radius3 boxsizing" name="points_sign_in" value="<?php echo ($config["points_sign_in"]); ?>" localrequired=""/>
						<p class="remind1"><?php echo (L("pset_day_login_tips")); ?></p>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><span class="redstar">*</span><?php echo (L("pset_order_comment")); ?>：</dt>
					<dd class="left text-l">
						<input type="text" class="com-inp1 radius3 boxsizing" name="points_order_comments" value="<?php echo ($config["points_order_comments"]); ?>" localrequired=""/>
						<p class="remind1"><?php echo (L("pset_order_comment_tips")); ?></p>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><span class="redstar">*</span><?php echo (L("points_order_rate")); ?>：</dt>
					<dd class="left text-l">
						<input type="text" class="com-inp1 radius3 boxsizing" name="points_order_rate" value="<?php echo ($config["points_order_rate"]); ?>" style="width:90px;" localrequired=""/>&nbsp;%
						<p class="remind1"><?php echo (L("points_order_rate_tips")); ?></p>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><span class="redstar">*</span><?php echo (L("points_order_max")); ?>：</dt>
					<dd class="left text-l">
						<input type="text" class="com-inp1 radius3 boxsizing" name="points_order_max" value="<?php echo ($config["points_order_max"]); ?>" localrequired=""/>
						<p class="remind1"><?php echo (L("points_order_max_tips")); ?></p>
					</dd>
				</dl>
				
			</div>
			<div class="btnbox3 boxsizing">
				<a type="button" id="sub" class="btn1 radius3 marginT10  btn3-btnmargin"><?php echo (L("submit_btn")); ?></a>
			</div>
		</div>
		</form>
	</div>
</div>	
</div>	
<!--内容结束-->
<script type="text/javascript">
	$('#sub').click(function(){
    flag=checkrequire('pointsForm');
    if(!flag){
    	$('#subval').val(1);
       	$('#pointsForm').submit();
    }
    });
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
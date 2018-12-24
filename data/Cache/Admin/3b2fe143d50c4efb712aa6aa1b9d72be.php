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
    	
		<!--<div class="tip-remind">收起提示</div>-->
		<div class="tipsbox">
			<div class="tips boxsizing radius3">
				<div class="tips-titbox">
					<h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
					<span class="open-span span-icon"><i class="open-icon"></i></span>
				</div>
			</div>
			<ol class="tips-list" id="tips-list">
				<?php echo (L("permiss_group_add_tips")); ?>
			</ol>
		</div>
<!--内容开始-->
<div class="iframeCon">
<div class="iframeMain">
			<ul class="transverse-nav">
				<li class="activeFour"><a href="javascript:;"><span><?php echo (L("permiss_group_add")); ?></span></a></li>
			</ul>
<form action="<?=U('/system/addpermission')?>" role="form" method="post" id="role_form">
	<div class="white-bg">
		<div class="jurisdiction boxsizing">
			<dl class="juris-dl boxsizing">
				<dt class="left text-r boxsizing"><span class="redstar">*</span><?php echo (L("permiss_group")); ?>：</dt>
				<dd class="left text-l">
					<input type="text" class="com-inp1 radius3 boxsizing" localrequired="" name="groupname" />
					<p class="remind1"><?php echo (L("permiss_group_name_tips")); ?></p>
				</dd>
			</dl>
			<dl class="juris-dl boxsizing dlborder-bot">
				<dt class="left text-r boxsizing"><?php echo (L("permiss_setting")); ?>：</dt>
				<dd class="left text-l">
					<div class="checkbox-holder">
						<p class="radiobox"><input type="checkbox" id="radio-1-1" name="radio-1-set" class="regular-radio" /><label for="radio-1-1"></label><span class="radio-word"><?php echo (L("permiss_select_all")); ?></span></p>
					</div>
					<p class="remind1"><?php echo (L("permiss_setting_tips")); ?></p>
				</dd>
			</dl>
		</div>
		<div class="powers-tablebox">
			<table class="powers-table">
				<thead>
					<tr>
						<th colspan="2"><?php echo (L("permiss_setting_detail")); ?></th>
					</tr>
				</thead>
				<tbody>

				<?php  $i=2; foreach($rbacnode as $nodek=>$nodes) { $j=2; ?>
					<tr>
						<td style="width: 148px;">
							<div class="checkbox-holder powers-tdcheck">
								<p class="radiobox checkbox-box">
									<input type="checkbox" id="radio-<?php echo $i; ?>-1" name="radio-1-set" class="regular-radio this-parent" child="radio-<?php echo $i; ?>"/><label for="radio-<?php echo $i; ?>-1"></label>
									<span class="radio-word"><?=$nodes[$nodek]['name_cn'];?></span>
								</p>
							</div>
						</td>


						<td id="shanpin_<?=$nodek?>" class="shanpin" >
						<?php foreach($nodes as $k=>$node) { if($node['level'] ==3 ) { ?>
							<div class="checkbox-holder left powers-checkbox">
								<p class="radiobox checkbox-box">
									<input type="checkbox" id="radio-<?php echo $i; ?>-<?php echo $j; ?>"  value="<?=$rbacnode[$nodek][$nodek]['id'];?>_<?php echo $node['id'];?>" name="checkname[]" class="check-top regular-radio radio-<?php echo $i; ?>" /><label for="radio-<?php echo $i; ?>-<?php echo $j; ?>"></label>
									<span class="radio-word"><?=$node['name_cn'];?></span>
								</p>
							</div>
						<?php $j++; }}?>
						</td>

					</tr>
					<?php $i++; } ?>

				</tbody>
			</table>
		</div>
        <div class="btnbox3 boxsizing">
            <input type="hidden" name='form_submit' value="submit" />
            <a class="btn1 radius3 btn3-btnmargin" id="form_submitadd" href="javascript:;"><?php echo (L("submit_btn")); ?></a>
            <a class="btn1 radius3" href='<?php echo U("/system/rolelist");?>'><?php echo (L("return_list")); ?></a>
        </div>
	</div>
</form>
</div>
</div>
<script type="text/javascript">
    $(function(){
        $('#form_submitadd').click(function(){
            flag=checkrequire('role_form');
            if(!flag){
                $('#role_form').submit();
            }
        });
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
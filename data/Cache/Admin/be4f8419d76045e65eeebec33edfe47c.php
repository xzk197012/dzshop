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
		<li><?php echo (L("points_list_tips")); ?></li>
	</ol>
</div>

<!--内容开始-->
<div class="iframeCon">
<div class="iframeMain">
	<ul class="transverse-nav">
		<li class="activeFour"><a href="#"><span><?php echo (L("points_detail")); ?></span></a></li>
		<li><a  href="<?php echo U('Member/points_setting');?>"><span><?php echo (L("points_setting")); ?></span></a></li>
		<li><a  href="<?php echo U('Member/points_add');?>"><span><?php echo (L("points_add")); ?></span></a></li>
	</ul>
	<div class="white-bg">
		<div class="table-titbox">
			<h1 class="table-tit left boxsizing"><?php echo (L("points_detail_list")); ?></h1>
			
			<form action="<?=U('/member/points')?>" method="get" id='formid'>
			<div class="search-box1 right">
				<div class="search-boxcon boxsizing radius3 left">
					<select class="sele-com1 search-sele boxsizing" name="type" id="search_select">
                		<option {if condition="$_GET['type'] eq 'pl_membername'"} selected {/if} value="pl_membername"><?php echo (L("member_name")); ?></option>
                		<option  {if condition="$_GET['type'] eq 'pl_adminname'"} selected {/if}  value="pl_adminname"><?php echo (L("manager")); ?></option>
                		<option {if condition="$_GET['type'] eq 'pl_stage'"} selected {/if} value="pl_stage"><?php echo (L("points_stage")); ?></option>
                	</select>
					<input type="text" name="search_text" value="<?php echo ($search_text); ?>" class="search-inp-con boxsizing"/>
				</div>
				<button type="button" class="search-btn right radius3" onclick="javascript:document.getElementById('formid').submit();"><?php echo (L("search")); ?></button>
				
			</div>
			</form>
		</div>
		<div class="comtable-box boxsizing">
			<table class="com-table">
				<thead>
					<tr>
						<th width="90"><?php echo (L("operation")); ?></th>
						<th width="50"><?php echo (L("member_ID")); ?></th>
						<th width="120"><?php echo (L("member_name")); ?></th>
						<th width="100" class="text-l"><?php echo (L("points")); ?></th>
						<th width="150" class="text-l"><?php echo (L("points_stage")); ?></th>
						<th width="120"><?php echo (L("operation_time")); ?></th>
						<th width="120"><?php echo (L("manager")); ?></th>
						<th class="text-l"><?php echo (L("operation_descrip")); ?></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php if(empty($points_log_list)): ?><tr class="tr-minH">
                            <td colspan="8">暂无数据！</td>
                            <td></td>
                        </tr>
                    <?php else: ?>
					<?php if(is_array($points_log_list)): foreach($points_log_list as $key=>$points): ?><tr>
						<td>--</td>
						<td><?php echo ($points["pl_memberid"]); ?></td>
						<td><?php echo ($points["pl_membername"]); ?></td>
						<td class="text-l"><?php echo ($points["pl_points"]); ?></td>
						<td class="text-l"><?php echo ($points_stage[$points['pl_stage']]); ?></td>
						<td><?php echo (date("Y-m-d H:i:s",$points["pl_addtime"])); ?></td>
						<td><?php echo ($points["pl_adminname"]); ?></td>
						<td class="text-l"><div class="word-overflow" title="<?php echo ($points["pl_desc"]); ?>"><?php echo ($points["pl_desc"]); ?></div></td>
						<td></td>
					</tr><?php endforeach; endif; endif; ?>
				</tbody>
			</table>
		</div>
		<?php echo ($page); ?>
	</div>
</div>	
</div>	
<!--内容结束-->

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
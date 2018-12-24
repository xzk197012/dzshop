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
        <li><?php echo (L("memberlist_tips_content")); ?></li>
    </ol>
</div>


<div class="iframeCon">
<div class="iframeMain">
	<div class="white-bg">
		<div class="table-titbox">
			<h1 class="table-tit left boxsizing"><?php echo (L("member_list")); ?></h1>
			<ul class="operation-list left">
				<li class="add-li"><a href="<?php echo U('member/add');?>"><span><i href="#" class="operation-icon add-icon"></i></span></a></li>
				<li class="refresh-li" onclick="location.reload();"><a href="#"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
				<li class="export-li"><a href="#"><span><i href="#" class="operation-icon export-icon"></i></span></a></li>
			</ul>
			<form action="<?=U('/member/lists')?>" method="get" id='search_form'>
			<div class="search-box1 right">
				<div class="search-boxcon boxsizing radius3 left">
					
					<select class="sele-com1 search-sele boxsizing" name="type" id="search_select">
                		<option value="member_username"><?php echo (L("member_name")); ?></option>
                	</select>
					<input type="text" value="<?php echo ($search_text); ?>" name="search_text" id="search_text" class="search-inp-con boxsizing"/>
				</div>
				<button type="submit" class="search-btn right radius3"><?php echo (L("search")); ?></button>
			</div>
			</form>
		</div>
		
		<div class="comtable-box boxsizing">
			<table class="com-table">
				<thead>
					<tr>
						<th width="200"><?php echo (L("operation")); ?></th>
						<th width="180"><?php echo (L("member_name")); ?></th>
						<th width="180"><?php echo (L("register_time")); ?></th>
						<th width="280" class="text-l"><?php echo (L("wx_bind")); ?></th>
						<th width="120" class="text-l"><?php echo (L("points")); ?></th>
						<th width="120"><?php echo (L("allow_login")); ?></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php if(empty($memberlist)): ?><tr class="tr-minH">
                            <td colspan="6">暂无数据！</td>
                            <td></td>
                        </tr>
                    <?php else: ?>
					<?php if(is_array($memberlist)): foreach($memberlist as $key=>$member): ?><tr>
						<td>
							<div class="table-iconbox">
								<div class="edit-iconbox left edit-sele marginR10">
									<a class="edit-word table-icon-a" href="<?php echo U('Member/add', array('id'=>$member['member_id']));?>"><i class="table-com-icon table-edit-icon"></i><span class="gap"><?php echo (L("edit")); ?></span></a>
								</div>
								<div class="table-icon left setting-sele-par">
									<div class="setting-sele left radius3 boxsizing">
										<span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap"><?php echo (L("look")); ?></span></span>
										<span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
									</div>
									<ul class="setting-sele-con remind-layer">
										<li><a href="<?php echo U('member/address_list', array('member_id' => $member['member_id']));?>"><?php echo (L("shipping_address")); ?></a></li>
										<li><a href="<?php echo U('order/lists', array('field'=>'buyer_name','value' => $member['member_username']));?>"><?php echo (L("member_order")); ?></a></li>
										<li><a href="<?php echo U('coupon/member_packet', array('field'=>'rpacket_owner_name','q' => $member['member_username ']));?>">优&nbsp;&nbsp;惠&nbsp;&nbsp;券</a>
			                            </li>
			                            <li><a href="<?php echo U('member/points', array('member_id' => $member['member_id']));?>"><?php echo (L("points_detail")); ?></a>
			                            </li>
									</ul>
								</div>
								
							</div>
						</td>
						<td><?php echo ($member["member_username"]); ?></td>
						<td><?php echo (date("Y-m-d H:i:s",$member["member_time"])); ?></td>
		                <td class="text-l"><?php echo ($member["weixin_openid"]); ?></td>
		                <td class="text-l"><?php echo ($member["member_points"]); ?></td>
						<td>
						<?php if($member["member_state"] == 1 ): ?><div class="state-btn yes-state">
								<i class="yes-icon"></i>
								<span><?php echo (L("yes")); ?></span>
							</div>
		                <?php else: ?>
		                	<div class="state-btn no-state">
								<i class="no-icon"></i>
								<span><?php echo (L("no")); ?></span>
							</div><?php endif; ?>
						</td>
						<td></td>
					</tr><?php endforeach; endif; endif; ?>
				</tbody>
			</table>
		</div>
		<?php echo ($page); ?>

	</div>
</div>
</div>
<script type="text/javascript">
	$(function(){
		//添加会员提示
		$('.add-li').mousemove(function(){
			e=arguments.callee.caller.arguments[0] || window.event; 
			remindNeed($('.add-li'),e,'<?php echo (L("member_add")); ?>');
		})
		$('.add-li').mouseout(function(){
	     	$('.tip-remind').remove();
	    });
		$('.refresh-li').mousemove(function(){
			e=arguments.callee.caller.arguments[0] || window.event; 
			remindNeed($('.add-li'),e,'<?php echo (L("refresh")); ?>');
		})
		$('.refresh-li').mouseout(function(){
	     	$('.tip-remind').remove();
	    });
	    $('.export-li').mousemove(function(){
			e=arguments.callee.caller.arguments[0] || window.event; 
			remindNeed($('.export-li'),e,'<?php echo (L("export")); ?>');
		})
		$('.export-li').mouseout(function(){
	     	$('.tip-remind').remove();
	    });
	    $('.export-li').click(function(){
	    	var action_url = $("#search_form").attr("action");
	    	location.href = action_url+"?export=1&search_select="+$("#search_select").val()+"&search_text="+$("#search_text").val();
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
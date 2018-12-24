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
				<li>1.银行列表设置，列表里显示的银行将会在用户添加银行信息时显示。</li>
			</ol>
		</div>
		<div class="iframeCon">
		<div class="iframeMain">
				﻿			<ul class="transverse-nav">
				<li <?php if(ACTION_NAME =='reward'){?> class="activeFour" <?php }?> ><a href="<?=U('Cms/reward'); ?>"><span>奖励设置</span></a></li>
				<li <?php if(ACTION_NAME =='presales'){?> class="activeFour" <?php }?> ><a href="<?=U('Cms/presales'); ?>"><span>奖励明细</span></a></li>
			</ul>
			<div class="white-bg">
				<div class="table-titbox">
					<h1 class="table-tit left boxsizing">奖励明细</h1>
					<ul class="operation-list left">
						<li class="refresh-li"><a href="javascript:;" onclick="javascript:window.location.reload();"><span><i href="#" class="operation-icon refresh-icon"></i></a> </span></li>
						<li class="export-li"><a href="<?php echo U('Admin/Export/presales',$_GET);?>"><span><i href="#" class="operation-icon export-icon"></i></span></a></li>
					</ul>
					<div  class="search-box1 right">
					<form action="<?=U('/Cms/presales')?>" method="get" id='formid'>
						<div class="search-boxcon boxsizing radius3 left">
							
							<select class="sele-com1 search-sele boxsizing" name="type" id="search_select">
                        		<option  value='member_truename' <?php if($type =='member_truename'){ ?> selected='selected' <?php }?>  >会员账号</option>
                        		<option   value='member_uid' <?php if($type =='member_uid'){ ?> selected='selected' <?php }?> >会员ID</option>
                        		<option value='order_sn'  <?php if($type =='order_sn'){ ?> selected='selected' <?php }?>  >订单号</option>
                        	</select>
							<input type="text" value="<?=$search_text?>" name="search_text" class="search-inp-con boxsizing"/>
						</div>
						<input type="submit"  value="搜索" class="search-btn right radius3"/>
					</form>
					</div>
				</div>
				
				<div class="comtable-box boxsizing">
					<table class="com-table">
						<thead>
							<tr>
								<th width="120">操作</th>
								<th width="120">会员ID</th>
								<th width="120">会员账号</th>
								<th class='text-l' width="120">奖励</th>
								<th width="120">订单号</th>
								<th width="120">级别</th>
								<th width="120">下单时间</th>
								<th width="120">状态</th>
								<th class='text-l' width="120">退款扣款</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						<?php if(empty($list)): ?><tr class="tr-minH">
	                            <td colspan="9">暂无数据！</td>
	                            <td></td>
	                        </tr>
	                    <?php else: ?>
						<?php foreach($list as $k => $v) {?>
							<tr>
								<td>
								-
								</td>
								<td><?=$v['member_uid']?></td>
								<td><?=$v['member_truename']?></td>
								<td class='text-l'><?=$v['reward_amount']?></td>
								<td><?=$v['order_sn']?></td>
								<td><?=$v['spread_level_text']?></td>
								<td><?=$v['order_add_time_text']?></td>
								<td><?=$v['spread_state_text']?></td>
								<td class='text-l'><?=$v['refund_amount']?></td>
								<td></td>
							</tr>
						<?php } endif; ?>
						</tbody>
					</table>
				</div>
				<div >
					<?=$page;?>
				</div>
			</div>
		</div>
	</div>
		<script type="text/javascript">
			$(function(){
				
				//添加会员提示
	 
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
			    $('.export-li').mousemove(function(){
					e=arguments.callee.caller.arguments[0] || window.event; 
					remindNeed($('.add-li'),e,'导出');
				})
				$('.export-li').mouseout(function(){
			     	$('.tip-remind').remove();
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
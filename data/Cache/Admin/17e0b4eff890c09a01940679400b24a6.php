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
				<?php echo (L("permiss_group_list_tips")); ?>
			</ol>
		</div>
		<div class="iframeCon">
		<div class="iframeMain">
			<div class="white-bg">
				<div class="table-titbox">
					<div class="option">
						<h1 class="table-tit left boxsizing"><?php echo (L("permiss_group_list")); ?></h1>
						<ul class="operation-list left">
							<li class="add-li"><a href="<?=U('/system/addpermission')?>"><span><i href="#" class="operation-icon add-icon"></i></span></a></li>
							<li class="refresh-li" onclick="location.reload();"><a href="javascript:;"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
						</ul>
					</div>
				</div>
				
				<div class="comtable-box boxsizing">
					<table class="com-table">
						<thead>
							<tr>
								<th width="180"><?php echo (L("operation")); ?></th>
								<th width="180"><?php echo (L("permiss_group")); ?></th>
								<th width="180"><?php echo (L("permiss_people_number")); ?></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php if(empty($lists)): ?><tr class="tr-minH">
			                        <td colspan="3"><?php echo (L("no_data")); ?></td>
			                        <td></td>
			                    </tr>
			                <?php else: ?>
							<?php foreach($lists as $key => $v) { ?>
								<tr>
									<td>
										<div class="table-iconbox">
											<div class="edit-iconbox left edit-sele marginR10">
												<a class="edit-word table-icon-a" href="<?=U('/system/editpermission/id/'.$v['id'])?>"><i class="table-com-icon table-edit-icon"></i><span class="gap"><?php echo (L("edit")); ?></span></a>
											</div>
										</div>
										<div class="table-iconbox">
											<div class="edit-iconbox left edit-sele marginR10">
												<a class="edit-word table-icon-a btn-del" href="javascript:;" rel-href="<?=U('/system/delrole/id/'.$v['id'])?>"><i class="table-com-icon table-dele-icon"></i><span class="gap"><?php echo (L("delete")); ?></span></a>
											</div>
										</div>
									</td>
									<td><?=$v['name']; ?></td>
									<td><?=$v['count'];?></td>
									<td></td>
								</tr>
							<?php } endif; ?>
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
					remindNeed($('.add-li'),e,'<?php echo (L("permiss_group_add")); ?>');
				})
				$('.add-li').mouseout(function(){
			     	$('.tip-remind').remove();
			    });
				$('.refresh-li').mousemove(function(){
					e=arguments.callee.caller.arguments[0] || window.event; 
					remindNeed($('.refresh-li'),e,'<?php echo (L("refresh")); ?>');
				})
				$('.refresh-li').mouseout(function(){
			     	$('.tip-remind').remove();
			    });
			  

			    $('.btn-del').click(function() {
					url = $(this).attr('rel-href');
			        showConfirm("确认要删除么？",function(){
			            $.get(url,{checksubmit:'yes'},function(data){
			                if(data.status == 1){
			                   showSuccess(data.info,function(){
			                        window.location.reload();
			                  });
			                }else{
			                    showError(data.info);
			                }
			            },'json')
			        });
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
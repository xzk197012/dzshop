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
		<?php echo (L("dist_list_tip_content")); ?>
	</ol>
</div>
<div class="iframeCon">
<div class="iframeMain">
	<div class="white-bg">
		<div class="table-titbox">
			<h1 class="table-tit left boxsizing"><?php echo (L("district_manager")); ?></h1>
			<ul class="operation-list left">
				<li class="add-li"><a href="<?php echo U('district/add',array('parent_id' => $this_area_id));?>"><span><i href="#" class="operation-icon add-icon"></i></span></a></li>
				<li class="refresh-li" onclick="location.reload();"><a href="#"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
				<li class="dele-li del"><a href="#"><span><i href="#" class="operation-icon op-dele-icon"></i></span></a></li>
				<li class="back-li"><a href="<?php echo U('Setting/district',array('area_parent_id' => $area_parent_id));?>"><span><i href="#" class="operation-icon op-back-icon"></i></span></a></li>
			</ul>
			<div class="search-box1 right">
			<form action="<?=U('/setting/district',array('area_parent_id' => $this_area_id))?>" method="get" id='formid'>
				<div class="search-boxcon boxsizing radius3 left">
					<select name="type" id="search_select">
	                    <option value="area_name"><?php echo (L("dist_name")); ?></option>
	                </select>
					<input type="text" name="search_text" value="<?php echo ($search_text); ?>" class="search-inp-con boxsizing"/>
				</div>
				<input type="submit"  value="<?php echo (L("search")); ?>" class="search-btn right radius3"/>
			</form>
			</div>
		</div>
		
		<div class="comtable-box boxsizing">
			<table class="com-table">
				<thead>
					<tr>
						<th width="100" class="text-l">
							<div class="button-holder">
								<p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-1" name="radio-1-set" class="regular-radio" /><label for="radio-1-1"></label><span class="radio-word"><?php echo (L("select_all")); ?></span></p>
							</div>
						</th>
						<th width="200"><?php echo (L("operation")); ?></th>
						<th width="200"><?php echo (L("district")); ?></th>
						<th width="100"><?php echo (L("dist_level")); ?></th>
						<th width="100"><?php echo (L("dist_parent")); ?></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php if(empty($arealist)): ?><tr class="tr-minH">
                            <td colspan="5">暂无数据！</td>
                            <td></td>
                        </tr>
                    <?php else: ?>
					<?php if(is_array($arealist)): foreach($arealist as $i=>$area): ?><tr>
						<td class="text-l">
							<div class="button-holder">
								<p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-<?php echo ($i+2); ?>" name="allcheck" class="regular-radio" value="<?php echo ($area["area_id"]); ?>" /><label for="radio-1-<?php echo ($i+2); ?>"></label><span class="radio-word"></span></p>
							</div>
						</td>
						<td>
						<?php if($area["area_deep"] == 3): ?><div class="table-iconbox">
								<div class="edit-iconbox left edit-sele marginR10">
									<a class="edit-word table-icon-a" href="#" onclick="area_del(<?php echo ($area["area_id"]); ?>)"><i class="table-com-icon table-dele-icon"></i><span class="gap"><?php echo (L("delete")); ?></span></a>
								</div>
								<div class="edit-iconbox left edit-sele marginR10">
									<a class="edit-word table-icon-a" onclick="location.href='<?php echo U('district/edit', array('area_id'=>$area['area_id']));?>'"><i class="table-com-icon table-edit-icon"></i><span class="gap"><?php echo (L("edit")); ?></span></a>
								</div>
							</div>

						<?php else: ?>
							<div class="table-iconbox">
								<div class="edit-iconbox left edit-sele marginR10">
									<a class="edit-word table-icon-a" onclick="location.href='<?php echo U('district/edit', array('area_id'=>$area['area_id']));?>'"><i class="table-com-icon table-edit-icon"></i><span class="gap"><?php echo (L("edit")); ?></span></a>
								</div>
								<div class="table-icon left setting-sele-par">
									<div class="setting-sele left radius3 boxsizing">
										<span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap"><?php echo (L("operation")); ?></span></span>
										<span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
									</div>
									<ul class="setting-sele-con remind-layer">
										
										<li><a href="<?php echo U('district/add', array('parent_id'=>$area['area_id']));?>"><?php echo (L("dist_add_child")); ?></a></li>
										<li><a href="<?php echo U('Setting/district', array('area_parent_id'=>$area['area_id']));?>"><?php echo (L("dist_view_child")); ?></a>
			                            </li>
			                            <li><a href="#" onclick="area_del(<?php echo ($area["area_id"]); ?>)"><?php echo (L("dist_remove_region")); ?></a>
			                            </li>
									</ul>
								</div>
								
							</div><?php endif; ?>
						</td>
						<td><?php echo ($area["area_name"]); ?></td>
		                <td><?php echo ($area["area_deep"]); ?></td>
		                <td><?php echo ($area["parent_area_name"]); ?></td>
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
			remindNeed($('.add-li'),e,'<?php echo (L("district_add")); ?>');
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
	   
		$('.export-li').mouseout(function(){
	     	$('.tip-remind').remove();
	    });
	    $('.dele-li').mousemove(function(){
			e=arguments.callee.caller.arguments[0] || window.event; 
			remindNeed($('.dele-li'),e,'<?php echo (L("batch_delete")); ?>');
		})
		$('.dele-li').mouseout(function(){
	     	$('.tip-remind').remove();
	    });
	    $('.back-li').mousemove(function(){
			e=arguments.callee.caller.arguments[0] || window.event; 
			remindNeed($('.back-li'),e,'<?php echo (L("back_parent")); ?>');
		})
		$('.back-li').mouseout(function(){
	     	$('.tip-remind').remove();
	    });
			
	})
	$('.del').click(function(){
        var ids = "";
        $("input[name=allcheck]").each(function(){
            if($(this).is(":checked")){
                ids += $(this).val()+",";
            }
        });
        if(ids) {
            ids = ids.substring(0, ids.length - 1); //把最后一个逗号去掉
            area_del(ids);
        }
    });
    //删除
    function area_del(area_ids) {
    	showConfirm("<?php echo (L("dist_delete_tips")); ?>",function(){
			$.ajax({
                url:"<?php echo U('district/delArea');?>",
                type:"POST",
                data:{area_ids:area_ids},
                success: function(response) {
                    getResultDialog(response);
                }
            });
    	});
    }
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
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
	    <?php echo (L("operation_log_tips")); ?>
	</ol>
</div>
<div class="iframeCon">
<div class="iframeMain">
	<div class="white-bg">
		<div class="table-titbox">
			<h1 class="table-tit left boxsizing"><?php echo (L("operation_log")); ?></h1>
			<ul class="operation-list left">
				<li class="refresh-li" onclick="location.reload();"><a href="#"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
				<li class="dele-li del" onclick="del('ids',this)" href="javascript:;" rel-href="<?=U('/system/log/type/ids')?>" ><a href="#"><span><i href="#" class="operation-icon op-dele-icon"></i></span></a></li>
				<li class="dele-li-ago del" onclick="del('createtime',this)" rel-href="<?=U('/system/log/type/createtime')?>"><a href="#"><span><i href="#" class="operation-icon op-dele-icon-half"></i></span></a></li>
			</ul>
			<div class="search-box1 right">
			<form action="<?=U('/system/log')?>" method="get" id='formid'>
				<!-- <div class="form-group left time2">
	            	<label class="font-noraml left time-label">时间范围</label>
	                <div class='input-group date left time-width' data-date="2012-02-20" data-date-format="yyyy-mm-dd">
	                    <input type='text' class="form-control datetimepicker2"/>
	                    <input type="text" class="form-control com-inp1 datetimepicker2 time-inp1" name="start" value="<?=$_GET['start']?>" />
                        <span class="left timeto">--</span>
                        <input type="text" class="form-control com-inp1 datetimepicker3 time-inp1" name="end" value="<?=$_GET['end']?>" />
	                    
	                </div>
	            </div> -->
				<div class="search-boxcon boxsizing radius3 left">
                	<select name="type" class="sele-com1 search-sele boxsizing" id="search_select">
                		<option <?php if($_GET['type'] == 'username') { ?> selected <?php }?> value="username"><?php echo (L("operator")); ?></option>
                		<option <?php if($_GET['type'] == 'action') { ?> selected <?php }?>  value="action"><?php echo (L("operation_log_stage")); ?></option>
                		<option  <?php if($_GET['type'] == 'ip') { ?> selected <?php }?> value="ip">IP</option>
                	</select>
					<input type="text" name="search_text"  value="<?=$_GET['search_text']; ?>" class="search-inp-con boxsizing"/>
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
						<th width="90"><?php echo (L("operation")); ?></th>
						<th class='text-l' width="120"><?php echo (L("operator")); ?></th>
						<th  class='text-l' width="200"><?php echo (L("operation_log_stage")); ?></th>
						<th  class='text-l' width="200"><?php echo (L("operation_content")); ?></th>
						<th width="180"><?php echo (L("operation_time")); ?></th>
						<th width="120">IP</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php if(empty($lists)): ?><tr class="tr-minH">
	                        <td colspan="7"><?php echo (L("no_data")); ?></td>
	                        <td></td>
	                    </tr>
	                <?php else: ?>
					<?php foreach( $lists as $k => $v) { ?>
					<tr>
						<td class="text-l">
							<div class="button-holder">
								<p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-<?php echo ($k+2); ?>" name="subCheck[]" class="regular-radio" value="<?=$v['id']?>" /><label for="radio-1-<?php echo ($k+2); ?>"></label><span class="radio-word"></span></p>
							</div>
						</td>
						<td>
							<div class="table-iconbox">
								<div class="edit-iconbox left edit-sele marginR10">
									<a class="edit-word table-icon-a btn-del" rel-href ="<?=U('/system/log/type/ids/ids/'.$v['id'])?>"><i class="table-com-icon table-dele-icon"></i><span class="gap"><?php echo (L("delete")); ?></span></a>
								</div>
							</div>
						</td>
						<td  class='text-l'><?=$v['username']?></td>
		                <td  class='text-l'><?=$v['action']?></td>
		                <td  class='text-l'><div class="td-word"><?=$v['content']?></div></td>
						<td><?=date('Y-m-d H:i:s',$v['createtime'])?></td>
						<td><?=$v['ip']?></td>
						<td></td>
					</tr>
					<?php } endif; ?>
				</tbody>
			</table>
			<?=$page;?>
		</div>
		
	</div>
</div>
</div>
<script type="text/javascript">
	$(function(){
		//添加会员提示
		$('.dele-li-ago').mousemove(function(){
			e=arguments.callee.caller.arguments[0] || window.event; 
			remindNeed($('.dele-li-ago'),e,'删除半年前');
		})
		$('.dele-li-ago').mouseout(function(){
	     	$('.tip-remind').remove();
	    });
		$('.refresh-li').mousemove(function(){
			e=arguments.callee.caller.arguments[0] || window.event; 
			remindNeed($('.refresh-li'),e,'<?php echo (L("refresh")); ?>');
		})
		$('.refresh-li').mouseout(function(){
	     	$('.tip-remind').remove();
	    });
		$('.td-word').bind(
			{
				mousemove:function(){
					e=arguments.callee.caller.arguments[0] || window.event; 
					tip = $(this).html();
					remindNeed($(this),e,tip);
				},
				mouseout:function() {
					$('.tip-remind').remove();
				}
			}
		);
		$('.export-li').mouseout(function(){
	     	$('.tip-remind').remove();
	    });
	    $('.dele-li').mousemove(function(){
			e=arguments.callee.caller.arguments[0] || window.event; 
			remindNeed($('.dele-li'),e,'批量删除');
		})
		$('.dele-li').mouseout(function(){
	     	$('.tip-remind').remove();
	    });
			
	})
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

	 
	function del(type,myself) {
		var ids = new Array();
		url = $(myself).attr('rel-href');
		$(".regular-radio").each(function(index){
			if($(this).prop("checked"))
			ids.unshift($(this).val())
		});
        showConfirm("确认要删除么？",function(){
            $.post(url,{checksubmit:'yes',ids:ids},function(data){
                if(data.status == 1){
                   showSuccess(data.info,function(){
                        window.location.reload();
                  });
                }else{
                    showError(data.info);
                }
            },'json')
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
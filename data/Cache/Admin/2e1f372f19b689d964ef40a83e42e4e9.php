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
    <ol class="tips-list">
        <li>1.‘删除’按钮可删除礼品</li>
        <li>2.‘编辑’操作可重新修改该礼品</li>
    </ol>
</div>
<div class="iframeCon">
<div class="iframeMain">
    
    <div class="white-bg">
		<div class="table-titbox">
			<h1 class="table-tit left boxsizing">礼品列表</h1>
			<ul class="operation-list left">
				<li class="add-li" onclick="location.href='<?php echo U('Coupon/gift_add');?>'"><a href="javascript:;"><span><i href="#" class="operation-icon add-icon"></i></span></a></li>
				<li class="refresh-li" onclick="location.reload();"><a href="#"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
			</ul>
			
			<form method="get" class="form-horizontal" name="Search_form"  action="<?php echo U('Coupon/gift_list');?>">
				<div class="search-box1 right">
	            
	                <div class="search-boxcon boxsizing radius3 left">
		            	<select id='refundsearch' class="sele-com1 search-sele boxsizing" name="field">
							<option  <?php if($_GET['field'] == 'gift_name'){ echo 'selected="selected"';}?> value="gift_name">礼品名称</option>
							<option  <?php if($_GET['field'] == 'goods_name'){ echo 'selected="selected"';}?>  value="goods_name" >关联商品</option>
						</select>
						<input type="text" name="value" class="search-inp-con boxsizing"  value="<?php echo $_GET['value'];?>" />
					</div>
					<input value="搜索" class="search-btn right radius3" type="submit">					
                </div>
            </form>
			
        </div>
		<div class="comtable-box boxsizing">
			<table class="com-table">
				<thead>
					<tr>
						<th width="180">操作</th>
						<th width="180">礼品名称</th>
						<th width="180">礼品图片</th>
						<th width="80">礼品价格</th>
						<th width="80">礼品库存</th>
						<th width="130" class="text-l">发布时间</th>
						<th width="150">积分兑换</th>
						<th width="180">兑换积分</th>
						<th width="180">限兑数量</th>
						<th width="130" class="text-l">开始时间</th>
						<th width="130" class="text-l">结束时间</th>
						<th width="180">关联商品</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php if(empty($lists)){ ?>
						<tr class="tr-minH">
                            <td colspan="8">暂无数据！</td>
                            <td></td>
                        </tr>
					<?php }else{ ?>
	                    <?php foreach($lists as $v){ ?>
    					<tr>
    						<td>
    							<div class="table-iconbox">
    								<div class="edit-iconbox left edit-sele marginR10">
    									<a class="edit-word table-icon-a" href="javascript:void(0);" onclick="del(<?php echo ($v["gift_id"]); ?>)"><i class="table-com-icon table-dele-icon"></i><span class="gap">删除</span></a>
    								</div>
    								<div class="edit-iconbox left edit-sele marginR10">
    									<a class="edit-word table-icon-a" href="<?php echo U("Coupon/gift_edit",array('gift_id'=>$v['gift_id'])); ?>"><i class="table-com-icon table-edit-icon"></i><span class="gap">编辑</span></a>
    								</div>
    							</div>
    						</td>
    						<td ><?php echo $v['gift_name']?></td>
    						<td class="">
    							<div class="evalute-tableImg">
    							    <i class="evalute-icon view_img" id="evalute-img<?php echo $v['gift_id'];?>" url="<?php echo $v['gift_image']?>"></i>
    							</div>
    						</td>
    						<td ><?php echo $v['gift_price']?></td>
    						<td ><?php echo $v['gift_storage']?></td>
    						<td class="text-l"><?php echo date('Y-m-d',$v['add_time']);?></td>
    						<td >
    						    <?php if($v['credits_exchange']){ ?>
    						    <div class="state-btn yes-state">
                                    <i class="yes-icon"></i>
                                    <span>开启</span>
                                </div>
                                <?php }else{ ?>
                                    <div class="state-btn no-state">
                                    <i class="no-icon"></i>
                                    <span>关闭</span>
                                    </div>
                                <?php } ?>
    						</td>
    						<td ><?php echo $v['gift_points']?></td>
    						<td ><?php echo $v['limit_num']?></td>
    						<td class="text-l"><?php echo $v['credits_exchange'] ? date('Y-m-d',$v['start_time']) : '--';?></td>
    						<td class="text-l"><?php echo $v['credits_exchange'] ? date('Y-m-d',$v['end_time']) : '--';?></td>
    						<td ><?php echo $v['goods_name'] ? '<a href="'.C('wap_url').'goods_detail.html?id='.$v['goods_common_id'].'"  target="_blank" >'.$v['goods_name'].'</a>' : '--';?></td>
    						
    						<td></td>
    					</tr>
    					<?php } ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<?php echo ($page); ?>
	</div> 
</div>
</div>

<script type="text/javascript">
	$(document).ready(function() { 
		$(document).posi({class:'view_img'});
		
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
        
        $('.dele-li').mousemove(function(){
			e=arguments.callee.caller.arguments[0] || window.event; 
			remindNeed($('.dele-li'),e,'批量删除');
		})
		$('.dele-li').mouseout(function(){
	     	$('.tip-remind').remove();
	    });
	    $('.dele-li').click(function(){
	    	var ids = new Array();
	    	$('input[name="geval_id"]:checked').each(function(){
	    		if($(this).val()) ids[ids.length] = $(this).val();
	    	});
	    	if(ids.length > 0) del(ids);
	    });
	}); 
	function del(id) {
		showConfirm('将删除此礼品，确认操作吗？',function () {
            $.ajax({
                url:"<?php  echo U('Coupon/gift_delete');?>",
                type:"get",
                data:{"gift_id":id},
                success: function(data) {
                    if(data.status==1){
                    	showSuccess("您已经永久删除了这条信息。",function(){window.location.reload()});
                    }else{
                    	showError(data.info);
                    }
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
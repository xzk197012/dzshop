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
		<li>1.点击查看操作将显示订单（包括订单物品）的详细信息。</li>
		<li>2.点击取消操作可以取消订单（在线支付但未付款的订单）。</li>
		<li>3.如果平台已确认收到买家的付款，但系统支付状态并未变更，可以点击设置收货操作(仅限于下单后7日内可更改收款状态)，并填写相关信息后更改订单支付状态。</li>
	</ol>
</div>
<div class="iframeCon">
<div class="iframeMain">
    <ul class="transverse-nav">
        <li class="<?php echo ($type==''?'activeFour':''); ?>"><a href="<?php echo U('Admin/Order/lists');?>"><span>全部</span></a></li>
		<li class="<?php echo ($type=='10'?'activeFour':''); ?>"><a href="<?php echo U('Admin/Order/lists');?>?type=10"><span>待付款</span></a></li>
		<li class="<?php echo ($type=='20'?'activeFour':''); ?>"><a href="<?php echo U('Admin/Order/lists');?>?type=20"><span>待发货</span></a></li>
		<li class="<?php echo ($type=='30'?'activeFour':''); ?>"><a href="<?php echo U('Admin/Order/lists');?>?type=30"><span>已发货</span></a></li>
		<li class="<?php echo ($type=='40'?'activeFour':''); ?>"><a href="<?php echo U('Admin/Order/lists');?>?type=40"><span>已完成</span></a></li>
		<li class="<?php echo ($type=='0'?'activeFour':''); ?>"><a href="<?php echo U('Admin/Order/lists');?>?type=0"><span>已取消</span></a></li>
    </ul>
    <div class="white-bg">
        <div class="table-titbox">
            <div class="option">
                <h1 class="table-tit left boxsizing">订单列表</h1>
                <ul class="operation-list left">
                    <li class="refresh-li" onclick="location.reload();"><a href="#"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
					<li class="export-li need-remind"><a href="<?php echo U('Admin/Export/orderlists',$_GET);?>"><span><i class="operation-icon export-icon" href="#"></i></span></a></li>
                </ul>
            </div>            
            <form  action="<?php echo U('Order/lists');?>"  method="get">
                <input type="hidden" name="type" value="<?php echo ($type); ?>">            	
                <div class="search-box1 right">
                    <div class="search-boxcon boxsizing radius3 left">
                        <select  name="field" id="field"  class="sele-com1 search-sele boxsizing">
    						<option  <?php if($_GET['field'] == 'order_sn'){ echo 'selected="selected"';}?> value="order_sn">订单号</option>
    						<option  <?php if($_GET['field'] == 'trade_no'){ echo 'selected="selected"';}?>  value="trade_no" >交易流水号</option>
    							
    						<option  <?php if($_GET['field'] == 'reciver_name'){ echo 'selected="selected"';}?> value="reciver_name" >收货人</option>
    						<option  <?php if($_GET['field'] == 'buyer_name'){ echo 'selected="selected"';}?> value="buyer_name" >买家账号</option>
    					</select>
                        <input type="text" name="value" value="<?php echo $_GET['value'];?>" class="search-inp-con boxsizing"/>
                    </div>
                    <input type="submit" name="search" value="搜索" class="search-btn right radius3"/>
                </div>
            </form>            
        </div>
        
        <div class="comtable-box boxsizing">
            <table class="com-table">
                <thead>
                    <tr>
                        <th width="200">操作</th>
                        <th width="150">订单号</th>
						<th width="110">买家账号</th>
						<th width="110">收货人</th>
						<th width="180">下单时间</th>
						<th width="90">状态</th>
						<th width="120">订单金额</th>
						<?php if ($type != '0'){ ?>
						<th width="160">支付方式</th>
						<th width="200">交易流水号</th>
						<th width="180">支付时间</th>
						<th width="120">退款金额</th>
						<?php }?>
                        <th width="10"></th>
                    </tr>
                </thead>
                <tbody>
                	<?php if(empty($lists)): ?><tr class="tr-minH">
                            <?php if ($type != '0'){ ?>
                            <td colspan="11">暂无数据！</td>
                            <?php }else{ ?>
                            <td colspan="7">暂无数据！</td>
                            <?php } ?>
                            <td></td>
                        </tr>
					<?php else: ?>
                    <?php if(is_array($lists)): foreach($lists as $key=>$vo): ?><tr>
                        <td>
                            <div class="table-iconbox">
                                <div class="edit-iconbox left edit-sele ">
                                    <a class="edit-word table-icon-a" href="<?php echo U('Admin/Order/detail');?>?id=<?php echo ($vo["order_id"]); ?>"><i class="table-com-icon table-look-icon"></i><span class="gap">查看</span></a>
                                </div>
                           
                                <div class="table-icon left setting-sele-par">
                                    <div class="setting-sele left radius3 boxsizing">
                                        <span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap">设置</span></span>
                                        <span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
                                    </div>
                                    <ul class="setting-sele-con remind-layer">      <li><a target='_blank' href="<?php echo U('Order/order_print',array('order_id'=>$vo['order_id']));?>">打印订单</li>                               
                                        <?php if($vo["order_state"] == 10 ): ?><li onclick="change_order(<?php echo ($vo["order_id"]); ?>)">取消订单</li>
										
    										<?php if($vo['order_state'] == 10 && $vo['payment_starttime'] != 0){ ?>
    										<li><a href="<?php echo U('Order/settrade');?>?id=<?php echo ($vo["order_id"]); ?>">设置付款</a></li>
    										<?php } endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td><?php echo ($vo["order_sn"]); ?></td>
						<td><?php echo ($vo["buyer_name"]); ?></td>
						<td><?php echo ($vo["reciver_name"]); ?></td>
						<td><?php echo (date("Y-m-d H:i:s",$vo["add_time"])); ?></td>
						<td><?php echo ($vo["order_state_text"]); ?></td>
						<td><?php echo ($vo["order_amount"]); ?></td>
						<?php if ($type != '0'){ ?>
						<td><?php echo ($vo["payment_code"]); ?></td>
						<td><?php echo ($vo["trade_no"]); ?></td>
						<td><?php if($vo['payment_time'] != 0) echo date('Y-m-d H:i:s',$vo['payment_time']); ?></td>
						<td><?php if($vo['refund_amount'] != 0) echo $vo['refund_amount']; ?></td>
						<?php }?>
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
        $('.refresh-li').mousemove(function(){
            e=arguments.callee.caller.arguments[0] || window.event; 
            remindNeed($('.add-li'),e,'刷新');
        })
        $('.refresh-li').mouseout(function(){
            $('.tip-remind').remove();
        });

            
    })
    //删除订单
	// function order_del(order_id) {
 //    	showConfirm("将删除此订单，确认操作吗？",function(){
	// 		$.get('<?php echo U('Order/delorder')?>',{id:order_id},function(data){
	// 	        if(data.status == 1){
	// 	           showSuccess(data.info,function(){
	//     			    window.location.reload();
 //                  });
	// 		    }else{
	// 		    	showError(data.info);
	// 			}
	// 		},'json')
 //    	});
 //    }

    //取消订单
    function change_order(order_id) {
    	showConfirm("将取消此订单，确认操作吗？",function(){
    		
			$.get('<?php echo U('Order/changeorder')?>',{id:order_id},function(data){
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
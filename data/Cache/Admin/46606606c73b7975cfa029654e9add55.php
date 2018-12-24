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
                <li>1.点击审核操作可对待审核款项审核退款或拒绝退款 </li>
                <li>2.点击退款操作可对正在退款的商品进行原路退款或人工退款选择处理 </li>
                <li>3.点击详情操作显示退款订单（包括订单物品及处理）的详细信息 </li>
            </ol>
        </div>
        <div class="iframeCon">
		<div class="iframeMain">
            <ul class="transverse-nav">
                <li class="<?php echo ($status==''?'activeFour':''); ?>"><a href="<?php echo U('Presales/refunds/status/');?>">全部</a></li>
                <li class="<?php echo ($status=='1'?'activeFour':''); ?>" ><a href="<?php echo U('Presales/refunds/status/1');?>">待处理</a></li>
        		<li class="<?php echo ($status=='2'?'activeFour':''); ?>" ><a href="<?php echo U('Presales/refunds/status/2');?>">待退款</a></li>
        		<li class="<?php echo ($status=='3'?'activeFour':''); ?>" ><a href="<?php echo U('Presales/refunds/status/3');?>">已退款</a></li>
        		<li class="<?php echo ($status=='4'?'activeFour':''); ?>" ><a href="<?php echo U('Presales/refunds/status/4');?>">已拒绝</a></li>
            </ul>
            <div class="white-bg">
                <div class="table-titbox">
                    <div class="option">
                        <h1 class="table-tit left boxsizing">退款管理</h1>
                        <ul class="operation-list left">
                            <li class="refresh-li" onclick="location.reload();"><a href="#"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
                            <!-- <li class="export-li"><a href="#"><span><i href="#" class="operation-icon export-icon"></i></span></a></li> -->
                        </ul>
                    </div>
        			<form method="get" class="form-horizontal" name="Search_form"  action="<?php echo U('Presales/refunds');?>">
                        <input type="hidden" name="status" value="<?php echo ($status); ?>"/>
        				<div class="search-box1 right">
                            <div class="search-boxcon boxsizing radius3 left">
                       
                                <select id='refundsearch' class="sele-com1 search-sele boxsizing" name="where">
                                    <option <?php if($_GET['where'] == 'refund_sn'){ echo 'selected="selected"';}?> value="refund_sn">退款单号</option>
                                    <option <?php if($_GET['where'] == 'order_sn'){ echo 'selected="selected"';}?> value="order_sn">订单编号</option>
                                    <option <?php if($_GET['where'] == 'member_mobile'){ echo 'selected="selected"';}?> value="member_mobile">买家帐号</option>
                                </select>
                                <input name="value" value="<?php echo $_GET['value'];?>" class="search-inp-con boxsizing" type="text"/>
                            </div>
                            <input value="搜索" class="search-btn right radius3" type="submit"/>
                        </div>
                    </form>
                </div>
                <div class="comtable-box boxsizing">
                    <table class="com-table">
                        <thead>
                            <tr>
                                <th width="90">操作</th>
                                <th width="160">订单编号</th>
                                <th width="160">退款单号</th>
                                <th width="160">买家帐号</th>
                                <th width="160" class="text-l">退款金额</th>
                                <th width="200" class="text-l">退款原因</th>
                                <th width="200" class="text-l">处理状态</th>
                                <th width="230" class="text-l">处理备注</th>
                                <th width="200">申请时间</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php if(empty($list)): ?><tr class="tr-minH">
                                    <td colspan="9">暂无数据！</td>
                                    <td></td>
                                </tr>
        					<?php else: ?>
        					<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
        	                	<td>
                                    <div class="table-iconbox">
                                        <?php if($vo["status_code"] == '1' ): ?><div class="edit-iconbox left edit-sele marginR10">
                                                <a class="edit-word table-icon-a" href='<?php echo U("Presales/editrefund/id/$vo[refund_id]");?>'><i class="table-com-icon table-handle-icon"></i><span class="gap">审核</span></a>
                                            </div>
                                        <?php elseif($vo["status_code"] == '2' ): ?>
                                            <div class="edit-iconbox left edit-sele marginR10">
                                                <a class="edit-word table-icon-a" href='<?php echo U("Presales/refunddetail/id/$vo[refund_id]/status/return");?>'  data-refund_id="<?php echo ($vo['refund_id']); ?>"><i class="table-com-icon table-refund-icon"></i><span class="gap">退款</span></a>
                                            </div>
                                        <?php else: ?>
                                            <div class="edit-iconbox left edit-sele marginR10">
                                                <a class="edit-word table-icon-a" href='<?php echo U("Presales/refunddetail/id/$vo[refund_id]/status/details");?>'><i class="table-com-icon table-look-icon"></i><span class="gap">详情</span></a>
                                            </div><?php endif; ?>
                                    </div>
                                </td>
                                <td><?php echo ($vo["order_sn"]); ?></td>
        	                    <td><?php echo ($vo["refund_sn"]); ?></td>
        	                    <td><?php echo ($vo["member_name"]); ?></td>
        	                    <td class="text-l"><?php echo ($vo["refund_amount"]); ?></td>
        	                    <td class="text-l"><?php echo ($vo['causes_name']); ?></td>
                                <td class="text-l"><?php echo ($vo['status']); ?></td>
                                <td class="text-l"><div class="word-overflow" title="<?php echo ($vo['remark']); ?>"><?php echo ($vo['remark']); ?></div><?php echo ($vo['']); ?></td>
        	                    <td><?php echo date('Y-m-d H:i:s',$vo['dateline']);?></td>
        	                    <td></td>
        	                </tr><?php endforeach; endif; endif; ?>
                        </tbody>
                    </table>
                </div>
                <?php echo ($page); ?>
            </div>
        </div>
        </div>

        <!--content结束-->

        <script type="text/javascript">
        	$(document).ready(function() {  
                
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
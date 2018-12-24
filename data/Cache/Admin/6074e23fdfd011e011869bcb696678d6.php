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
				<li>1.订单详细信息展示。</li>
			</ol>
		</div>
		<div class="iframeCon">
			<div class="white-shadow2">
				<div class="details-box">
					<h1 class="details-tit">下单/支付</h1>
					<table class="order-table">
						<tr>
							<td class="text-r" width="120">订单号</td>
							<td class="text-l" width="200"><?php echo ($order_detail["order_id"]); ?></td>
							<td class="text-r" width="120">下单时间</td>
							<td class="text-l" width="200"><?php echo ($order_detail["add_time"]); ?></td>
							<td class="text-r" width="120">支付方式</td>
							<td class="text-l" width="200"><?php echo ($order_detail["payment_code"]); ?></td>
							<td></td>
						</tr>
						<tr>
							<td class="text-r" width="120">支付单号</td>
							<td class="text-l" width="200"><?php echo ($order_detail["pay_sn"]); ?></td>
							<td class="text-r" width="120">支付时间</td>
							<td class="text-l" width="200"><?php echo ($order_detail["payment_time"]); ?></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td class="text-r" width="120">支付日志</td>
							<td class="text-l" colspan="6">系统收到货款（外部交易号：<?php echo ($order_detail["trade_no"]); ?>）</td>
						</tr>
						<!-- <tr>
							<td class="text-r" width="120">订单取消原因</td>
							<td class="text-l" colspan="6">付款的两个季度付款了个jfk领导的经历jfk过来的反馈结果好地方健康更何况</td>
						</tr> -->
					</table>
					<h1 class="details-tit">购买/收货方信息</h1>
					<table class="order-table">
						<tr>
							<td class="text-r" width="120">买家账号</td>
							<td class="text-l" width="200"><?php echo ($order_detail['buyer_name']); ?></td>
							<td class="text-r" width="120">买家联系方式</td>
							<td class="text-l" width="200"><?php echo ($order_detail["buyer_phone"]); ?></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td class="text-r" width="120">收货人</td>
							<td class="text-l" width="200"><?php echo ($orderCommon["reciver_name"]); ?></td>
							<td class="text-r" width="120">收货人联系方式</td>
							<td class="text-l" width="200"><?php echo ($orderCommon["reciver_info"]["tel_phone"]); ?></td>
							<td colspan="3"></td>
						</tr>
						<tr>
							<td class="text-r" width="120">收货地址</td>
							<td class="text-l" colspan="6"><?php echo ($orderCommon["reciver_info"]["area_info"]); ?> <?php echo ($orderCommon["reciver_info"]["address"]); ?></td>
						</tr>
					</table>
					<h1 class="details-tit">发货信息</h1>
					<table class="order-table">
						<tr>
							<td class="text-r" width="120">发货时间</td>
							<td class="text-l" width="200"><?php if($orderCommon['shipping_time']){ echo date('Y-m-d H:i:s',$orderCommon['shipping_time']); } else{ echo '未发货'; }?></td>
							<td class="text-r" width="120">快递公司</td>
							<td class="text-l" width="200"><?=$orderCommon['company']['name']?></td>
							<td class="text-r" width="120">物流单号</td>
							<td class="text-l" width="200"><?=$order_detail['shipping_code']?></td>
							<td></td>
						</tr>
					</table>
					<h1 class="details-tit">订单留言</h1>
					<table class="order-table">
						<tr>
							<td colspan=6 class="text-r" width="120"> 留言内容</td>
							<td><?=$orderCommon['order_message'];?></td>
							<td></td>
						</tr>
					</table>
					<h1 class="details-tit">商品信息</h1>
					<table class="order-table2">
						<tr>
							<th></th>
							<th width="562" class="text-l">
								商品信息
							</th>
							<th width="158">单价</th>
							<th width="120">数量</th>
							<!-- <th width="197">优惠活动</th> -->
						</tr>
						<?php if(is_array($ordersGoods)): foreach($ordersGoods as $key=>$vo): ?><tr>
							<td width="50" class="text-c">
								<a href="#">
									<img src="<?php echo ($vo["goods_image"]); ?>" alt="" class="order-goodsImg"/>
								</a>
							</td>
							<td class="text-l">
								<div class="order-goods-det">
									<?php echo ($vo["goods_name"]); ?>
								</div>
								<p class="table-spec"><span><?php echo ($vo["goods_spec"]); ?></span></p>
							</td>
							<td><?php echo ($vo["goods_price"]); ?></td>
							<td><?php echo ($vo["goods_num"]); ?></td>
							<!-- <td><?php echo ($vo["rpacket_detail"]["rpacket_title"]); ?></td> -->
						</tr><?php endforeach; endif; ?>
					</table>
					<div class="orderShow-foot">
						<p class="order-money">订单金额<span class="order-moneyNum orange-color">￥<?php echo ($order_detail["order_amount"]); ?></span></p>
						<p class="order-freight">（ <?php if ($order_detail['rpacket_detail']['rpacket_price']){ ?>订单优惠<span>￥<?php echo ($order_detail["rpacket_detail"]["rpacket_price"]); ?>，</span><?php } ?>运费<span>￥<?php echo ($order_detail["shipping_fee"]); ?></span>）</p><notempty name="name">
					</div>
				</div>
			</div>
		</div>

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
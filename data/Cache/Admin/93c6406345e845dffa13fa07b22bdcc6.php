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
			<h1 class="tip-tit"><i class="tips-icon-lamp"></i>操作提示</h1>
			<span class="open-span span-icon"><i class="open-icon"></i></span>
		</div>
	</div>
	<ol class="tips-list" id="tips-list">
		<li>1.查看订单、物流信息。</li>
	</ol>
</div>
<div class="iframeCon">
	<div class="white-shadow2">
		<div class="details-box">
			<h1 class="details-tit">收货信息</h1>
			<table class="order-table">
				<tr>
					<td class="text-r" width="120">收货人</td>
					<td class="text-l"><?=$data['ordercommon']['reciver_name']?></td>
				</tr>
				<tr>
					<td class="text-r" width="120">联系方式</td>
					<td class="text-l"><?=$data['ordercommon']['reciver_info']['tel_phone']?></td>
				</tr>
				<tr>
					<td class="text-r" width="120">收货地址</td>
					<td class="text-l"><?=$data['ordercommon']['reciver_info']['area_info'].$data['ordercommon']['reciver_info']['address']?></td>
				</tr>
			</table>
			<h1 class="details-tit">物流动态</h1>
			<table class="order-table">
				<tr>
					<td class="text-r" width="120">快递公司</td>
					<td class="text-l" width="200"><?=$data['express_info']['express_name']?></td>
					<td class="text-r" width="120">物流单号</td>
					<td class="text-l" width="200"><?=$data['express_info']['express_sn']?></td>
					<td class="text-r" width="120">发货时间</td>
					<td class="text-l" width="200"><?= @date('Y-m-d H:i:s',$data['ordercommon']['shipping_time'])?></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-r" width="120">发货信息</td>
					<td class="text-l" colspan="6"><?=$data['ordercommon']['deliver_explain'];?></td>
				</tr>
			</table>
			<div class="logistics-det-box">
				<ul class="status-list">
				<?php if(!empty($data['express_info']['express_detail']) && !$data['express_info']['express_detail']['msg']){ ?>
					<?php foreach($data['express_info']['express_detail'] as $ev){ ?>
						<li>
							<span class="left status-time"><?=$ev['AcceptTime']?></span>
							<p class="left"><?=$ev['AcceptStation']?></p>
						</li>
					<?php } ?>

				<?php }elseif($data['express_info']['express_detail']['msg']){ ?>
						<li>
							<span class="left status-time"></span>
							<p class="left"><?=$data['express_info']['express_detail']['msg']?></p>
						</li>
				<?php }else{ ?>
						<li>
							<span class="left status-time"></span>
							<p class="left">暂无物流信息</p>
						</li>
				<?php } ?>
				</ul>
			</div>
			<h1 class="details-tit">商品信息</h1>
			<table class="order-table">
				<tr>
					<td class="text-r" width="120">订单编号</td>
					<td class="text-l" width="200"><?=$data['order_sn']?></td>
					<td class="text-r" width="120">订单总额</td>
					<td class="text-l" width="200">￥<?=$data['order_amount']?></td>
					<td class="text-r" width="120">订单运费</td>
					<td class="text-l" width="200">￥<?=$data['shipping_fee']?></td>
					<td></td>
				</tr>
				<tr>
					<td class="text-r" width="120">支付方式</td>
					<td class="text-l" width="200"> <?=$data['payment_code']?> </td>
					<td class="text-r" width="120">下单时间</td>
					<td class="text-l" width="200"><?=$data['add_time']?></td>
					<td class="text-r" width="120">完成时间</td>
					<td class="text-l" width="200"><?= $data['finnshed_time'] == 0 ? '未完成' : @date('Y-m-d H:i:s',$data['finnshed_time']) ?></td>
					<td></td>
				</tr>
				
			</table>
			<table class="order-table2 logistic-table">
				<tr>
					<th width="50px"></th>
					<th>
						商品信息
					</th>
					<th width="158px">单价</th>
					<th width="120px">数量</th>
				</tr>
				<?php foreach( $data['goodslist'] as $gk=>$gv ) {?>
				<tr>
					<td>
						<a href="<?php echo C('WAP_URL').'goods_detail.html?id='.$gv['goods_common_id']; ?>" target="_blank" >
							<img src="<?=$gv['goods_image']?>" class="order-goodsImg view_img" url="<?=$gv['goods_image']?>" />
						</a>
					</td>
					<td class="text-l">
						<a href="<?php echo C('WAP_URL').'goods_detail.html?id='.$gv['goods_common_id']; ?>" target="_blank" > <?=$gv['goods_name']?> </a>
						<p class="table-spec"><span><?=$gv['goods_spec']?></span></p>
					</td>
					<td width="100"><?=$gv['goods_price']?></td>
					<td width="200"><?=$gv['goods_num']?></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		$(document).posi({class:'view_img'});
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
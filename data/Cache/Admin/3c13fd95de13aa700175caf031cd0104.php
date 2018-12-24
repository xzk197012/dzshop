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
		<li>1.设置商品发货。</li>
	</ol>
</div>
<div class="iframeCon">
	<div class="white-shadow2">
		<div class="details-box">
			<h1 class="details-tit">发货设置</h1>
			<div class="order-box boxsizing deliver-top">
				<div class="order-box-Tit boxsizing">
					<p class="left order-tit-p">订单编号<span class="order-tit-span"> <?=$data['order_sn']?> </span></p>
					<p class="left order-tit-p">下单时间<span class="order-tit-span"> <?=$data['add_time']?> </span></p>
					<p class="left order-tit-p <?php echo ($data['order_state']=='20'?'none':''); ?>">发货时间<span class="order-tit-span"><?=date('Y-m-d  H:i:s',$data['ordercommon']['shipping_time'])?></span></p>
					<a href="<?php echo U('Order/logistics');?>?id=<?=$data['order_id'] ?>" class="getpid <?php echo ($data['order_state']=='20'?'none':''); ?>">查看物流</a>
				</div>
				<div class="order-box-con">
					<div class="order-box-L boxsizing">
						<?php $num = count($data['goodslist']) - 1; foreach( $data['goodslist'] as $gk=>$gv ) {?>
							<div class="order-product-box <?php if($num == $gk){ echo 'borderB-none';} ?>">
								<dl class="order-product-dl left">
									<dt class="product-dl-dt"> <a href="<?php echo C('WAP_URL').'goods_detail.html?id='.$gv['goods_common_id']; ?>" target="_blank"> <img src="<?=$gv['goods_image']?>" class="product-img1 view_img" url="<?=$gv['goods_image']?>" /> </a> </dt>
									<dd class="product-dl-dd boxsizing">
										<div class="order-goods-det shipping-Det">
										<a href="<?php echo C('WAP_URL').'goods_detail.html?id='.$gv['goods_common_id']; ?>" target="_blank"> <?=$gv['goods_name']?> </a>
										</div>
										<p class="deliver-spec"><?=$gv['goods_spec']?></p>
									</dd>
								</dl>
								<div class="product-num right"><?=$gv['goods_num']?>件</div>
							</div>
						<?php }?>
					</div>
					<div class="order-box-R boxsizing">
						<div class="send-details boxsizing">
							<div class="send-details-L left">买家</div>
							<div class="send-details-R left"><?=$data['buyer_name']?></div>
						</div>
						<div class="send-details boxsizing">
							<div class="send-details-L left">收货人</div>
							<div class="send-details-R left send-person-det boxsizing">
								<p><span class="send-name"><?=$data['ordercommon']['reciver_name']?></span><span class="send-phone"><?=$data['ordercommon']['reciver_info']['tel_phone']?></span></p>
								<p class="send-address"><?=$data['ordercommon']['reciver_info']['area_info'].$data['ordercommon']['reciver_info']['address']?></p>
							</div>
						</div>
						<div class="send-details set-box boxsizing">
							<div class="send-details-L left">运费</div>
							<div class="send-details-R left">
								<p class="left"><?=$data['shipping_fee']?></p>
							</div>	
						</div>
					</div>
				</div>
			</div>
		<h1 class="details-tit">订单留言</h1>
			<div class="jurisdiction boxsizing marginT0">
				<div class="deliver-jusi">
					<dl class="juris-dl boxsizing" id="shipping_codebox">
						<dt class="left text-r boxsizing">留言内容：</dt>
						<dd class="left text-l">
							<span><?=$data['ordercommon']['order_message']?></span>
						</dd>
					</dl>
				</div>
			</div>
			

			<h1 class="details-tit">设置物流信息</h1>
			<form id="signupForm" role="form" action="<?=U('/Order/setstorage')?>"  method ="post" >
			<div class="jurisdiction boxsizing marginT0">
				<div class="deliver-jusi">
					<dl class="juris-dl boxsizing borderB-none">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>物流方式：</dt>
						<dd class="left text-l">
							<div class="button-holder deliver-holder">
								<p class="radiobox deliver-check"><input type="radio" id="radio-1-5" value="1" name="shipping_type" class="regular-radio" <?php if(empty($data['ordercommon']['shipping_time']) || (!empty($data['ordercommon']['shipping_time']) && !empty($data['shipping_code']) )){ ?> checked="checked" <?php } ?> /><label for="radio-1-5"></label><span class="radio-word">物流服务</span></p>

								<p class="radiobox deliver-check"><input type="radio" id="radio-1-6" value="0" name="shipping_type" class="regular-radio" <?php if(!empty($data['ordercommon']['shipping_time']) && empty($data['shipping_code'] )){ ?> checked="checked" <?php } ?> /><label for="radio-1-6"></label><span class="radio-word">无需物流</span></p>
							</div>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing borderB-none ischeck_select">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>快递公司：</dt>
						<dd class="left text-l">
	                        <div class="search-boxcon boxsizing radius3 left borderR-none">
	                            <select id="shipping_express_id" name="shipping_express_id">
									<?php foreach($companyList as $rk=>$rv) {?>
									<option value=<?=$rv['id']?> <?php if($data['ordercommon']['shipping_express_id'] == $rv['id']) {?> selected <?php } ?>  > <?=$rv['name']?></option>
									<?php }?>
	                            </select>
	                        </div>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing" id="shipping_codebox">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>物流单号：</dt>
						<dd class="left text-l">
							<input type="text" class="com-inp1 radius3 boxsizing" name="shipping_code" id="shipping_code" value="<?=$data['shipping_code']?>"/>
						</dd>
					</dl>
				</div>
				<dl class="juris-dl boxsizing borderB-none deliver-dl-text">
					<dt class="left text-r boxsizing">发货备注：</dt>
					<dd class="left text-l">
						<textarea type="text" rows="" cols="" class="com-textarea1 radius3 boxsizing" name="explain"><?=$data['ordercommon']['deliver_explain'];?></textarea>
						<p class="remind1">填写发货备注</p>
					</dd>
				</dl>
			</div>
			<div class="btnbox3 boxsizing">
				<input name="id" type="hidden" value="<?=$data['order_id'] ?>" >
				<input  type="hidden" name="form_submit" value="submit" >
				<a type="button" id="storage_submit" class="btn1 radius3 marginT10  btn3-btnmargin" href="javascript:;"><?php echo (L("submit_btn")); ?></a>
				<a type="button" class="btn1 radius3 marginT10" href="<?=U('/Order/productlist') ?>">返回列表</a>
			</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">

	$(function(){
		$(document).posi({class:'view_img'});
        $('#storage_submit').click(function(){
        	flag=false;
		 	if($("input[class='regular-radio']:checked").val() == 1){
		 		$('#shipping_code').attr('localrequired','1');
		 		$('#shipping_express_id').attr('localrequired','1');
	            flag=checkrequire('signupForm');
		 	}
	        if(!flag){
	            $('#signupForm').submit();
	        }
        });
		//判断是否开启物流
		var shipping_type = $('input[name=shipping_type]:checked').val();
		if(shipping_type == 0){
			$('.ischeck_select').hide();
			$('#shipping_codebox').hide();
		}else{
			$('.ischeck_select').show();
			$('#shipping_codebox').show();
		}
	})

	$("input[class='regular-radio']").each(function(i){
		$(this).click(function(){
			_this = this;
		if($(_this).is(":checked")){
			$(_this).attr("checked","checked");
			$(_this).parent('.radiobox').find('.radio-word').addClass('radio-word-black');
			if($(_this).val() == 1){
				$('.ischeck_select').show();
				$('#shipping_codebox').show();
			}else{
				$('.ischeck_select').hide();
				$('#shipping_codebox').hide();
			}
		} else {
			$(_this).removeAttr("checked");
			$(_this).parent('.radiobox').find('.radio-word').removeClass('radio-word-black');
		}
		})
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
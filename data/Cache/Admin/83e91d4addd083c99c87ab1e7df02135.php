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
    	
	<div class="content">
		<div class="tipsbox">
		    <div class="tips boxsizing radius3">
		        <div class="tips-titbox">
		            <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
		            <span class="open-span span-icon"><i class="open-icon"></i></span>
		        </div>
		    </div>
			<ol class="tips-list" id="tips-list">
				<li>1.商品订单退款申请及审核处理。</li>
			</ol>
		</div>
		<div class="iframeCon">
		<div class="iframeMain">
			<div class="white-shadow2">
				<div class="details-box">
					<h1 class="details-tit">退款处理</h1>
					<div class="jurisdiction boxsizing">
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">支付单号：</dt>
							<dd class="left text-l">
								<?php echo ($list["order_sn"]); ?>
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款单号：</dt>
							<dd class="left text-l">
								<?php echo ($list["refund_sn"]); ?>
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">申请时间：</dt>
							<dd class="left text-l">
								<?php echo date('Y-m-d H:i:s',$list['dateline']);?>
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款原因：</dt>
							<dd class="left text-l">
								<?php echo ($list["causes_name"]); ?>
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款金额：</dt>
							<dd class="left text-l">
								<?php echo ($list["refund_amount"]); ?>
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款说明：</dt>
							<dd class="left text-l">
								<?php echo ($list["causes"]); ?>
							</dd>
						</dl>
						<dl class="juris-dl boxsizing details-dl">
							<dt class="left text-r boxsizing">退款凭证：</dt>
							<dd class="left text-l">
								<div class="evalute-tableImg">
									<?php if(is_array($list["refund_images"])): foreach($list["refund_images"] as $k=>$v): ?><i class="evalute-icon view_img" id="refund-img<?php echo ($k); ?>" url="<?php echo ($v); ?>"></i><?php endforeach; endif; ?>
								</div>
							</dd>
						</dl>
					</div>
					<h1 class="details-tit">商城处理</h1>
					<form method="post" name="settingForm" action="<?php echo U('Presales/editrefund');?>" enctype="multipart/form-data" id="refund_form">
				     	<input type="hidden" name="form_submit" value="submit"/>
				     	<input type="hidden" name="refund_id" value="<?php echo ($list["refund_id"]); ?>"/>
				     	<input type="hidden" name="order_id" value="<?php echo ($list["order_id"]); ?>"/>
				     	<input type="hidden" name="order_sn" value="<?php echo ($list["order_sn"]); ?>"/>
				     	<input type="hidden" name="refund_sn" value="<?php echo ($list["refund_sn"]); ?>"/>
				     	<input type="hidden" name="user_id" value="<?php echo ($_SESSION['admin_user']['uid']); ?>"/>
				     	<input type="hidden" name="user_name" value="<?php echo ($_SESSION['admin_user']['username']); ?>"/>
						<div class="jurisdiction boxsizing marginT0">
							<dl class="juris-dl boxsizing remarks-dl">
								<dt class="left text-r boxsizing"><span class="redstar">*</span>处理意见：</dt>
								<dd class="left text-l">
									<div class="button-holder" localrequired="">
										<div class="radio i-checks">
											<p class="radiobox"><input type="radio" id="radio-1-a" name="status" value="2" class="regular-radio"/><label for="radio-1-a"></label><span class="radio-word">同意</span></p>
											<p class="radiobox"><input type="radio" id="radio-1-b" name="status" value="4" class="regular-radio"/><label for="radio-1-b"></label><span class="radio-word">拒绝</span></p>
										</div>
									</div>
									<!-- <p class="remind1">请确认是否要打款！</p> -->
								</dd>
							</dl>
							<dl class="juris-dl boxsizing remarks-dl">
								<dt class="left text-r boxsizing"><span class="redstar">*</span>处理说明：</dt>
								<dd class="left text-l">
									<textarea type="text" name="remark" class="com-textarea1 radius3 boxsizing" placeholder="" localrequired=""></textarea>
									<p class="remind1">同意或拒绝退款，请在上面输入处理说明</p>
								</dd>
							</dl>
						</div>
						<div class="btnbox3 boxsizing">
							<a type="button" id="message_sub" class="btn1 radius3 marginT10  btn3-btnmargin form_data"><?php echo (L("submit_btn")); ?></a>
							<a type="button" class="btn1 radius3 marginT10" href="<?php echo U('/Presales/refunds');?>">返回列表</a>
						</div>

						</form>
				</div>
			</div>
		</div>
	</div>
	</div>
		<!--<script type="text/javascript" src="/static/admin/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="/static/admin/js/common.js"></script>-->
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
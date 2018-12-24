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
    	<!--内容开始-->
   		<div class="tipsbox radius3">
			<div class="tips boxsizing radius3">
				<div class="tips-titbox">
					<h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
					<span class="open-span span-icon"><i class="open-icon"></i></span>
				</div>
			</div>
			<ol class="tips-list" id="tips-list">
				<li>1.扫描下方二维码，前往支付页面，支付金额可自己输入。</li>
			</ol>
		</div>
		<div class="iframeCon">
		<div class="iframeMain">
			<ul class="transverse-nav">
				<li <?php if($status == ''): ?>class="activeFour"<?php endif; ?>><a href="<?= U('Cms/otherpay');?>"><span>二维码</span></a></li>
				<li <?php if($status == 1): ?>class="activeFour"<?php endif; ?>><a href="<?= U('Cms/otherpay',array('status'=>1));?>"><span>支付列表</span></a></li>
			</ul>
			<?php if($status == ''): ?><div class="white-bg ">
				<div  style="margin:20px;">
					<div id="qrcodeCanvas"></div>
					<!-- <img src="/static/admin/images/otherpay.png" alt="" title="扫码支付二维码" > -->
					<h1 class="table-tit boxsizing down left" >右键另存为，下载二维码</h1>
				</div>
				
				
			</div>
			<?php else: ?>
			<div class="white-bg ">
				<div class="table-titbox">
					<div class="option" >
						<h1 class="table-tit left boxsizing">支付记录</h1>
						<ul class="operation-list left" >
							<li class="refresh-li"><a href="javascript:window.location.reload();"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
							
						</ul>
					</div>
					<form action="<?=U('/Cms/otherpay',array('status'=>$status))?>" method="get" id='formid'>
					<div class="search-box1 right">
						<div class="search-boxcon boxsizing radius3 left">
							<select class="sele-com1 search-sele boxsizing" name="type" id="search_select">
                        		<option value="order_sn"  <?php if($type =='order_sn'){ ?> selected='selected' <?php }?> >订单编号</option>
                        		<option value="trade_no" <?php if($type =='trade_no'){ ?> selected='selected' <?php }?>>交易流水号</option>
                        		<option value="payment_code" <?php if($type =='payment_code'){ ?> selected='selected' <?php }?>>支付方式</option>
                        	</select>
							<input type="text" name="search_text" value="<?=$search_text?>" class="search-inp-con boxsizing"/>
						</div>
						<button type="button" class="search-btn right radius3" onclick="javascript:document.getElementById('formid').submit();">搜索</button>
						
					</div>
					</form>
				</div>
				<div class="comtable-box boxsizing">
					<table class="com-table">
						<thead>
							<tr>
								<th width="200">订单编号</th>
								<th width="300">交易流水号</th>
								<th class='text-l' width="150">支付方式</th>
								<th class='text-l' width="100">支付金额</th>
								<th width="150">申请时间</th>
								<th width=""></th>
							</tr>
						</thead>
						<tbody>
							<?php if(empty($list)): ?><tr class="tr-minH">
		                            <td colspan="11">暂无数据！</td>
		                            <td></td>
		                        </tr>
		                    <?php else: ?>
								<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
										<td><?php echo ($v['order_sn']); ?></td>
										<td><?php echo ($v['trade_no']); ?></td>
										<td class='text-l'><?php echo ($v['payment_code']); ?></td>
										<td class='text-l'><?php echo ($v['order_amount']); ?></td>
										<td><?php echo ($v['time_text']); ?></td>
										<td></td>
									</tr><?php endforeach; endif; endif; ?>
						</tbody>
					</table>
				</div>
				<?php echo ($page); ?>
			</div><?php endif; ?>
		</div>	
	</div>
		<!--内容结束-->
	<script type="text/javascript" src="/static/admin/js/qrcode/utf.js"></script>
	<script type="text/javascript" src="/static/admin/js/qrcode/jquery.qrcode.js"></script>
	<script>
		$(document).ready(function() {
	        $("#qrcodeCanvas").qrcode({
	            render : "canvas",    //设置渲染方式，有table和canvas，使用canvas方式渲染性能相对来说比较好
	            text : "<?php echo ($qrcode_url); ?>",    //扫描二维码后显示的内容,可以直接填一个网址，扫描二维码后自动跳向该链接
	            width : "200",               //二维码的宽度
	            height : "200",              //二维码的高度
	            background : "#ffffff",       //二维码的后景色
	            foreground : "#000000",        //二维码的前景色
	            src: "<?php echo ($logo_url); ?>"             //二维码中间的图片
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
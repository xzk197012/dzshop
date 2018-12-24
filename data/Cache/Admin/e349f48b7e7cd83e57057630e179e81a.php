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
    	
		<ul class="release-tab">
			<li class="radius5"><a href="<?php echo U('Commodity/goods_add_step1',array('goods_common_id'=>$goods_common['goods_common_id']));?>" >1.&nbsp;基本信息</a></li>
			<li class="radius5"><a href="<?php echo U('Commodity/goods_add_step2',array('goods_common_id'=>$goods_common['goods_common_id']));?>" >2.&nbsp;规格设置</a></li>
			<li class="radius5"><a  href="<?php echo U('Commodity/goods_add_step3',array('goods_common_id'=>$goods_common['goods_common_id']));?>" >3.&nbsp;运费设置</a></li>
			<li class="radius5"><a  href="<?php echo U('Commodity/goods_add_step4',array('goods_common_id'=>$goods_common['goods_common_id']));?>" >4.&nbsp;参数设置</a></li>
			<li class="activeRelease radius5">5.&nbsp;发布成功</li>
		</ul>
		<!--内容开始-->
		<div class="iframeCon">
			<ul class="transverse-nav">
				<li class="activeFour"><a href="javascript:;"><span>发布成功</span></a></li>
			</ul>
			<div class="white-bg">
				
				<div class="release-success">
					<div class="success-left left">
						<h1 class="re-success-tit"><i class="success-icon"></i><span class="success-tit-word">发布成功!</span></h1>
						<p class="success-href-box">
							<a target="_blank" href="/wap/goods_detail.html?id=<?php echo $goods_common['goods_common_id'];?>" class="success-href">去店铺查看详情></a>
							<a  href="<?php echo U('Commodity/goods_add_step1',array('goods_common_id'=>$goods_common['goods_common_id'],'edit'=>1));?>" class="success-href">重新编辑刚发布的商品></a>
						</p>
						<div class="success-btn-box">
							<input type="button"  onclick="direct(this)"  rel-href="<?php echo U('Commodity/goods_add_step1');?>"   class="success-btn radius3 marR20 btn1" value="继续发布新商品"/>
							<input type="button"  onclick="direct(this)"   rel-href="<?php echo U('Commodity/goods_list');?>"  class="success-btn radius3 btn1" value="查看上架商品"/>
						</div>
					</div>
					<div class="success-right right">
						<div class="commidity-code-box">
							<img src="<?=$goods_common['qrcode'];?>" alt=""  class="commidity-code"/>
							<p class="commidity-word">扫码查看商品详情</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--内容结束-->
		<script type='text/javascript'>
			function direct(my) {
				var url = $(my).attr('rel-href');
				window.location.href = url;
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
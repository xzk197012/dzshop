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
			<li class="activeRelease radius5">1.&nbsp;基本信息</li>
			<li class="radius5">2.&nbsp;规格设置</li>
			<li class="radius5">3.&nbsp;运费设置</li>
			<li class="radius5">4.&nbsp;参数设置</li>
			<li class="radius5">5.&nbsp;发布成功</li>
		</ul>
		<!--内容开始-->
		<div class="iframeCon">
			<div class="white-bg">
				<h1 class="release-tit boxsizing">步骤一：基本信息</h1>
				<div class="jurisdiction boxsizing">
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>商品名称：</dt>
						<dd class="left text-l">
							<input type="text" class="com-inp1 radius3 boxsizing"/>
							<p class="remind1">这是提示文字</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing">商品卖点：</dt>
						<dd class="left text-l">
							<input type="text" class="com-inp1 radius3 boxsizing"/>
							<p class="remind1">这是提示文字</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>商品价格：</dt>
						<dd class="left text-l">
							<input type="text" class="com-inp1 radius3 boxsizing"/>
							<p class="remind1">这是提示文字</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>商品分类：</dt>
						<dd class="left text-l">
							<input type="text" class="com-inp1 radius3 boxsizing"/>
							<p class="remind1">这是提示文字</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing">商品图片：</dt>
						<dd class="left text-l">
							<!--<textarea type="text" class="com-textarea1 radius3 boxsizing"></textarea>-->
							<ul class="uploadbox boxsizing">
								<li class="left uploadbox-li boxsizing">
									<div class="img-style boxsizing">
										<img src="images/images/uploadimg.png" alt="" class="uploadimg boxsizing"/>
									</div>
									<div class="asDefault-box-cover boxsizing">
									</div>
									<i class="up-icon dele-icon"></i>
									<p class="asDefault boxsizing"><i class="up-icon default-icon"></i>默认主图</p>
									<div class="operationbox boxsizing">
										<p class="upload-p">
											<input type="file" class="upload-inp2" hidefocus="true"/>
											<span class="inp2-cover boxsizing"><i class="up-icon upload-icon"></i>上传</span>
										</p>
									</div>
								</li>
								<li class="left uploadbox-li boxsizing">
									<div class="img-style boxsizing">
										<img src="images/images/uploadimg.png" alt="" class="uploadimg boxsizing"/>
									</div>
									<!--<div class="asDefault-box">
										<p class="asDefault boxsizing"><i class="up-icon default-icon"></i>默认主图</p>
									</div>-->
									<div class="asDefault-box-cover boxsizing">
									</div>
									<i class="up-icon dele-icon"></i>
									<p class="asDefault boxsizing"><i class="up-icon default-icon"></i>默认主图</p>
									<div class="operationbox boxsizing">
										<p class="upload-p">
											<input type="file" class="upload-inp2" hidefocus="true"/>
											<span class="inp2-cover boxsizing"><i class="up-icon upload-icon"></i>上传</span>
										</p>
									</div>
								</li>
								<li class="left uploadbox-li boxsizing">
									<div class="img-style boxsizing">
										<img src="images//uploadimg.png" alt="" class="uploadimg boxsizing"/>
									</div>
									<div class="asDefault-box-cover boxsizing">
									</div>
									<i class="up-icon dele-icon"></i>
									<p class="asDefault boxsizing"><i class="up-icon default-icon"></i>默认主图</p>
									<div class="operationbox boxsizing">
										<p class="upload-p">
											<input type="file" class="upload-inp2" hidefocus="true"/>
											<span class="inp2-cover boxsizing"><i class="up-icon upload-icon"></i>上传</span>
										</p>
									</div>
								</li>
								<li class="left uploadbox-li boxsizing">
									<div class="img-style boxsizing">
										<img src="images//uploadimg.png" alt="" class="uploadimg boxsizing"/>
									</div>
									<div class="asDefault-box-cover boxsizing">
									</div>
									<i class="up-icon dele-icon"></i>
									<p class="asDefault boxsizing"><i class="up-icon default-icon"></i>默认主图</p>
									<div class="operationbox boxsizing">
										<p class="upload-p">
											<input type="file" class="upload-inp2" hidefocus="true"/>
											<span class="inp2-cover boxsizing"><i class="up-icon upload-icon"></i>上传</span>
										</p>
									</div>
								</li>
								<li class="left uploadbox-li boxsizing">
									<!--<div class="img-style boxsizing">
										<img src="images/uploadimg.png" alt="" class="uploadimg boxsizing"/>
									</div>
									<div class="asDefault-box-cover boxsizing">
									</div>
									<i class="up-icon dele-icon"></i>
									<p class="asDefault boxsizing"><i class="up-icon default-icon"></i>默认主图</p>
									<div class="operationbox boxsizing">
										<p class="upload-p">
											<input type="file" class="upload-inp2" hidefocus="true"/>
											<span class="inp2-cover boxsizing"><i class="up-icon upload-icon"></i>上传</span>
										</p>
									</div>-->
									<div class="icon-library-box">
										<i class="icon-library"></i>
										<p class="icon-library-word">素材库</p>
									</div>
									
								</li>
							</ul>
							<p class="remind1 remind-mar">这是提示文字</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>商品详情：</dt>
						<dd class="left text-l">
							<textarea type="text" class="com-textarea1 radius3 boxsizing"></textarea>
							<p class="remind1 remind-mar">这是提示文字</p>
						</dd>
					</dl>
				</div>
				<div class="btnbox3 boxsizing">
					<a class="btn1 radius3 btn3-btnmargin release-nextbtn"><span class="next-remind boxsizing">下一步</span><span class="next-con">运费设置</span></a>
				</div>
			</div>
		</div>
		<!--内容结束-->
		<script type="text/javascript">
			$(function(){
				//图片上传
		 		$('.uploadbox>li').mouseenter(function(){
		 			$(this).find('.asDefault-box-cover').addClass('block');
	 				$(this).find('.dele-icon').addClass('block');
		 			$(this).find('.inp2-cover').addClass('inp2-cover-hover');
		 			//$(this).find('.asDefault').addClass('asdefault-green');
		 		})
		 		$('.uploadbox>li').mouseleave(function(){
		 			$(this).find('.asDefault-box-cover ').removeClass('block');
		 			$(this).find('.dele-icon').removeClass('block');
		 			$(this).find('.inp2-cover').removeClass('inp2-cover-hover');
		 			//$(this).find('.asDefault').addClass('asdefault-green');
		 		})
				$('.uploadbox>li').bind('click',function(){
					//alert('666666666666');
					$(this).find('.asDefault-box-cover').addClass('block2').parents('.uploadbox-li').siblings().find('.asDefault-box-cover').removeClass('block2');
					$(this).find('.asDefault').addClass('asdefault-green').parents('.uploadbox-li').siblings().find('.asDefault').removeClass('asdefault-green');
					$(this).find('.inp2-cover').addClass('inp2-cover-hover2').parents('.uploadbox-li').siblings().find('.inp2-cover').removeClass('inp2-cover-hover2');
					
				})
				
				//商品发布步骤
				$(".release-tab li").click(function(){
					$(this).addClass("activeRelease").siblings().removeClass('activeRelease');
					
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
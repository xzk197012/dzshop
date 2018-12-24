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
    			<style type="text/css">
			.page-upload-list {
				width: 600px;
			}
			.page-upload-list>li {
				width: 100%;
				border: 1px dashed #e0e0e0;
				padding: 10px;
				overflow: hidden;
				zoom: 1;
			}
			.first-upload-left {
				max-width: 160px;
			}
			.first-upload-right {
				min-width: 420px;
				height: 100%;
				min-height: 165px;
				background: #f0f0f0;
			}
		</style>
		<!--<ul class="release-tab">
			<li class="activeRelease radius5">1.&nbsp;基本信息</li>
			<li class="radius5">2.&nbsp;规格设置</li>
			<li class="radius5">3.&nbsp;运费设置</li>
			<li class="radius5">4.&nbsp;参数设置</li>
			<li class="radius5">5.&nbsp;发布成功</li>
		</ul>-->
		<!--内容开始-->
		<div class="iframeCon">
			<div class="white-bg">
				<ul class="page-upload-list">
					<li>
						<ul class="uploadbox boxsizing left first-upload-left">
							<li class="left uploadbox-li boxsizing">
								<div class="img-style boxsizing">
									<img src="images/images/uploadimg.png" alt="" class="uploadimg boxsizing"/>
								</div>
								<div class="asDefault-box-cover boxsizing">
								</div>
								<i class="up-icon dele-icon"></i>
								<div class="operationbox boxsizing">
									<p class="upload-p">
										<input type="file" class="upload-inp2" hidefocus="true"/>
										<span class="inp2-cover boxsizing"><i class="up-icon upload-icon"></i>上传</span>
									</p>
								</div>
							</li>
						</ul>
						<div class="first-upload-right right"></div>
					</li>
					<li>
						<ul class="uploadbox boxsizing left first-upload-left">
							<li class="left uploadbox-li boxsizing">
								<div class="img-style boxsizing">
									<img src="images/images/uploadimg.png" alt="" class="uploadimg boxsizing"/>
								</div>
								<div class="asDefault-box-cover boxsizing">
								</div>
								<i class="up-icon dele-icon"></i>
								<div class="operationbox boxsizing">
									<p class="upload-p">
										<input type="file" class="upload-inp2" hidefocus="true"/>
										<span class="inp2-cover boxsizing"><i class="up-icon upload-icon"></i>上传</span>
									</p>
								</div>
							</li>
						</ul>
						<div class="first-upload-right right"></div>
					</li>
					<li>
						<ul class="uploadbox boxsizing left first-upload-left">
							<li class="left uploadbox-li boxsizing">
								<div class="img-style boxsizing">
									<img src="images/images/uploadimg.png" alt="" class="uploadimg boxsizing"/>
								</div>
								<div class="asDefault-box-cover boxsizing">
								</div>
								<i class="up-icon dele-icon"></i>
								<div class="operationbox boxsizing">
									<p class="upload-p">
										<input type="file" class="upload-inp2" hidefocus="true"/>
										<span class="inp2-cover boxsizing"><i class="up-icon upload-icon"></i>上传</span>
									</p>
								</div>
							</li>
						</ul>
						<div class="first-upload-right right"></div>
					</li>
				</ul>
						
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
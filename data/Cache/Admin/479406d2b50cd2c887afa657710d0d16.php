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
    	<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>列表页</title>
		<link rel="stylesheet" type="text/css" href="/static/admin/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/static/admin/css/index.css"/>
	</head>
	<body>
		<!--<div class="tip-remind">收起提示</div>-->
		<div class="tipsbox">
			<div class="tips boxsizing radius3">
				<div class="tips-titbox">
					<h1 class="tip-tit"><i class="tips-icon-lamp"></i>操作提示</h1>
					<span class="open-span span-icon"><i class="open-icon"></i></span>
				</div>
			</div>
			<ol class="tips-list" id="tips-list">
				<li>1.网站全局基本设置，商城及其他模块相关内容在其各容在其各自栏目设置项其各自栏目设置项内进行操作。</li>
				<li>2.网站全局基本设置，商城及其他模块相关内容在其各自栏目设置项内进行操作。</li>
				<li>3.网站全局基本设置，商城及其他模块相关内容在其各自栏目设置项内在其各自栏目设置项在其各自栏目设置项进行操作。</li>
			</ol>
		</div>
		<div class="iframeCon">
			<div class="white-shadow2">
				<div class="table-titbox">
					<h1 class="table-tit left boxsizing">会员列表</h1>
					<ul class="operation-list left">
						<li class="add-li"><i href="#" class="operation-icon add-icon"></i></li>
						<li class="refresh-li"><i href="#" class="operation-icon refresh-icon"></i></li>
						<li class="export-li"><i href="#" class="operation-icon export-icon"></i></li>
						<li class="dele-li"><i href="#" class="operation-icon op-dele-icon"></i></li>
						<li class="back-li"><i href="#" class="operation-icon op-back-icon"></i></li>
					</ul>
					<div class="search-box1 right">
						<div class="search-boxcon boxsizing radius3 left">
							<div class="search-sele left">
								<input type="text" class="search-inp left boxsizing" value="会员账号" readonly="readonly"/>
								<span class="jtb-span-box boxsizing left"><i class="jtb-span search-jtb-icon"></i></span>
							</div>
							<input type="text" value="1574234234546464" class="search-inp-con boxsizing"/>
						</div>
						<input type="button"  value="搜索" class="search-btn right radius3"/>
						<ul class="search-sele-con radius3 layer-shadow remind-layer">
							<li class="active-sele">会员列表</li>
							<li>会员列表</li>
							<li>会员列表</li>
						</ul>
					</div>
				</div>
				
				<div class="comtable-box boxsizing">
					<table class="com-table">
						<thead>
							<tr>
								<th width="180">操作</th>
								<th width="130">评价人</th>
								<th width="310">评价内容</th>
								<th width="150">评价图片</th>
								<th width="180">评价时间</th>
								<th width="200">评价商品</th>
								<th width="90">商品图片</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="table-iconbox">
										<div class="edit-iconbox left edit-sele radius3 boxsizing">
											<a class="edit-word">查看</a>
										</div>
										<div class="edit-iconbox left edit-sele radius3 boxsizing">
											<a class="edit-word">删除</a>
										</div>
									</div>
								</td>
								<td>用户名字</td>
								<td><div class="td-word">这里是评价内容这里是评价内容这里是评价内容这里是评价内容</div></td>
								<td>
									<div class="evalute-tableImg">
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
									</div>
								</td>
								<td>2016-06-16&nbsp;66:66:66:66</td>
								<td>
									<div class="td-word">这里是是商品名称是商品名称是商品名称是商品名称商品名称</div>
								</td>
								<td>
									<div class="evalute-tableImg">
										<i class="evalute-icon"></i>
									</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="table-iconbox">
										<div class="edit-iconbox left edit-sele radius3 boxsizing">
											<a class="edit-word">查看</a>
										</div>
										<div class="edit-iconbox left edit-sele radius3 boxsizing">
											<a class="edit-word">删除</a>
										</div>
									</div>
								</td>
								<td>用户名字</td>
								<td><div class="td-word">这里是评价内容这里是评价内容这里是评价内容这里是评价内容</div></td>
								<td>
									<div class="evalute-tableImg">
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
									</div>
								</td>
								<td>2016-06-16&nbsp;66:66:66:66</td>
								<td><div class="td-word">这里是是商品名称是商品名称是商品名称是商品名称商品名称</div></td>
								<td>
									<div class="evalute-tableImg">
										<i class="evalute-icon"></i>
									</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="table-iconbox">
										<div class="edit-iconbox left edit-sele radius3 boxsizing">
											<a class="edit-word">查看</a>
										</div>
										<div class="edit-iconbox left edit-sele radius3 boxsizing">
											<a class="edit-word">删除</a>
										</div>
									</div>
								</td>
								<td>用户名字</td>
								<td><div class="td-word">这里是评价内容这里是评价内容这里是评价内容这里是评价内容</div></td>
								<td>
									<div class="evalute-tableImg">
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
									</div>
								</td>
								<td>2016-06-16&nbsp;66:66:66:66</td>
								<td><div class="td-word">这里是是商品名称是商品名称是商品名称是商品名称商品名称</div></td>
								<td>
									<div class="evalute-tableImg">
										<i class="evalute-icon"></i>
									</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td>
									<div class="table-iconbox">
										<div class="edit-iconbox left edit-sele radius3 boxsizing">
											<a class="edit-word">查看</a>
										</div>
										<div class="edit-iconbox left edit-sele radius3 boxsizing">
											<a class="edit-word">删除</a>
										</div>
									</div>
								</td>
								<td>用户名字</td>
								<td><div class="td-word">这里是评价内容这里是评价内容这里是评价内容这里是评价内容</div></td>
								<td>
									<div class="evalute-tableImg">
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
										<i class="evalute-icon"></i>
									</div>
								</td>
								<td>2016-06-16&nbsp;66:66:66:66</td>
								<td><div class="td-word">这里是是商品名称是商品名称是商品名称是商品名称商品名称</div></td>
								<td>
									<div class="evalute-tableImg">
										<i class="evalute-icon"></i>
									</div>
								</td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="pagination boxsizing">
					<div class="eachPage-most left">
						<label for="" class="left">每页最多显示</label>
						<div class="most-box radius3 boxsizing left">
							<input type="text" name=""  value="10" readonly="readonly" class="most-inp left"/>
							<span class="most-span left"><i class="most-icon"></i></span>
						</div>
						<ul class="most-sele-con layer-shadow radius3">
							<li class="most-active-sele">15</li>
							<li>15</li>
							<li>15</li>
							<li>15</li>
						</ul>
					</div>
					<ul class="page-list">
						<li class="first-pagenation"><i class="first-icon"></i></li>
						<li class="prev-pagenation"><i class="prev-icon"></i></li>
						<li class="now-pagenation"><input type="text" value="1" class="now-inp radius3"/></li>
						<li class="all-pagenation">6页</li>
						<li class="next-pagenation"><i class="next-icon"></i></li>
						<li class="last-pagenation"><i class="last-icon"></li>
					</ul>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="/static/admin/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="/static/admin/js/common.js"></script>
		<script type="text/javascript">
			$(function(){
				//添加会员提示
				$('.add-li').mousemove(function(){
					e=arguments.callee.caller.arguments[0] || window.event; 
					remindNeed($('.add-li'),e,'添加会员');
				})
				$('.add-li').mouseout(function(){
			     	$('.tip-remind').remove();
			    });
				$('.refresh-li').mousemove(function(){
					e=arguments.callee.caller.arguments[0] || window.event; 
					remindNeed($('.refresh-li'),e,'刷新');
				})
				$('.refresh-li').mouseout(function(){
			     	$('.tip-remind').remove();
			    });
			    $('.export-li').mousemove(function(){
					e=arguments.callee.caller.arguments[0] || window.event; 
					remindNeed($('.export-li'),e,'导出');
				})
				$('.export-li').mouseout(function(){
			     	$('.tip-remind').remove();
			    });
			    $('.dele-li').mousemove(function(){
					e=arguments.callee.caller.arguments[0] || window.event; 
					remindNeed($('.dele-li'),e,'批量删除');
				})
				$('.dele-li').mouseout(function(){
			     	$('.tip-remind').remove();
			    });
			    $('.back-li').mousemove(function(){
					e=arguments.callee.caller.arguments[0] || window.event; 
					remindNeed($('.back-li'),e,'返回');
				})
				$('.back-li').mouseout(function(){
			     	$('.tip-remind').remove();
			    });
			    $('.evalute-icon').mousemove(function(){
			    	e=arguments.callee.caller.arguments[0] || window.event; 
			    	imgPreview($('.evalute-icon'));
			    })
			    $('.evalute-icon').mouseout(function(){
			    	$('.previewdiv').remove();
			    })
			    
			    
			    
			    
			    
			    
			    
			    
				Iframe();
					
			})
		</script>
	</body>
</html>

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
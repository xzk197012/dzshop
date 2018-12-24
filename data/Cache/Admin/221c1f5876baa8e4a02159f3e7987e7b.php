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
			<ul class="transverse-nav">
				<li class="activeFour"><a href="javascript:;"><span>商城设置</span></a></li>
				<li><a href="javascript:;"><span>图片设置</span></a></li>
				<li><a href="javascript:;"><span>运费设置</span></a></li>
			</ul>
			<!--{
				选项卡注意事项：
				1，把 white-shadow tab-content 或者 white-shadow2 类去掉改为white-bg
				2，复制nav.php下的 class="option" 放置到<div class="table-titbox"> 下面
			}-->
			<div class="white-bg">
				<div class="table-titbox">
					<div class="option">
						<h1 class="table-tit left boxsizing">会员列表</h1>
						<ul class="operation-list left">
							<li class="add-li"><a href="#"><span><i href="#" class="operation-icon add-icon"></i></span></a></li>
							<li class="refresh-li"><a href="#"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
							<li class="export-li"><a href="#"><span><i href="#" class="operation-icon export-icon"></i></span></a></li>
							<li class="dele-li"><a href="#"><span><i href="#" class="operation-icon op-dele-icon"></i></span></a></li>
							<li class="back-li"><a href="#"><span><i href="#" class="operation-icon op-back-icon"></i></span></a></li>
							<li class="creat-li"><a href="#"><span><i href="#" class="operation-icon creat-icon"></i></span></a></li>
							<li class="clear-li"><a href="#"><span><i href="#" class="operation-icon cache-icon"></i></span></a></li>
						</ul>
					</div>
					<form action="" method="get" id='formid'>
						<div class="search-box1 right">
							<div class="search-boxcon boxsizing radius3 left">
								<select>
									<option value=1>申请编号</option>
									<option value=2>会员账号</option>
									<option value=3>管理员</option>
								</select>
								<input type="text" value="1574234234546464" class="search-inp-con boxsizing"/>
							</div>
							<input type="button"  value="搜索" class="search-btn right radius3"/>
						</div>
					</form>
				</div>
				
				<div class="comtable-box boxsizing">
					<table class="com-table">
						<thead>
							<tr>
								<th width="100" class="text-l">
									<div class="button-holder">
										<p class="radiobox table-radioMar"><input type="checkbox" id="radio-1" name="radio-1-set" class="regular-radio" /><label for="radio-1"></label><span class="radio-word">全选</span></p>
									</div>
								</th>
								<th width="200">操作</th>
								<th width="180">会员账号</th>
								<th width="180">注册时间</th>
								<th width="280">微信绑定</th>
								<th width="120">积分</th>
								<th width="120">状态</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-l">
									<div class="button-holder">
										<p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-1" name="radio-1-set" class="regular-radio" /><label for="radio-1-1"></label><span class="radio-word"></span></p>
									</div>
								</td>
								<td>
									<div class="table-iconbox">
										<div class="edit-iconbox left edit-sele marginR10">
											<a class="edit-word table-icon-a"><i class="table-com-icon table-dele-icon"></i><span class="gap">删除</span></a>
										</div>
										<div class="table-icon left setting-sele-par">
											<div class="setting-sele left radius3 boxsizing">
												<span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap">设置</span></span>
												<span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
											</div>
											<ul class="setting-sele-con remind-layer">
												<li class="active-sele">会员列表</li>
												<li>会员列表</li>
												<li>会员列表</li>
											</ul>
										</div>
									</div>
								</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>
									<div class="state-btn yes-state">
										<i class="yes-icon"></i>
										<span>开启</span>
									</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td class="text-l">
									<div class="button-holder">
										<p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-2" name="radio-1-set" class="regular-radio" /><label for="radio-1-2"></label><span class="radio-word"></span></p>
									</div>
								</td>
								<td>
									<div class="table-iconbox">
										<div class="edit-iconbox left edit-sele marginR10">
											<a class="edit-word table-icon-a"><i class="table-com-icon table-setting-icon"></i><span class="gap">设置</span></a>
										</div>
										<div class="table-icon left setting-sele-par">
											<div class="setting-sele left radius3 boxsizing">
												<span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap">设置</span></span>
												<span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
											</div>
											<ul class="setting-sele-con remind-layer">
												<li class="active-sele">会员列表</li>
												<li>会员列表</li>
												<li>会员列表</li>
											</ul>
										</div>
									</div>
								</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>
									<div class="state-btn no-state">
										<i class="no-icon"></i>
										<span>关闭</span>
									</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td class="text-l">
									<div class="button-holder">
										<p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-3" name="radio-1-set" class="regular-radio" /><label for="radio-1-3"></label><span class="radio-word"></span></p>
									</div>
								</td>
								<td>
									<div class="table-iconbox">
										<div class="edit-iconbox left edit-sele marginR10">
											<a class="edit-word table-icon-a"><i class="table-com-icon table-look-icon"></i><span class="gap">查看</span></a>
										</div>
										<div class="table-icon left setting-sele-par">
											<div class="setting-sele left radius3 boxsizing">
												<span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap">设置</span></span>
												<span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
											</div>
											<ul class="setting-sele-con remind-layer">
												<li class="active-sele">会员列表</li>
												<li>会员列表</li>
												<li>会员列表</li>
											</ul>
										</div>
									</div>
								</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>
									<div class="state-btn no-state">
										<i class="no-icon"></i>
										<span>关闭</span>
									</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td class="text-l">
									<div class="button-holder">
										<p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-4" name="radio-1-set" class="regular-radio" /><label for="radio-1-4"></label><span class="radio-word"></span></p>
									</div>
								</td>
								<td>
									<div class="table-iconbox">
										<div class="edit-iconbox left edit-sele marginR10">
											<a class="edit-word table-icon-a"><i class="table-com-icon table-refund-icon"></i><span class="gap">退款</span></a>
										</div>
										<div class="table-icon left setting-sele-par">
											<div class="setting-sele left radius3 boxsizing">
												<span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap">设置</span></span>
												<span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
											</div>
											<ul class="setting-sele-con remind-layer">
												<li class="active-sele">会员列表</li>
												<li>会员列表</li>
												<li>会员列表</li>
											</ul>
										</div>
									</div>
								</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>
									<div class="state-btn no-state">
										<i class="no-icon"></i>
										<span>关闭</span>
									</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td class="text-l">
									<div class="button-holder">
										<p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-5" name="radio-1-set" class="regular-radio" /><label for="radio-1-5"></label><span class="radio-word"></span></p>
									</div>
								</td>
								<td>
									<div class="table-iconbox ">
										<div class="edit-iconbox left edit-sele marginR10">
											<a class="edit-word table-icon-a"><i class="table-com-icon table-handle-icon"></i><span class="gap">处理</span></a>
										</div>
										<div class="table-icon left setting-sele-par">
											<div class="setting-sele left radius3 boxsizing">
												<span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap">设置</span></span>
												<span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
											</div>
											<ul class="setting-sele-con remind-layer">
												<li class="active-sele">会员列表</li>
												<li>会员列表</li>
												<li>会员列表</li>
											</ul>
										</div>
									</div>
								</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>
									<div class="state-btn no-state">
										<i class="no-icon"></i>
										<span>关闭</span>
									</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td class="text-l">
									<div class="button-holder">
										<p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-6" name="radio-1-set" class="regular-radio" /><label for="radio-1-6"></label><span class="radio-word"></span></p>
									</div>
								</td>
								<td>
									<div class="table-iconbox">
										<div class="edit-iconbox left edit-sele boxsizing marginR10">
											<a class="edit-word table-icon-a"><i class="table-com-icon table-edit-icon"></i><span class="gap">编辑</span></a>
										</div>
										<div class="table-icon left setting-sele-par">
											<div class="setting-sele left radius3 boxsizing">
												<span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap">设置</span></span>
												<span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
											</div>
											<ul class="setting-sele-con remind-layer">
												<li class="active-sele">会员列表</li>
												<li>会员列表</li>
												<li>会员列表</li>
											</ul>
										</div>
									</div>
								</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>
									<div class="state-btn no-state">
										<i class="no-icon"></i>
										<span>关闭</span>
									</div>
								</td>
								<td></td>
							</tr>
							<tr>
								<td class="text-l">
									<div class="button-holder">
										<p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-6" name="radio-1-set" class="regular-radio" /><label for="radio-1-6"></label><span class="radio-word"></span></p>
									</div>
								</td>
								<td>
									<div class="table-iconbox">
										<div class="edit-iconbox left edit-sele boxsizing marginR10">
											<a class="edit-word table-icon-a"><i class="table-com-icon table-review-icon"></i><span class="gap">审核</span></a>
										</div>
										<div class="table-icon left setting-sele-par">
											<div class="setting-sele left radius3 boxsizing">
												<span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap">设置</span></span>
												<span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
											</div>
											<ul class="setting-sele-con remind-layer">
												<li class="active-sele">会员列表</li>
												<li>会员列表</li>
												<li>会员列表</li>
											</ul>
										</div>
									</div>
								</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>Data</td>
								<td>
									<div class="state-btn no-state">
										<i class="no-icon"></i>
										<span>关闭</span>
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
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>SHOPDZ商城</title>
		<meta name="keywords" content="SHOPDZ" />
		<link rel="stylesheet" type="text/css" href="/static/admin/css/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/static/admin/css/index.css"/>
		 <script type="text/javascript" src="/static/admin/js/jquery-1.9.1.min.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<div class="head-box">
					<div class="logobox left">
						<img src="/static/admin/images/logo.png" alt="logo" class="logo"/>
					</div>
					<div class="headbox-r left">
						<ul class="person-box left">
							<li><img src="/static/admin/images/person.png" class="per-icon2"/></li>
							<li class="name"><?=$admin_user['username'];?></li>
							<li><?=$admin_user['group_text'];?></li>
						</ul>
						<ul class="setting-list">
							<li class="li-icon posiR" id="plusnum" tips='待处理事项' ><a href="javascript:;" class="message-remind"></a>
							
							<span class="message-num radius10" <?php if(empty($countdata['plusnum'])) {?> style="display:none" <?php }?> ><?php echo $countdata['plusnum']; ?></span></li>
							<li class="li-icon" tips='更新缓存'><a target="myIframeName" href="<?=U('/Setting/clean_cache')?>" class="clear-cache thenewurl"></a></li>
							<li class="li-icon" tips='商城首页'><a target='_blank' href="<?=C("WAP_URL"); ?>" class="first-page"></a></li>
							<li class="li-icon" tips='修改密码'><a target="myIframeName" href="<?=U('/System/info')?>" class="change-password"></a></li>
							<li class="li-icon" tips='退出'><a href="<?=U('/Login/logout')?>" class="sign-out border-none"></a></li>
							<!--<li style="background: url(images/setting1.png) no-repeat center center;width: 46px;"></li>-->
						</ul>
					</div>
				</div>
			<div class="sidebar-box">
				<div class="first-nav left">
					<ul class="main-nav">
						<!--<li class="activeOne"><a href="d.html" target="myIframeName"><i class="sidebar-icon sidebar-icon-survey"></i>概况</a></li>-->
						<?php  foreach($menu as $k => $v) { ?>
						<li class="main_<?=$k;?> main-nav-li ">
							<a href="javascript:;" target="myIframeName"><i class="sidebar-icon <?=$v['menu_icon']; ?>"></i><?=$v['menu_name']; ?></a>
							<ul class="second-nav secondary">
								<?php foreach($v['son'] as $sk => $sv) { ?>
								<li class='secondary-li secondary_<?=$sv['name_el'];?>'><a href="<?=$sv['url'];?>" target="myIframeName"><?=$sv['name'];?></a></li>
								<?php }?>
							</ul>
						</li>
					<?php }?>
					</ul>
				</div>
			</div>
			<div class="content-box">
				<div class="content-iframe">
					<iframe src="" id="myIframeId" name="myIframeName" width="100%" frameborder="0" border="0"  scrolling="no" class="iframe-con"></iframe>
				</div>
				<div class="myfoot">
					@2012-2016 Powered By ShopDZ&nbsp;&nbsp;&nbsp; <?php echo($license);?>
				</div>	
			</div>
		</div>
		
		<div class="cover none"></div>
		<div class="alert itemAlert radius3 none">
			<h1 class="items-tit boxsizing">待处理事项</h1>
			<i class="close-icon"></i>
			<ul class="item-list">
			<?php foreach($countdata['list'] as $v){ ?>
				<li>
					<span class="category-tit left"><?=$v['name']?> </span>
					<span class="category-con left"><?=$v['link']?> </span>
				</li>
			<?php } ?>
			</ul>
		</div>
		<script type="text/javascript" src="/static/admin/js/common.js"></script>
	<!-- 	<script type="text/javascript" src="/static/admin/js/remindMove.js"></script> -->
		<script type="text/javascript">
			$(function(){  //class="activeOne"
			
				$('.main-nav li:first').addClass('activeOne');
				$('.main-nav li:first ul li:first').addClass('activeThree');
				$('#myIframeId').attr('src',$('.main-nav li:first ul li:first').find('a').attr('href'));
			    //导航
				$('.main-nav-li').bind('click',function(event){
					$(this).addClass("activeOne").siblings().removeClass("activeOne");//removeClass就是删除当前其他类；只有当前对象有addClass("selected")；siblings()意思就是当前对象的同级元素，removeClass就是删除； 
					$(this).find("ul").show().parents('li').siblings().find("ul").hide();
					$(this).find('ul li').removeClass('activeThree');
					$(this).find('ul li:first').addClass('activeThree');
					$('#myIframeId').attr('src',$(this).find('ul li:first-child').find('a').attr('href'));
					 event.stopPropagation();
				});
				$(".main-nav").bind("click",function(event) {
					event.stopPropagation();
				})
				$(".main-nav .secondary-li").bind("click",function(event){
					$(this).addClass("activeThree").siblings().removeClass('activeThree');
					 event.stopPropagation();
				})
				$('#plusnum').click(function(){
					$('.alert').removeClass('none');
					$('.cover').removeClass('none');
				});
				$('.thenewurl').click(function(){
					$('.alert').addClass('none');
					$('.cover').addClass('none');
					$('#myIframeId').attr('src',$(this).attr('uri'));
				})
			});
	$(function(){
				$('.setting-list>li').each(function() {
					var _this = this;
					$(_this).bind(
						{
							mousemove:function(){
								e=arguments.callee.caller.arguments[0] || window.event; 
								tip = $(_this).attr('tips');
								remindNeed($(_this),e,tip);
							},
							mouseout:function() {
								$('.tip-remind').remove();
							}
						}
					);
				});
			}); 
		</script>
	</body>
</html>
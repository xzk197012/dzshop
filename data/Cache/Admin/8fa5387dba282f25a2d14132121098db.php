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
<div class="tipsbox radius3">
    <div class="tips boxsizing radius3">
        <div class="tips-titbox">
            <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
            <span class="open-span span-icon"><i class="open-icon"></i></span>
        </div>
    </div>
    <ol class="tips-list" id="tips-list">
        <li>1.设置微信菜单，可进行编辑菜单或添加新菜单。</li>
		<li> 2.微信登录地址为：<?php echo $wxlogin?></li>
    </ol>
</div>
<div class="iframeCon">
<div class="iframeMain">
	<ul class="transverse-nav">
		<li class="activeFour"><a href="javascript:;"><span><?php echo $type == 'edit'? '编辑菜单':'新增菜单'; ?></span></a></li>
	</ul>
	<div class="white-bg ">
			<div class="tab-conbox">
			<form method="post" class="form-horizontal" name="memberForm" id="memberForm" action="<?php echo U('Wx/menuedit');?>" enctype="multipart/form-data">
						<input type="hidden" name="id" value="<?php echo ($menu["id"]); ?>"/>
						<input type="hidden" value="submit" name="form_submit">
			<div class="jurisdiction boxsizing">
				<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>菜单名称：</dt>
						<dd class="left text-l">
							<input type="text" name="name" class="com-inp1 radius3 boxsizing"  value="<?php echo ($menu["name"]); ?>" localrequired=""/>
							<p class="remind1">请输入菜单名称，菜单名称不能为空。</p>

					</dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><span class="redstar">*</span>上级菜单：</dt>
					<dd class="left text-l">

						<div class="search-boxcon boxsizing radius3 borderR-none" style="display: inline-block">
							<select name="lid" id="refundsearch">

								<?php if($menu["lid"] == 0 ): ?><option value="0" selected="selected">一级菜单</option>
									<?php else: ?>
									<option value="0">一级菜单</option><?php endif; ?>

								<?php if(is_array($menu_main)): foreach($menu_main as $key=>$main): if($main["id"] == $menu["lid"] ): ?><option value="<?php echo ($main["id"]); ?>" selected="selected"><?php echo ($main["name"]); ?></option>
										<?php else: ?>
										<option value="<?php echo ($main["id"]); ?>"><?php echo ($main["name"]); ?></option><?php endif; endforeach; endif; ?>
							</select>

						</div>

						<p class="remind1">选择上级菜单，一级菜单为主菜单。</p>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><span class="redstar">*</span>触发类型：</dt>
					<div class="search-boxcon boxsizing radius3 borderR-none" style="display: inline-block">
					<select name="type" id="menutype">
						<?php if($menu["type"] == 'view'): ?><option value="view" selected="selected">链接</option>
							<option value="click" >关键词</option>
							<?php else: ?>
							<option value="view" >链接</option>
							<option value="click"  selected="selected">关键词</option><?php endif; ?>
						</foreach>

					</select>
				</div>
				</dl>
				<dl class="juris-dl boxsizing" id="menu_url"<?php if($menu["type"] == 'click'): ?>style="display: none"<?php endif; ?>>
					<dt class="left text-r boxsizing"><span class="redstar">*</span>链接URL：</dt>
					<dd class="left text-l">
						<input type="text" name="url"  class="com-inp1 radius3 boxsizing" value="<?php echo ($menu["url"]); ?>"  id="wxurl" <?php if($menu["type"] == 'view'): ?>localrequired=""<?php endif; ?>/>
						<p class="remind1">触发事件为链接必填，请填写全地址。例如：http://www.baidu.com</p>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing" id="menu_keywords" <?php if($menu["type"] == 'view'): ?>style="display: none"<?php endif; ?>>
					<dt class="left text-r boxsizing"><span class="redstar">*</span>关键词：</dt>
					<dd class="left text-l">
						<input type="text" name="keywords" value="<?php echo ($menu["keywords"]); ?>" class="com-inp1 radius3 boxsizing"  id="wxkeywords" <?php if($menu["type"] == 'click'): ?>localrequired=""<?php endif; ?>/>
						<p class="remind1">触发事件为关键词，请填写已在关键词管理里面创建好的关键词。</p>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing ">
					<dt class="left text-r boxsizing">排序：</dt>
					<dd class="left text-l">
						<input type="text" name="order" value="<?php echo ($menu["displayorder"]); ?>" class="com-inp1 radius3 boxsizing"/>
					</dd>
				</dl>
				</div>

				<div class="btnbox3 boxsizing">
					<a type="button" id="menu_submit" class="btn1 radius3 marginT10  btn3-btnmargin"><?php echo (L("submit_btn")); ?></a>
					<a class="btn1 radius3 marginT10" href="<?php echo U('Wx/menuOp');?>">返回列表</a>
				</div>
				
		</form>
		</div>
	</div>
</div>
</div>
	<script type="text/javascript">
       $('#menu_submit').click(function(){
            flag=checkrequire('memberForm');
            if(!flag){
                $('#memberForm').submit();
            }
        });
		$(function(){
			//simulateSelect('menutype',100,showtype);
			$('#menutype').change(showtype);

		});
		var showtype = function (){
				if($("#menutype").val() == 'click'){
					$("#wxkeywords").attr("localrequired","");
					$("#wxurl").removeAttr("localrequired");

					$("#menu_keywords").show();
					$("#menu_url").hide();
				}else{
					$("#wxurl").attr("localrequired","");
					$("#wxkeywords").removeAttr("localrequired");
					$("#menu_keywords").hide();
					$("#menu_url").show();

				}
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
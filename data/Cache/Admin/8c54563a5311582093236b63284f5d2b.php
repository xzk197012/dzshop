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
		<li> 1.关键词不能重复添加。</li>
		<li> 2.关键词删除后为彻底删除。</li>
		<li> 2.关键词不启用微信用户触发后不能返回内容</li>
	</ol>
</div>
<div class="iframeCon">
<div class="iframeMain">
	<ul class="transverse-nav">
		<li class="activeFour"><a href="javascript:;"><span>关键词设置</span></a></li>
	</ul>
	<div class="white-bg ">
		<div class="tab-conbox">
			<form method="post" class="form-horizontal" name="memberForm" id="memberForm" action="<?php echo U('Wx/keywordsedit');?>" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo ($keywords["id"]); ?>"/>
				<input type="hidden" value="submit" name="form_submit">
				<div class="jurisdiction boxsizing">
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>关键词：</dt>
						<dd class="left text-l">
							<input type="text" name="keywords" class="com-inp1 radius3 boxsizing"  value="<?php echo ($keywords["keyword"]); ?>" localrequired=""/>
							<p class="remind1">请输入关键词内容。</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>回复类型：</dt>
						<div class="search-boxcon boxsizing radius3 borderR-none" style="display: inline-block">
							<select name="isimg" id="menutype">
								<?php if($keywords["isimg"] == '0'): ?><option value="0" selected="selected">文本回复</option>
									<option value="1" >图文回复</option>
									<?php else: ?>
									<option value="0" >文本回复</option>
									<option value="1"  selected="selected">图文回复</option><?php endif; ?>
								</foreach>
							</select>
						</div>
					</dl>
					<dl class="juris-dl boxsizing" id="keywords_text"<?php if($keywords["isimg"] == '1'): ?>style="display: none"<?php endif; ?>>
					<dt class="left text-r boxsizing"><span class="redstar">*</span>回复内容：</dt>
					<dd class="left text-l">
						<textarea type="text" name="content" id = "wxkeywords" class="com-textarea1 radius3 boxsizing"   <?php if($keywords["isimg"] == '0'): ?>localrequired=""<?php endif; ?>><?php echo ($keywords["content"]); ?></textarea>
						<p class="remind1">分享描述，将显示在前台微信分享中</p>
					</dd>
					</dl>
					<dl class="juris-dl boxsizing" id="keywords_img" <?php if($keywords["isimg"] == '0'): ?>style="display: none"<?php endif; ?>>
					<dt class="left text-r boxsizing"><span class="redstar">*</span>素材选择：</dt>
					<dd class="left text-l">
						<div class="search-boxcon boxsizing radius3 borderR-none" style="display: inline-block">
							<select name="tid" id="refundsearch" <?php if($keywords["isimg"] == '1'): ?>localrequired=""<?php endif; ?>>
							<?php if(empty($img_text)): ?><option value="1">暂无素材</option>
							<?php else: ?>
								<?php if(is_array($img_text)): foreach($img_text as $key=>$imgval): if($imgval["tid"] == $keywords["tid"] ): ?><option value="<?php echo ($imgval["tid"]); ?>" selected="selected"><?php echo ($imgval["modename"]); ?></option>
									<?php else: ?>
										<option value="<?php echo ($imgval["tid"]); ?>" ><?php echo ($imgval["modename"]); ?></option><?php endif; endforeach; endif; endif; ?>
							</select>
						</div>
						<p class="remind1">素材不能为空</p>
					</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>是否开启：</dt>
						<dd class="left text-l">
							<div class="switch-box">
								<input type="checkbox" name="states" id="switch-radio" class="switch-radio" <?php if($keywords['states']): ?>checked="true"<?php endif; ?>/>
								<span class="switch-half switch-open">ON</span>
								<span class="switch-half switch-close close-bg">OFF</span>
							</div>
							<p class="remind1">开启后微信分享使用配置信息</p>
						</dd>
					</dl>
				</div>
				<div class="btnbox3 boxsizing">
					<!-- <input type="submit" class="btn1 radius3 btn3-btnmargin left"  value="确认提交"> -->
					<a type="button" id="menu_submit" class="btn1 radius3 marginT10  btn3-btnmargin"><?php echo (L("submit_btn")); ?></a>
					<a class="btn1 radius3 marginT10" href="<?php echo U('Wx/keywordsOp');?>">返回列表</a>
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
		if($("#menutype").val() == '0'){

			$("#wxkeywords").attr("localrequired","");
			$("#refundsearch").removeAttr("localrequired");

			$("#keywords_text").show();
			$("#keywords_img").hide();
		}else{
			$("#refundsearch").attr("localrequired","");
			$("#wxkeywords").removeAttr("localrequired");
			$("#keywords_text").hide();
			$("#keywords_img").show();
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
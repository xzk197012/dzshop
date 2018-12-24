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
    	
        <div class="tipsbox radius3">
            <div class="tips boxsizing radius3">
                <div class="tips-titbox">
                    <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
                    <span class="open-span span-icon"><i class="open-icon"></i></span>
                </div>
            </div>
            <ol class="tips-list" id="tips-list">
                <li>1.清除数据缓存。</li>
                <li>2.什么都不选择就代表全选。</li>
            </ol>
        </div>
        <div class="iframeCon">
		<div class="iframeMain">
			<ul class="transverse-nav">
                <li class="activeFour"><a href="javascript:;"><span>清理缓存</span></a></li>
            </ul>
            <div class="white-bg">
                <form method="post" class="form-horizontal" id="clean_form" name="settingForm" action="<?php echo U('Admin/Setting/clean_cache');?>" enctype="multipart/form-data">
                    <div class="express-tablebox">
                        <table class="express-table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox-holder express-checkbox">
                                            <p class="radiobox checkbox-box"><input type="checkbox" id="radio-1-1" name="radio-1-set" class="regular-radio" checked="checked"/><label for="radio-1-1"></label><span class="radio-word">选择所有</span></p>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox-holder left express-checkbox">
                                            <p class="radiobox checkbox-box"><input type="checkbox" value="get_special_item" name="cleans[]" id="radio-1-2" class="regular-radio"><label for="radio-1-2"></label><span class="radio-word">商城首页</span></p>
                                        </div>
                                        <div class="checkbox-holder left express-checkbox">
                                            <p class="radiobox checkbox-box"><input type="checkbox" value="web_setting" name="cleans[]" id="radio-1-3" class="regular-radio"><label for="radio-1-3"></label><span class="radio-word">商城配置</span></p>
                                        </div>
                                        <div class="checkbox-holder left express-checkbox">
                                            <p class="radiobox checkbox-box"><input type="checkbox" value="get_all_category" name="cleans[]" id="radio-1-4" class="regular-radio"><label for="radio-1-4"></label><span class="radio-word">商品分类</span></p>
                                        </div>
                                        <div class="checkbox-holder left express-checkbox">
                                            <p class="radiobox checkbox-box"><input type="checkbox" value="spu" name="cleans[]" id="radio-1-5" class="regular-radio"><label for="radio-1-5"></label><span class="radio-word">商品详情</span></p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btnbox2 boxsizing">
                        <!-- <input type="submit" class="btn1 radius3 btn2-btnmargin"  value="确认提交"> -->
                        <a type="button" id="clern_cache" class="btn1 radius3 marginT10 btn2-btnmargin"><?php echo (L("submit_btn")); ?></a>
                    </div>
                </form>
            </div>
        </div>
        </div>
<script type="text/javascript">
    $('#clern_cache').click(function(){
       $('#clean_form').submit();
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
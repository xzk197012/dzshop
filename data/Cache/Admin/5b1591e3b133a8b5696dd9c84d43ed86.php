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
                    <h1 class="tip-tit"><i class="tips-icon-lamp"></i>拼团设置</h1>
                    <span class="open-span span-icon"><i class="open-icon"></i></span>
                </div>
            </div>
            <ol class="tips-list" id="tips-list">
                <li>1.如果上传视频请上传MP4格式视频</li>
                <li>2.上传视频最好不要超过30M</li>
            </ol>
        </div
        <!--内容开始-->
        <div class="iframeCon">
		<div class="iframeMain">
			  <ul class="transverse-nav">
				<li ><a href="<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'group'));?>"><span>活动列表</span></a></li>
				<li ><a href="<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'grouplist'));?>"><span>开团列表</span></a></li>
				<li ><a href="<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'joinlist'));?>"><span>参团列表</span></a></li>
				<li class="activeFour"><a href="<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'groupset'));?>"><span>拼团设置</span></a></li>
			</ul>
            <div class="white-bg ">
                <div class="tab-conbox">
                    <form method="post" class="form-horizontal" action="<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'groupset'));?>" enctype="multipart/form-data" id="article_setting">
                    <input name="form_submit"   type="hidden"  value="submit">
                    <input name="id"   type="hidden"  value="<?php echo ($data["article_id"]); ?>">
                        <div class="jurisdiction boxsizing">
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar"></span>拼团封面：</dt>
                                <dd class="left text-l">
                                    <div class="input-group">
                                        <span class="previewbtn"><img src="/static/admin/images/imgGray.png" class="viewimgbtn1 viewimg view_img" url="http://www.tqshq.com/data/Attach/<?php echo ($group_set['group_img']); ?>" id="logo_img"/></span>
                                        <input type="text" name="shop_logo" id="logotext" value="<?php echo ($group_set['group_img']); ?>" class="form-control upload-inp com-inp1 radius3 boxsizing" >
                                        <input type="file"   id="shop_logo" class="form-control" style="display: none;">
                                        <span class="input-group-btn left">
                                            <input type="button"  value="选择文件" class="upload-btn search-btn" id="up" onclick="$('input[id=shop_logo]').click();"/>
                                        </span>
                                    </div>
                                    <p class="remind1">请使用宽高比为4:1的jpg/gif/png格式的图片。建议尺寸104*26。</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar">*</span>拼团玩法：</dt>
                                <dd class="left text-l">
                                    <script id="desc" name="article_content" type="text/plain"><?php echo htmlspecialchars_decode(stripslashes($group_set['group_content']));?></script>
        <script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
         <script type="text/javascript" src="/static/ueditor/ueditor.all.js"></script>
                                    <script type="text/javascript">
                                        var ue = UE.getEditor('desc',{
                                            'initialFrameWidth':"100%",
                                            'initialFrameHeight':500,
                                            'zIndex':1,
                                            'toolbars':[[
                            'fullscreen', 'source', '|', 'undo', 'redo', '|',
                            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
                            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
                            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
                            'directionalityltr', 'directionalityrtl', 'indent', '|',
                            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
                            'link', 'unlink', '|', 'simpleupload', 'insertvideo',
                                            ]],
                                            });
                                    </script>
                                    <p class="remind1"><?php echo (L("article_content_tips")); ?></p>
                                </dd>
                            </dl>
                        </div>
                        <div class="btnbox3 boxsizing">
                            <a type="button" id="article_submit" class="btn1 radius3 marginT10  btn3-btnmargin" href="javascript:;"><?php echo (L("submit_btn")); ?></a>
                            <a type="button" class="btn1 radius3 marginT10" href="<?php echo U('Cms/article_list');?>"><?php echo (L("return_list")); ?></a>
                        </div>
                        </form>
                </div>
            </div>
        </div>  
       </div>  
        <!--内容结束-->
<div id="append_parent"></div>
<script type="text/javascript">
    $(function(){
        var uploader2 = new plupload.Uploader({
            runtimes: 'html5,html4,flash,silverlight',
            browse_button: 'shop_logo',
            url: "<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'upLogoFile'));?>",
            filters: {

                mime_types: [{
                    title: "Image files",
                    extensions: "jpg,gif,png,jpeg",
                    prevent_duplicates: true
                }]
            },
            init: {
                PostInit: function () {
                },
                FilesAdded: function (up, files) {
                    uploader2.start();
                },
                UploadProgress: function (up, file) {
                    //alert('这里可以做进度条');
                },
                FileUploaded: function (up, file, res) {
                    var resobj = eval('(' + res.response + ')');
                    if(resobj.status){
                        $("#logotext").val(resobj.data);
                        var url = "http://www.tqshq.com/data/Attach/"+resobj.data;
                        $("#logo_img").attr("url",url);
                    }
                },
                Error: function (up, err) {
                    alert('err');
                }
            }

        });
        uploader2.init();
    })
    $('#article_submit').click(function(){
        flag=checkrequire('article_setting');
        if(!flag){
            $('#article_setting').submit();
        }
    });
    $("#logo_img").posi({default_img:"/static/img/logo.png"});
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
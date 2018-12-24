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
    	<!--内容开始-->
<div class="tipsbox radius3">
    <div class="tips boxsizing radius3">
        <div class="tips-titbox">
            <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
            <span class="open-span span-icon"><i class="open-icon"></i></span>
        </div>
    </div>
   	<ol class="tips-list"><?php echo (L("memberadd_tips_content")); ?></ol>
</div>
<div class="iframeCon">
<div class="iframeMain">
	<ul class="transverse-nav">
		<li class="activeFour"><a  href="#"><span><?php if($info["member_id"] == ''): echo (L("member_add")); else: echo (L("member_edit")); ?>&nbsp;&nbsp;<?php echo ($info["member_mobile"]); endif; ?></span></a></li>
	</ul>
	<div class="white-bg">
		<div class="tab-conbox">
		<form method="post" class="form-horizontal" name="memberForm" id="memberForm" action="<?php echo U('Member/add',array('area_id',$info.area_id));?>" enctype="multipart/form-data">
<input type="hidden" name="member_id" value="<?php echo ($info["member_id"]); ?>"/>
<input type="hidden" value="submit" name="form_submit">
			<div class="jurisdiction boxsizing">
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><?php echo (L("member_name")); ?>：</dt>
					<dd class="left text-l">
					<?php if($info["member_id"] == ''): ?><input type="text" name="member_username" class="com-inp1 radius3 boxsizing" localrequired="" value="<?php echo ($info["member_username"]); ?>" readonly />
						<p class="remind1"><?php echo (L("member_name_tips")); ?></p>
					<?php else: ?>
			            <input name="member_username" class="form-control" type="hidden" value="<?php echo ($info["member_username"]); ?>">
			            <p class="form-control-static"><?php echo ($info["member_username"]); ?></p><?php endif; ?>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><?php echo (L("member_mobile")); ?>：</dt>
					<dd class="left text-l">
						<input type="text" name="member_mobile" class="com-inp1 radius3 boxsizing"   value="<?php echo ($info["member_mobile"]); ?>" />
						<p class="remind1"><?php echo (L("member_mobile_tips")); ?></p>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><?php echo (L("member_psw")); ?>：</dt>
					<dd class="left text-l">
						<input type="password" name="member_passwd" class="com-inp1 radius3 boxsizing" <?php if (!$info['member_id']){ ?>localrequired=""<?php } ?>/>
						<p class="remind1"><?php echo (L("member_psw_tips")); ?></p>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><?php echo (L("member_psw_again")); ?>：</dt>
					<dd class="left text-l">
						<input type="password" name="confirm_password" class="com-inp1 radius3 boxsizing" <?php if (!$info['member_id']){ ?>localrequired=""<?php } ?>/>
						<p class="remind1"><?php echo (L("member_psw_again_tips")); ?></p>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><?php echo (L("allow_login")); ?>：</dt>
					<dd class="left text-l">

                        <div class="switch-box">
                            <input type="checkbox" name="member_state" id="switch-radio" class="switch-radio" <?php if($info['member_state']): ?>checked="true"<?php endif; ?>/>
                            <span class="switch-half switch-open"><?php echo (L("yes")); ?></span>
                            <span class="switch-half switch-close close-bg"><?php echo (L("no")); ?></span>
                        </div>
                    </dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><?php echo (L("nick_name")); ?>：</dt>
					<dd class="left text-l">
						<input type="text" name="member_truename" value="<?php echo ($info["member_truename"]); ?>" class="com-inp1 radius3 boxsizing"/>
					</dd>
				</dl>
				<dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><?php echo (L("member_default_avatar")); ?>：</dt>
					<dd class="left text-l">
						<div class="input-group">
                            <span class="previewbtn"><img src="/static/admin/images/imgGray.png" class=" viewimg view_img" url="<?php echo $info['member_avatar']?'http://www.tqshq.com/data/Attach/'.$info['member_avatar']:'';?>"/></span>
                            <input type="text" name="member_avatar" id="member_avatar" value="<?php echo ($info["member_avatar"]); ?>" value="" class="form-control upload-inp com-inp1 radius3 boxsizing">
                            <input type="file"   id="avatar_file" class="form-control" style="display: none;">
                            <span class="input-group-btn left">
                                <input type="button" onclick="$('input[id=avatar_file]').click();"  value="选择文件" class="upload-btn search-btn"/>
                            </span>
                        </div>
                      
						<p class="remind1"><?php echo (L("default_avatar_tips")); ?></p>
					</dd>
				</dl>
				<?php if($info["member_id"] != ''): ?><dl class="juris-dl boxsizing">
					<dt class="left text-r boxsizing"><?php echo (L("member_points")); ?>：</dt>
					<dd class="left text-l">
						<p><?php echo ((isset($info["member_points"]) && ($info["member_points"] !== ""))?($info["member_points"]):"0"); ?> <?php echo (L("points")); ?></p>
					</dd>
				</dl><?php endif; ?>
			</div>
			<div class="btnbox3 boxsizing">
				<a type="button" id="member_subbtn" class="btn1 radius3 marginT10  btn3-btnmargin"><?php echo (L("submit_btn")); ?></a>
				<a class="btn1 radius3 marginT10" href="<?php echo U('member/lists');?>"><?php echo (L("return_list")); ?></a>
			</div>
		</form>
		</div>
	</div>
</div>	
</div>	
<script type="text/javascript">
$(function(){
    var uploader = new plupload.Uploader({
        runtimes: 'html5,html4,flash,silverlight',
        browse_button: 'avatar_file',
        url: "<?php echo U('Member/upload_avatar');?>",
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
                uploader.start();
            },
            UploadProgress: function (up, file) {
           	 $("#avatar_view").attr("src",'/static/img/loading.gif');
            },
            FileUploaded: function (up, file, res) {
                var resobj = eval('(' + res.response + ')');
                if(resobj.status){
                    $("#avatar_view").attr("src",'http://www.tqshq.com/data/Attach//'+resobj.data);
                    $("#member_avatar").val(resobj.data);
                }
            },
            Error: function (up, err) {
                alert('err');
            }
        }
    });
    uploader.init();
});

	var settting = <?= $setting?>;
	$(function(){
		$(document).posi({
			class:"view_img",
			default_img:settting.shop_member
		});
    
     //点击关闭图片预览 
    $('.view-close').bind('click',function(){
		$(this).parents('.viewdiv').css('display','none');
	})
	function Size(wid,heig){
		$('.viewdiv').find('.view-img').css({'width':wid,'height':heig});
		$('.viewdiv').css({'width':wid+24,'height':heig+24});
	}
	function Posi1(event){
		var x =++event.pageX+'px';
        var y =++event.pageY+'px';
        $('.viewimgbtn1').parents('.input-group').next().toggle();
        $('.viewimgbtn1').parents('.input-group').next().css("left",x);
        $('.viewimgbtn1').parents('.input-group').next().css("top",(y-70)+'px');
	}

	$('#member_subbtn').click(function(){
        flag=checkrequire('memberForm');
        if(!flag){
           $('#memberForm').submit();
        }
    });
	
	$('.input-group').mouseenter(function(){
		$(this).find('.viewimg').attr('src','/static/admin/images/imgGreen.png');
	})
	$('.input-group').mouseleave(function(){
		$(this).find('.viewimg').attr('src','/static/admin/images/imgGray.png');
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
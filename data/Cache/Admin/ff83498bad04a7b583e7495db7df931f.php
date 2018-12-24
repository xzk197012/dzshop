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
                <li>1.网站全局基本设置，商城及其他模块相关内容在其各自栏目设置项内进行操作。</li>
                <li class='font-red'>2.保存好基本设置后，务必要更新商城缓存。</li>
            </ol>
        </div>
        <!--内容开始-->
        <div class="iframeCon">
		<div class="iframeMain">
		<ul class="transverse-nav">
	<li <?php if($_GET['sub'] == 1 || empty($_GET['sub'])){?> class="activeFour" <?php }?>><a href="<?=U('Admin/Setting/base',array('sub'=>'1'))?>"><span>商城设置</span></a></li>
	<li <?php if($_GET['sub'] == 2){?> class="activeFour" <?php }?>><a href="<?=U('Admin/Setting/base',array('sub'=>'2'))?>" ><span>注册协议</span></a></li>
	<li <?php if($_GET['sub'] == 3){?> class="activeFour" <?php }?>><a href="<?=U('Admin/Setting/base',array('sub'=>'3'))?>"><span>验证码开关</span></a></li>
</ul>
<script>
$(".transverse-nav>li").unbind('click');
</script>
            <div class="white-bg ">
                
                <div class="tab-conbox1">
                    <form method="post" class="form-horizontal" id="setting_form1" enctype="multipart/form-data" action="<?php echo U('Admin/Setting/base');?>">
                    <input name="form_submit"   type="hidden"  value="submit">
                    <input name="sub" type="hidden" value="1">
                        <div class="jurisdiction boxsizing">
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar">*</span>商城名称：</dt>
                                <dd class="left text-l">
                                    <input type="text" name="shop_name" class="com-inp1 radius3 boxsizing" value="<?php echo ($config['shop_name']); ?>" localrequired="">
                                        <p class="remind1">网站名称，将显示在前台顶部欢迎信息等位置</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing">商城介绍：</dt>
                                <dd class="left text-l">
                                    <textarea type="text" name="web_introduce" class="com-textarea1 radius3 boxsizing" placeholder="请输入网站介绍" ><?php echo ($config['web_introduce']); ?></textarea>
                                        <p class="remind1">网站介绍，将显示在前台微信分享中</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar"></span>商城LOGO：</dt>
                                <dd class="left text-l">
                                    <div class="input-group">
                                        <span class="previewbtn"><img src="/static/admin/images/imgGray.png" class="viewimgbtn1 viewimg view_img" url="http://www.tqshq.com/data/Attach/<?php echo ($config['shop_logo']); ?>" id="logo_img"/></span>
                                        <input type="text" name="shop_logo" id="logotext" value="<?php echo ($config['shop_logo']); ?>" class="form-control upload-inp com-inp1 radius3 boxsizing" >
                                        <input type="file"   id="shop_logo" class="form-control" style="display: none;">
                                        <span class="input-group-btn left">
                                            <input type="button"  value="选择文件" class="upload-btn search-btn" id="up" onclick="$('input[id=shop_logo]').click();"/>
                                        </span>
                                    </div>
                                    <p class="remind1">请使用宽高比为4:1的jpg/gif/png格式的图片。建议尺寸104*26。</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar"></span>登录页图片：</dt>
                                <dd class="left text-l">
                                    <div class="input-group">
                                        <span class="previewbtn"><img src="/static/admin/images/imgGray.png" class="viewimgbtn2 viewimg view_img" url="http://www.tqshq.com/data/Attach/<?php echo ($config['shop_login']); ?>" id="login_img"/></span>
                                        <input type="text" name="shop_login" id="logintext" value="<?php echo ($config['shop_login']); ?>" class="form-control upload-inp com-inp1 radius3 boxsizing" >
                                        <input type="file" id="shop_login" class="form-control" style="display: none;">
                                        <span class="input-group-btn left">
                                            <input type="button"  value="选择文件" class="upload-btn search-btn" id="up" onclick="$('input[id=shop_login]').click();"/>
                                        </span>
                                    </div>
                                    <p class="remind1">请使用宽高比为1:1的jpg/gif/png格式的图片。建议尺寸540*540。</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar">*</span>商城底部信息：</dt>
                                <dd class="left text-l">
                                    <input type="text" name="footer_info" class="com-inp1 radius3 boxsizing" value="<?php echo ($config['footer_info']); ?>" localrequired="">
                                        <p class="remind1">前台页面底部信息的显示设置</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar">*</span>ICP证书号：</dt>
                                <dd class="left text-l">
                                    <input type="text" name="record_number" class="com-inp1 radius3 boxsizing" value="<?php echo ($config['record_number']); ?>" localrequired="">
                                    <p class="remind1">前台页面底部可以显示 ICP 备案信息，如果网站已备案，在此输入你的授权码，它将显示在前台页面底部，如果没有请留空</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar"></span>客服电话：</dt>
                                <dd class="left text-l">
                                    <input id="enterprise_contact" type="text" name="enterprise_contact" class="com-inp1 radius3 boxsizing" value="<?php echo ($config['enterprise_contact']); ?>" >
                                    <p class="remind1">前台页面显示的客服电话,只允许输入数字</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing">第三方流量统计代码：</dt>
                                <dd class="left text-l">
                                    <textarea type="text" class="com-textarea1 radius3 boxsizing" name="statistics_code"><?php echo ($config['statistics_code']); ?></textarea>
                                    <p class="remind1">前台页面底部可以显示第三方统计</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar">*</span>站点状态：</dt>
                                <dd class="left text-l">
                                    <div class="switch-box">
                                        <input type="checkbox" name="web_status" id="switch-radio" class="switch-radio" <?php if($config['web_status'] == 1 ): ?>checked="checked" <?php else: endif; ?> <?php if($config['web_status'] == '' ): ?>checked="checked" <?php else: endif; ?>/>
                                        <span class="switch-half switch-open">ON</span>
                                        <span class="switch-half switch-close close-bg">OFF</span>
                                    </div>
                                    <p class="remind1">可暂时将站点关闭，其他人无法访问，但不影响管理员访问后台</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing">关闭原因：</dt>
                                <dd class="left text-l">
                                    <textarea type="text" name="close_reason" class="com-textarea1 radius3 boxsizing" placeholder="请输入关闭原因" ><?php echo ($config['close_reason']); ?></textarea>
                                    <p class="remind1">当网站处于关闭状态时，关闭原因将显示在前台</p>
                                </dd>
                            </dl>
                        </div>
                        <div class="btnbox3 boxsizing">
                            <a type="button" id="base_setting" class="btn1 radius3 marginT10 btn3-btnmargin"><?php echo (L("submit_btn")); ?></a>
                        </div>
                        </form>
                </div>
                
				
			   
            </div>
        </div>  
        </div>  
        <!--内容结束-->
<script>
    $(function(){
        // $(".viewimgbtn1").mouseenter(function(){
        //    Size(600,100);
        //    event=arguments.callee.caller.arguments[0] || window.event; 
        //    Posi1(event);
        // });
        // $(".viewimgbtn1").mouseleave(function(){
        //     $(this).parents('.input-group').next().hide();
        // })
        // $(".viewimgbtn2").mouseenter(function(){
        //    Size(300,300);
        //   event=arguments.callee.caller.arguments[0] || window.event; 
        //    Posi2(event);
        // });
        // $(".viewimgbtn2").mouseleave(function(){
        //     $(this).parents('.input-group').next().hide();
        // })
    
     //点击关闭图片预览 
    // $('.view-close').bind('click',function(){
    //     $(this).parents('.viewdiv').css('display','none');
    // })
    // function Size(wid,heig){
    //     $('.viewdiv').find('.view-img').css({'width':wid,'height':heig});
    //     $('.viewdiv').css({'width':wid+24,'height':heig+24});
    // }
    // function Posi1(event){
    //     var x =++event.pageX+'px';
    //     var y =++event.pageY+'px';
    //     $('.viewimgbtn1').parents('.input-group').next().toggle();
    //     $('.viewimgbtn1').parents('.input-group').next().css("left",x);
    //     $('.viewimgbtn1').parents('.input-group').next().css("top",(y-70)+'px');
    // }
    // function Posi2(event){
    //     var x =++event.pageX+'px';
    //     var y =++event.pageY+'px';
    //     $('.viewimgbtn2').parents('.input-group').next().toggle();
    //     $('.viewimgbtn2').parents('.input-group').next().css("left",x);
    //     $('.viewimgbtn2').parents('.input-group').next().css("top",(y-70)+'px');
    // }
    
    
    // function viewBlock(){
    //     $('.viewdiv').each(function(){
    //     _this = this;
    //     if($(_this).is(':visible')== true){
    //         alert('显示');
    //         $(_this).siblings().hide();
    //     }
    // })
    // }
    
    //图片上传;
    var uploader1 = new plupload.Uploader({
        runtimes: 'html5,html4,flash,silverlight',
        browse_button: 'shop_logo',
        url: "<?php echo U('upLogoFile');?>",
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
                uploader1.start();
            },
            UploadProgress: function (up, file) {
                //alert('这里可以做进度条');
            },
            FileUploaded: function (up, file, res) {
                var resobj = eval('(' + res.response + ')');
                if(resobj.status){
                    $("#logotext").val(resobj.data);
                }
            },
            Error: function (up, err) {
                alert('err');
            }
        }
        
    });
    uploader1.init(); 
    var uploader2 = new plupload.Uploader({
        runtimes: 'html5,html4,flash,silverlight',
        browse_button: 'shop_login',
        url: "<?php echo U('upLogoFile');?>",
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
                    $("#logintext").val(resobj.data);
                }
            },
            Error: function (up, err) {
                alert('err');
            }
        }
        
    });
    uploader2.init();
    
    $('.input-group').mouseenter(function(){
        $(this).find('.viewimg').attr('src','/static/admin/images/imgGreen.png');
    })
    $('.input-group').mouseleave(function(){
        $(this).find('.viewimg').attr('src','/static/admin/images/imgGray.png');
    })
    })
    

    
    
</script>

<script type="text/javascript">
    function isNum(a)
    {
        var reg =/^\d*?$/;
        return reg.test(a);
    }

    $('#enterprise_contact').blur(function(){
        var str = $('#enterprise_contact').val();
        if (!isNum(str)){
            showError('只允许输入数字，请重新输入！');
            $('#enterprise_contact').val('');
        }
    })
</script>

<script type="text/javascript">
    $('#base_setting').click(function(){
        flag=checkrequire('setting_form1');
        if(!flag){
           $('#setting_form1').submit();
        }
    });
    $('#agreement').click(function(){
        flag=checkrequire('setting_form2');
        if(!flag){
            $('#setting_form2').submit();
        }
    });
	$('#verify_status').click(function() {
		  $('#setting_form3').submit();
	});
    $("#logo_img").posi({default_img:"/static/img/logo.png"});
    $("#login_img").posi({default_img:"/static/img/login.jpg"});

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
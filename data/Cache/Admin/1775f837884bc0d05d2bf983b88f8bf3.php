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
                <li>2.保存好基本设置后，务必要更新商城缓存。</li>
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
			   <div class="tab-conbox3">
                    <form class="form-horizontal" method="post" id="setting_form3" enctype="multipart/form-data" action="<?php echo U('Admin/Setting/base');?>">
                    <input name="form_submit"   type="hidden"  value="submit">
                    <input name="sub" type="hidden" value="3">
						   <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar">*</span><?php echo (L("verify_input_text")); ?></dt>
                                <dd class="left text-l">
                                    <div class="switch-box">
                                        <input type="checkbox" name="verify_status" id="switch-radio" class="switch-radio" <?php if($config['verify_status'] == 1 ): ?>checked="checked" <?php else: endif; ?> <?php if($config['verify_status'] == '' ): ?>checked="checked" <?php else: endif; ?>/>
                                        <span class="switch-half switch-open">ON</span>
                                        <span class="switch-half switch-close close-bg">OFF</span>
                                    </div>
                                    <p class="remind1"><?php echo (L("verify_input_tip_text")); ?></p>
                                </dd>
                            </dl>
                        <div class="btnbox3 boxsizing">
                            <a type="button" id="verify_status" class="btn1 radius3 marginT10 btn3-btnmargin"><?php echo (L("submit_btn")); ?></a>
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
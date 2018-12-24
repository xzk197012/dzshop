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
	    <li>此处列出了手机支持的支付方式，编辑保存可以设置支付参数及开关状态。</li>
	</ol>
</div>
<!--内容开始-->
<div class="iframeCon">
<div class="iframeMain">
    <ul class="transverse-nav">
        <li class="<?php if($_GET['active'] == ''){echo 'activeFour';}else{echo '';} ?>"><a href="<?php echo U('Admin/Setting/payment');?>"><span>微信</span></a></li>
        <li class="<?php if($_GET['active'] == 1){echo 'activeFour';}else{echo '';} ?>"><a href="<?php echo U('Admin/Setting/payment');?>?active=1"><span>支付宝</span></a></li>
    </ul>
    <div class="white-bg">
        <?php if($_GET['active'] == 1){ ?>
        <div class="tab-conbox">
            <form method="post" class="form-horizontal" id="pay_formalipay" action="<?php echo U('payment');?>?active=1">
            <input type="hidden" name="paytype" value="alipay">
            <input type="hidden" name="form_submit" value="submit">
                <div class="jurisdiction boxsizing">
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span>支付宝帐号：</dt>
                        <dd class="left text-l">
                            <input type="text" class="com-inp1 radius3 boxsizing" name="account" value="<?php echo ($payment['alipay']['account']); ?>" localrequired=""/>
                            <p class="remind1">申请支付的支付宝账号</p>
                        </dd>
                    </dl>
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span>APPID：</dt>
                        <dd class="left text-l">
                            <input type="text" class="com-inp1 radius3 boxsizing" name="app_id" value="<?php echo ($payment['alipay']['app_id']); ?>" localrequired=""/>
                            <p class="remind1">绑定支付的APPID（必须配置，开户邮件中可查看）</p>
                        </dd>
                    </dl>
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span>交易安全码(key)：</dt>
                        <dd class="left text-l">
                            <input type="text" class="com-inp1 radius3 boxsizing" name="key" value="<?php echo ($payment['alipay']['key']); ?>" localrequired=""/>
                            <p class="remind1">支付宝的安全交易密码</p>
                        </dd>
                    </dl>
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span>合作者身份 partnerID：</dt>
                        <dd class="left text-l">
                            <input type="text" class="com-inp1 radius3 boxsizing" name="pid" value="<?php echo ($payment['alipay']['pid']); ?>" localrequired=""/>
                            <a target="_blank" class="getpid" href="https://b.alipay.com/order/pidKeyLogin.htm?product=fastpay&pid=2088001525694587">获取PID和key</a>
                            <p class="remind1">合作者身份PID</p>
                        </dd>
                    </dl>
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span>私钥 privateKey：</dt>
                        <dd class="left text-l">
                            <div class="input-group">
                                <input type="text" name="private_key_path" id="alipay_private" value="<?php echo ($payment['alipay']['private_key_path']); ?>" class="form-control upload-inp com-inp1 radius3 boxsizing paddingL10" localrequired="">
                                <input type="file" id="alipay_private_key" class="form-control" style="display: none;">
                                    <span class="input-group-btn left">
                                        <input type="button"  value="选择文件" class="upload-btn search-btn" id="up" onclick="$('input[id=alipay_private_key]').click();"/>
                                    </span>
                            </div>
                            <p class="remind1">私钥必须上传，用于支付宝扫码、原路退款。</p>
                        </dd>
                    </dl>
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span>启用：</dt>
                        <dd class="left text-l">
                            <div class="switch-box">
                                <input type="checkbox" name="status" <?php if($payment['alipay']['payment_state']): ?>checked="checked"<?php endif; ?>  class="switch-radio"/>
                                <span class="switch-half switch-open">ON</span>
                                <span class="switch-half switch-close close-bg">OFF</span>
                            </div>
                        </dd>
                    </dl>
                </div>
                <div class="btnbox3 boxsizing">
                    <a class="btn1 radius3 btn3-btnmargin" id="form_submitalipay" href="javascript:;"><?php echo (L("submit_btn")); ?></a>
                </div>
            </form>
        </div>
        <?php }?>

        <?php if($_GET['active'] == ''){ ?>
            <div class="tab-conbox">
                <form method="post" class="form-horizontal" id="pay_formwx" action="<?php echo U('Admin/Setting/payment');?>">
                    <input type="hidden" name="paytype" value="wx">
                    <input type="hidden" name="form_submit" value="submit">
                    <div class="jurisdiction boxsizing">
                        <dl class="juris-dl boxsizing">
                            <dt class="left text-r boxsizing"><span class="redstar">*</span>APPID：</dt>
                            <dd class="left text-l">
                                <input type="text" class="com-inp1 radius3 boxsizing" name="appid" value="<?php echo ($payment['wx']['appid']); ?>" localrequired=""/>
                                <p class="remind1">绑定支付的APPID（必须配置，开户邮件中可查看）</p>
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing">
                            <dt class="left text-r boxsizing"><span class="redstar">*</span>APPSECRET：</dt>
                            <dd class="left text-l">
                                <input type="text" class="com-inp1 radius3 boxsizing" name="appsecret" value="<?php echo ($payment['wx']['appsecret']); ?>" localrequired=""/>
                                <p class="remind1">绑定支付的支付密钥（必须配置，开户邮件中可查看）</p>
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing">
                            <dt class="left text-r boxsizing"><span class="redstar">*</span>MCHID：</dt>
                            <dd class="left text-l">
                                <input type="text" class="com-inp1 radius3 boxsizing" name="mchid" value="<?php echo ($payment['wx']['mchid']); ?>" localrequired=""/>
                                <p class="remind1">商户号（必须配置，开户邮件中可查看）</p>
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing">
                            <dt class="left text-r boxsizing"><span class="redstar">*</span>KEY：</dt>
                            <dd class="left text-l">
                                <input type="text" class="com-inp1 radius3 boxsizing" name="key" value="<?php echo ($payment['wx']['key']); ?>" localrequired=""/>
                                <p class="remind1">商户支付密钥，参考开户邮件设置（必须配置，登录商户平台自行设置）</p>
                            </dd>
                        </dl>

                        <dl class="juris-dl boxsizing">
                            <dt class="left text-r boxsizing"><span class="redstar">*</span>SSLCERT_PATH：</dt>
                            <dd class="left text-l">
                                <div class="input-group">
                                    <input type="text" name="sslcert_path" id="logotext" value="<?php echo ($payment['wx']['sslcert_path']); ?>" class="form-control upload-inp com-inp1 radius3 boxsizing paddingL10" localrequired="">
                                    <input type="file"   id="shop_logo" class="form-control" style="display: none;">
                                        <span class="input-group-btn left">
                                            <input type="button"  value="选择文件" class="upload-btn search-btn" id="up" onclick="$('input[id=shop_logo]').click();"/>
                                        </span>
                                </div>

                                <p class="remind1">证书必须上传，用于微信原路退款。</p>
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing">
                            <dt class="left text-r boxsizing"><span class="redstar">*</span>SSLKEY_PATH：</dt>
                            <dd class="left text-l">
                                <div class="input-group">
                                    <input type="text" name="sslkey_path" id="logintext" value="<?php echo ($payment['wx']['sslkey_path']); ?>" class="form-control upload-inp com-inp1 radius3 boxsizing paddingL10" localrequired="">
                                    <input type="file" id="shop_login" class="form-control" style="display: none;">
                                        <span class="input-group-btn left">
                                            <input type="button"  value="选择文件" class="upload-btn search-btn" id="up" onclick="$('input[id=shop_login]').click();"/>
                                        </span>
                                </div>
                                <p class="remind1">证书必须上传，用于微信原路退款。</p>
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing">
                            <dt class="left text-r boxsizing"><span class="redstar">*</span>启用：</dt>
                            <dd class="left text-l">
                                <div class="switch-box">
                                    <input type="checkbox" name="status" <?php if($payment['wx']['payment_state']): ?>checked="checked"<?php endif; ?>  class="switch-radio"/>
                                    <span class="switch-half switch-open">ON</span>
                                    <span class="switch-half switch-close close-bg">OFF</span>
                                </div>
                            </dd>
                        </dl>

                    </div>
                    <div class="btnbox3 boxsizing">
                        <a class="btn1 radius3 btn3-btnmargin" id="form_submitwx" href="javascript:;"><?php echo (L("submit_btn")); ?></a>
                    </div>
                </form>
            </div>
        <?php }?>
        <?php if($_GET['active'] == 2){ ?>
            <div class="tab-conbox">
                <form method="post" class="form-horizontal" id="pay_formwx" action="<?php echo U('Admin/Setting/payment');?>?active=1">
                    <input type="hidden" name="paytype" value="wx">
                    <input type="hidden" name="form_submit" value="submit">
                    <div class="jurisdiction boxsizing">
                        <dl class="juris-dl boxsizing">
                            <dt class="left text-r boxsizing"><span class="redstar">*</span>APPID：</dt>
                            <dd class="left text-l">
                                <input type="text" class="com-inp1 radius3 boxsizing" name="appid" value="<?php echo ($payment['wx']['appid']); ?>" localrequired=""/>
                                <p class="remind1">绑定支付的APPID（必须配置，开户邮件中可查看）</p>
                            </dd>
                        </dl>


                    </div>
                    <div class="btnbox3 boxsizing">
                        <a class="btn1 radius3 btn3-btnmargin" id="form_submitwx" href="javascript:;"><?php echo (L("submit_btn")); ?></a>
                    </div>
                </form>
            </div>
        <?php }?>
    </div>
</div>  
</div>  
<!--内容结束-->
<script type="text/javascript">
    $(function(){
        $('#form_submitalipay').click(function(){
            flag=checkrequire('pay_formalipay');
            if(!flag){
                $('#pay_formalipay').submit();
            }
            
        });
        $('#form_submitwx').click(function(){
            flag=checkrequire('pay_formwx');
            if(!flag){
                $('#pay_formwx').submit();
            }
        })

        //图片上传;
        var uploader0 = new plupload.Uploader({
            runtimes: 'html5,html4,flash,silverlight',
            browse_button: 'alipay_private_key',
            url: "<?php echo U('upLogoFilePem');?>",
            filters: {
                mime_types: [{
                    title: "Image files",
                    extensions: "jpg,gif,png,jpeg,pem",
                    prevent_duplicates: true
                }]
            },
            init: {
                PostInit: function () {
                },
                FilesAdded: function (up, files) {
                    uploader0.start();
                },
                UploadProgress: function (up, file) {
                    //alert('这里可以做进度条');
                },
                FileUploaded: function (up, file, res) {
                    var resobj = eval('(' + res.response + ')');
                    if(resobj.status){
                        $("#alipay_private").val(resobj.data);
                    }
                },
                Error: function (up, err) {
                    alert('err');
                }
            }

        });
        uploader0.init();
        var uploader1 = new plupload.Uploader({

            runtimes: 'html5,html4,flash,silverlight',
            browse_button: 'shop_logo',
            url: "<?php echo U('upLogoFilePem');?>",
            filters: {
                
                mime_types: [{
                    title: "Image files",
                    extensions: "jpg,gif,png,jpeg,pem",
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
            url: "<?php echo U('upLogoFilePem');?>",
            filters: {
                
                mime_types: [{
                    title: "Image files",
                    extensions: "jpg,gif,png,jpeg,pem",
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
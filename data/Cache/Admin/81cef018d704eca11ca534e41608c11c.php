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
                    <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
                    <span class="open-span span-icon"><i class="open-icon"></i></span>
                </div>
            </div>
            <ol class="tips-list" id="tips-list">
                <li>1.提交后，相同支付单号的未支付订单状态都变为已支付状态</li>
            </ol>
        </div>
        <!--内容开始-->
        <div class="iframeCon">
		<div class="iframeMain">
            <div class="white-shadow2">
                
                <div class="details-box">
                    <h1 class="details-tit">订单详细</h1>
                    <form id="signupForm" role="form" action="<?=U('/Order/settrade')?>"  method ="post" >
                    <input name="id" type="hidden" value="<?=$data['order_id'] ?>" >
                    <input  type="hidden" name="form_submit" value="submit" >
                        <div class="jurisdiction boxsizing">
                            <dl class="juris-dl boxsizing details-dl">
                                <dt class="left text-r boxsizing">订单号：</dt>
                                <dd class="left text-l">
                                    <?=$data['order_id']?>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing details-dl">
                                <dt class="left text-r boxsizing">支付单号：</dt>
                                <dd class="left text-l">
                                    <?=$data['order_sn']?>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing details-dl">
                                <dt class="left text-r boxsizing">订单金额：</dt>
                                <dd class="left text-l">
                                    <?=$data['order_amount']?>
                                </dd>
                            </dl>
                            </div>
                            <h1 class="details-tit">设置收款</h1>
                            <div class="jurisdiction boxsizing">
                                <dl class="juris-dl boxsizing">
                                    <dt class="left text-r boxsizing"><span class="redstar">*</span>付款时间：</dt>
                                    <dd class="left text-l ">
                                        <div class="left" style="width:100%;">
                                            <p class="time-box" style="margin-left: 0;"><input type="text" id="pay_time" name="pay_time" readonly="" value="<?php echo @date('Y-m-d',$data['payment_time']); ?>" localrequired="" class="com-inp1 radius3 boxsizing" /><i class="timeinp-icon"></i></p>
                                        </div>
                                        <p class="remind1">请确认付款时间</p>
                                    </dd>
                                </dl>
                                <dl class="juris-dl boxsizing">
                                    <dt class="left text-r boxsizing"><span class="redstar">*</span>付款方式：</dt>
                                    <dd class="left text-l">
                                        <div class="search-boxcon boxsizing radius3 inline borderR-none">
                                            <select id="field"  name="pay_code"  class="com-sele radius3 juris-dl-sele">
                                                <option value=0>默认</option>
                                                <?php foreach($paylist as $rk=>$rv) {?>
                                                <option value=<?=$rv['payment_code']?> <?php if($data['payment_code'] == $rv['payment_code']) {?> selected <?php } ?>  > <?=$rv['payment_name']?></option>
                                                <?php }?>
                                            </select>
                                        </div>
                                        <p class="remind1">请选择支付方式</p>
                                    </dd>
                                </dl>
                                <dl class="juris-dl boxsizing">
                                    <dt class="left text-r boxsizing"><span class="redstar">*</span>支付交易号：</dt>
                                    <dd class="left text-l">
                                        <input type="text" <?php if (empty($info['username'])) {?> localrequired="" <?php }?>   name="trade_no"  class="com-inp1 radius3 boxsizing" value="<?=$data['trade_no']?>" />
                                        <p class="remind1">请输入第三方支付平台交易号</p>
                                    </dd>
                                </dl>
                            </div>                            
                        
                        <div class="btnbox3 boxsizing">
                            <!-- <input type="submit" id="settrade"  value="<?php echo (L("submit_btn")); ?>" class="btn1 radius3 btn3-btnmargin"/> -->
                            <a class="btn1 radius3 btn3-btnmargin" id="settrade" href="javascript:;"><?php echo (L("submit_btn")); ?></a>
                        </div>
                        </form>
                </div>
            </div>
        </div>  
       </div>  
        <!--内容结束-->

<script type="text/javascript">
    $( "#pay_time" ).datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel:true,
        dateFormat: 'yy-mm-dd',
        showAnim:"fadeIn",//淡入效果
    });
    $('#settrade').click(function(){
        flag=checkrequire('signupForm');
        if(!flag){
            $('#signupForm').submit();
        }
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
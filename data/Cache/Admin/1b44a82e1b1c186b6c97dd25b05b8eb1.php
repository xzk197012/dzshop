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
    	        <div class="tipsbox">
            <div class="tips boxsizing radius3">
                <div class="tips-titbox">
                    <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
                    <span class="open-span span-icon"><i class="open-icon"></i></span>
                </div>
            </div>
            <ol class="tips-list" id="tips-list">
                <li>1.优惠券模板详情。</li>
                <li>2.点击优惠券数量可查看已发放的已使用或未使用优惠卷列表。</li>
            </ol>
        </div>
        <div class="iframeCon">
        <div class="iframeMain">
            <div class="white-shadow2">
                <div class="details-box">
                    <h1 class="details-tit">优惠券信息</h1>
                    <div class="jurisdiction boxsizing marginT0">
                        <dl class="juris-dl boxsizing details-dl">
                            <dt class="left text-r boxsizing">优惠券名称：</dt>
                            <dd class="left text-l">
                                <?php echo ($info["rpacket_t_title"]); ?>
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing details-dl">
                            <dt class="left text-r boxsizing">优惠卷面额：</dt>
                            <dd class="left text-l">
                                <?php echo ($info["rpacket_t_price"]); ?>元
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing details-dl">
                            <dt class="left text-r boxsizing">订单消费金额：</dt>
                            <dd class="left text-l">
                                <?php echo ($info["rpacket_t_limit"]); ?>元
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing details-dl">
                            <dt class="left text-r boxsizing">兑换积分：</dt>
                            <dd class="left text-l">
                                <?php echo ($info["rpacket_t_points"]); ?>
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing details-dl">
                            <dt class="left text-r boxsizing">优惠卷数量：</dt>
                            <dd class="left text-l">
                                <?php echo ($info["rpacket_t_total"]); ?>&nbsp;(<a href='<?php echo U("coupon/rep_list/status/giveout/id/$info[rpacket_t_id]");?>' style="color: #00a2d4">已领<?php echo ($info["rpacket_t_giveout"]); ?>张 </a>，<a href='<?php echo U("coupon/rep_list/status/used/id/$info[rpacket_t_id]");?>' style="color: #00a2d4">已使用<?php echo ($info["rpacket_t_used"]); ?>张</a>)
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing details-dl">
                            <dt class="left text-r boxsizing">每人限领：</dt>
                            <dd class="left text-l">
                               <?php echo ($info["rpacket_t_eachlimit"]); ?>张
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing details-dl">
                            <dt class="left text-r boxsizing">优惠券状态：</dt>
                            <dd class="left text-l">
                               <?php if($info['rpacket_t_state'] == 1){ echo "启用";}elseif($info['rpacket_t_state'] == 2){ echo "停用";} ?>
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing details-dl">
                            <dt class="left text-r boxsizing">有效期：</dt>
                            <dd class="left text-l">
                               <?php echo ($info["start_time"]); ?><span class="redstar" >&nbsp; 至 &nbsp;</span><?php echo ($info["end_time"]); ?>
                            </dd>
                        </dl>
                    </div>
                    <div class="btnbox3 boxsizing">
                        <a href='<?php echo U("coupon/lists");?>' type="button" class="btn1 radius3 btn3-btnmargin">返回列表</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
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
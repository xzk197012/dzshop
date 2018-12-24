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
		<?php echo (L("manager_add_tips")); ?>
	</ol>
</div>
<!--内容开始-->
<div class="iframeCon">
<div class="iframeMain">
			<ul class="transverse-nav">
				<li class="activeFour"><a href="javascript:;"><span><?php if($info["uid"] == ''): echo (L("manager_add")); else: echo (L("manager_edit")); endif; ?></span></a></li>
			</ul>
    <div class="white-bg">
        <div class="tab-conbox">
            <form method="post" class="form-horizontal" name="system_form" id="system_form" action="<?=U('/System/add')?>">
                <div class="jurisdiction boxsizing">
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span><?php echo (L("manager_uname")); ?>：</dt>
                        <dd class="left text-l">
                            <input type="text" class="com-inp1 radius3 boxsizing" localrequired="" name="username"   value="<?=$info['username']?>" id="firstname" <?php if($type == 'edit') echo 'readonly="true"'?>/>
                            <p class="remind1">管理员账户不可修改</p>
                        </dd>
                    </dl>
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span><?php echo (L("manager_pwd")); ?>：</dt>
                        <dd class="left text-l">
                            <input type="password" class="com-inp1 radius3 boxsizing" <?php if (empty($info['username'])) {?> localrequired="" <?php }?> name="password" id="password"/>
                            <p class="remind1"><?php echo (L("manager_pwd_tips")); ?></p>
                        </dd>
                    </dl>
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span><?php echo (L("manager_pwd_again")); ?>：</dt>
                        <dd class="left text-l">
                            <input type="password" class="com-inp1 radius3 boxsizing" <?php if (empty($info['username'])) {?> localrequired="" <?php }?> name="confirm_password"  id="confirm_password"/>
                            <p class="remind1"><?php echo (L("manager_pwd_again_tips")); ?></p>
                        </dd>
                    </dl>
                    <dl class="juris-dl boxsizing">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span><?php echo (L("permiss_group")); ?>：</dt>
                        <dd class="left text-l">
                        <div class="search-boxcon boxsizing radius3 borderR-none" style="display: inline-block;">
						<select localrequired=""  name="groupid" id="groupid" class="com-sele radius3 juris-dl-sele">
							<option value=0><?php echo (L("permiss_group_select")); ?></option>
							<?php foreach($role as $rk=>$rv) {?>
							<option value=<?=$rv['id']?> <?php if($info['groupid'] == $rv['id']) {?> selected <?php } ?>  > <?=$rv['name']?></option>
							<?php }?>
						</select>
                        </div>
                            <p class="remind1"><?php echo (L("permiss_group_tips")); ?></p>
                        </dd>
                    </dl>
                    <dl class="juris-dl boxsizing" style="<?php if($type == 'add') echo 'display:none'?>">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span>绑定微信：</dt>
                        <dd class="left text-l">
                            <img src="<?php echo $ewimg?>" width="200" height="200">
                            <p class="remind1">扫描二维码,绑定管理员帐号和微信号</p>
                        </dd>
                    </dl>
                    <dl class="juris-dl boxsizing" style="<?php if($type == 'add') echo 'display:none'?>">
                        <dt class="left text-r boxsizing"><span class="redstar">*</span>新订单微信通知：</dt>
                        <dd class="left text-l">

                            <div class="switch-box">
                                <input type="checkbox" localrequired="" name="statues" id="switch-radio" class="switch-radio" <?php if($info['statues'] == 'on') echo 'checked="true"' ?>/>
                                <span class="switch-half switch-open">ON</span>
                                <span class="switch-half switch-close close-bg">OFF</span>
                            </div>
                            <p class="remind1">开启后若管理员已绑定微信号，则可以收到新订单通知，关闭则不接收新订单通知。</p>
                        </dd>
                    </dl>

                </div>
                <div class="btnbox3 boxsizing">
                	<input name="id" type="hidden" value="<?=$info['uid'] ?>" >
                    <input type="hidden" name='form_submit' value="submit" />
                    <a class="btn1 radius3 btn3-btnmargin" id="form_submitadd" href="javascript:;"><?php echo (L("submit_btn")); ?></a>
                    <a class="btn1 radius3" href='<?php echo U("/system/lists");?>'><?php echo (L("return_list")); ?></a>
                </div>
            </form>
        </div>
    </div>
</div>  
</div>  
<!--内容结束-->
<script type="text/javascript">
    $(function(){
        $('#form_submitadd').click(function(){
            flag=checkrequire('system_form');
            if(!flag){
                $('#system_form').submit();
            }
        });
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
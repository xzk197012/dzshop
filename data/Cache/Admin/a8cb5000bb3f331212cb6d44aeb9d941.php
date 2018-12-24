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
                <li>1.填写账号、密码等相关信息。</li>
                <li>2.账号、密码配置正确后即可正常发送短信。</li>
                <li>3.模板中的@代表订单号、时间、金额等动态参数，‘【】’中的@代表商城名称。</li>
                <li>4.短信记录包含平台半个月之内已发送短信，可进行删除操作。</li>
                <li>5.设置接收用户付款成功短信通知的手机号。可设置多个，用小写逗号分隔。</li>
            </ol>
        </div>
        <!--内容开始-->
        <div class="iframeCon">
		<div class="iframeMain">
            <ul class="transverse-nav">
                <li class="<?php if($_GET['active'] == ''){echo 'activeFour';}else{echo '';} ?>"><a href="<?php echo U('Admin/Setting/message');?>"><span>短信配置</span></a></li>
                <li class="<?php if($_GET['active'] == 1){echo 'activeFour';}else{echo '';} ?>"><a href="<?php echo U('Admin/Setting/message');?>?active=1"><span>短信模板</span></a>
                </li>
                <li class="<?php if($_GET['active'] == 2){echo 'activeFour';}else{echo '';} ?>"><a href="<?php echo U('Admin/Setting/message');?>?active=2"><span>短信记录</span></a>
            </ul>
            <div class="white-bg">
                <?php if($_GET['active'] == ''){ ?>
                <div class="tab-conbox">
                    <form method="post" class="form-horizontal" name="dataform" id="dataform" enctype="multipart/form-data" action="<?php echo U('Admin/Setting/message');?>">
                    <input name="form_submit"   type="hidden"  value="submit">
                    <input name="sub" type="hidden" value="1">
                        <div class="jurisdiction boxsizing">
                         
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing">短信条数：</dt>
                                <dd class="left text-l">
                                    <p>剩余<span><?php echo ($config['overage']); ?></span>条 <?php if($config['overage'] <= 0 ): ?><a href="http://www.shopdz.cn/index.php/OrderPay/index.html" target="_blank" style="margin-left: 20px;color: #00a2d4">立即购买</a><?php endif; ?> </p>

                                    <p class="remind1"></p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing">管理员手机：</dt>
                                <dd class="left text-l">
                                    <input type="text" class="com-inp1 radius3 boxsizing" value="<?php echo ($config['sms_mobile']); ?>" name="sms_mobile"   style="width:300px;">
                                    <p class="remind1">管理员手机号，可以接收到用户付款通知</p>
                                </dd>
                            </dl>
                            <dl class="juris-dl boxsizing">
                                <dt class="left text-r boxsizing"><span class="redstar">*</span>短信登录：</dt>
                                <dd class="left text-l">
                                    <div class="switch-box">
                                        <input type="checkbox" name="smg_login" id="switch-radio" class="switch-radio" <?php if($config['smg_login'] == 1 ): ?>checked="checked" <?php else: endif; ?> <?php if($config['smg_login'] == '' ): ?>checked="checked" <?php else: endif; ?>/>
                                        <span class="switch-half switch-open">ON</span>
                                        <span class="switch-half switch-close close-bg">OFF</span>
                                    </div>
                                    <p class="remind1">设置开启或关闭短信登录。</p>
                                </dd>
                            </dl>
                        </div>
                        <div class="btnbox3 boxsizing">
                            <a type="button" id="message_sub" class="btn1 radius3 marginT10  btn3-btnmargin">确认提交</a>
                        </div>
                        </form>
                </div>
                <?php }?>
                <?php if($_GET['active'] == 1){ ?>
                <div class="tab-conbox">
                	<div class="white-bg">
                		<div class="table-titbox">
				            <div class="option">
				                <h1 class="table-tit left boxsizing">模板列表</h1>
				                <ul class="operation-list left">
				                    <li class="refresh-li" onclick="location.reload();" ><a href="#"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
				                </ul>
				            </div>                       
				        </div>                            
                        <div class="comtable-box boxsizing">
                            <table class="com-table">
                                <thead>
                                    <tr>
                                        <th width="90">操作</th>
                                        <th class="text-l" width="200">短信模板名</th>
                                         <th class="text-l" width="600">短信模板</th>
                                        <th  width="140">开关</th>                
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(empty($sms)): ?><tr class="tr-minH">
                                            <td colspan="4">暂无数据！</td>
                                            <td></td>
                                        </tr>
                                    <?php else: ?>
                                	<?php if(is_array($sms)): foreach($sms as $key=>$mess): ?><tr>

                                        <td  style="text-align: center;">
                                            <div class="table-iconbox">
                                                <div class="edit-iconbox left edit-sele marginR10">

                                                <a class="edit-word table-icon-a" href="<?php echo U('Setting/messageedit', array('id'=>$mess['id']));?>"><i class="table-com-icon table-edit-icon"></i><span class="gap">编辑</span></a>
                                                </div>
                                                </div>

                                        </td>
                                        <td class="text-l" id="name"><?php echo ($mess["name"]); ?></td>
                                         <td class="text-l" id="name"><?php echo ($mess["message_content"]); ?></td>
				                        <td id="temp" >
                                            <?php if($mess["message_states"] == '1'): ?><div class="state-btn yes-state">
                                                    <i class="yes-icon"></i>
                                                    <span>开启</span>
                                                </div>
                                                <?php else: ?>
                                                <div class="state-btn no-state">
                                                    <i class="no-icon"></i>
                                                    <span>关闭</span>
                                                </div><?php endif; ?>            
                                        </td>
                                        <td></td>
                                    </tr><?php endforeach; endif; endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php }?>
                <?php if($_GET['active'] == 2){ ?>
                <div class="tab-conbox">
                    <div class="white-bg">
                        <div class="table-titbox">
                            <div class="option">
                                <h1 class="table-tit left boxsizing">短信记录</h1>
                                <ul class="operation-list left">
                                    <li class="refresh-li" onclick="location.reload();" ><a href="javascript:;"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
                                    <li class="dele-li del" onclick="del('ids',this)" href="javascript:;" rel-href="<?=U('/Setting/del_smslog/type/ids')?>" ><a href="#"><span><i href="#" class="operation-icon op-dele-icon"></i></span></a></li>
                                </ul>
                                <div class="search-box1 right">
                                    <form action="<?php echo U('Admin/Setting/message');?>" method="get" id="formid">
                                    <input type="hidden" name="active" value="2">
                                        <div class="search-boxcon boxsizing radius3 left">
                                            <select name="k" class="sele-com1 search-sele boxsizing" id="k">
                                                <option value="send_phone" <?php if($search_arr['k'] == 'send_phone'){ echo 'selected="selected"'; } ?> >手机号</option>
                                                <option value="send_type" <?php if($search_arr['k'] == 'send_type'){ echo 'selected="selected"'; } ?> >类别</option>
                                            </select>
                                            <input type="text" name="q" value="<?php echo ($search_arr['q']); ?>" class="search-inp-con boxsizing">
                                        </div>
                                        <input type="submit" value="搜索" class="search-btn right radius3">
                                    </form>
                                </div>


                            </div>                       
                        </div>                            
                        <div class="comtable-box boxsizing">
                            <table class="com-table">
                                <thead>
                                    <tr>
                                        <th width="100" class="text-l">
                                            <div class="button-holder">
                                                <p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-1" name="radio-1-set" class="regular-radio" /><label for="radio-1-1"></label><span class="radio-word"><?php echo (L("select_all")); ?></span></p>
                                            </div>
                                        </th>
                                        <th width="90">操作</th>
                                        <th class="text-l" width="120">手机号</th>
                                        <th class="text-l" width="130">短信类别</th>
                                        <th class="text-l" width="800">短信内容</th>
                                        <th class="text-l" width="150">发送时间</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(empty($log)): ?><tr class="tr-minH">
                                            <td colspan="4">暂无数据！</td>
                                            <td></td>
                                        </tr>
                                    <?php else: ?>
                                    <?php foreach($log as $k => $v){ ?>
                                    <tr>
                                        <td class="text-l">
                                            <div class="button-holder">
                                                <p class="radiobox table-radioMar"><input type="checkbox" id="radio-1-<?php echo ($k+2); ?>" name="subCheck[]" class="regular-radio" value="<?=$v['send_id']?>" /><label for="radio-1-<?php echo ($k+2); ?>"></label><span class="radio-word"></span></p>
                                            </div>
                                        </td>
                                        <td>
                                            <div style="text-align: center;">--</div>
                                        </td>
                                        <td class="text-l"><?php echo $v['send_phone']; ?></td>
                                        <td class="text-l"><?php echo $v['send_type']; ?></td>
                                        <td class="text-l"><div class="td-word"><?php echo $v['send_text']; ?></div></td>
                                        <td class="text-l"><?php echo date('Y-m-d H:i:s',$v['send_time']); ?></td>
                                        <td></td>
                                    </tr>
                                    <?php } endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo ($overpage); ?>
                <?php }?>
            </div>
        </div>  
        </div>  
        <!--内容结束-->

<script type="text/javascript">
	$(function(){
        $('.refresh-li').mousemove(function(){
			e=arguments.callee.caller.arguments[0] || window.event; 
			remindNeed($('.refresh-li'),e,'刷新');
		})
		$('.refresh-li').mouseout(function(){
	     	$('.tip-remind').remove();
	    }); 
        $('.dele-li').mousemove(function(){
            e=arguments.callee.caller.arguments[0] || window.event; 
            remindNeed($('.dele-li'),e,'批量删除');
        })
        $('.dele-li').mouseout(function(){
            $('.tip-remind').remove();
        });

        $('.td-word').bind(
            {
                mousemove:function(){
                    e=arguments.callee.caller.arguments[0] || window.event; 
                    tip = $(this).html();
                    remindNeed($(this),e,tip);
                },
                mouseout:function() {
                    $('.tip-remind').remove();
                }
            }
        );
    })
    $('#message_sub').click(function(){
        flag=checkrequire('dataform');
        if(!flag){
            $('#dataform').submit();
        }
    });

    function del(type,myself) {
        var ids = new Array();
        url = $(myself).attr('rel-href');
        $(".regular-radio").each(function(index){
            if($(this).prop("checked"))
            ids.unshift($(this).val())
        });
        showConfirm("确认要删除么？",function(){
            $.post(url,{checksubmit:'yes',ids:ids},function(data){
                if(data.status == 1){
                   showSuccess(data.info,function(){
                        window.location.reload();
                  });
                }else{
                    showError(data.info);
                }
            },'json')
        }); 
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
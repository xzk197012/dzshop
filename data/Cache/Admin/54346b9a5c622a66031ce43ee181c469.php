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
                <li>1.平台优惠券列表。</li>
                <li>2.列表包括所有优惠券模板。</li>
                <li>3.删除、编辑优惠券操作请谨慎进行。</li>
                <li>4.微信卡券 删除卡券不能删除已被用户领取，保存在微信客户端中的卡券</li>
            </ol>
        </div>
<div class="iframeCon">
<div class="iframeMain">
    <ul class="transverse-nav">
        <li class="activeFour"><a href="javascript:;"><span>优惠券</span></a></li>
        <li><a href="<?php echo U('Admin/Coupon/member_packet');?>"><span>用户优惠券</span></a></li>
    </ul>
    <div class="white-bg">
        <div class="table-titbox">
        <div class="option">
            <h1 class="table-tit left boxsizing">优惠券列表</h1>
            <ul class="operation-list left">
                <li class="add-li" onclick="location.href='<?php echo U('coupon/add');?>'"><a href="javascript:;"><span><i href="#" class="operation-icon add-icon"></i></span></a></li>
                <li class="refresh-li" onclick="location.reload();"><a href="javascript:;"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
                <!-- <li class="export-li"><a href="javascript:;"><span><i href="#" class="operation-icon export-icon"></i></span></a></li> -->
            </ul>
        </div>
            
            <form  method="get" class="form-horizontal" name="Search_form" action='<?php echo U("Coupon/lists");?>' >
                <div class="search-box1 right">
                    <div class="search-boxcon boxsizing radius3 left">
                        <select class="sele-com1 search-sele boxsizing" id="rpacket_select" name="rpacket_select">
                            <option value="rpacket_t_name">优惠券名称</option>
                        </select>
                        <input type="text" name="q" value="<?php echo $q; ?>" class="search-inp-con boxsizing"/>
                    </div>
                    <input type="submit"  value="搜索" class="search-btn right radius3"/>
                </div>
            </form>
            
        </div>
        
        <div class="comtable-box boxsizing">
            <table class="com-table">
                <thead>
                    <tr>
                        <th width="200">操作</th>
                        <th class="text-l" width="220">优惠券名称</th>
                        <th width="80">兑换积分</th>
                        <th width="80">面额</th>
                        <th width="80">消费金额</th>
                        <th width="150">使用有效期</th>
                        <th width="120">卡券类型</th>
                        <th width="120">状态</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($list)): ?><tr class="tr-minH">
                            <td colspan="7">暂无数据！</td>
                            <td></td>
                        </tr>
                    <?php else: ?>
                    <?php foreach($list as $v){ ?>
                    <tr>
                        <td>
                            <div class="table-iconbox">
                                <div class="edit-iconbox left edit-sele marginR10">
                                    <a class="edit-word table-icon-a" href='<?php echo U("coupon/show/id/$v[id]");?>'><i class="table-com-icon table-look-icon"></i><span class="gap">详情</span></a>
                                </div>
                                <div class="table-icon left setting-sele-par">
                                    <div class="setting-sele left radius3 boxsizing">
                                        <span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap">设置</span></span>
                                        <span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
                                    </div>
                                    <ul class="setting-sele-con remind-layer">
                                        <li><a style="display: block;" href="<?php echo U('coupon/edit').'?id='.$v['id']; ?>">编辑</a></li>
                                        <li><a style="display: block;" href="<?php echo U('coupon/grant').'?id='.$v['id']; ?>">发放</a></li>
                                        <li onclick="area_del(<?php echo $v["id"]; ?>);">删除</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </td>
                        <td class="text-l"><?php echo $v['rpacket_t_title']; ?></td>
                        <td><?php echo $v['rpacket_t_points']; ?></td>
                        <td><?php echo $v['rpacket_t_price']; ?></td>
                        <td><?php echo $v['rpacket_t_limit']; ?></td>
                        <td><?php echo $v['rpacket_t_end_datetext']; ?></td>
                        <td><?php echo $v['wx']; ?></td>
                        <td>
                        <?php if($v['state'] == 1){ ?>
                            <div class="state-btn yes-state">
                                <i class="yes-icon"></i>
                                <span>启用</span>
                            </div>
                        <?php }else{?>
                            <div class="state-btn no-state">
                                <i class="no-icon"></i>
                                <span>停用</span>
                            </div>
                        <?php } ?>
                        </td>
                        <td></td>
                    </tr>
                    <?php } endif; ?>
                </tbody>
            </table>
        </div>
        <?php echo ($page); ?>
    </div>
</div>
</div>

<script type="text/javascript">
    $(function(){
        //添加会员提示
        $('.add-li').mousemove(function(){
            e=arguments.callee.caller.arguments[0] || window.event; 
            remindNeed($('.add-li'),e,'添加优惠券');
        })
        $('.add-li').mouseout(function(){
            $('.tip-remind').remove();
        });
        $('.refresh-li').mousemove(function(){
            e=arguments.callee.caller.arguments[0] || window.event; 
            remindNeed($('.add-li'),e,'刷新');
        })
        $('.refresh-li').mouseout(function(){
            $('.tip-remind').remove();
        });
        $('.export-li').mousemove(function(){
            e=arguments.callee.caller.arguments[0] || window.event; 
            remindNeed($('.add-li'),e,'导出');
        })
        $('.export-li').mouseout(function(){
            $('.tip-remind').remove();
        });
    })
    function area_del(id) {
        showConfirm("未使用优惠券将不会失效，确认删除？",function(){
            $.get('<?php echo U('Coupon/delete')?>',{checksubmit:'yes',redpacket_t_id:id},function(data){
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
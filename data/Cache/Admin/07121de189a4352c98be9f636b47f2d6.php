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
                <li>1.用户优惠券列表。</li>
                <li>2.列表包含用户已使用和未使用全部优惠券。</li>
                <li>3.如需发放优惠券给指定用户请点击“+”进行发放。</li>
                <li>4.删除操作请谨慎进行。</li>
            </ol>
        </div>
<div class="iframeCon">
<div class="iframeMain">
    <ul class="transverse-nav">
        <li><a href="<?php echo U('Admin/Coupon/lists');?>"><span>优惠券</span></a></li>
        <li class="activeFour"><a href="javascript:;"><span>用户优惠券</span></a></li>
    </ul>
    <div class="white-bg">
        <div class="table-titbox">
        <div class="option">
            <h1 class="table-tit left boxsizing">用户优惠券</h1>
            <ul class="operation-list left">
                <li class="add-li" onclick="location.href='<?php echo U('coupon/grant');?>'"><a href="javascript:;"><span><i href="#" class="operation-icon add-icon"></i></span></a></li>
                <li class="refresh-li" onclick="location.reload();"><a href="javascript:;"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
                <!-- <li class="export-li"><a href="javascript:;"><span><i href="#" class="operation-icon export-icon"></i></span></a></li> -->
            </ul>
        </div>
            <div class="search-box1 right">
            <form  method="get" class="form-horizontal" name="Search_form" action=''>
<!--                             <div class="form-group time2 left">
                    <select  name="timetype"  class="sele-com1 boxsizing left search-sele1" style="height:24px;">
                        <option  <?php if($_GET['timetype'] == 'rpacket_used_date'){ echo 'selected="selected"';}?> value="rpacket_used_date" >使用时间</option>
                        <option  <?php if($_GET['timetype'] == 'rpacket_active_date'){ echo 'selected="selected"';}?>  value="rpacket_active_date" >发放日期</option>
                        <option  <?php if($_GET['timetype'] == 'rpacket_end_date'){ echo 'selected="selected"';}?> value="rpacket_end_date">有效期</option>
                    </select>
                    <div class='input-group date left time-width' data-date="2012-02-20" data-date-format="yyyy-mm-dd">
                        <input type="text" class="form-control com-inp1 datetimepicker2 time-inp1 search-inp1" name="min_date" value="<?php echo $_GET['min_date'];?>" />
                        <span class="left timeto">--</span>
                        <input type="text" class="form-control com-inp1 datetimepicker3 time-inp1 search-inp1" name="max_date" value="<?php echo $_GET['max_date'];?>" />
                        
                    </div>
                </div> -->
                <div class="search-boxcon boxsizing radius3 left">
                    <select class="com-sele radius3 juris-dl-sele" id="field" name="field">
                        <option value="rpacket_title" <?php if($_GET['field'] == 'rpacket_title' || empty($_GET['field'])){ echo 'selected="selected"';}?> >优惠券名称</option>
                        <option value="rpacket_owner_name" <?php if($_GET['field'] == 'rpacket_owner_name'){ echo 'selected="selected"';}?> >用户名</option>
                    </select>
                    <input type="text" name="q" value="<?php echo $_GET['q'];?>" class="search-inp-con boxsizing"/>
                </div>
                <input type="submit" name="search" value="搜索" class="search-btn right radius3"/>
            </form>
            </div>
        </div>
        
        <div class="comtable-box boxsizing">
            <table class="com-table">
                <thead>
                    <tr>
                        <th width="180">操作</th>
                        <th width="120">用户名</th>
                        <th class="text-l" width="220">优惠券名称</th>
                        <th width="120">优惠券面额（元）</th>
                        <th width="180">有效期</th>
                        <th width="180">领取时间</th>
                        <th width="180">使用时间</th>
                        <th width="120">订单号</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($list)): ?><tr class="tr-minH">
                            <td colspan="8">暂无数据！</td>
                            <td></td>
                        </tr>
                    <?php else: ?>
                    <?php foreach($list as $v){ ?>
                    <tr>
                        <td>
                            <div class="table-iconbox">
                                <div class="edit-iconbox left edit-sele boxsizing marginR10">
                                    <a class="edit-word table-icon-a alert-btn" id="<?php echo $v['rpacket_id']; ?>"><i class="table-com-icon table-dele-icon"></i><span class="gap">删除</span></a>
                                </div>
                                <div class="edit-iconbox left edit-sele boxsizing marginR10">
                                    <a class="edit-word table-icon-a" href="<?php echo U('coupon/member_packet_info/id/'.$v['rpacket_id']); ?>"><i class="table-com-icon table-look-icon"></i><span class="gap">详情</span></a>
                                </div>
                            </div>
                        </td>
                        <td><?php echo $v['rpacket_owner_name']; ?></td>
                        <td class="text-l"><?php echo $v['rpacket_title']; ?></td>
                        <td><?php echo $v['rpacket_price']; ?></td>
                        <td><?php echo $v['end_date']; ?></td>
                        <td><?php echo $v['active_date']; ?></td>
                        <td><?php echo $v['used_date']; ?></td>
                        <td><?php echo $v['order_id']; ?></td>
                        <td></td>
                    </tr>
                    <?php } endif; ?>
                </tbody>
            </table>
        </div>
        <?php echo ($page); ?>
    </div>
</div>

<div class="cover none"></div>
<div class="alert showAlert radius3 deleCoupon-alert specialAlert none">
    <i class="close-icon"></i>
    <h1 class="special-tit">删除用户优惠券</h1>
    <form method="post" class="form-horizontal" name="redpacke_form" id="redpacke_form"
         action="<?php echo U('Coupon/rep_delete');?>">
    <div class="special-con">
        <input type="hidden" name="checksubmit" value="yes" />
        <input type="hidden" name="id" value="" id="rpacket_id"/>
        <span class="special-con-left left">是否返还积分</span>
        <div class="button-holder left">
            <p class="radiobox"><input type="radio" id="radio-1-2" name="point_back" class="regular-radio" value="1" checked="checked"/><label for="radio-1-2"></label><span class="radio-word">是</span></p>
            <p class="radiobox"><input type="radio" id="radio-1-3" name="point_back" value="2" class="regular-radio"/><label for="radio-1-3"></label><span class="radio-word">否</span></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="alert-btnbox boxsizing">
        <a class="btn1 radius3" id="redpacke_form_submit">确认</a>
    </div>
    </form>
</div>


</div>
<script type="text/javascript">
    $(function(){
        //添加会员提示
        $('.add-li').mousemove(function(){
            e=arguments.callee.caller.arguments[0] || window.event; 
            remindNeed($('.add-li'),e,'发放优惠券');
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
            





        $('.alert-btn').click(function(){
            $('.cover').removeClass('none');
            $('.deleCoupon-alert').removeClass('none');
            $('#rpacket_id').val($(this).attr('id'));
        })
            
        $('.cover,.close-icon').click(function(){
            $('.cover').addClass('none');
            $('.deleCoupon-alert').addClass('none');
        })
        $('#redpacke_form_submit').click(function(){
            $('#redpacke_form').submit();
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
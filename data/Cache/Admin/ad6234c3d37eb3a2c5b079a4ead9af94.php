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
			<h1 class="tip-tit"><i class="tips-icon-lamp"></i>操作提示</h1>
			<span class="open-span span-icon"><i class="open-icon"></i></span>
		</div>
	</div>
	<ol class="tips-list" id="tips-list">
		<li>1.拼团列表页。</li>
	</ol>
</div>
<div class="iframeCon">
<div class="iframeMain">
       <ul class="transverse-nav">
        <li ><a href="<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'group'));?>"><span>活动列表</span></a></li>
		<li class="activeFour"><a href="<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'grouplist'));?>"><span>开团列表</span></a></li>
		<li ><a href="<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'joinlist'));?>"><span>参团列表</span></a></li>
        <li><a href="<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'groupset'));?>"><span>拼团设置</span></a></li>
    </ul>
    <div class="white-bg">
        <div class="table-titbox">
            <h1 class="table-tit left boxsizing">开团列表</h1>
            <ul class="operation-list left">
                <li class="refresh-li" onclick="location.reload();" ><a  href="#"><span><i  class="operation-icon refresh-icon"></i></span></a></li>
            </ul>
            <div class="search-box1 right">
            <form  method="get" class="form-horizontal"   action="<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'grouplist'));?>" name="Search_form"  >
                <div class="search-boxcon boxsizing radius3 left">
                    <select  id="field" name="field"  class="sele-com1 search-sele boxsizing">
                		<option  <?php if($_GET['field'] == 'goods_name'){ echo 'selected="selected"';}?> value="goods_name">商品名称</option>
                		<option  <?php if($_GET['field'] == 'sku'){ echo 'selected="selected"';}?> value="sku">SKU</option>
                		<option  <?php if($_GET['field'] == 'group_name'){ echo 'selected="selected"';}?> value="group_name">活动名称</option>
					<option  <?php if($_GET['field'] == 'buyer_name'){ echo 'selected="selected"';}?> value="buyer_name">会员账号</option>
						<option  <?php if($_GET['field'] == 'status'){ echo 'selected="selected"';}?> value="status">组团状态</option>
                	</select>
                    <input type="text" name="q" value="<?php echo $_GET['q']; ?>" class="search-inp-con boxsizing"/>
                </div>
                <input type="submit"  value="搜索" class="search-btn right radius3"/>
            </form>
            </div>
        </div>
        
        <div class="comtable-box boxsizing">
            <table class="com-table">
                <thead>
                    <tr>
                        <th  width="150">操作</th>
                        <th  width="90">团长</th>
                        <th  width="70">组团状态</th>
                        <th class="text-l"  width="150">活动名称</th>
                        <th  class="text-l" width="150">活动商品</th>
                        <th  width="90">SKU</th>
						<th class="text-l"  width="90">活动价格/原价</th>
                        <th  width="100">商品图片</th>
                        <th  width="70">付款人数</th>
                        <th  width="70">组团时限</th>
                        <th  width="150">开始时间</th>
                        <th  width="150">结束时间</th>
                        <th></th>
                    </tr>
                    
                </thead>
                <tbody>
                    <?php if(empty($lists)): ?><tr class="tr-minH">
                            <td colspan="2">暂无数据！</td>
                            <td></td>
                        </tr>
                    <?php else: ?>
                    <?php foreach($lists as $v){ ?>
                    <tr>
                        <td>
                            <div class="table-iconbox">
							<?php if(empty($v['status'])) { ?>
                                <div class="edit-iconbox left edit-sele boxsizing marginR10">
                                    <a class="edit-word spec_delete_button  table-icon-a" href='javascript:;' rel-href="<?php echo U('Group/closegroup',array('group_id'=>$v['group_id'],'active_id'=>$v['active_id']));?>"  ><i class="table-com-icon table-dele-icon"></i><span class="gap">关闭</span></a>
                                </div>
								<?php } ?>
                              
                                <div class="table-icon left setting-sele-par">
                                    <div class="setting-sele left radius3 boxsizing">
                                        <span class="setting-word"><i class="table-com-icon table-setting-icon"></i><span class="gap">设置</span></span>
                                        <span class="jtb-span-box boxsizing"><i class="jtb-span setting-jtb-icon"></i></span>
                                    </div>
                                    <ul class="setting-sele-con remind-layer">
                                        <li><a href="<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'joinlist','group_id'=>$v['group_id']))?>"> 参团列表</a></li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                        <td><?php echo $v['buyer_name']; ?></td>
                        <td><?php echo $v['status_text']; ?></td>
                        <td class="text-l"><?php echo $v['group_name']; ?></td>
                        <td class="text-l"><?php echo $v['goods_name']; ?></td>
                        <td><?php echo $v['goods_id']; ?></td>
						<td class="text-l"><?php echo $v['group_price']; ?>/<?php echo $v['goods_price']; ?></td>
                        <td>
							<div class="evalute-tableImg">
								<i class="evalute-icon  pre_view_img" url='<?php echo $v['group_image']; ?>'></i>
							</div>
						</td>
                        <td><?php echo $v['pay_count']; ?></td>
                        <td><?php echo $v['group_hour']; ?></td>
                        <td><?php echo $v['starttime_text']; ?></td>
                        <td><?php echo $v['endtime_text']; ?></td>
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
		$(document).posi({class:'pre_view_img'});
        //添加会员提示
        $('.add-li').mousemove(function(){
            e=arguments.callee.caller.arguments[0] || window.event; 
            remindNeed($('.add-li'),e,$(this).attr('title'));
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
        $('.spec_delete_button').click(function(){
			var _this = this;
    	    var rel_href = $(_this).attr('rel-href');
    			showConfirm('您确定要关闭拼团吗？',function(){
    			    $.get(rel_href,function(data){
    			        if(data.status==1){
        			        showSuccess(data.info,function(){
        			          $(_this).parent().hide();
            			    });
        			    }else{
            			    showError(data.info);
            			}
        			},'json')
    			});    
    		
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
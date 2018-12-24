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

        <li> 1.自定义菜单最多包括3个一级菜单，每个一级菜单最多包含5个二级菜单。</li>
        <li> 2.一级菜单最多4个汉字，二级菜单最多7个汉字，多出来的部分将会以“...”代替。</li>
        <li> 3.创建自定义菜单后，菜单的刷新策略是，在用户进入公众号会话页或公众号profile页时，如果发现上一次拉取菜单的请求在5分钟以前，就会拉取一下菜单，如果菜单有更新，就会刷新客户端的菜单。测试时可以尝试取消关注公众账号后再次关注，则可以看到创建后的效果</li>
        <li> 4.微信登录地址为：<?php echo $wxlogin?></li>
    </ol>
</div>

<div class="iframeCon">
<div class="iframeMain">
    <div class="white-bg">
        <div class="table-titbox">
            <h1 class="table-tit left boxsizing">菜单列表</h1>
            <ul class="operation-list left">
                <li class="add-li"><a href="<?php echo U('Wx/menuedit');?>"><span><i href="#" class="operation-icon add-icon"></i></span></a></li>
                <li class="refresh-li"><a href="javascript:void (0)"  onclick="location.reload()"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
                <li class="creat-li"><a href="javascript:void (0)" onclick="disp_prompt()"><span><i class="operation-icon creat-icon"></i></span></a></li>
            </ul>

        </div>
        <div class="comtable-box boxsizing">
            <table class="com-table">
                <thead>
                <tr>
                    <th width="180">操作</th>
                    <th width="140" class="text-l">菜单名称</th>
                    <th width="140">触发类型</th>
                    <th width="450" class="text-l">响应动作</th>
                    <th width="110">排序</th>
                    <th width="240"></th>
                </tr>
                </thead>
                <tbody>
                <?php if(empty($menu)): ?><tr class="tr-minH">
                        <td colspan="5">暂无数据！</td>
                        <td></td>
                    </tr>
                <?php else: ?>
                <?php if(is_array($menu)): foreach($menu as $key=>$member): ?><tr id="menu_<?php echo ($member["id"]); ?>" class="menulid_<?php echo ($member["lid"]); ?>">
                        <td>
                            <div class="table-iconbox">
                                <div class="edit-iconbox left edit-sele marginR10">
                                    <a class="edit-word table-icon-a delmenu"  href="javascript:void(0)" id="<?php echo ($member["id"]); ?>" lid="<?php echo ($member["lid"]); ?>"><i class="table-com-icon table-dele-icon"></i><span class="gap">删除</span></a>
                                </div>
                                <div class="edit-iconbox left edit-sele marginR10">
                                    <a class="edit-word table-icon-a" href="<?php echo U('Wx/menuedit', array('id'=>$member['id'],'type'=>'edit'));?>"><i class="table-com-icon table-edit-icon"></i><span class="gap">编辑</span></a>
                                </div>
                            </div>
                        </td>

                        <?php if($member["level"] == 1 ): if($member["last"] != 1 ): ?><td class="text-l"><div class="td-word classify-name"><i class="classify-icon forks-icon forks-iconF marginR5"></i><?php echo ($member["name"]); ?></div></td>
                                <?php else: ?>
                                <td class="text-l"><div class="td-word classify-name"><i class="classify-icon forks-icon marginR5"></i><?php echo ($member["name"]); ?></div></td><?php endif; ?>
                        <?php else: ?>
                            <td class="text-l"><div class="td-word classify-name"><?php echo ($member["name"]); ?><a href="<?php echo U('Wx/menuedit', array('id'=>$member['id'],'type'=>'add'));?>"><i class="classify-icon classify-open-icon marginL5"></i></a></div></td><?php endif; ?>
                        <td><?php echo ($member["type"]); ?></td>
                        <td class="text-l"><div class="word-overflow" title="<?php echo ($member["keywords"]); ?>"><?php echo ($member["keywords"]); ?></div></td>
                        <td><?php echo ($member["order"]); ?></td>
                        <td></td>

                    </tr><?php endforeach; endif; endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
</div>

<script type="text/javascript">
    $(function(){

        $('.add-li').mousemove(function(){
            e=arguments.callee.caller.arguments[0] || window.event;
            remindNeed($('.add-li'),e,'添加菜单');
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
        $('.creat-li').mousemove(function(){
            e=arguments.callee.caller.arguments[0] || window.event;
            remindNeed($('.add-li'),e,'生成菜单');
        })
        $('.creat-li').mouseout(function(){
            $('.tip-remind').remove();
        });
        $('.delmenu').click(function(){
            var id = $(this).attr('id');
            var lid = $(this).attr('lid');
            if(lid == 0){
                showConfirm('您确定要删除吗,将删除所有子菜单',function () {
                    delmenu(id,lid)
                });
            }else{
                showConfirm('您确定要删除吗',function () {
                    delmenu(id,lid)
                });
            }
        })

    })
    function delmenu(id,lid){
        $.ajax({
            url:"<?php echo U('Wx/delmenu');?>",
            type:"POST",
            data:{id:id,lid:lid},
            success: function(data) {
                var data = data;
                if(data.code == 0){
                    showSuccess(data.message);
                    if(lid == 0){
                        $("#menu_"+id).remove();
                        $(".menulid_"+id).remove();
                    }else{
                        $("#menu_"+id).remove();
                    }
                }else{
                    showError(data.message);
                }
            }
        });
    }
    function disp_prompt()
    {
       location.href="<?php echo U('Wx/menuSend');?>";
    }
</script>
</body>
</html>

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
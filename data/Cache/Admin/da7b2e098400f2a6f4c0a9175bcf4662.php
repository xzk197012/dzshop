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

        <li> 1.关键词不能重复添加。</li>
        <li> 2.关键词删除后为彻底删除。</li>
        <li> 2.关键词不启用微信用户出发后不能返回内容</li>
    </ol>
</div>

<div class="iframeCon">
<div class="iframeMain">
    <div class="white-bg">
        <div class="table-titbox">
            <h1 class="table-tit left boxsizing">关键词列表</h1>
            <ul class="operation-list left">
                <li class="add-li"><a href="<?php echo U('Wx/keywordsedit');?>"><span><i href="#" class="operation-icon add-icon"></i></span></a></li>
                <li class="refresh-li"><a href="javascript:void (0)"  onclick="location.reload()"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
            </ul>
            <form action="<?=U('/Wx/keywordsOp')?>" method="post" id='formid'>
                <div class="search-box1 right">
                    <div class="search-boxcon boxsizing radius3 left">
                        <select class="sele-com1 search-sele boxsizing" name="type" id="search_select">
                            <option value="member_mobile">关键词</option>
                        </select>
                        <input type="text" value="<?php echo ($search_text); ?>" name="search_text" class="search-inp-con boxsizing"/>
                    </div>
                    <button type="submit" class="search-btn right radius3">搜索</button>
                </div>
            </form>
        </div>
        <div class="comtable-box boxsizing">
            <table class="com-table">
                <thead>
                <tr>
                    <th width="180">操作</th>
                    <th width="140" class="text-l">关键词</th>
                    <th width="120">回复类型</th>
                    <th width="120">状态</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php if(empty($keywords)): ?><tr class="tr-minH">
                        <td colspan="4">暂无数据！</td>
                        <td></td>
                    </tr>
                <?php else: ?>
                <?php if(is_array($keywords)): foreach($keywords as $key=>$keyword): ?><tr id="menu_<?php echo ($keyword["id"]); ?>" class="menulid_<?php echo ($keyword["id"]); ?>">
                        <td>
                            <div class="table-iconbox">
                                <div class="edit-iconbox left edit-sele marginR10">
                                    <a class="edit-word table-icon-a delmenu"  href="javascript:void(0)" id="<?php echo ($keyword["id"]); ?>"><i class="table-com-icon table-dele-icon"></i><span class="gap">删除</span></a>
                                </div>
                                <div class="edit-iconbox left edit-sele marginR10">
                                    <a class="edit-word table-icon-a" href="<?php echo U('Wx/keywordsedit', array('id'=>$keyword['id']));?>"><i class="table-com-icon table-edit-icon"></i><span class="gap">编辑</span></a>
                                </div>
                            </div>
                        </td>
                        <td ><div class="td-word classify-name text-l"><?php echo ($keyword["keyword"]); ?></div></td>
                        <td><?php echo ($keyword["isimg"]); ?></td>
                        <td>
                            <?php if($keyword["states"] == '1'): ?><div class="state-btn yes-state">
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
        <?php echo ($page); ?>
    </div>
</div>
</div>

<script type="text/javascript">
    $(function(){
        $('.add-li').mousemove(function(){
            e=arguments.callee.caller.arguments[0] || window.event;
            remindNeed($('.add-li'),e,'添加关键词');
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

        $('.creat-li').mouseout(function(){
            $('.tip-remind').remove();
        });
        $('.delmenu').click(function(){
            var id = $(this).attr('id');
            showConfirm('您确定要删除吗',function () {
                $.ajax({
                    url:"<?php echo U('Wx/delkeywords');?>",
                    type:"POST",
                    data:{id:id},
                    success: function(data) {
                        var data = data;
                        if(data.code == 0){
                            showSuccess(data.message);
                            $("#menu_"+id).remove();
                        }else{
                            showError(data.message);
                        }
                    }
                });
            });

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
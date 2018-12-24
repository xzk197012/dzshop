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
        <?php echo (L("article_list_tips")); ?>
    </ol>
</div>
<div class="iframeCon">
<div class="iframeMain">
    <div class="white-bg">
        <div class="table-titbox">
            <div class="option">
                <h1 class="table-tit left boxsizing"><?php echo (L("article_list")); ?></h1>
                <ul class="operation-list left">
                    <li class="add-li"><a href="<?php echo U('Cms/article_add');?>"><span><i class="operation-icon add-icon"></i></span></a></li>
                    <li class="refresh-li" onclick="location.reload();"><a href="#"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
                </ul>
            </div>         
        
        <form  action="<?php echo U('cms/article_list');?>"  method="get">               
            <div class="search-box1 right">
                <div class="search-boxcon boxsizing radius3 left">
                    <select  name="field" id="field"  class="sele-com1 search-sele boxsizing">
                        <option  <?php if($_GET['field'] == 'article_title'){ echo 'selected="selected"';}?> value="article_title"><?php echo (L("article_title")); ?></option>
                    </select>
                    <input type="text" name="value" value="<?php echo $_GET['value'];?>" class="search-inp-con boxsizing"/>
                </div>
                <input type="submit" name="search" value="<?php echo (L("search")); ?>" class="search-btn right radius3"/>
            </div>
        </form>
        </div>
        <div class="comtable-box boxsizing">
            <table class="com-table">
                <thead>
                    <tr>
                        <th width="180"><?php echo (L("operation")); ?></th>
                        <th width="120"><?php echo (L("sequence")); ?></th>
                        <th width="300" class="text-l"><?php echo (L("title")); ?></th>
                        <th width="400">文章链接</th>
                        <th width="200"><?php echo (L("class_name")); ?></th>
                        <th width="200"><?php echo (L("release_time")); ?></th>
                        <th width="120"><?php echo (L("status")); ?></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($list)): ?><tr class="tr-minH">
                            <td colspan="7">暂无数据！</td>
                            <td></td>
                        </tr>
                    <?php else: ?>
                    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                        <td>
                            <div class="table-iconbox">                            
                                <div class="edit-iconbox left edit-sele boxsizing marginR10">
                                    <a class="edit-word table-icon-a" href='<?php echo U("Cms/article_add/id/$vo[article_id]");?>'><i class="table-com-icon table-edit-icon"></i><span class="gap"><?php echo (L("edit")); ?></span></a>
                                </div>
                                <div class="edit-iconbox left edit-sele boxsizing marginR10">
                                    <a class="edit-word table-icon-a" href="javascript:;" onclick="class_del(<?php echo ($vo["article_id"]); ?>);"><i class="table-com-icon table-dele-icon"></i><span class="gap"><?php echo (L("delete")); ?></span></a>
                                </div>
                            </div>
                        </td>
                        <td><?php echo ($vo["article_sort"]); ?></td>
                        <td class="text-l"><a href="<?php echo SITE_URL;?>wap/artical.html?id=<?php echo ($vo["article_id"]); ?>" target='blank'><?php echo ($vo["article_title"]); ?></a></td>
                        <td><?php echo SITE_URL;?>wap/artical.html?id=<?php echo ($vo["article_id"]); ?></td>
                        <td><?php echo $class_array[$vo['class_id']] ?></td>
                        <td><?php echo date('Y-m-d H:i:s',$vo['article_time']);?></td>                        
                        <td>
                            <?php if(!empty($vo['article_show'])){ ?>
                            <div class="state-btn yes-state">
                                <i class="yes-icon"></i>
                                <span><?php echo (L("open")); ?></span>
                            </div>
                            <?php }else{ ?>
                            <div class="state-btn no-state">
                                <i class="no-icon"></i>
                                <span><?php echo (L("close")); ?></span>
                            </div>
                            <?php } ?>
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
            remindNeed($('.add-li'),e,'<?php echo (L("article_add")); ?>');
        })
        $('.add-li').mouseout(function(){
            $('.tip-remind').remove();
        });
        $('.refresh-li').mousemove(function(){
            e=arguments.callee.caller.arguments[0] || window.event; 
            remindNeed($('.add-li'),e,'<?php echo (L("refresh")); ?>');
        })
        $('.refresh-li').mouseout(function(){
            $('.tip-remind').remove();
        });

            
    }) 
</script>
<script type="text/javascript">
    function class_del(id) {
        showConfirm("<?php echo (L("article_delete_tips")); ?>",function(){
                var url = "<?php echo U('Cms/article_del');?>"+'?id='+id;
                $.get(url,function(data){
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
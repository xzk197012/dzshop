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
    	<style>
.tr_hide{display:none}
</style>           
		   <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>角色详细<small></small></h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <div class="col-lg-8">
                                    <a href="javascript:void(0)" class="btn btn-success btn-rounded add-role" rel-href="<?=U('/permission/addrole')?>">添加角色</a>
                                </div>
                                <div class="col-lg-8">　</div>
                                <table class="table table-striped table-bordered table-hover dataTables-example">
								<form action="<?=U('/permission/addnode')?>" method="post">
                               
                                    <tbody>
                                    <?php foreach($data_list as $val=>$v):?> 
									<tr class="gradeX tr_toggle" data-col="<?=$val?>"><td colspan='7'> 
										<?=$val?>  <input class="addcontroller" name="<?=$val?>" value="<?=$rbacnode[$val][$val]['name_cn']?>" index="<?=$rbacnode[$val][$val]['id']?>" rel-href="<?=U('/permission/addcontroller')?>"   />
										排序<input   name="sort[<?=$rbacnode[$val][$val]['id']?>]" value="<?=$rbacnode[$val][$val]['sort']?>" index="<?=$rbacnode[$val][$val]['id']?>" rel-href="<?=U('/permission/addcontroller')?>"   />
										classname<input  name="rbac[classname][<?=$val?>]" value="<?=$rbacnode[$val][$val]['classname']?>" index="<?=$rbacnode[$val][$val]['id']?>" rel-href="<?=U('/permission/addcontroller')?>"   />
									</td></tr>
									<?php foreach($v as $method):?>
                                       <tr  class="gradeX stats_<?=$val?> tr_hide">
											<td><?=$rbacnode[$val][$method]['id']?></td>
										   <td><?=$method?></td>
											<td>
											<?php if($rbacnode[$val][$method]['id']) { ?>
											<input name="rbac[name][<?=$val?>][<?=$rbacnode[$val][$method]['id']?>]" value="<?=$rbacnode[$val][$method]['name_cn']?>"  />
											<?php }else {?>
												<input name="rbac[name][<?=$val?>][<?=$method?>]"  value="<?=$method?>" />
											<?php }?>
											</td>
											
											<td>
											排序<input   name="sort[<?=$rbacnode[$val][$method]['id']?>]" value="<?=$rbacnode[$val][$method]['sort']?>"  />
											</td>
                                            <td>
											
										<?php if($rbacnode[$val][$method]['id']) { ?>
												<input 	name="rbac[edit][<?=$val?>][]"  type="checkbox" value="<?=$rbacnode[$val][$method]['id']?>" checked="checked" />
											<?php }else {?>
												<input name="rbac[news][<?=$val?>][]"  type="checkbox" value="<?=$method?>" />
											<?php }?>
											</td>
											<td>设为导航
											<?php  if(!empty($rbacnode[$val][$method]['asmenu'])) {?> 	<input rel-href="<?=U('/permission/addmenu')?>" class="menu"     type="checkbox"  value="<?=$rbacnode[$val][$method]['id']?>" checked="checked" />  <?php }else {?>
											<input rel-href="<?=U('/permission/addmenu')?>" class="menu"     type="checkbox"  value="<?=$rbacnode[$val][$method]['id']?>" />
											<?php }?>
											</td>
											<td>关联<input type="text" name="siblings[<?=$rbacnode[$val][$method]['id']?>]"  value="<?=$rbacnode[$val][$method]['siblings']?>" /></td>
                                        </tr>
                                    <?php endforeach;?>
                                    <?php endforeach;?>
									<tr>
									<td></td>
									<td colspan=3>
									<input type="submit" name="保存" value="保存" />
								 
									</td></tr>
                                    </tbody>
									</form>
                                </table>
                                <?=$page?>
                            </div>
                        </div>
                    </div>
                </div>
<script type="text/javascript">

    $(function(){
        $('.menu').click(function(){
			var _val = $(this).val();
            var href = $(this).attr('rel-href');
			$.post(href,{id:_val},function (data) {
				var obj = eval('('+data+')');
				if(obj.code <0){
					alert(obj.msg);
				}
			});
        });
		$('.addcontroller').blur(function() {
			var _val = $(this).val();
			var _name = $(this).attr('name');
			var _this =this;
			var _id = $(this).attr('index');
		 
            var href = $(this).attr('rel-href');
			$.post(href,{_name:_val,name:_name,id:_id},function (data ) {
					var obj = eval('('+data+')');
				
					if(obj.id >='0')
						$(_this).attr('index',obj.id);
			});
		});
		$('.tr_toggle').click(function() {
			var con = $(this).attr('data-col');
			 $(".stats_"+con).toggleClass("tr_hide");
		});
		

        $('.add-role').click(function(){
            var href = $(this).attr('rel-href');
            $.layer({
                type: 2,
                shadeClose: true,
                title: false,
                closeBtn: [0, false],
                shade: [0.8, '#000'],
                border: [0],
                offset: ['20px',''],
                area: ['500px', ($(window).height() - 100) +'px'],
                iframe: {src: href}
            }); 
        })

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
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
    	<ul class="release-tab">
	<li class="radius5"><a href="<?php echo U('Commodity/goods_add_step1',array('goods_common_id'=>$goods_common['goods_common_id'],'edit'=>1));?>" >1.&nbsp;基本信息</a></li>
	<li class="radius5 activeRelease">2.&nbsp;规格设置</li>
	<li class="radius5">3.&nbsp;运费设置</li>
	<li class="radius5">4.&nbsp;参数设置</li>
	<li class="radius5">5.&nbsp;发布成功</li>
</ul>

<!--弹框开始-->
<div class="cover spec_add_element none"></div>
<div class="alert spec_add_element none  showAlert radius3 addSpec-alert specialAlert">
	<i class="close-icon" onclick="$('.spec_add_element').addClass('none');" ></i>
	<h1 class="special-tit">添加规格值</h1>
	<form  id="spec_value_add_form"   autocomplete="off"   class="form-horizontal"  action="<?php echo U('Commodity/spec_value_add');?>"  method="post" >
	<div class="special-con addSpec-con">
		<span class="special-con-left left">规格值</span>
		<input id="add_spec_value_id"  name="spec_id" class="form-control"  value=""  type="hidden"> 
		<input type="text" name="spec_value" class="com-inp1 radius3 boxsizing left" id="add_spec_value_text" >
		<div class="clear"></div>
		<p class="special-remind">请输入规格值名称</p>
	</div>
	<div class="alert-btnbox boxsizing">
		<a   id="spec_value_submit"  class="btn1 radius3"><?php echo (L("submit_btn")); ?></a>
	</div>
	</form>
</div>
		

<!--内容开始-->
<div class="iframeCon">
	<ul class="transverse-nav">
	    <li class="activeFour"><a href="javascript:;"><span>规格设置</span></a></li>
	</ul>
	<div class="white-bg">
		<form class="form-horizontal" id="main_form" autocomplete="off"  method="post"  action="<?php echo U('Commodity/goods_add_step2');?>">
        <input name="goods_common_id"   type="hidden"  value="<?php  echo intval($goods_common['goods_common_id']);?>"   > 
		<div class="jurisdiction boxsizing release-juris">
			<dl class="juris-dl boxsizing release-dl">
				<dt class="left text-r boxsizing"><span class="redstar">*</span>请选择规格：</dt>
				<dd class="left text-l">
					<div class="checkbox-holder"><?php if(!empty($spec_list)){ foreach($spec_list as $v){ ?><p class="radiobox release-check"><input  class="regular-radio spec_lists"  type="checkbox" value="<?php echo $v['spec_id']?>"  id="spec_lists_<?php echo $v['spec_id']?>"   name="spec_ids[]"/><label for="spec_lists_<?php echo $v['spec_id']?>"></label><span  title="<?php echo $v['spec_name'];?>" class="radio-word"><?php echo $v['spec_name'];?></span></p><?php } } ?>
					</div>
					<p class="remind1">请选择商品规格 至少要选一个 最多不允许超过2个
					</p>
				</dd>
			</dl>
			<dl id="spec_value_after"  class="juris-dl boxsizing release-dl">
				<dt class="left text-r boxsizing"><span class="redstar">*</span>价格设置：</dt>
				<dd class="left text-l" id="goods_list_div">
				</dd>
			</dl>
		</div>
		<div class="btnbox3 boxsizing">
		    <?php if($_GET['save']==1){ ?>
		    <a type="button" id="submit_button" class="btn1 radius3 marginT10  btn3-btnmargin"><?php echo (L("submit_btn")); ?></a>
		    <a class="btn1 radius3 marginT10 " href="<?php echo U('Commodity/goods_list');?>">返回列表</a>
			<?php }else{ ?>
			<a id="submit_button" class="btn1 radius3 btn3-btnmargin release-nextbtn"><span class="next-remind boxsizing">下一步</span><span class="next-con">运费设置</span></a>
		    <?php } ?>
		</div>
		</form>
	</div>
</div>
<!--内容结束-->
<script type="text/javascript">
var  goods_common_price =  '<?php  echo $goods_common['goods_price']?>';
	$(function(){
		$('#submit_button').click(function(){
// 	        flag=checkrequire('main_form');
	        $.post($('#main_form').attr('action'),$('#main_form').serialize(),function(data){
	        	if(data.status==1){
                	showSuccess(data.info,function(){
                		<?php if($_GET['save']==1){ ?>
	                	window.location.href = '<?php echo U('Commodity/goods_list');?>' ;    
	                	<?php }else{?>
	                    window.location.href = data.url ;
                	    <?php } ?>
                    });
                }else{
                     showError(data.info);
                }
            },'json');
	    });
	    
		//批量 设置价格的显示
		$(document).on('click','.edit-icon',function(){
			$(this).toggleClass('uploadimg-active ');
			if($(this).parents('th').find('.edit-spec').css("display")=="none"){
				$(this).parents('th').find('.edit-spec').show();
			} else {
				$(this).parents('th').find('.edit-spec').hide();
			}
	    });

	    //规格值添加按钮的点击事件
		$(document).on('click','.spec_value_add_btn',function(){
	
    		var _spec_id =    $(this).attr('data-spec_id');
    		$('#add_spec_value_id').val(_spec_id);
    		$('.spec_add_element').removeClass('none');
    	})
    	//规格值添加
        
        $('#spec_value_submit').click(function(){
            $.post('<?php echo U('Commodity/spec_value_add');?>',$('#spec_value_add_form').serialize(),function(response){
            	if(response.status==1){
                	var  spec_value =  response.info;
                	spec_value_id_v[spec_value.spec_value_id]  = spec_value.spec_value;
					spec_value_id_spec_id[spec_value.spec_value_id]  =  spec_value.spec_id;
					var  html= '<p class="radiobox release-check"><input  data-spec_id="'+spec_value.spec_id+'" id="spec_value_lists_'+spec_value.spec_value_id+'" type="checkbox"  value="'+spec_value.spec_value_id+'" name="spec_value['+spec_value.spec_id+'][]"  class="regular-radio spec_value_lists" /><label for="spec_value_lists_'+spec_value.spec_value_id+'"  class="spec_lists_label"></label><span title="'+spec_value.spec_value+'"  class="radio-word">'+spec_value.spec_value+'</span></p>';
                    $('#spec_value_div_'+spec_value.spec_id+' .checkbox-holder').append(html);
            		//绑定点击事件
                    $('#add_spec_value_id').val(0);
                    $('#add_spec_value_text').val('');
                    $('.spec_add_element').addClass('none');
    				showSuccess('添加成功');
                }else{
                     showError(response.info);
                }
            },'json');
        });
        $(document).on('click','.spec_value_lists',re_compute_spec_value);
	})
</script>
<script src="/static/js/goods_add.js"></script>
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
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
	<li class="radius5"><a href="<?php echo U('Commodity/goods_add_step1',array('goods_common_id'=>$goods_common['goods_common_id']));?>" >1.&nbsp;基本信息</a></li>
	<li class="radius5"><a href="<?php echo U('Commodity/goods_add_step2',array('goods_common_id'=>$goods_common['goods_common_id']));?>" >2.&nbsp;规格设置</a></li>
	<li class="radius5"><a href="<?php echo U('Commodity/goods_add_step3',array('goods_common_id'=>$goods_common['goods_common_id']));?>" >3.&nbsp;运费设置</a></li>
	<li class="activeRelease radius5">4.&nbsp;参数设置</li>
	<li class="radius5">5.&nbsp;发布成功</li>
</ul>
<!--内容开始-->
<div class="iframeCon">
	<ul class="transverse-nav">
	    <li class="activeFour"><a href="javascript:;"><span>参数设置</span></a></li>
	</ul>
	<div class="white-bg">
		<div class="comtable-box boxsizing">
			<div class="releaseThree-tabletit">
				<input type="button" id="param_add_btn" class="release-btn left search-btn radius3" value="新增参数"/>
			</div>
			<form class="form-horizontal" id="main_form" autocomplete="off"  action="<?php echo U('Commodity/goods_add_step4');?>"  method="post">
             <input name="goods_common_id"   type="hidden"  value="<?php  echo intval($goods_common['goods_common_id']);?>"   > 
			<table class="com-table releaseThree-table" id="param_list_div">
					<tr>
						<th width="150">参数名称</th>
						<th width="732">参数值</th>
						<th width="120">排序</th>
						<th width="70">操作</th>
					</tr>
					<tr>
                       <td colspan="4" ><p class="remind1" style="">点击左上角“新增参数”按钮添加商品参数，如“材质，纯棉”等等，也可以不添加任何参数直接发布商品。</p></td>
                   </tr>
				<?php $param_num = 1;?>
                <?php if(!empty($param_list)){ ?>
                <?php foreach($param_list as $v){ ?>
            	<tr>
            	
            	        <td>
							<input name="param_list[<?php echo ($param_num); ?>][param_name]"  value="<?php echo ($v['param_name']); ?>"  type="text" class="com-inp1 radius3 boxsizing release-inp table-inp-relative para-inp1" placeholder="请输入参数名称"/>
						</td>
						<td>
							<input name="param_list[<?php echo ($param_num); ?>][param_value]"  value="<?php echo ($v['param_value']); ?>" type="text" class="com-inp1 radius3 boxsizing release-inp table-inp-relative para-inp2" placeholder="请输入参数值"/>
						</td>
						<td>
							<input name="param_list[<?php echo ($param_num); ?>][listorder]"   value="<?php echo ($v['listorder']); ?>"  type="text" class="com-inp1 radius3 boxsizing release-inp table-inp-relative para-inp3" placeholder="99"/>
						</td>
						<td class="release-icon">
							<i class="operation-icon op-dele-icon remove_btn"></i>
						</td>
                </tr>
               <?php $param_num ++;?>
               <?php } ?>
               <?php } ?>
			</table>
		</div>
		<div class="release-btnbox boxsizing">
		    <?php if($_GET['save']==1){ ?>
		    <a type="button" id="submit_button" class="btn1 submit_button radius3 marginT10  btn3-btnmargin"><?php echo (L("submit_btn")); ?></a>
		    <a class="btn1 radius3 marginT10 " href="<?php echo U('Commodity/goods_list');?>">返回列表</a>
			<?php }else{ ?>
            <input type="button" shopdz-submittype="sell" id="base_setting" class="submit_button btn1 radius3 btn3-btnmargin" value="立即发布">
            <input type="button" shopdz-submittype="unsell" id="base_setting" class="submit_button btn1 radius3 marginT10" value="放入仓库">
            <?php } ?>
        </div>
        </form>
	</div>
</div>
<!--内容结束-->
<?php if($param_num==1){ ?>
<?php } ?>
<script>
$(function(){
    var   param_num =   <?php echo $param_num; ?>;
	 //添加按钮点击之后添加一行
    $('#param_add_btn').click(function(){
       var  html ='';
       html+=''
        +'<tr>'
       		+'<td>'
       			+'<input type="text" name="param_list['+param_num+'][param_name]"   class="com-inp1 radius3 boxsizing release-inp table-inp-relative para-inp1" placeholder="请输入参数名称"/>'
       		+'</td>'
       		+'<td>'
       			+'<input type="text"  name="param_list['+param_num+'][param_value]"    class="com-inp1 radius3 boxsizing release-inp table-inp-relative para-inp2" placeholder="请输入参数值"/>'
       		+'</td>'
       		+'<td>'
       			+'<input type="text" name="param_list['+param_num+'][listorder]"    value="'+(100-param_num)+'"  class="com-inp1 radius3 boxsizing release-inp table-inp-relative para-inp3" placeholder="99"/>'
       		+'</td>'
       		+'<td class="release-icon">'
       			+'<i class="operation-icon op-dele-icon remove_btn"></i>'
       		+'</td>'
       	+'</tr>';
       $('#param_list_div').append(html);
       param_num++;
    });
    $(document).on('click','.remove_btn',function(){
        $(this).parents('tr').remove();
    });

    $('.submit_button').click(function(){
//        flag=checkrequire('main_form');
    $.post($('#main_form').attr('action'),$('#main_form').serialize()+'&'+$(this).attr('shopdz-submittype')+'=1',function(data){
    	if(data.status==1){
        	showSuccess(data.info,function(){
        		<?php if($_GET['save']==1){ ?>
            	window.location.href = '<?php echo U('Commodity/goods_list');?>' ;    
            	<?php }else{ ?>
                window.location.href = '<?php echo U('Commodity/goods_add_step5',array('goods_common_id'=>$goods_common['goods_common_id']));?>' ;
        	    <?php } ?>
        	   
            });
        }else{
             showError(data.info);
        }
    },'json');
});
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
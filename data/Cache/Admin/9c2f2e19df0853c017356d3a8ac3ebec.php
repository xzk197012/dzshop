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
	<li class="activeRelease radius5">3.&nbsp;运费设置</li>
	<li class="radius5">4.&nbsp;参数设置</li>
	<li class="radius5">5.&nbsp;发布成功</li>
</ul>
<script>
var dl={};
dl['fixed']  =  '';
dl['fixed']+=''
+'<dl shopdz-dltype="fixed" class="juris-dl boxsizing release-dl">'
	+'<dt class="left text-r boxsizing"><span class="redstar">*</span>运费金额：</dt>'
	+'<dd class="left text-l">'
		+'<div class="release-price boxsizing radius5">'
			+'<input type="text"  name="freight" value="<?php echo price_format($goods_common['freight']);?>" class="price-inp left"/>'
			+'<span class="price-unit left">元</span>'
		+'</div>'
		+'<p class="remind1 release-remind">请输入运费金额</p>'
	+'</dd>'
+'</dl>';

dl['num']  =  '';
dl['num']+=''			
			+'<dl  shopdz-dltype="num" class="juris-dl boxsizing release-dl">'
				+'<dt class="left text-r boxsizing"><span class="redstar">*</span>运费金额：</dt>'
				+'<dd class="left text-l">'
					+'<div class="relese-table-box">'
						+'<table class="com-table relese-table radius3">'
							+'<tr>'
								+'<td   width="80"  class="text-r">'
									+'单件运费'
								+'</td>'
								+'<td   width="120"  class="text-l">'
									+'<div class="release-price release-table-price boxsizing radius3">'
										+'<input type="text"  name="freight" value="<?php echo price_format($goods_common['freight']);?>" class="price-inp left"/>'
										+'<span class="price-unit left">元</span>'
									+'</div>	'
								+'</td>'
								+'<td  width="80" >&nbsp;</td>'
								+'<td  width="120" >&nbsp;</td>'
							+'</tr>'
							+'<tr>'
								+'<td class="text-r">'
									+'每增加'
								+'</td>'
								+'<td class="text-l" >'
									+'<div class="release-price release-table-price boxsizing radius3">'
										+'<input type="text"   name="freight_step_num" value="<?php echo price_format($goods_common['freight_step_num']);?>"   class="price-inp left"/>'
										+'<span class="price-unit left">件</span>'
									+'</div>'
								+'</td>'
								+'<td class="text-r">'
									+'增加运费'
								+'</td>'
								+'<td class="text-l">'
									+'<div class="release-price release-table-price boxsizing radius3">'
										+'<input type="text" name="freight_step_fee" value="<?php echo price_format($goods_common['freight_step_fee']);?>"    class="price-inp left"/>'
										+'<span class="price-unit left">元</span>'
									+'</div>'
								+'</td>'
							+'</tr>'
						+'</table>'
					+'</div>'
					+'<p class="remind1">请设置价格</p>'
				+'</dd>'
			+'</dl>';
dl['weight'] =  '';
dl['weight']+=''					
+'<dl  shopdz-dltype="weight"  class="juris-dl boxsizing release-dl">'
	+'<dt class="left text-r boxsizing"><span class="redstar">*</span>运费金额：</dt>'
	+'<dd class="left text-l">'
		+'<div class="relese-table-box">'
			+'<table class="com-table relese-table radius3">'
				+'<tr>'
					+'<td width="80" class="text-r">'
						+'商品单件重量'
					+'</td>'
					+'<td width="120" class="text-l">'
						+'<div class="release-price release-table-price boxsizing radius3">'
							+'<input type="text"  name="goods_weight" value="<?php echo price_format($goods_common['goods_weight']);?>"   class="price-inp left"/>'
							+'<span class="price-unit left">公斤</span>'
						+'</div>	'
					+'</td>'
					+'<td width="80" class="text-r">'
						+'一公斤内运费'
					+'</td>'
					+'<td width="120"  class="text-l">'
						+'<div class="release-price release-table-price boxsizing radius3">'
							+'<input name="freight" value="<?php echo price_format($goods_common['freight']);?>" type="text" class="price-inp left"/>'
							+'<span class="price-unit left">元</span>'
						+'</div>'	
					+'</td>'
				+'</tr>'
				+'<tr>'
					+'<td class="text-r">'
						+'每增加'
					+'</td>'
					+'<td class="text-l">'
						+'<div class="release-price release-table-price boxsizing radius3">'
							+'<input type="text"  name="freight_step_num" value="<?php echo price_format($goods_common['freight_step_num']);?>"   class="price-inp left"/>'
							+'<span class="price-unit left">公斤</span>'
						+'</div>'
					+'</td>'
					+'<td class="text-r">'
						+'增加运费'
					+'</td>'
					+'<td class="text-l">'
						+'<div class="release-price release-table-price boxsizing radius3">'
							+'<input  name="freight_step_fee" value="<?php echo price_format($goods_common['freight_step_fee']);?>"  type="text" class="price-inp left"/>'
							+'<span class="price-unit left">元</span>'
						+'</div>'
					+'</td>'
				+'</tr>'
			+'</table>'
		+'</div>'
		+'<p class="remind1">请设置价格</p>'
	+'</dd>'
+'</dl>';
dl['volume'] =  '';
dl['volume']+=''				
+'<dl  shopdz-dltype="volume"  class="juris-dl boxsizing release-dl">'
	+'<dt class="left text-r boxsizing"><span class="redstar">*</span>运费金额：</dt>'
	+'<dd class="left text-l">'
		+'<div class="relese-table-box">'
			+'<table class="com-table relese-table radius3">'
				+'<tr>'
					+'<td width="80" class="text-r">'
						+'商品单件体积'
					+'</td>'
					+'<td width="120" class="text-l">'
					+'	<div class="release-price release-table-price boxsizing radius3">'
							+'<input type="text"  name="goods_volume" value="<?php echo price_format($goods_common['goods_volume']);?>"   class="price-inp left"/>'
							+'<span class="price-unit left">立方米</span>'
						+'</div>'
					+'</td>'
					+'<td width="80" class="text-r">'
						+'一立方内运费'
					+'</td>'
					+'<td width="120"  class="text-l">'
						+'<div class="release-price release-table-price boxsizing radius3">'
							+'<input name="freight" value="<?php echo price_format($goods_common['freight']);?>" type="text" class="price-inp left"/>'
							+'<span class="price-unit left">元</span>'
						+'</div>'	
					+'</td>'
				+'</tr>'
				+'<tr>'
					+'<td class="text-r">'
						+'每增加'
					+'</td>'
					+'<td class="text-l">'
						+'<div class="release-price release-table-price boxsizing radius3">'
							+'<input type="text"  name="freight_step_num" value="<?php echo price_format($goods_common['freight_step_num']);?>"   class="price-inp left"/>'
							+'<span class="price-unit left">立方</span>'
						+'</div>'
					+'</td>'
					+'<td class="text-r">'
						+'增加运费'
					+'</td>'
					+'<td class="text-l">'
						+'<div class="release-price release-table-price boxsizing radius3">'
							+'<input  name="freight_step_fee" value="<?php echo price_format($goods_common['freight_step_fee']);?>"  type="text" class="price-inp left"/>'
							+'<span class="price-unit left">元</span>'
						+'</div>'
					+'</td>'
				+'</tr>'
			+'</table>'
		+'</div>'
		+'<p class="remind1">请设置价格</p>'
	+'</dd>'
+'</dl>';

</script>
<!--内容开始-->
<div class="iframeCon">
	<ul class="transverse-nav">
	    <li class="activeFour"><a href="javascript:;"><span>运费设置</span></a></li>
	</ul>
	<div class="white-bg">
		<form class="form-horizontal" id="main_form" autocomplete="off"   action="<?php echo U('Commodity/goods_add_step3');?>"  method="post" >
        <input name="goods_common_id"   type="hidden"  value="<?php  echo intval($goods_common['goods_common_id']);?>"   > 
		<div class="jurisdiction boxsizing release-juris">
			<dl class="juris-dl boxsizing release-dl">
				<dt class="left text-r boxsizing"><span class="redstar">*</span>运费方式：</dt>
				<dd class="left text-l">
					<div class="button-holder">
						<p class="radiobox"><input type="radio"  <?php if($goods_common['freight_type']=='fixed'){ echo 'checked="checked"';}?> name="freight_type" value="fixed"  id="radio_fixed" class="freight_type regular-radio" /><label  for="radio_fixed"></label><span class="radio-word">固定运费</span></p>
						<p class="radiobox"><input type="radio"  <?php if($goods_common['freight_type']=='num'){ echo 'checked="checked"';}?> name="freight_type" value="num"  id="radio_num" class="freight_type regular-radio" /><label for="radio_num"></label><span class="radio-word">计件</span></p>
						<p class="radiobox"><input type="radio"  <?php if($goods_common['freight_type']=='weight'){ echo 'checked="checked"';}?> name="freight_type" value="weight" id="radio_weight"  class="freight_type regular-radio" /><label  for="radio_weight"></label><span class="radio-word">重量</span></p>
						<p class="radiobox"><input type="radio"  <?php if($goods_common['freight_type']=='volume'){ echo 'checked="checked"';}?> name="freight_type" value="volume"  id="radio_volume" class="freight_type regular-radio" /><label  for="radio_volume"></label><span class="radio-word">体积</span></p>
					</div>
					<p class="remind1 release-remind">请选择运费方式</p>
				</dd>
			</dl>
			<span id="price_dl_tag" ></span>
		</div>
		<div class="btnbox3 boxsizing" style="border-top:0;">
			<?php if($_GET['save']==1){ ?>
		    <a type="button" id="submit_button" class="btn1 radius3 marginT10  btn3-btnmargin"><?php echo (L("submit_btn")); ?></a>
		    <a class="btn1 radius3 marginT10 " href="<?php echo U('Commodity/goods_list');?>">返回列表</a>
			<?php }else{ ?>
			<a id="submit_button"  class="btn1 radius3 btn3-btnmargin release-nextbtn"><span class="next-remind boxsizing">下一步</span><span class="next-con">参数设置</span></a>
		    <?php } ?>
		</div>
		</form>
	</div>
</div>
<!--内容结束-->
<script>
$("#price_dl_tag").before(dl['<?php echo $goods_common['freight_type']?>']);
$(function(){
	$('[name="freight_type"]').click(function(){
		var new_type = $(this).val();
	    var old = $('[shopdz-dltype]').attr('shopdz-dltype');
	    if(new_type!=old){
	    	$('[shopdz-dltype]').remove();
	    	$("#price_dl_tag").before(dl[new_type]);
		}
	});
	$('#submit_button').click(function(){
    //        flag=checkrequire('main_form');
        $.post($('#main_form').attr('action'),$('#main_form').serialize(),function(data){
        	if(data.status==1){
            	showSuccess(data.info,function(){
             		<?php if($_GET['save']==1){ ?>
                	window.location.href = '<?php echo U('Commodity/goods_list');?>' ;    
                	<?php }else{ ?>
                    window.location.href = data.url;
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
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
    	<script xmlns="http://www.w3.org/1999/html">
	var category = '<?php echo $category;?>';
	var category = eval('('+category+')');
	var searchurl = "<?php echo SITE_URL.('/admin.php/Search/searchsku'); ?>";
	var uploadurl = "<?php echo SITE_URL.('/admin.php/Upload/common'); ?>";
	var getgoodsurl = "<?php echo SITE_URL.('/admin.php/Group/getGoodsDetail'); ?>";
	var attach_dir = 'http://www.tqshq.com/data/Attach/';
</script>
<div class="tipsbox">
	<div class="tips boxsizing radius3">
		<div class="tips-titbox">
			<h1 class="tip-tit"><i class="tips-icon-lamp"></i>操作提示</h1>
			<span class="open-span span-icon"><i class="open-icon"></i></span>
		</div>
	</div>
	<ol class="tips-list" id="tips-list">
		<li>1.拼团操作页面</li>
	</ol>
</div>
<div class="iframeCon">
	<ul class="transverse-nav">
		<li class="activeFour"><a  href="javascript:;"><span>新增拼团</span></a></li>
	</ul>
	<div class="white-bg text-c">
		<div class="coupon-con">
			<div class="coupon-left">
				<div class="phoneH">
					<h2 class="phone-tit">拼团活动</h2>
				</div>
				<div class="group-commodity">
					<div class="commodityImg-box">
						<img <?php if($data['group_image']){ ?> src="<?php echo $data['group_image_text'];?>" <?php } else{?> src="/static/admin/images/com.png" <?php }?>alt="拼团商品图片"  class="commodityImg group-list-img"/>
						<div class="groupIntroduce">
							<div class="introduceCover"></div>
							<div class="introduceCon">
								<span class="groupPerson-num"><span class="group_person_num_text " style="color: #fff"><?php echo $data['group_person_num']?></span>人团</span>
								<img src="/static/admin/images/groupH.png" alt="指示团长图标" class="groupHead"/>
								<p class="groupHead-welfare">团长福利：<span><?php echo $data['head_welfare'].$data['head_num']?></span></p>
							</div>
						</div>
					</div>
					<div class="group-comDet">
						<div class="group-comName goods_name_text"><?php if(!empty($data['group_name'])){echo $data['group_name'] ;}else{echo '商品名称';}?></div>
						<p  class="group-comDescribe group-content_text"><?php if(!empty($data['group_content'])){echo $data['group_content'] ;}else{echo '商品描述';}?></p>
						<div class="groupDet-spec">
							<p class="group-comSpec"><span class="spec_name_text"><?php if(!empty($data['spec_name'])){echo $data['spec_name'] ;}else{echo '商品规格';}?></span></p>
							<div class="timeLimit"><img src="/static/admin/images/time.png" alt="限时图标" class="time-icon"/>组团时限：<span class="group_hour_text"><?php echo $data['group_hour']?></span>小时</div>
						</div>
					</div>
					<div class="playGroup-way">
						<div class="playGroup">
							<a href="#">
								<span class="playGroup-tit">拼团玩法</span>
								<img src="/static/admin/images/jtr.png" alt="" class="playGroup-point"/>
							</a>
						</div>
						<ul class="groupStep-list">
							<li><span class="groupStep-num">1</span>选择商品</li>
							<li><span class="groupStep-num">2</span>支付开团</li>
							<li><span class="groupStep-num">3</span>邀请好友</li>
							<li><span class="groupStep-num">4</span>拼团成功</li>
						</ul>
						<p class="playGroup-remind">支付开团并邀请4人参团，人数不足自动退款，详情点击上方拼团玩法</p>
					</div>
					<div class="commodity-details">
						<h1 class="commodityDet-tit">商品详情</h1>
						<p id="goods_detail"></p>
					</div>
					<div class="foot-btnbox">
						<a href="#" class="foot-combtn foot-leftBtn"><span class="btn-price ">￥<span class="sign_price btn-price"><?php echo $data['goods_price']?></span></span>正价购买</a>
						<a href="#" class="foot-combtn foot-rightBtn"><span class="btn-price">￥<span class="price_text btn-price"><?php echo $data['group_price']?></span></span>支付开团</a>
					</div>
				</div>
			</div>
			<div class="coupon-right">
				<form action="" method="post" id="redpacke_form">
					<input type="hidden" name="form_submit" value="submit">
					<input type="hidden" name="goods_id" id="goods_id" value="<?php echo $data['goods_id'];?>">
					<input type="hidden" name="id" id="aid" value="<?php echo $data['id'];?>">
				<div class="couponR-con">
					<div class="coupon-edit-box paddingB100">
						<h1 class="soupon-edit-tit">拼团基础信息</h1>
						<table class="coupon-table">
							<tr>
								<td width="100">活动名称</td>
								<td><input type="text" class="coupon-inp group_name" id="group_name" name="group_name" localrequired=''value="<?php echo $data['group_name']?>"/></td>
							</tr>
						
							<tr>
								<td width="100">显示商品名称</td>
								<td><input type="text" class="coupon-inp fight-pro-name goods_name" id="goods_name" name="goods_name" localrequired='' value="<?php echo $data['goods_name']?>"/>
								<?php if(empty($data['goods_id'])){?>
											<input type="button" name="" id="" value="选择商品" class="group-choice-btn2 showsearchbtn" />
										<?php }else {?>
											<input type="button" name="" id="" value="重新修改" class="group-choice-btn2 showsearchbtn" />
										<?php }?>
								</td>
							</tr>
							<tr>
								<td>封面图片</td>
								<td>
									<div class="fight-group-choice">
										<input type="text" class="group-img-route" name="group_image" value="<?php echo $data['group_image']?>" localrequired=''/>
										<input type="file" name="" id="upload_img" value="选择图片" class="group-file-btn"/>
										<input type="button" value="选择图片" class="group-file-cover "/>
									</div>
								</td>
							</tr>
							<tr>
								<td>拼团价格</td>
								<td>
									<div class="release-price coupon-table-num">
										<input type="text" class="price-inp left price" name="price" value="<?php echo $data['group_price']?>" localrequired=''/>
										<span class="price-unit left">元</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="alignT9">商品描述</td>
								<td>
									<textarea name="group_content" rows="" cols="" class="com-textarea1 group-area group-content" localrequired=''><?php echo $data['group_content']?></textarea>
								</td>
							</tr>
						</table>
						<h1 class="soupon-edit-tit">拼团规则</h1>
						<table class="coupon-table">
							<tr>
								<td width="100">商品库存数</td>
								<td>
									<p class="group-pro-num"><span><?php echo $data['goods_storage']?></span>/件</p>
								</td>
							</tr>

							<tr>
								<td>成团人数</td>
								<td class="group-td">
									<div class="release-price coupon-table-num">
										<input type="text" class="price-inp left group_person_num" name="group_person_num" localrequired='' value="<?php echo $data['group_person_num']?>"/>
										<span class="price-unit left">人</span>
									</div>
									<span class="tips-tag" tips="成团人数不能为空！"><i class="tips-icon"></i></span>
								</td>
							</tr>
							<tr>
								<td>限购设置</td>
								<td>
									<div class="button-holder coupon-holder">
										<p class="radiobox coupon-radiobox"><input type="radio" id="radio-1-5" name="add_num" class="regular-radio" <?php if($data['add_num']){ echo 'checked="checked"';} ?> value="1"><label for="radio-1-5"></label><span class="radio-word black-font">限购</span></p>
										<p class="radiobox coupon-radiobox"><input type="radio" id="radio-1-6" name="add_num" class="regular-radio" value="0"<?php if(!$data['add_num']){ echo 'checked="checked"';} ?>><label for="radio-1-6"></label><span class="radio-word black-font">不限购</span></p>
									</div>
								</td>
							</tr>
							<tr>
								<td>组团时限</td>
								<td class="group-td">
									<div class="release-price coupon-table-num group-limit">
										<input type="text" class="price-inp left group_hour"  name="group_hour" localrequired=''value="<?php echo $data['group_hour']?>"/>
										<span class="price-unit left">小时</span>
									</div>
									<span class="tips-tag" tips="组团时限不能为空！"><i class="tips-icon"></i></span>
								</td>
							</tr>
							<tr>
								<td>生效时间</td>
								<td>

									<p class="time-box coupon-time-box"><input localrequired='' type="text" value='<?php echo $data['starttime_text']?>' class="coupon-inp start_time" id="starttime" name="starttime" readonly=""><i class="timeinp-icon starttime"></i></p>
								</td>
							</tr>
							<tr>
								<td>过期时间</td>
								<td>
									<p class="time-box coupon-time-box"><input localrequired='' type="text" class="coupon-inp  end_time " id="endtime" name="endtime"  value="<?php echo $data['endtime_text']?>"><i class="timeinp-icon endtime"></i></p>
								</td>
							</tr>
							<tr>
								<td>是否免物流费</td>
								<td>
									<div class="button-holder coupon-holder">
										<p class="radiobox coupon-radiobox"><input type="radio" id="radio-1-7" name="is_shipping" class="regular-radio" <?php if($data['is_shipping']){ echo 'checked="checked"';} ?> value="1"><label for="radio-1-7"></label><span class="radio-word black-font">是</span></p>
										<p class="radiobox coupon-radiobox"><input type="radio" id="radio-1-8" name="is_shipping" class="regular-radio" value="0" <?php if(!$data['is_shipping']){ echo 'checked="checked"';} ?>><label for="radio-1-8"></label><span class="radio-word black-font">否</span></p>
									</div>
								</td>
							</tr>
							<tr>
								<td>团长福利</td>
								<td class="posiR">

									<div class="welfareClick">
									<select name="head_welfare" id="search_select" >
	                   					<option value="none" <?php if($data['head_welfare_type'] == 'none'){echo "selected";}?> >无福利</option>
										<option value="jf" <?php if($data['head_welfare_type'] == 'jf'){echo "selected";}?>>赠送积分</option>
										<option value="gj" <?php if($data['head_welfare_type'] == 'gj'){echo "selected";}?>>购买立减</option>
										<option value="zk" <?php if($data['head_welfare_type'] == 'zk'){echo "selected";}?>>购买折扣</option>
	               					 </select>
									
									</div>
									<input name="head_welfare_show" type="hidden" value="" id="head_welfare_show">
								</td>
							</tr>
							<tr class="jf <?php if($data['head_welfare_type'] != 'jf'){echo 'none';}?> fuli">
								<td>
								</td>
								<td>
									<div class="release-price coupon-table-num group-limit">
										<input type="text" class="price-inp left" name="jf" value="<?php echo $data['head_num']?>"/>
										<span class="price-unit left">积分</span>
									</div>
								</td>
							</tr>
							<tr class=" gj <?php if($data['head_welfare_type'] != 'gj'){echo 'none';}?> fuli">
								<td></td>
								<td>
									<div class="release-price coupon-table-num">
										<input type="text" class="price-inp left" name="gj"  value="<?php echo $data['head_num']?>"/>
										<span class="price-unit left">元</span>
									</div>
								</td>
							</tr>
							<tr class="<?php if($data['head_welfare_type'] != 'zk'){echo 'none';}?> zk fuli">
								<td></td>
								<td>
									<div class="release-price coupon-table-num">
										<input type="text" class="price-inp left" name="zk" value="<?php echo $data['head_num']?>" />
										<span class="price-unit left">折</span>
									</div>
								</td>
							</tr>
						</table>
					</div>

				</div>
				<s>
					<i class="bg-jt"></i>
				</s>
			</div>
		</div>
		<div class="btn-box-center borderT-none">
			<input type="button" class="btn1 radius3" value="确认提交" id="form_submitadd">
			<input type="button" class="btn1 radius3 marginL5 backlist" value="返回列表">
		</div>
	</div>
	</form>
</div>
<div id='showsearch' style="display:none">
	<div class="icon-alert">
		<h1 class="details-tit icon-alert-tit"><?php echo (L("select_goods")); ?><i class="alert-close"></i></h1>
		<div class="group-choice-classify">
			<p class="group-classify-tit"><?php echo (L("goods_class")); ?></p>
			<select name="gc_id_1" id="gc_id_1" class="group-sele">
				<option value="0"><?php echo (L("select_goods_class")); ?></option>
			</select>
			<select name="gc_id_2" id="gc_id_2" class="group-sele">
				<option value="0"><?php echo (L("select_goods_class")); ?></option>
			</select>
			<input type="text" id='search_text' name="search_text" class="com-inp1 group-inp" placeholder="<?php echo (L("select_goods_tips")); ?>"/>
			<input type="button" value="<?php echo (L("search")); ?>" id='group-search-btn' search_url="<?php echo U('Search/searchsku'); ?>" class="group-choice-btn group-search-btn"/>
		</div>
		<ul class="icon-list fight-icon-list">
		</ul>
		<div class="pagination boxsizing icon-page">
		</div>
		<div class="btn-box-center">
			<input type="button" id='searchok' class="btn1 radius3 " value="<?php echo (L("ok")); ?>">

		</div>
	</div>
	<div class="icon-cover"></div>
</div>
<script type="text/javascript">
	$(function(){
		$('.welfareClick .color-click-span').bind('click',function(){
			$(this).children('i').toggleClass('color-active');
			$('.welfareList').slideToggle();
		});
		$('.backlist').bind('click',function(){
			window.location.href= '<?php echo U('Plugin/admin',array('module'=>'group','controller'=>'admin','method'=>'group'))?>';
		});
		$('#search_select ').bind('change',function(){
			var show_type = $(this).val();
			var txt=$(this).find("option:selected").text();
			$("#head_welfare_show").val(txt);
			if(show_type == 'none'){
				$('.coupon-edit-box').removeClass('paddingB65');
				$(".fuli").hide();
			}else{
				$('.coupon-edit-box').addClass('paddingB65');
				$(".fuli").hide();
				$("."+show_type).show();
				
			}
			
		});
		$('.color-span').css('background','#63b359');

		$('.couponR-con span.tips-tag').each(function() {
			var _this = this;
			$(_this).bind(
					{
						mousemove:function(){
							e=arguments.callee.caller.arguments[0] || window.event;
							tip = $(_this).attr('tips');
							remindNeed($(_this),e,tip);
						},
						mouseout:function() {
							$('.tip-remind').remove();
						}
					}
			);
		});
	})


	function Rotate(){
		$('.data-operation').mouseenter(function(){
			$('.data-icon').addClass('jt-rotate');
			$(this).parent().next().show();
		});
		$('.simulate-sele').mouseleave(function(){
			//alert('鼠标离开下拉框');
			$(this).hide();
			$('.data-icon').removeClass('jt-rotate');
		});

	}

	Rotate();

</script>
<script type="text/javascript">
	$(function(){

		$('.icon-type-list li a').bind('click',function(){
			$(this).addClass("green-font2").parent().siblings().find("a").removeClass("green-font2");
		});

	})
</script>
<script type="text/javascript" src="/static/admin/js/group.js"></script>
<script type="text/javascript" src="/static/admin/js/goods_search.js"></script>
<script type="text/javascript">
	$(function(){
		$('#form_submitadd').click(function(){
			flag=checkrequire('redpacke_form');
			if(!flag){
				$('#redpacke_form').submit();
			}
		});

		$('.color-click-span').bind('click',function(){
			$(this).children('i').toggleClass('color-active');
			$('.color-show-box').toggle();
		});
		$('.color-span').css('background','#63b359');
		$('.color-show-list li').bind('click',function(){
			var color=$(this).attr("value");
			//alert(color);
			$('.color-show-box').hide();
			$('.color-click-span').children('i').removeClass('color-active');
			$('.color-span').css('background',color);
			$('.coupon-box-top').css('background',color);
		});
		$('.couponR-con span.tips-tag').each(function() {
			var _this = this;
			$(_this).bind(
					{
						mousemove:function(){
							e=arguments.callee.caller.arguments[0] || window.event;
							tip = $(_this).attr('tips');
							remindNeed($(_this),e,tip);
						},
						mouseout:function() {
							$('.tip-remind').remove();
						}
					}
			);
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
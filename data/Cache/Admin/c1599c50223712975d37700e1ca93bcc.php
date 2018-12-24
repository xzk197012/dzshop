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
    	<script>
	var category = '<?php echo $category;?>';
	var category = eval('('+category+')');
	var searchurl = "<?php echo U('Search/searchspu'); ?>";
	var uploadurl = "<?php echo U('Upload/common'); ?>";
	var attach_dir = 'http://www.tqshq.com/data/Attach/';
</script>
<script type="text/javascript" src="/static/admin/js/goods_search.js"></script>
		<div class="tipsbox">
			<div class="tips boxsizing radius3">
				<div class="tips-titbox">
					<h1 class="tip-tit"><i class="tips-icon-lamp"></i>操作提示</h1>
					<span class="open-span span-icon"><i class="open-icon"></i></span>
				</div>
			</div>
			<ol class="tips-list" id="tips-list">
				<li>1.数据调用商品规则为SPU，即一种商品包含所有规格。</li>
				<li>2.商品添加如果不选择图片则默认为主图。</li>
			</ol>
		</div>


		<!--内容开始-->
		<form method="post" class="memberForm" name="memberForm" id="memberForm" action="<?php echo U('Cms/UserGetDate');?>" enctype="multipart/form-data">
			<div class="iframeCon">

				<div class="iframeMain">
					<ul class="transverse-nav">
						<li class="activeFour"><a href="#"><span>新增数据</span></a></li>
					</ul>
					<div class="white-bg">
						<div class="tab-conbox">
				<div class="jurisdiction boxsizing">
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>模块名称：</dt>

						<dd class="left text-l">
							<input type="text" name="modename"  value="" class="com-inp1 radius3 boxsizing" localrequired=""/>
							<p class="remind1">模块名称不能为空</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing data-dl">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>数据调用商品：</dt>
						<dd class="left text-l">
							<table class="data-table" id="showtable" style="display: none">
								<thead>
									<tr>
										<th width="40">排序</th>
										<th colspan="2">商品信息</th>
										<th width="60">SPU</th>
										<th width="80">价格</th>
										<th width="60">库存</th>
										<th colspan="2">显示图片</th>
									</tr>
								</thead>
								<tbody id="addshops">
								</tbody>
							</table>
							<input type="button" value="添加商品" class="group-choice-btn showsearchbtn"/>
							<p class="remind1 paddingB3">点击添加商品你要添加的商品</p>
						</dd>
						<div class="clear"></div>
					</dl>
				<!--	<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing">排序：</dt>

						<dd class="left text-l">
							<input type="text" name="displayorder"  value="0" class="com-inp1 radius3 boxsizing"/>
							<p class="remind1">默认为零</p>
						</dd>
					</dl>-->
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>状态：</dt>
						<dd class="left text-l">
							<div class="switch-box">
								<input type="checkbox" name="state" id="switch-radio" class="switch-radio" <?php if($config['web_status'] == 1 ): ?>checked="checked" <?php else: endif; ?> <?php if($config['web_status'] == '' ): ?>checked="checked" <?php else: endif; ?>/>
								<span class="switch-half switch-open">ON</span>
								<span class="switch-half switch-close close-bg">OFF</span>
							</div>
							<p class="remind1">此模块是否开启</p>
						</dd>
					</dl>
				</div>
				 <div class="btnbox3 boxsizing">
                    <a type="button" id="shops_get" class="btn1 radius3 marginT10 btn3-btnmargin">确认提交</a>
                    <a type="button" id="base_setting" class="btn1 radius3 marginT10">返回列表</a>
					 <span style="display: none" class="itemnum">0</span>
                </div>
			</div>
		</div>
		</div>
		</div>
		</form>
		<!--内容结束-->
		<!-- 选择商品搜索 S -->
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
					<input type="text" id='search_text' name="search_text" class="com-inp1 group-inp" placeholder="<?php echo (L("select_goods_tips_spu")); ?>"/>
					<input type="button" value="<?php echo (L("search")); ?>" id='group-search-btn' search_url="<?php echo U('Search/searchspu'); ?>" class="group-choice-btn group-search-btn"/>
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
		<!-- 选择商品搜索  E-->
<script type="text/javascript">
	$(function(){
		$('#searchok').click(function() {
			var info = $('.green-border').find('p');
			var itemnum = $( '.itemnum' ).text();
			if(info.length){
				var goods_name = info.html();
				var goods_storage = info.attr('goods_storage');
				var goods_images = info.attr('goods_images');
				var goods_common_id = info.attr('goods_common_id');
				var sign_price = info.attr('sign_price');
				var loadimg = itemnum;
				if($('.checkis_'+goods_common_id).size() >0){
					showError('该商品已经选择过，请重新选择');
					return false;
				}
				var addconte = '<tr id="additem_'+itemnum+'" class="checkis_'+goods_common_id+'">' +
						'<td><input type="text" name="imgorder[]" value="0" class="data-sort"></td>' +
						'<td width="50" class="text-c"> <a href="#">' +
						'<img src="'+goods_images+'" alt="" class="order-goodsImg" /> </a> ' +
						'</td>' +
						' <td width="218" class="text-l"> <div class="data-goods-det">'+goods_name+'</div> </td>' +
						' <td>'+goods_common_id+'</td> <td>'+sign_price+'</td> <td>'+goods_storage+'</td>' +
						' <td width="262"> ' +
							'<div class="input-group data-group">' +
							' <span class="previewbtn">' +
							'<img src="/static/admin/images/imgGray.png" class="viewimg data-viewIcon imgshow" id="imgshowload_'+itemnum+'" url="'+goods_images+'"/>' +
							'</span>' +
							' <input type="hidden" name="goods_id[]" value="'+goods_common_id+'"><input type="hidden" name="old_img[]" value="'+goods_images+'"><input type="text" name="new_img[]"  class="form-control data-inp com-inp1 radius3 boxsizing"   id="imgload_'+itemnum+'">' +
							' <input type="file"  class="form-control" style="display: none;">' +
							' <span class="input-group-btn left"> <input type="button"  value="选择文件" class="upload-btn search-btn data-upBtn" onclick="$(\'input[id=imgload_'+loadimg+']\').click();"/> </span>' +
							' </div> ' +
						'</td> ' +
						'<td><i class="data-dele-icon" onclick="delselectshops('+loadimg+')" style="cursor: pointer"></i></td>' +
						' </tr>';
				$('#addshops').append(addconte);
				$( '.itemnum' ).text(parseInt(itemnum)+parseInt(1));
				$('.alert-close').click();
				$('#showtable').show();
				uploadshopimg(loadimg);
			}
		});
		$('#shops_get').click(function(){
			flag=checkrequire('memberForm');
			if(!flag) {
				if($("#addshops tr").length >0){
					$('#memberForm').submit();
				}else{
					showError('请选择商品数据');
				}
			}
		});
	});
	function Rotate(){
		$('.data-operation').mouseenter(function(){
			$('.data-icon').addClass('jt-rotate');
			$(this).parent().next().show();
		});
		$('.simulate-sele').mouseleave(function(){
			$(this).hide();
			$('.data-icon').removeClass('jt-rotate');
		});
	}

	Rotate();
function delselectshops(bt){
	$('#additem_'+bt).remove();
}
function uploadshopimg(bt){
	var uploader2 = new plupload.Uploader({
		runtimes: 'html5,html4,flash,silverlight',
		browse_button: 'imgload_'+bt,
		url: "<?php echo U('upLogoFile');?>",
		filters: {

			mime_types: [{
				title: "Image files",
				extensions: "jpg,gif,png,jpeg",
				prevent_duplicates: true
			}]
		},
		init: {
			PostInit: function () {
			},
			FilesAdded: function (up, files) {
				uploader2.start();
			},
			UploadProgress: function (up, file) {
				//alert('这里可以做进度条');
			},
			FileUploaded: function (up, file, res) {
				var resobj = eval('(' + res.response + ')');
				if(resobj.status){
					$("#imgload_"+bt).val(resobj.data);
					$("#imgshowload_"+bt).attr('url',resobj.allurl);
				}
			},
			Error: function (up, err) {
				alert('err');
			}
		}

	});
	uploader2.init();
}
	$(document).posi({class:'imgshow',default_img:"/static/img/logo.png"});
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
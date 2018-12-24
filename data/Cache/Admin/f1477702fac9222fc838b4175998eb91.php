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
				<li>1.模板名称尽量简洁</li>
				<li>2.图文内容中标题，图片，链接不能为空！</li>
				<li>3.微信公众号推送对图文消息标题限制为64个字节，图片大小为2M,</li>
				<li>4.多图文建议第一张图片用360*240的尺寸上传，之后用200*200图片</li>
			</ol>
		</div>


		<!--内容开始-->
		<form method="post" class="memberForm" name="memberForm" id="memberForm" action="<?php echo U('Wx/imgTextAdd');?>" enctype="multipart/form-data">
			<div class="iframeCon">
				<input type="hidden" name="id" value="<?php echo ($imginfo["id"]); ?>">
				<div class="iframeMain">
					<ul class="transverse-nav">
						<li class="activeFour"><a href="#"><span>新增图文模板</span></a></li>
					</ul>
					<div class="white-bg">
						<div class="tab-conbox">
				<div class="jurisdiction boxsizing">
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>模版名称：</dt>

						<dd class="left text-l">
							<input type="text" name="modename"  value="<?php echo ($imginfo["modename"]); ?>" class="com-inp1 radius3 boxsizing" localrequired=""/>
							<p class="remind1">模块名称不能为空</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing data-dl">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>图文数据：</dt>
						<dd class="left text-l">
							<table class="data-table" id="showtable">
								<thead>
									<tr>
										<th width="40">排序</th>
										<th colspan="1" class="text-c">图文标题</th>
										<th colspan="1" class="text-c">图文链接</th>
										<th colspan="2" class="text-c">显示图片</th>

									</tr>
								</thead>
								<tbody id="addshops">
								<?php if(is_array($textimg)): foreach($textimg as $key=>$imgtext): ?><tr id="additem_<?php echo ($key); ?>" class="checkis_<?php echo ($key); ?>">
									<td width="50"><input type="text" name="order[]" value="<?php echo ($imgtext["order"]); ?>" class="data-sort"></td>
									<td width="270"><input type="text" name="title[]" value="<?php echo ($imgtext["Title"]); ?>" class="wx-inp" style="width: 240px"></td>
									<td width="180"><input type="text" name="url[]" value="<?php echo ($imgtext["Url"]); ?>" class="wx-inp" style="width: 150px"></td>
									 <td width="262">
										<div class="input-group data-group marginAuto">
											 <span class="previewbtn">
												<img src="/static/admin/images/imgGray.png" class="viewimg data-viewIcon imgshow" id="imgshowload_<?php echo ($key); ?>" url="<?php echo ($imgtext["PicUrl"]); ?>"/>
											 </span>
											 <input type="text" name="new_img[]"  class="form-control data-inp com-inp1 radius3 boxsizing"  value="<?php echo ($imgtext["PicUrl"]); ?>" id="imgload_<?php echo ($key); ?>" localrequired="">
											<input type="file"  class="form-control" style="display: none;">
											<span class="input-group-btn left"> <input type="button"  value="选择文件" class="upload-btn data-upBtn" onclick="$('input[id=imgload_'+<?php echo ($key); ?>+']').click();"/> </span>
										</div>
										</td>
									<td><i class="data-dele-icon" onclick="delselectshops(<?php echo ($key); ?>)" style="cursor: pointer"></i></td>
								</tr>
									<script type="text/javascript">
										$(function(){
											uploadshopimg(<?php echo ($key); ?>)
										});
									</script><?php endforeach; endif; ?>
								</tbody>
							</table>
							<input type="button" value="添加图文" class="group-choice-btn showsearchbtn"/>
							<p class="remind1 paddingB3">点击添加商品你要添加的商品</p>
						</dd>
						<div class="clear"></div>
					</dl>

				</div>
				 <div class="btnbox3 boxsizing">
                    <a type="button" id="shops_get" class="btn1 radius3 marginT10 btn3-btnmargin">确认提交</a>
                    <a type="button" id="base_setting" class="btn1 radius3 marginT10">返回列表</a>
					 <span style="display: none" class="itemnum"><?php echo ($imginfo["imgnum"]); ?></span>
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
		$('.showsearchbtn').click(function() {
			var info = $('.green-border').find('p');
			var itemnum = $( '.itemnum' ).text();
			var loadimg = itemnum;
			var addconte = '<tr id="additem_'+itemnum+'" class="checkis_'+itemnum+'">' +
					'<td><input type="text" name="order[]" value="0" class="data-sort"></td>' +
					'<td><input type="text" name="title[]" value="" class="wx-inp" style="width: 240px" localrequired=""></td>'+
					'<td><input type="text" name="url[]" value="" class="wx-inp" style="width: 150px" localrequired=""></td>'+
					' <td width="262"> ' +
					'<div class="input-group data-group marginAuto">' +
					' <span class="previewbtn">' +
					'<img src="/static/admin/images/imgGray.png" class="viewimg data-viewIcon imgshow" id="imgshowload_'+itemnum+'" url=""/>' +
					'</span>' +
					' <input type="text" name="new_img[]"  class="form-control data-inp com-inp1 radius3 boxsizing"   id="imgload_'+itemnum+'" localrequired="">' +
					' <input type="file"  class="form-control" style="display: none;">' +
					' <span class="input-group-btn left"> <input type="button"  value="选择文件" class="upload-btn data-upBtn" onclick="$(\'input[id=imgload_'+loadimg+']\').click();"/> </span>' +
					' </div> ' +
					'</td> ' +
					'<td><i class="data-dele-icon" onclick="delselectshops('+loadimg+')" style="cursor: pointer"></i></td>' +
					' </tr>';

			$( '.itemnum' ).text(parseInt(itemnum)+parseInt(1));
			$('#addshops').append(addconte);
			$('#showtable').show();
			uploadshopimg(loadimg);



		});
		$('#shops_get').click(function(){
			flag=checkrequire('memberForm');
			if(!flag) {
				if($("#addshops tr").length >0){
					$('#memberForm').submit();
				}else{
					showError('请添加图文数据');
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
		url: "<?php echo U('upLogoFiletext');?>",
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
	$(document).posi({class:'imgshow'});
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
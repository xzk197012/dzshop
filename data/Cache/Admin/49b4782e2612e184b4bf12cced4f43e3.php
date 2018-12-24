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
			<li class="activeRelease radius5">1.&nbsp;基本信息</li>
			<li class="radius5">2.&nbsp;规格设置</li>
			<li class="radius5">3.&nbsp;运费设置</li>
			<li class="radius5">4.&nbsp;参数设置</li>
			<li class="radius5">5.&nbsp;发布成功</li>
		</ul>
		<!--内容开始-->
		<div class="iframeCon">
		 	<ul class="transverse-nav">
	        	<li class="activeFour"><a href="javascript:;"><span>基本信息</span></a></li>
	   		</ul>
			<div class="white-bg">
				<div class="jurisdiction boxsizing">
				<form class="form-horizontal" id="main_form" autocomplete="off"  method="post">
	            <input name="goods_common_id"   type="hidden"  value="<?php  echo intval($goods_common['goods_common_id']);?>"   > 
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>商品名称：</dt>
						<dd class="left text-l">
							<input name="goods_name" localrequired="localrequired"    class="com-inp1 radius3 boxsizing" value="<?php  echo $goods_common['goods_name'];?>"   type="text"> 
							<p class="remind1">请输入商品名称，不要带规格词 比如 红色 XL等</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing">商品卖点：</dt>
						<dd class="left text-l">
							<input name="goods_jingle" class="com-inp1 radius3 boxsizing"  value="<?php  echo $goods_common['goods_jingle'];?>"  type="text">
							<p class="remind1">请输入商品卖点  广告词</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>商品价格：</dt>
						<dd class="left text-l">
							<input type="text"  localrequired="localrequired"   name="goods_price"  value="<?php  echo $goods_common['goods_price'];?>"  class="com-inp1 radius3 boxsizing"/>
							<p class="remind1">请输入商品价格 最终以sku价格为准</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>商品原价格：</dt>
						<dd class="left text-l">
							<input type="text"  localrequired="localrequired"   name="goods_cost_price"  value="<?php  echo $goods_common['goods_cost_price'];?>"  class="com-inp1 radius3 boxsizing"/>
							<p class="remind1">请输入商品原价格 最终以sku价格为准</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>商品分类：</dt>
						<dd class="left text-l">
							<select  class="com-sele radius3 juris-dl-sele addFocus-sele" name="gc_id">
                                <option value="0" >请选择商品分类</option>
                                <?php if(!empty($category_list)){ ?>
                                    <?php foreach($category_list as $one){ ?>
                                        <?php if(!empty($one['child'])){ ?>
                                         <optgroup label="<?php  echo $one['gc_name'];?>">
                                             <?php foreach($one['child'] as $two){ ?>
                                                 <option  <?php if($goods_common['gc_id']==$two['gc_id']){echo 'selected="selected" ';} ?>   value="<?php echo $two['gc_id'];?>" >&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $two['gc_name']?></option>
                                             <?php } ?>
                                          </optgroup>
                                        <?php }else{ ?>
                                        <option   <?php if($goods_common['gc_id']==$one['gc_id']){echo 'selected="selected" ';} ?>   value="<?php echo $one['gc_id'];?>" ><?php echo $one['gc_name']?></option>
                                        <?php } ?>
                                    <?php } ?>
                                <?php } ?>
                            </select>
							<p class="remind1">请选择商品分类，只有最后一层分类允许添加商品</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing">
						<dt class="left text-r boxsizing"><span class="redstar">*</span>商品图片：</dt>
						<dd class="left text-l">
							<!--<textarea type="text" class="com-textarea1 radius3 boxsizing"></textarea>-->
							<ul class="uploadbox boxsizing">
								<li class="left uploadbox-li boxsizing">
									<div class="img-style boxsizing">
										<img shopdz-action="upload_image"   src="<?php  if($images[0]['image_url']){ ?>http://www.tqshq.com/data/Attach/<?php echo ($images[0]['image_url']); }else{ ?>  /static/img/default.png<?php } ?>" alt="" class="uploadimg boxsizing"/>
									</div>
									<div class="asDefault-box-cover block2  boxsizing">
									</div>
									<i   shopdz-action="upload_delete"  class="up-icon dele-icon"></i>
									<p class="asDefault boxsizing asdefault-green"><i class="up-icon default-icon"></i>默认主图</p>
									<div class="operationbox boxsizing">
										<p class="upload-p">
										     <input type="radio"  style="display:none;"   checked="checked"  name="is_default" value="1" />
											<input type="file"   id="goods_image_file_1"  class="upload-inp2" hidefocus="true"/>
											 <input shopdz-action="upload_value"   type="hidden"  name="goods_image_1"  value="<?php echo $images[0]['image_url']; ?>"  >  
											<span class="inp2-cover boxsizing "><i class="up-icon upload-icon"></i>上传</span>
										</p>
									</div>
								</li>
								<li class="left uploadbox-li boxsizing">
									<div class="img-style boxsizing">
										<img shopdz-action="upload_image"   src="<?php  if($images[1]['image_url']){ ?>http://www.tqshq.com/data/Attach/<?php echo ($images[1]['image_url']); }else{ ?>  /static/img/default.png<?php } ?>" alt="" class="uploadimg boxsizing"/>
									</div>
									<!--<div class="asDefault-box">
										<p class="asDefault boxsizing"><i class="up-icon default-icon"></i>默认主图</p>
									</div>-->
									<div class="asDefault-box-cover boxsizing">
									</div>
									<i   shopdz-action="upload_delete"  class="up-icon dele-icon"></i>
									<p class="none asDefault boxsizing"><i class="up-icon default-icon"></i>默认主图</p>
									<div class="operationbox boxsizing">
										<p class="upload-p">
										    <input type="radio"  style="display:none;"   name="is_default" value="2" />
											<input type="file" class="upload-inp2"  id="goods_image_file_2"  hidefocus="true"/>
											<input shopdz-action="upload_value"  type="hidden"  name="goods_image_2"  value="<?php echo $images[1]['image_url']; ?>"  >  
											<span class="inp2-cover boxsizing"><i class="up-icon upload-icon"></i>上传</span>
										</p>
									</div>
								</li>
								<li class="left uploadbox-li boxsizing">
									<div class="img-style boxsizing">
										<img shopdz-action="upload_image"    src="<?php  if($images[2]['image_url']){ ?>http://www.tqshq.com/data/Attach/<?php echo ($images[2]['image_url']); }else{ ?>  /static/img/default.png<?php } ?>" alt="" class="uploadimg boxsizing"/>
									</div>
									<div class="asDefault-box-cover boxsizing">
									</div>
									<i   shopdz-action="upload_delete"  class="up-icon dele-icon"></i>
									<p class="none asDefault boxsizing"><i class="up-icon default-icon"></i>默认主图</p>
									<div class="operationbox boxsizing">
										<p class="upload-p">
										    <input type="radio"  style="display:none;"   name="is_default" value="3" />
											<input type="file" class="upload-inp2"  id="goods_image_file_3"  hidefocus="true"/>
											<input shopdz-action="upload_value"  type="hidden"  name="goods_image_3"  value="<?php echo $images[2]['image_url']; ?>"  >  
											<span class="inp2-cover boxsizing"><i class="up-icon upload-icon"></i>上传</span>
										</p>
									</div>
								</li>
								<li class="left uploadbox-li boxsizing">
									<div class="img-style boxsizing">
										<img  shopdz-action="upload_image"  src="<?php  if($images[3]['image_url']){ ?>http://www.tqshq.com/data/Attach/<?php echo ($images[3]['image_url']); }else{ ?>  /static/img/default.png<?php } ?>" alt="" class="uploadimg boxsizing"/>
									</div>
									<div class="asDefault-box-cover boxsizing">
									</div>
									<i   shopdz-action="upload_delete"  class="up-icon dele-icon"></i>
									<p class="none asDefault boxsizing"><i class="up-icon default-icon"></i>默认主图</p>
									<div class="operationbox boxsizing">
										<p class="upload-p">
										    <input type="radio"  style="display:none;"   name="is_default" value="4" />
											<input type="file"   id="goods_image_file_4"  class="upload-inp2" hidefocus="true"/>
											<input shopdz-action="upload_value"  type="hidden"  name="goods_image_4"  value="<?php echo $images[3]['image_url']; ?>"  >  
											<span class="inp2-cover boxsizing"><i class="up-icon upload-icon"></i>上传</span>
										</p>
									</div>
								</li>
								<li class="left uploadbox-li boxsizing">
									<div class="img-style boxsizing">
										<img shopdz-action="upload_image"   src="<?php  if($images[4]['image_url']){ ?>http://www.tqshq.com/data/Attach/<?php echo ($images[4]['image_url']); }else{ ?>  /static/img/default.png<?php } ?>" alt="" class="uploadimg boxsizing"/>
									</div>
									<div class="asDefault-box-cover boxsizing">
									</div>
									<i   shopdz-action="upload_delete"  class="up-icon dele-icon"></i>
									<p class="none asDefault boxsizing"><i class="up-icon default-icon"></i>默认主图</p>
									<div class="operationbox boxsizing">
										<p class="upload-p">
										     <input type="radio"  style="display:none;"   name="is_default" value="5" />
											<input type="file" class="upload-inp2"  id="goods_image_file_5"  hidefocus="true"/>
											<input shopdz-action="upload_value"  type="hidden"  name="goods_image_5"  value="<?php echo $images[4]['image_url']; ?>"  >  
											<span class="inp2-cover boxsizing"><!--<i class="font-face icon-upload-alt up-icon"></i>--><i class="up-icon upload-icon"></i>上传</span>
										</p>
									</div>
								</li>
							</ul>
							<p class="remind1 remind-mar">请上传图片,建议使用640*640像素或1:1大小jpg、gif、png格式的图片。</p>
						</dd>
					</dl>
					<dl class="juris-dl boxsizing borderB-none">
						<dt class="left text-r boxsizing">商品详情：</dt>
						<dd class="left text-l ">
							<script id="desc" name="goods_detail" type="text/plain"><?php echo htmlspecialchars_decode(stripslashes($goods_common['goods_detail']));?></script>
        					<script type="text/javascript" src="/static/ueditor/ueditor.config.js"></script>
                            <script type="text/javascript" src="/static/ueditor/ueditor.all.js"></script>
                            <script type="text/javascript">
                                var ue = UE.getEditor('desc',{
                                    'initialFrameWidth':792,
                                    'initialFrameHeight':500,    
                                	});
                            </script>
							<p class="remind1 remind-mar">请输入商品详细介绍</p>
						</dd>
					</dl>
				</div>
				<div class="btnbox3 boxsizing">
    				<?php if($_GET['save']==1){ ?>
        		    <a type="button" id="submit_button" class="btn1 radius3 marginT10  btn3-btnmargin"><?php echo (L("submit_btn")); ?></a>
        		    <a class="btn1 radius3 marginT10 " href="<?php echo U('Commodity/goods_list');?>">返回列表</a>
        			<?php }else{ ?>
        			 <a class="btn1 radius3 btn3-btnmargin release-nextbtn" id="submit_button" ><span class="next-remind boxsizing">下一步</span><span class="next-con">规格设置</span></a>   
        		    <?php } ?>
				</div>
				</form>
			</div>
		</div>
		<!--内容结束-->
		<script type="text/javascript">
			$(function(){

				$('#submit_button').click(function(){
			        flag=checkrequire('main_form');
			        if(!flag){
				        $.post($('#main_form').attr('action'), $('#main_form').serialize(),function(data){
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
			        }
			    });

			    
				//图片上传
		 		$('.uploadbox>li').mouseenter(function(){
			 		var  img_value =  $(this).find('[shopdz-action="upload_value"]').val();
		 			$(this).find('.asDefault-box-cover').addClass('block');
		 			if(img_value){
		 			    $(this).find('.dele-icon').addClass('block');
		 			}
		 			$(this).find('.inp2-cover').addClass('inp2-cover-hover');
		 			$(this).find('.asDefault').removeClass('none');
		 		})
		 		$('.uploadbox>li').mouseleave(function(){
		 			$(this).find('.asDefault-box-cover ').removeClass('block');
		 			$(this).find('.dele-icon').removeClass('block');
		 			$(this).find('.inp2-cover').removeClass('inp2-cover-hover');
		 			if(!$(this).find('[name="is_default"]').prop('checked')){
		 				$(this).find('.asDefault').addClass('none');
				    }
		 		})
				$('.uploadbox>li .asDefault-box-cover').bind('click',function(){
					$(this).parents('.uploadbox-li').find("[type='radio']").click();
					$(this).parents('.uploadbox-li').find('.asDefault-box-cover').addClass('block2').parents('.uploadbox-li').siblings().find('.asDefault-box-cover').removeClass('block2');
					$('.asDefault').addClass('none');
					$(this).parents('.uploadbox-li').find('.asDefault').addClass('asdefault-green').removeClass('none').parents('.uploadbox-li').siblings().find('.asDefault').removeClass('asdefault-green');
					$(this).parents('.uploadbox-li').find('.inp2-cover').addClass('inp2-cover-hover2').parents('.uploadbox-li').siblings().find('.inp2-cover').removeClass('inp2-cover-hover2');
					
				})
				
				//商品发布五张图
				var uploader1 = new plupload.Uploader({
		            runtimes: 'html5,html4,flash,silverlight',
		            browse_button: 'goods_image_file_1',
		            url: "<?php echo U('Upload/common');?>",
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
		                    uploader1.start();
		                },
		                UploadProgress: function (up, file) {
		                	$("#goods_image_file_1").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'/static/img/loading.gif');
		                },
		                FileUploaded: function (up, file, res) {
		                    var resobj = eval('(' + res.response + ')');
		                    if(resobj.status){
		                    	$("#goods_image_file_1").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'http://www.tqshq.com/data/Attach//'+resobj.data);
			                 	$("#goods_image_file_1").parents('.uploadbox-li').find('[shopdz-action="upload_value"]').val(resobj.data);
		                    }
		                },
		                Error: function (up, err) {
		                    alert('err');
		                }
		            }
		        });
		        uploader1.init();


		        var uploader2 = new plupload.Uploader({
		            runtimes: 'html5,html4,flash,silverlight',
		            browse_button: 'goods_image_file_2',
		            url: "<?php echo U('Upload/common');?>",
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
		                	$("#goods_image_file_2").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'/static/img/loading.gif');
		                },
		                FileUploaded: function (up, file, res) {
		                    var resobj = eval('(' + res.response + ')');
		                    if(resobj.status){
		                    	$("#goods_image_file_2").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'http://www.tqshq.com/data/Attach//'+resobj.data);
			                 	$("#goods_image_file_2").parents('.uploadbox-li').find('[shopdz-action="upload_value"]').val(resobj.data);
		                    }
		                },
		                Error: function (up, err) {
		                    alert('err');
		                }
		            }
		        });
		        uploader2.init();
			})
			
			
			var uploader3 = new plupload.Uploader({
		            runtimes: 'html5,html4,flash,silverlight',
		            browse_button: 'goods_image_file_3',
		            url: "<?php echo U('Upload/common');?>",
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
		                    uploader3.start();
		                },
		                UploadProgress: function (up, file) {
		                	$("#goods_image_file_3").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'/static/img/loading.gif');
		                },
		                FileUploaded: function (up, file, res) {
		                    var resobj = eval('(' + res.response + ')');
		                    if(resobj.status){
		                    	$("#goods_image_file_3").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'http://www.tqshq.com/data/Attach//'+resobj.data);
			                 	$("#goods_image_file_3").parents('.uploadbox-li').find('[shopdz-action="upload_value"]').val(resobj.data);
		                    }
		                },
		                Error: function (up, err) {
		                    alert('err');
		                }
		            }
		        });
		        uploader3.init();


		        var uploader4 = new plupload.Uploader({
		            runtimes: 'html5,html4,flash,silverlight',
		            browse_button: 'goods_image_file_4',
		            url: "<?php echo U('Upload/common');?>",
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
		                    uploader4.start();
		                },
		                UploadProgress: function (up, file) {
		                	$("#goods_image_file_4").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'/static/img/loading.gif');
		                },
		                FileUploaded: function (up, file, res) {
		                    var resobj = eval('(' + res.response + ')');
		                    if(resobj.status){
		                    	$("#goods_image_file_4").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'http://www.tqshq.com/data/Attach//'+resobj.data);
			                 	$("#goods_image_file_4").parents('.uploadbox-li').find('[shopdz-action="upload_value"]').val(resobj.data);
		                    }
		                },
		                Error: function (up, err) {
		                    alert('err');
		                }
		            }
		        });
		        uploader4.init();

		        var uploader5 = new plupload.Uploader({
		            runtimes: 'html5,html4,flash,silverlight',
		            browse_button: 'goods_image_file_5',
		            url: "<?php echo U('Upload/common');?>",
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
		                    uploader5.start();
		                },
		                UploadProgress: function (up, file) {
		                	$("#goods_image_file_5").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'/static/img/loading.gif');
		                },
		                FileUploaded: function (up, file, res) {
		                    var resobj = eval('(' + res.response + ')');
		                    if(resobj.status){
		                    	$("#goods_image_file_5").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'http://www.tqshq.com/data/Attach//'+resobj.data);
			                 	$("#goods_image_file_5").parents('.uploadbox-li').find('[shopdz-action="upload_value"]').val(resobj.data);
		                    }
		                },
		                Error: function (up, err) {
		                    alert('err');
		                }
		            }
		        });
		        uploader5.init();

			      //删除图片按钮
		        $('[shopdz-action="upload_delete"]').click(function(){
		     	   $(this).parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'/static/admin/images/uploadimg.png');
		     	   $(this).parents('.uploadbox-li').find('[shopdz-action="upload_value"]').val('');   
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
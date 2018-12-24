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
    	<link rel="stylesheet" type="text/css" href="/static/admin/css/extends.css?v=1" />

<link rel="stylesheet" type="text/css" href="/static/admin/css/font-awesome.min93e3.css?sv=1" />
<style type="text/css">
	.btnbox-c {
		padding: 10px 0;
		text-align: center;
	}
</style>
        <div class="tipsbox radius3">
            <div class="tips boxsizing radius3">
                <div class="tips-titbox">
                    <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
                    <span class="open-span span-icon"><i class="open-icon"></i></span>
                </div>
            </div>
            <ol class="tips-list" id="tips-list">
                <li>1.点击右侧组件的“添加”按钮，增加对应类型版块到页面</li>
                <li>2.鼠标触及左侧页面对应版块，出现操作类链接，可以对该区域块进行“移动”、“启用/禁用”、“编辑”、“删除”操作。</li>
                <li>3.新增加的版块内容默认为“禁用”状态，编辑内容并“启用”该块后将在手机端即时显示。</li>
            </ol>
        </div>
        <div class="iframeCon">
            <div class="iframeMain">
                <div class="white-bg ">
                    <div class="content-box2" style="margin-top: 0;">
                        <div class="mb-special-layout firstP-box" style="background: none;border: none;padding: 50px 0;">
                            <div class="mb-item-box">
                                <div id="item_list" class="item-list">
                                    <?php if(is_array($item_list)): foreach($item_list as $key=>$vo): ?><div nctype="special_item" <?php if($vo["item_usable"] == 1 ): ?>class="special-item goods usable" <?php else: ?> class="special-item goods unusable"<?php endif; ?> data-item-id="<?php echo ($vo["item_id"]); ?>">
                                            <div class="item_type"><?php echo ($vo["item_name"]); ?></div>
                                            <div id="item_edit_content" style="margin-top: -25px;margin-bottom: -30px;">
                                                <div class="index_block goods-list">
                                                    <div class="title">
                                                        <span></span>
                                                    </div>
                                                    <div nctype="item_content" class="content">
                                                        <!--这里需要引入首页中的样式文件-->
                                                        <link rel="stylesheet" href="/static/web/css/reset.css" />
                                                        <link rel="stylesheet" href="/static/web/css/swiper.min.css">
                                                        <link rel="stylesheet" href="/static/web/css/style.css" />
                                                        <!--end!!!-->
                                                        <?php switch($vo["item_type"]): case "adv_list": ?><style type="text/css">
	.img-cover {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background: #000;
		opacity: .2;
		display: none;
	}
	.edit-box1:hover div.img-cover {
		display: block;
	}
	.edit-btn1 {
		width: 90px;
		height: 28px;
		line-height: 28px;
		font-size: 14px;
		/*display: block;*/
		left: 150px;
		top: 130px;
		border-radius: 3px;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		padding: 0;
		box-shadow: 0 0 5px #999;
	}
	.add-btn {
		position: absolute;
		width: 90px;
		height: 28px;
		line-height: 28px;
		font-size: 14px;
		left: 210px;
		top: 200px;
		border-radius: 3px;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		padding: 0;
		background: #00d4b7;
		cursor: pointer;
		
	}
	.add-btn a {
		color: #fff;
		display: block;
	}
	.moren {
		width:500px;
		height: 300px;
		background: #e0e0e0;
	}
	.picbg {
		display: inline-block;
		margin-top: 80px;
	}
</style>



<?php if(!$edit): ?><!--焦点图轮播开始-->
<div class="swiper-container" style="margin-top: 48px;" data-type="adv_list">
    <div class="swiper-wrapper">
        <?php if(is_array($vo["data"])): foreach($vo["data"] as $key=>$vo1): ?><div class="swiper-slide"><img src="http://www.tqshq.com/data/Attach/<?php echo ($vo1["img"]); ?>"/></div><?php endforeach; endif; ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
</div>
<!--焦点图轮播结束-->
<?php else: ?>
    <link rel="stylesheet" type="text/css" href="/static/admin/css/extends.css?v=1" />
    <!--<div class="tip-remind">收起提示</div>-->
    <div class="tipsbox radius3">
        <div class="tips boxsizing radius3">
            <div class="tips-titbox">
                <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
                <span class="open-span span-icon"><i class="open-icon"></i></span>
            </div>
        </div>
        <ol class="tips-list" id="tips-list">
            <li>1.点击上传图片按钮可以添加新的幻灯片图片。</li>
            <li>2.鼠标移动到已有的幻灯片图片上点击出现的删除按钮可以删除对应的幻灯片图片。</li>
            <li>3.操作完成后点击确认提交按钮进行保存。</li>
            <li>4.建议使用700*400像素大小jpg、gif、png格式的图片。</li>
        </ol>
    </div>
    <div class="iframeCon">
        <div class="iframeMain">
            <ul class="transverse-nav">
                <li class="activeFour"><a href="javascript:;"><span>幻灯管理</span></a></li>
            </ul>
            <div class="white-bg ">
                <div class="tab-conbox">
                    <div class="jurisdiction boxsizing">
                	 
                    <?php if(is_array($item_data)): foreach($item_data as $key=>$vo): ?><div class="edit-box1 radius3" style="margin-left: 100px;">
                        	<div class="img-cover"></div>
                            <div class="edit-btn1" style="left: 260px;"><a href='javascript:delItem("<?php echo ($key); ?>");'>删除</a></div>
                            <div class="edit-btn1" style="right:60px"><a class='alert-btn1' href='javascript:editItem("<?php echo ($key); ?>");'>编辑</a></div>
                            <img alt="image" src="http://www.tqshq.com/data/Attach/<?php echo ($vo["img"]); ?>" class="edit-img1">
                        </div><?php endforeach; endif; ?>
                    <?php if(count($item_data) < 8){ ?>
                    <div class="edit-box1 radius3" style="margin-left: 100px;">
                        <div class="moren">
                            <img src="/static/admin/images/picbg.png" class="picbg"/>
                             <div class="add-btn"><a type="button" class='alert-btn' onclick='$("#img").val("");$("#type").val("");$("#data").val("");'>添加</a></div>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="btnbox-c" style="padding: 40px 0;">
               	 	<a type="button" class="btn1 radius3 marginT10 btn3-btnmargin" style="margin-left: 300px;" href="<?php echo U('setting/personnel');?>">返回上页</a>
                    <!--<a type="button" class="alert-btn btn1 radius3" onclick='$("#img").val("");$("#type").val("");$("#data").val("");'>上传图片</a>-->
           		</div>
            </div>
        </div>
    </div>
<!--遮罩层-->
<div class="cover none"></div>
<!--弹框开始-->
<div class="alertcon alert showAlert radius3 addFocus-alert specialAlert none">
    <i class="close-icon"></i>
    <h1 class="special-tit">添加幻灯图片</h1>
    <form role="form" id="dataform" action="<?php echo U('itemSave');?>" autocomplete="off">
    <input name="form_submit"   type="hidden"  value="submit">
        <div class="special-con addSpec-con">
            <span class="special-con-left left">图片：</span>
            <div class="input-group">
                <span class="previewbtn"><img src="/static/admin/images/imgGray.png" class="viewimgbtn3 viewimg view_img" url="" id="upload_img"/></span>
                <input type="text" name="img" id="img" class="form-control upload-inp com-inp1 radius3 boxsizing" localrequired="">
                <input type="hidden" name="item_id" id="item_id"  value="<?php echo ($edit); ?>">
                <input type="hidden" name="item_type" id="item_type"  value="<?php echo ($item_type); ?>">
                <input type="hidden" name="dotype" id="dotype"  value="">
                <input type="hidden" name="num" id="num"  value="">
                <input type="file"   id="img_adv" class="form-control" style="display: none;">
                <span class="input-group-btn left">
                    <input type="button"  value="选择文件" class="upload-btn search-btn" id="up" onclick="$('input[id=img_adv]').click();"/>
                </span>
            </div>
            <div class="clear"></div>
            <div class="alerrt-sele-box">
                <span class="special-con-left left">操作：</span>
                <select name="type" id="type" class="left addFocus-sele" localrequired="">
                    <option value="url">链接</option>
                    <option value="goods">SPU ID</option>
                    <option value="category">商品分类</option>
                    <!-- <option value="redpacket">优惠券</option> -->
                </select>
                <input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data" id="data" localrequired="">

                <div class="clear"></div>
            </div>
        </div>
        <div class="alert-btnbox boxsizing">
            <a class="btn1 radius3" id="alert_submit" type="button" href="javascript:;">确认</a>
        </div>
    </form>
</div>
<!--弹框结束-->
<script type="text/javascript">
$(document).posi({class:'view_img','z_index':'10001'});
$('#alert_submit').click(function(){
    flag=checkrequire('dataform');
    if(!flag){
        $.post("<?php echo U('itemSave');?>",$("#dataform").serialize(),function(data){
            if(data.status===0){
                showError(data.info);
            }else{                
                window.location.reload();
            }

        },'json');
    }
});
$(function(){
    $('.alert-btn').click(function(){
        $.ajax({
            type:'GET',
            url:"<?php echo U('isItemExist');?>",
            data:"item_id=<?php echo ($edit); ?>&item_type=<?php echo ($item_type); ?>",
            success:function(data){
                if(data.status===0){
                    showError(data.info);
                }else{
                    $('.cover').removeClass('none');
                    $('.alertcon').removeClass('none');
                    $('#dotype').val('');
                    $('#num').val('');
                    $('#type').val('url');
                    var strs = '<input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data" id="data" localrequired="">';
                    $('#data').replaceWith(strs);
                    $('#data').val('');
                    $('#img').val('');
                    $('#upload_img').attr('url','');



                }
            },
            dataType:'json'
        });
    })

    $('.alert-btn1').click(function(){
        $('.cover').removeClass('none');
        $('.alertcon').removeClass('none');
    })
        
    $('.cover,.close-icon').click(function(){
        $('.cover').addClass('none');
        $('.alertcon').addClass('none');
    })
    
})
</script>
<script type="text/javascript">


    //删除图片
    function delItem(path) {
        showConfirm("将删除此图片，确认操作吗？",function(){
            var url = "<?php echo U('itemSave');?>"+'?img='+path+'&dotype=del&item_type='+$("#item_type").val()+'&item_id='+$("#item_id").val();
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


    function editItem(path){

        var url="<?php echo U('imgEdit');?>"+'?img='+path+'&item_type='+$("#item_type").val()+'&item_id='+$("#item_id").val();
        $.get(url,function(result){
            var data = result.data;
            $("#type").val(data.type);
            $("#dotype").val('edit');
            $("#num").val(path);
            $('#img').val(data.img);
            $('#upload_img').attr('url',"http://www.tqshq.com/data/Attach/"+data.img);
            $('#upload_img').posi({'z_index':'10001','position':'fixed'});

            if(data.type == 'redpacket'){
                var str3 = '<select class="left addFocus-sele" name="data" id="data" localrequired=""><?php foreach ($rpacket_list as $v) { echo '<option value="'.$v['rpacket_t_id'].'">'.$v['rpacket_t_title'].'</option>'; }?></select>';
                $('#data').replaceWith(str3);
            }else if(data.type == 'category'){
            var str3 = '<select class="left addFocus-sele" name="data" id="data" localrequired=""><?php foreach ($category_list as $one) { if(!empty($one["child"])){echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';foreach ($one["child"] as $two) { echo '<option value="'.$two["gc_id"].'">--'.$two["gc_name"].'</option>'; } }else{echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';}}?></select>';

            $('#data').replaceWith(str3);
        }else{
                var str3 = '<input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data" id="data" localrequired="">';
                $('#data').replaceWith(str3);
            }
            $('#data').val(data.data);

        })


    };
    //图片上传;
    var uploader = new plupload.Uploader({
        runtimes: 'html5,html4,flash,silverlight',
        browse_button: 'img_adv',
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
                uploader.start();
            },
            UploadProgress: function (up, file) {
                //alert('这里可以做进度条');
            },
            FileUploaded: function (up, file, res) {
                var resobj = eval('(' + res.response + ')');
                if(resobj.status){
                    $("#img").val(resobj.data);
                    $('#upload_img').attr('url',"http://www.tqshq.com/data/Attach/"+resobj.data);
                }
            },
            Error: function (up, err) {
                alert('err');
            }
        }
    });
    uploader.init();

    $('.edit-box1').hover(function(){
     $(this).addClass('edit-box1-bor');
     $(this).children('.edit-btn1').css('display','block')
    },function(){
     $(this).removeClass('edit-box1-bor');
     $(this).children('.edit-btn1').css('display','none')
    });


   $(function(){
   	

    $('#type').change(function(){
        var types = $(this).val();

        if(types == 'redpacket'){
            var str_1 = '<select class="left addFocus-sele" name="data" id="data" localrequired=""><?php foreach ($rpacket_list as $v) { echo '<option value="'.$v['rpacket_t_id'].'">'.$v['rpacket_t_title'].'</option>'; }?></select>';
            $('#data').replaceWith(str_1);
        }else if(types == 'category'){
            var str_2 = '<select class="left addFocus-sele" name="data" id="data" localrequired=""><?php foreach ($category_list as $one) { if(!empty($one["child"])){echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';foreach ($one["child"] as $two) { echo '<option value="'.$two["gc_id"].'">--'.$two["gc_name"].'</option>'; } }else{echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';}}?></select>';

            $('#data').replaceWith(str_2);
        }else{
            var str_3 = '<input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data" id="data" localrequired="">';
            $('#data').replaceWith(str_3);
        }
    });
   })
</script><?php endif; break;?>
                                                            <?php case "adv_img": ?><style type="text/css">
    .img-cover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #000;
        opacity: .2;
        display: none;
    }
    .edit-box1:hover div.img-cover {
        display: block;
    }
    .edit-btn1 {
        width: 90px;
        height: 28px;
        line-height: 28px;
        font-size: 14px;
        /*display: block;*/
        left: 150px;
        top: 130px;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        padding: 0;
        box-shadow: 0 0 5px #999;
    }
    .add-btn {
        position: absolute;
        width: 90px;
        height: 28px;
        line-height: 28px;
        font-size: 14px;
        left: 210px;
        top: 200px;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        padding: 0;
        background: #00d4b7;
        
    }
    .add-btn a {
        color: #fff;
    }
    .moren {
        width:500px;
        height: 300px;
        background: #e0e0e0;
    }
    .picbg {
        display: inline-block;
        margin-top: 80px;
    }
</style>


<?php if(!$edit): ?><div class="list-con">
    <?php if(is_array($vo["data"])): foreach($vo["data"] as $key=>$vo1): ?><div class="list-img">
            <a href="">
                <img src="http://www.tqshq.com/data/Attach/<?php echo ($vo1["img"]); ?>"/>
            </a>
        </div><?php endforeach; endif; ?>
</div>
<?php else: ?>
    <link rel="stylesheet" type="text/css" href="/static/admin/css/extends.css?v=1" />
    <div class="tipsbox radius3">
        <div class="tips boxsizing radius3">
            <div class="tips-titbox">
                <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
                <span class="open-span span-icon"><i class="open-icon"></i></span>
            </div>
        </div>
        <ol class="tips-list" id="tips-list">
            <li>1.点击上传图片按钮可以添加新的广告图片，广告图片只能添加一张。</li>
            <li>2.鼠标移动到已有的广告图片上点击出现的删除按钮可以删除对应的广告图片。</li>
            <li>3.操作完成后点击确认提交按钮进行保存。</li>
            <li>4.建议使用700*400像素大小jpg、gif、png格式的图片。</li>
        </ol>
    </div>
    <div class="iframeCon">
        <div class="iframeMain">
            <ul class="transverse-nav">
                <li class="activeFour"><a href="javascript:;"><span>通栏广告图片</span></a></li>
            </ul>
            <div class="white-bg ">
                <div class="tab-conbox">
                    <div class="jurisdiction boxsizing">
                    <?php if(is_array($item_data)): foreach($item_data as $key=>$vo): ?><div class="edit-box1 radius3" style="margin-left: 100px;">
                            <div class="img-cover"></div>
                            <div class="edit-btn1" style="left: 215px;top:60px;"><a href='javascript:delItem("<?php echo ($key); ?>");'>删除</a></div>
                            <img alt="image" src="http://www.tqshq.com/data/Attach/<?php echo ($vo["img"]); ?>" class="edit-img1">
                        </div><?php endforeach; endif; ?>
                    <?php if(!$item_data){ ?>
                    <div class="edit-box1 radius3" style="margin-left: 100px;">
                        <div class="moren">
                            <img src="/static/admin/images/picbg.png" class="picbg"/>
                             <div class="add-btn"><a type="button" class='alert-btn' onclick='$("#img").val("");$("#type").val("");$("#data").val("");'>添加</a></div>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                </div>
                <div class="btnbox-c" style="padding: 40px 0;">
                    <a type="button" class="btn1 radius3 marginT10 btn3-btnmargin" style="margin-left: 300px;" href="<?php echo U('setting/personnel');?>">返回上页</a>
                    <!--<a type="button" class="alert-btn btn1 radius3" onclick='$("#img").val("");$("#type").val("");$("#data").val("");'>上传图片</a>-->
                </div>
            </div>
        </div>
    </div>
    
<!--遮罩层-->
<div class="cover none"></div>
<!--弹框开始-->

<div class="alertcon alert showAlert radius3 addFocus-alert specialAlert none">
    <i class="close-icon"></i>
    <h1 class="special-tit">添加通栏图片</h1>
    <form role="form" id="dataform" action="<?php echo U('itemSave');?>" autocomplete="off">
    <input name="form_submit"   type="hidden"  value="submit">
        <div class="special-con addSpec-con">
            <span class="special-con-left left">图片：</span>
            <div class="input-group">
                <span class="previewbtn"><img src="/static/admin/images/imgGray.png" class="viewimgbtn3 viewimg view_img" url="" id="upload_img"/></span>
                <input type="text" name="img" id="img" class="form-control upload-inp com-inp1 radius3 boxsizing" localrequired="">
                <input type="hidden" name="item_id" id="item_id"  value="<?php echo ($edit); ?>">
                <input type="hidden" name="item_type" id="item_type"  value="<?php echo ($item_type); ?>">
                <input type="file"   id="img_adv" class="form-control" style="display: none;">
                <span class="input-group-btn left">
                    <input type="button"  value="选择文件" class="upload-btn search-btn" id="up" onclick="$('input[id=img_adv]').click();"/>
                </span>
            </div>
            <div class="clear"></div>
            <div class="alerrt-sele-box">
                <span class="special-con-left left">操作：</span>
                <select name="type" id="type" class="left addFocus-sele" localrequired="">
                    <option value="url">链接</option>
                    <option value="goods">SPU ID</option>
                    <option value="category">商品分类</option>
                    <!-- <option value="redpacket">优惠券</option> -->
                </select>
                <input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data" id="data" localrequired="">

                <div class="clear"></div>
            </div>
        </div>
        <div class="alert-btnbox boxsizing">
            <a class="btn1 radius3" id="alert_submit" type="button" href="javascript:;" onclick="addHtmlElement();return false;">确认</a>
        </div>
    </form>
</div>
<!--弹框结束-->
<script type="text/javascript">
$(document).posi({class:'view_img','z_index':'10001'});
$('#alert_submit').click(function(){
    flag=checkrequire('dataform');
    if(!flag){
        $.post("<?php echo U('itemSave');?>",$("#dataform").serialize(),function(data){
            if(data.status===0){
                showError(data.info);
            }else{                
                window.location.reload();
            }

        },'json');
    }
});

$(function(){
    $('.alert-btn').click(function(){
        $.ajax({
            type:'GET',
            url:"<?php echo U('isItemExist');?>",
            data:"item_id=<?php echo ($edit); ?>&item_type=<?php echo ($item_type); ?>",
            success:function(data){
                if(data.status===0){
                    showError(data.info);
                }else{
                    $('.cover').removeClass('none');
                    $('.alertcon').removeClass('none');
                    $('#upload_img').attr('url','');
                }
            },
            dataType:'json'
        });
    })
        
    $('.cover,.close-icon').click(function(){
        $('.cover').addClass('none');
        $('.alertcon').addClass('none');
    })
    
})
</script>
<script type="text/javascript">


    //删除图片
    function delItem(path) {
        showConfirm("将删除此图片，确认操作吗？",function(){
            var url = "<?php echo U('itemSave');?>"+'?img='+path+'&dotype=del&item_type='+$("#item_type").val()+'&item_id='+$("#item_id").val();
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

    //图片上传;
    var uploader = new plupload.Uploader({
        runtimes: 'html5,html4,flash,silverlight',
        browse_button: 'img_adv',
        url: "<?php echo U('Upload/common');?>",
        filters: {
            
            mime_types: [{
                title: "Image files",
                extensions: "jpg,gif,png,jpeg",
                prevent_duplicates: true
            }]
        },
        init: {
            PostInit: function (up) {
            },
            FilesAdded: function (up, files) {
                uploader.start();
            },
            UploadProgress: function (up, file) {
                //alert('这里可以做进度条');
            },
            FileUploaded: function (up, file, res) {
                var resobj = eval('(' + res.response + ')');
                if(resobj.status){
                    $("#img").val(resobj.data);
                    $('#upload_img').attr('url',"http://www.tqshq.com/data/Attach/"+resobj.data);
                }
            },
            Error: function (up, err) {
                alert('err');
            }
        }
    });
    uploader.init();

    $('.edit-box1').hover(function(){
        $(this).addClass('edit-box1-bor');
        $(this).children('.edit-btn1').css('display','block')
    },function(){
        $(this).removeClass('edit-box1-bor');
        $(this).children('.edit-btn1').css('display','none')
    });

    $(function(){
        

        $('#type').change(function(){
        var types = $(this).val();

        if(types == 'redpacket'){
            var str_1 = '<select class="left addFocus-sele" name="data" id="data" localrequired=""><?php foreach ($rpacket_list as $v) { echo '<option value="'.$v['rpacket_t_id'].'">'.$v['rpacket_t_title'].'</option>'; }?></select>';
            $('#data').replaceWith(str_1);
        }else if(types == 'category'){
            var str_2 = '<select class="left addFocus-sele" name="data" id="data" localrequired=""><?php foreach ($category_list as $one) { if(!empty($one["child"])){echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';foreach ($one["child"] as $two) { echo '<option value="'.$two["gc_id"].'">--'.$two["gc_name"].'</option>'; } }else{echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';}}?></select>';

            $('#data').replaceWith(str_2);
        }else{
            var str_3 = '<input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data" id="data" localrequired="">';
            $('#data').replaceWith(str_3);
        }
    });
    })
</script><?php endif; break;?>
                                                            <?php case "adv_nav": if(!$edit): ?><!--图文导航开始-->
    <div class="outside-link" style="margin-top: 55px;">
        <ul class="link-box" style="height:90px;">
        <?php if(is_array($vo["data"])): foreach($vo["data"] as $key=>$vo1): ?><li class="link-li" style="height:100%">
                <a>
                <?php if ($vo1['img'] != '') { ?>
                <img src="http://www.tqshq.com/data/Attach/<?php echo ($vo1["img"]); ?>" class="link-img"/>
                <?php }else{?>
                <img src="/static/img/default_goods_image.gif" class="link-img"/>
                <?php } ?>
                <p class="link-tit"><?php echo ($vo1["title"]); ?></p>
                </a>
            </li><?php endforeach; endif; ?>    
        </ul>
    </div>
<!--图文导航结束-->
<?php else: ?>
<style type="text/css">
            .page-upload-list {
                width: 600px;
            }
            .page-upload-list>li {
                width: 100%;
                border: 1px dashed #e0e0e0;
                padding: 10px;
                overflow: hidden;
                zoom: 1;
            }
            .first-upload-left {
                max-width: 160px;
            }
            .first-upload-right {
                min-width: 400px;
                max-width: 420px;
                height: 100%;
                min-height: 165px;
                /*background: #f0f0f0;*/
            }
            .w120 {
                width: 120px;
            }
            .img-style {
            	width: 100px;
            	height: 100px;
            }
            .upload-p {
            	width: 100px;
            }
            .uploadbox-li {
            	width: 100px;
            	height: 130px;
            }
            .uploadbox {
            	height: 130px;
            	padding: 20px 0;
            }
            .asDefault-box-cover, .asDefault-box-cover2 {
            	width: 100px;
            	height: 100px;
            }
            .first-upload-right {
            	min-width: 440px;
            	max-width: 475px;
            }
            .uploadbox {
            	min-width: 130px;
            }
            select {
            	height: 28px;
            	margin-right: 10px;
            }
        </style>
<!--<div class="tip-remind">收起提示</div>-->
    <div class="tipsbox radius3">
        <div class="tips boxsizing radius3">
            <div class="tips-titbox">
                <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
                <span class="open-span span-icon"><i class="open-icon"></i></span>
            </div>
        </div>
        <ol class="tips-list" id="tips-list">
            <li>1.点击上传图片按钮可以为图文导航添加图片</li>
            <li>2.鼠标移动到上传的图片上，点击‘X’可以删除上传的图片</li>
            <li>3.填写图片导航下面的显示文字和图片导航的跳转链接或id</li>
            <li>4.操作完成后点击确认提交按钮进行保存</li>
        </ol>
    </div>
    <div class="iframeCon">
        <div class="iframeMain">
            <ul class="transverse-nav">
                <li class="activeFour"><a href="javascript:;"><span>图文导航</span></a></li>
            </ul>
            <div class="white-bg ">
                <div class="tab-conbox" style="margin-left: 100px;">
                <form method="post" class="form-horizontal" id="dataform" enctype="multipart/form-data" action="<?php echo U('itemSave');?>">
                <input type="hidden" name="item_id" id="item_id"  value="<?php echo ($edit); ?>">
                <input type="hidden" name="item_type" id="item_type"  value="<?php echo ($item_type); ?>">
                    <ul class="page-upload-list">
                        <li style="border-width: 1px;border-style:solid; border-color: transparent transparent #e0e0e0 transparent;">
                            <ul class="uploadbox boxsizing left first-upload-left">
                                <li class="left uploadbox-li boxsizing">
                                    <div class="img-style boxsizing">
                                        <img shopdz-action="upload_image"  src="<?php if($item_data[0]['img']){ ?>http://www.tqshq.com/data/Attach/<?php echo ($item_data[0]['img']); }else{ ?>  /static/img/default.png<?php } ?>" id="img_view_1" alt="" class="uploadimg boxsizing"/>
                                    </div>
                                    <div class="asDefault-box-cover boxsizing">
                                    </div>
                                    <i   shopdz-action="upload_delete"  class="up-icon dele-icon"></i>
                                    <div class="operationbox boxsizing">
                                        <p class="upload-p">
                                            <input type="radio"  style="display:none;"   name="is_default" value="1" />
                                            <input type="file"   id="img_file_1"  class="upload-inp2" hidefocus="true"/>
                                             <input shopdz-action="upload_value"   type="hidden"  name="img_1"  value="<?php echo $item_data[0]['img']; ?>"  >  
                                            <span class="inp2-cover boxsizing "><i class="up-icon upload-icon"></i>上传</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="first-upload-right right">
                                <div class="special-con addSpec-con">
                                    <span class="special-con-left left">文字：</span>
                                    <div class="input-group">
                                        <input type="text" name="title_1" id="title_1" class="com-inp1 radius3 boxsizing" localrequired="" value="<?php echo $item_data[0]['title']; ?>">
                                    </div>
                                    <div class="alerrt-sele-box">
                                        <span class="special-con-left left">操作：</span>
                                        <select name="type_1" id="type_1" class="left addFocus-sele w120" localrequired="">
                                            <option <?php if($item_data[0]['type'] == 'url'){ echo 'selected="selected"';}?> value="url">链接</option>
                                            <option <?php if($item_data[0]['type'] == 'goods'){ echo 'selected="selected"';}?> value="goods">SPU ID</option>
                                            <option <?php if($item_data[0]['type'] == 'category'){ echo 'selected="selected"';}?> value="category">商品分类</option>
                                            <!-- <option <?php if($item_data[0]['type'] == 'redpacket'){ echo 'selected="selected"';}?> value="redpacket">优惠券</option> -->
                                        </select>

                                        <?php if($item_data[0]['type'] == 'redpacket'){ ?>
                                            <select class="left addFocus-sele w120" name="data_1" id="data_1" localrequired="">
                                            <?php foreach ($rpacket_list as $v) { echo '<option '. ($item_data[0]['data']==$v['rpacket_t_id'] ? 'selected="selected"' : '' ).'  value="'.$v['rpacket_t_id'].'">'.$v['rpacket_t_title'].'</option>'; }?>
                                            </select>
                                        <?php }else if($item_data[0]['type'] == 'category'){?>
                                            <select class="left addFocus-sele w120" name="data_1" id="data_1" localrequired="">
                                            <?php foreach($category_list as $one){ ?>
                                                <?php if(!empty($one['child'])){ ?>
                                                 <option <?php if($item_data[0]['data']==$one['gc_id']){echo 'selected="selected" ';} ?> value="<?php  echo $one['gc_id'];?>"><?php echo $one['gc_name']?></option>
                                                     <?php foreach($one['child'] as $two){ ?>
                                                         <option  <?php if($item_data[0]['data']==$two['gc_id']){echo 'selected="selected" ';} ?>   value="<?php echo $two['gc_id'];?>" >--<?php echo $two['gc_name']?></option>
                                                     <?php } ?>
                                                <?php }else{ ?>
                                                <option   <?php if($item_data[0]['data']==$one['gc_id']){echo 'selected="selected" ';} ?>   value="<?php echo $one['gc_id'];?>" ><?php echo $one['gc_name']?></option>
                                                <?php } ?>
                                            <?php } ?>
                                            </select>
                                        <?php } else{?>
                                        <input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data_1" id="data_1" localrequired="" value="<?php echo $item_data[0]['data']; ?>"><?php }?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="border-width: 1px;border-style:solid; border-color: transparent transparent #e0e0e0 transparent;">
                            <ul class="uploadbox boxsizing left first-upload-left">
                                <li class="left uploadbox-li boxsizing">
                                    <div class="img-style boxsizing">
                                        <img shopdz-action="upload_image"  src="<?php if($item_data[1]['img']){ ?>http://www.tqshq.com/data/Attach/<?php echo ($item_data[1]['img']); }else{ ?>  /static/img/default.png<?php } ?>" id="img_view_2" alt="" class="uploadimg boxsizing"/>
                                    </div>
                                    <div class="asDefault-box-cover boxsizing">
                                    </div>
                                    <i   shopdz-action="upload_delete"  class="up-icon dele-icon"></i>
                                    <div class="operationbox boxsizing">
                                        <p class="upload-p">
                                            <input type="radio"  style="display:none;"   name="is_default" value="2" />
                                            <input type="file"   id="img_file_2"  class="upload-inp2" hidefocus="true"/>
                                             <input shopdz-action="upload_value"   type="hidden"  name="img_2"  value="<?php echo $item_data[1]['img']; ?>"  >  
                                            <span class="inp2-cover boxsizing "><i class="up-icon upload-icon"></i>上传</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="first-upload-right right">
                                <div class="special-con addSpec-con">
                                    <span class="special-con-left left">文字：</span>
                                    <div class="input-group">
                                        <input type="text" name="title_2" id="title_2" class="com-inp1 radius3 boxsizing" localrequired="" value="<?php echo $item_data[1]['title']; ?>">
                                    </div>
                                    <div class="alerrt-sele-box">
                                        <span class="special-con-left left">操作：</span>
                                        <select name="type_2" id="type_2" class="left addFocus-sele w120" localrequired="">
                                            <option <?php if($item_data[1]['type'] == 'url'){ echo 'selected="selected"';}?> value="url">链接</option>
                                            <option <?php if($item_data[1]['type'] == 'goods'){ echo 'selected="selected"';}?> value="goods">SPU ID</option>
                                            <option <?php if($item_data[1]['type'] == 'category'){ echo 'selected="selected"';}?> value="category">商品分类</option>
                                            <!-- <option <?php if($item_data[1]['type'] == 'redpacket'){ echo 'selected="selected"';}?> value="redpacket">优惠券</option> -->
                                        </select>

                                        <?php if($item_data[1]['type'] == 'redpacket'){ ?>
                                            <select class="left addFocus-sele w120" name="data_2" id="data_2" localrequired="">
                                            <?php foreach ($rpacket_list as $v) { echo '<option '. ($item_data[1]['data']==$v['rpacket_t_id'] ? 'selected="selected"' : '' ).'  value="'.$v['rpacket_t_id'].'">'.$v['rpacket_t_title'].'</option>'; }?>
                                            </select>
                                        <?php }else if($item_data[1]['type'] == 'category'){?>
                                            <select class="left addFocus-sele w120" name="data_2" id="data_2" localrequired="">
                                            <?php foreach($category_list as $one){ ?>
                                                <?php if(!empty($one['child'])){ ?>
                                                 <option <?php if($item_data[1]['data']==$one['gc_id']){echo 'selected="selected" ';} ?> value="<?php  echo $one['gc_id'];?>"><?php echo $one['gc_name']?></option>
                                                     <?php foreach($one['child'] as $two){ ?>
                                                         <option  <?php if($item_data[1]['data']==$two['gc_id']){echo 'selected="selected" ';} ?>   value="<?php echo $two['gc_id'];?>" >--<?php echo $two['gc_name']?></option>
                                                     <?php } ?>
                                                <?php }else{ ?>
                                                <option   <?php if($item_data[1]['data']==$one['gc_id']){echo 'selected="selected" ';} ?>   value="<?php echo $one['gc_id'];?>" ><?php echo $one['gc_name']?></option>
                                                <?php } ?>
                                            <?php } ?>
                                            </select>
                                        <?php } else{?>
                                        <input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data_2" id="data_2" localrequired="" value="<?php echo $item_data[1]['data']; ?>"><?php }?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="border-width: 1px;border-style:solid; border-color: transparent transparent #e0e0e0 transparent;">
                            <ul class="uploadbox boxsizing left first-upload-left">
                                <li class="left uploadbox-li boxsizing">
                                    <div class="img-style boxsizing">
                                        <img shopdz-action="upload_image"  src="<?php if($item_data[2]['img']){ ?>http://www.tqshq.com/data/Attach/<?php echo ($item_data[2]['img']); }else{ ?>  /static/img/default.png<?php } ?>" id="img_view_3" alt="" class="uploadimg boxsizing"/>
                                    </div>
                                    <div class="asDefault-box-cover boxsizing">
                                    </div>
                                    <i   shopdz-action="upload_delete"  class="up-icon dele-icon"></i>
                                    <div class="operationbox boxsizing">
                                        <p class="upload-p">
                                            <input type="radio"  style="display:none;"   name="is_default" value="3" />
                                            <input type="file"   id="img_file_3"  class="upload-inp2" hidefocus="true"/>
                                             <input shopdz-action="upload_value"   type="hidden"  name="img_3"  value="<?php echo $item_data[2]['img']; ?>"  >  
                                            <span class="inp2-cover boxsizing "><i class="up-icon upload-icon"></i>上传</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="first-upload-right right">
                                <div class="special-con addSpec-con">
                                    <span class="special-con-left left">文字：</span>
                                    <div class="input-group">
                                        <input type="text" name="title_3" id="title_3" class="com-inp1 radius3 boxsizing" localrequired="" value="<?php echo $item_data[2]['title']; ?>">
                                    </div>
                                    <div class="alerrt-sele-box">
                                        <span class="special-con-left left">操作：</span>
                                        <select name="type_3" id="type_3" class="left addFocus-sele w120" localrequired="">
                                            <option <?php if($item_data[2]['type'] == 'url'){ echo 'selected="selected"';}?> value="url">链接</option>
                                            <option <?php if($item_data[2]['type'] == 'goods'){ echo 'selected="selected"';}?> value="goods">SPU ID</option>
                                            <option <?php if($item_data[2]['type'] == 'category'){ echo 'selected="selected"';}?> value="category">商品分类</option>
                                            <!-- <option <?php if($item_data[2]['type'] == 'redpacket'){ echo 'selected="selected"';}?> value="redpacket">优惠券</option> -->
                                        </select>

                                        <?php if($item_data[2]['type'] == 'redpacket'){ ?>
                                            <select class="left addFocus-sele w120" name="data_3" id="data_3" localrequired="">
                                            <?php foreach ($rpacket_list as $v) { echo '<option '. ($item_data[2]['data']==$v['rpacket_t_id'] ? 'selected="selected"' : '' ).'  value="'.$v['rpacket_t_id'].'">'.$v['rpacket_t_title'].'</option>'; }?>
                                            </select>
                                        <?php }else if($item_data[2]['type'] == 'category'){?>
                                            <select class="left addFocus-sele w120" name="data_3" id="data_3" localrequired="">
                                            <?php foreach($category_list as $one){ ?>
                                                <?php if(!empty($one['child'])){ ?>
                                                 <option <?php if($item_data[2]['data']==$one['gc_id']){echo 'selected="selected" ';} ?> value="<?php  echo $one['gc_id'];?>"><?php echo $one['gc_name']?></option>
                                                     <?php foreach($one['child'] as $two){ ?>
                                                         <option  <?php if($item_data[2]['data']==$two['gc_id']){echo 'selected="selected" ';} ?>   value="<?php echo $two['gc_id'];?>" >--<?php echo $two['gc_name']?></option>
                                                     <?php } ?>
                                                <?php }else{ ?>
                                                <option   <?php if($item_data[2]['data']==$one['gc_id']){echo 'selected="selected" ';} ?>   value="<?php echo $one['gc_id'];?>" ><?php echo $one['gc_name']?></option>
                                                <?php } ?>
                                            <?php } ?>
                                            </select>
                                        <?php } else{?>
                                        <input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data_3" id="data_3" localrequired="" value="<?php echo $item_data[2]['data']; ?>"><?php }?>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li style="border-width: 1px;border-style:solid; border-color: transparent transparent #e0e0e0 transparent;">
                            <ul class="uploadbox boxsizing left first-upload-left">
                                <li class="left uploadbox-li boxsizing">
                                    <div class="img-style boxsizing">
                                        <img shopdz-action="upload_image"  src="<?php if($item_data[3]['img']){ ?>http://www.tqshq.com/data/Attach/<?php echo ($item_data[3]['img']); }else{ ?>  /static/img/default.png<?php } ?>" id="img_view_4" alt="" class="uploadimg boxsizing"/>
                                    </div>
                                    <div class="asDefault-box-cover boxsizing">
                                    </div>
                                    <i   shopdz-action="upload_delete"  class="up-icon dele-icon"></i>
                                    <div class="operationbox boxsizing">
                                        <p class="upload-p">
                                            <input type="radio"  style="display:none;"   name="is_default" value="4" />
                                            <input type="file"   id="img_file_4"  class="upload-inp2" hidefocus="true"/>
                                             <input shopdz-action="upload_value"   type="hidden"  name="img_4"  value="<?php echo $item_data[3]['img']; ?>"  >  
                                            <span class="inp2-cover boxsizing "><i class="up-icon upload-icon"></i>上传</span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <div class="first-upload-right right">
                                <div class="special-con addSpec-con">
                                    <span class="special-con-left left">文字：</span>
                                    <div class="input-group">
                                        <input type="text" name="title_4" id="title_4" class="com-inp1 radius3 boxsizing" localrequired="" value="<?php echo $item_data[3]['title']; ?>">
                                    </div>
                                    <div class="alerrt-sele-box">
                                        <span class="special-con-left left">操作：</span>
                                        <select name="type_4" id="type_4" class="left addFocus-sele w120" localrequired="">
                                            <option <?php if($item_data[3]['type'] == 'url'){ echo 'selected="selected"';}?> value="url">链接</option>
                                            <option <?php if($item_data[3]['type'] == 'goods'){ echo 'selected="selected"';}?> value="goods">SPU ID</option>
                                            <option <?php if($item_data[3]['type'] == 'category'){ echo 'selected="selected"';}?> value="category">商品分类</option>
                                            <!-- <option <?php if($item_data[3]['type'] == 'redpacket'){ echo 'selected="selected"';}?> value="redpacket">优惠券</option> -->
                                        </select>

                                        <?php if($item_data[3]['type'] == 'redpacket'){ ?>
                                            <select class="left addFocus-sele w120" name="data_4" id="data_4" localrequired="">
                                            <?php foreach ($rpacket_list as $v) { echo '<option '. ($item_data[3]['data']==$v['rpacket_t_id'] ? 'selected="selected"' : '' ).'  value="'.$v['rpacket_t_id'].'">'.$v['rpacket_t_title'].'</option>'; }?>
                                            </select>
                                        <?php }else if($item_data[3]['type'] == 'category'){?>
                                            <select class="left addFocus-sele w120" name="data_4" id="data_4" localrequired="">
                                            <?php foreach($category_list as $one){ ?>
                                                <?php if(!empty($one['child'])){ ?>
                                                 <option <?php if($item_data[3]['data']==$one['gc_id']){echo 'selected="selected" ';} ?> value="<?php  echo $one['gc_id'];?>"><?php echo $one['gc_name']?></option>
                                                     <?php foreach($one['child'] as $two){ ?>
                                                         <option  <?php if($item_data[3]['data']==$two['gc_id']){echo 'selected="selected" ';} ?>   value="<?php echo $two['gc_id'];?>" >--<?php echo $two['gc_name']?></option>
                                                     <?php } ?>
                                                <?php }else{ ?>
                                                <option   <?php if($item_data[3]['data']==$one['gc_id']){echo 'selected="selected" ';} ?>   value="<?php echo $one['gc_id'];?>" ><?php echo $one['gc_name']?></option>
                                                <?php } ?>
                                            <?php } ?>
                                            </select>
                                        <?php } else{?>
                                        <input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data_4" id="data_4" localrequired="" value="<?php echo $item_data[3]['data']; ?>"><?php }?>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                     <div class="btnbox-c" style="padding: 40px 0;">
                        <a type="button" id="nav_submit" class="btn1 radius3 marginT10 btn3-btnmargin" href="javascript:;"><?php echo (L("submit_btn")); ?></a>
                        <a type="button" class="btn1 radius3 marginT10" href="<?php echo U('setting/personnel');?>">返回上页</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
    $('#nav_submit').click(function(){
        flag=checkrequire('dataform');
        if(!flag){
            $('#dataform').submit();
        }
    });
    $(function(){
        //图片上传
        $('.uploadbox>li').mouseenter(function(){
            $(this).find('.asDefault-box-cover').addClass('block');
            $(this).find('.dele-icon').addClass('block');
            $(this).find('.inp2-cover').addClass('inp2-cover-hover');
            //$(this).find('.asDefault').addClass('asdefault-green');
        })
        $('.uploadbox>li').mouseleave(function(){
            $(this).find('.asDefault-box-cover ').removeClass('block');
            $(this).find('.dele-icon').removeClass('block');
            $(this).find('.inp2-cover').removeClass('inp2-cover-hover');
            //$(this).find('.asDefault').addClass('asdefault-green');
        })
        $('.uploadbox>li').bind('click',function(){
            //alert('666666666666');
            $(this).find('.asDefault-box-cover').addClass('block2').parents('.uploadbox-li').siblings().find('.asDefault-box-cover').removeClass('block2');
            $(this).find('.asDefault').addClass('asdefault-green').parents('.uploadbox-li').siblings().find('.asDefault').removeClass('asdefault-green');
            $(this).find('.inp2-cover').addClass('inp2-cover-hover2').parents('.uploadbox-li').siblings().find('.inp2-cover').removeClass('inp2-cover-hover2');
            
        })
        
        //商品发布步骤
        $(".release-tab li").click(function(){
            $(this).addClass("activeRelease").siblings().removeClass('activeRelease');
            
        })
    })
</script>
<script type="text/javascript">
    $(function(){
        //鼠标滑过时，添加样式
        // $('.asDefault-box').bind('click',function(){
        //     $(this).addClass('asDefault-box-cli').parents('li').siblings().find('.asDefault-box').removeClass('asDefault-box-cli')
        //     $(this).children().addClass('green-font').parents('li').siblings().children().children().removeClass('green-font');
        //     $(this).children('.img-dele').addClass('green-bor').parents('li').siblings().children().children().removeClass('green-bor');
        //     $(this).find('i').addClass('green-font').parents('li').siblings().children().find('i').removeClass('green-font');
            
        // })
        

        //删除图片按钮
        $('[shopdz-action="upload_delete"]').click(function(){
           $(this).parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'/static/admin/images/uploadimg.png');
           $(this).parents('.uploadbox-li').find('[shopdz-action="upload_value"]').val('');   
        });

        $('.upload-inp2').hover(function(){
            $(this).next().css('background','#f0f0f0')
        },function(){
            $(this).next().css('background','#f5f5f5')
        });


        $('#type_1').change(function(){

            var types = $(this).val();
            if(types == 'redpacket'){
                var datastr1 = '<select class="left addFocus-sele w120" localrequired="" name="data_1" id="data_1"><?php foreach ($rpacket_list as $v) { echo '<option value="'.$v['rpacket_t_id'].'">'.$v['rpacket_t_title'].'</option>'; }?></select>';
                $('#data_1').replaceWith(datastr1);
            }else if(types == 'category'){
                var datastr1 = '<select class="left addFocus-sele w120" localrequired="" name="data_1" id="data_1"><?php foreach ($category_list as $one) { if(!empty($one["child"])){echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';foreach ($one["child"] as $two) { echo '<option value="'.$two["gc_id"].'">--'.$two["gc_name"].'</option>'; } }else{echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';}}?></select>';

                $('#data_1').replaceWith(datastr1);
            }else{
                    var datastr1 = '<input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data_1" id="data_1" localrequired="">';
                    $('#data_1').replaceWith(datastr1);
                }
        });

        $('#type_2').change(function(){

            var types = $(this).val();
            if(types == 'redpacket'){
                var datastr2 = '<select class="left addFocus-sele w120" localrequired="" name="data_2" id="data_2"><?php foreach ($rpacket_list as $v) { echo '<option value="'.$v['rpacket_t_id'].'">'.$v['rpacket_t_title'].'</option>'; }?></select>';
                $('#data_2').replaceWith(datastr2);
            }else if(types == 'category'){
                var datastr2 = '<select class="left addFocus-sele w120" localrequired="" name="data_2" id="data_2"><?php foreach ($category_list as $one) { if(!empty($one["child"])){echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';foreach ($one["child"] as $two) { echo '<option value="'.$two["gc_id"].'">--'.$two["gc_name"].'</option>'; } }else{echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';}}?></select>';

                $('#data_2').replaceWith(datastr2);
            }else{
                var datastr2 = '<input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data_2" id="data_2" localrequired="">';
                $('#data_2').replaceWith(datastr2);
            }
        });

        $('#type_3').change(function(){

            var types = $(this).val();
            if(types == 'redpacket'){
                var datastr3 = '<select class="left addFocus-sele w120" localrequired="" name="data_3" id="data_3"><?php foreach ($rpacket_list as $v) { echo '<option value="'.$v['rpacket_t_id'].'">'.$v['rpacket_t_title'].'</option>'; }?></select>';
                $('#data_3').replaceWith(datastr3);
            }else if(types == 'category'){
                var datastr3 = '<select class="left addFocus-sele w120" localrequired="" name="data_3" id="data_3"><?php foreach ($category_list as $one) { if(!empty($one["child"])){echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';foreach ($one["child"] as $two) { echo '<option value="'.$two["gc_id"].'">--'.$two["gc_name"].'</option>'; } }else{echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';}}?></select>';

                $('#data_3').replaceWith(datastr3);
            }else{
                var datastr3 = '<input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data_3" id="data_3" localrequired="">';
                $('#data_3').replaceWith(datastr3);
            }
        });

        $('#type_4').change(function(){

            var types = $(this).val();
            if(types == 'redpacket'){
                var datastr4 = '<select class="left addFocus-sele w120" localrequired="" name="data_4" id="data_4"><?php foreach ($rpacket_list as $v) { echo '<option value="'.$v['rpacket_t_id'].'">'.$v['rpacket_t_title'].'</option>'; }?></select>';
                $('#data_4').replaceWith(datastr4);
            }else if(types == 'category'){
                var datastr4 = '<select class="left addFocus-sele w120" localrequired="" name="data_4" id="data_4"><?php foreach ($category_list as $one) { if(!empty($one["child"])){echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';foreach ($one["child"] as $two) { echo '<option value="'.$two["gc_id"].'">--'.$two["gc_name"].'</option>'; } }else{echo '<option value="'.$one["gc_id"].'">'.$one["gc_name"].'</option>';}}?></select>';

                $('#data_4').replaceWith(datastr4);
            }else{
                var datastr4 = '<input type="text" class="com-inp1 radius3 boxsizing left addFocus-inp" name="data_4" id="data_4" localrequired="">';
                $('#data_4').replaceWith(datastr4);
            }
        });

        var uploader1 = new plupload.Uploader({
            runtimes: 'html5,html4,flash,silverlight',
            browse_button: 'img_file_1',
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
                 $("#img_file_1").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'/static/img/loading.gif');
                },
                FileUploaded: function (up, file, res) {
                    var resobj = eval('(' + res.response + ')');
                    if(resobj.status){
                        $("#img_file_1").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'http://www.tqshq.com/data/Attach//'+resobj.data);
                        $("#img_file_1").parents('.uploadbox-li').find('[shopdz-action="upload_value"]').val(resobj.data);
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
            browse_button: 'img_file_2',
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
                 $("#img_file_2").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'/static/img/loading.gif');
                },
                FileUploaded: function (up, file, res) {
                    var resobj = eval('(' + res.response + ')');
                    if(resobj.status){
                        $("#img_file_2").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'http://www.tqshq.com/data/Attach//'+resobj.data);
                        $("#img_file_2").parents('.uploadbox-li').find('[shopdz-action="upload_value"]').val(resobj.data);
                    }
                },
                Error: function (up, err) {
                    alert('err');
                }
            }
        });
        uploader2.init();

        var uploader3 = new plupload.Uploader({
            runtimes: 'html5,html4,flash,silverlight',
            browse_button: 'img_file_3',
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
                 $("#img_file_3").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'/static/img/loading.gif');
                },
                FileUploaded: function (up, file, res) {
                    var resobj = eval('(' + res.response + ')');
                    if(resobj.status){
                        $("#img_file_3").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'http://www.tqshq.com/data/Attach//'+resobj.data);
                        $("#img_file_3").parents('.uploadbox-li').find('[shopdz-action="upload_value"]').val(resobj.data);
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
            browse_button: 'img_file_4',
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
                 $("#img_file_4").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'/static/img/loading.gif');
                },
                FileUploaded: function (up, file, res) {
                    var resobj = eval('(' + res.response + ')');
                    if(resobj.status){
                        $("#img_file_4").parents('.uploadbox-li').find('[shopdz-action="upload_image"]').attr("src",'http://www.tqshq.com/data/Attach//'+resobj.data);
                        $("#img_file_4").parents('.uploadbox-li').find('[shopdz-action="upload_value"]').val(resobj.data);
                    }
                },
                Error: function (up, err) {
                    alert('err');
                }
            }
        });
        uploader4.init();
    })
</script><?php endif; break;?>
                                                            <?php case "adv_html": if(!$edit): ?><div style="clear:both;padding-top:10px;">
        <!-- <?php echo ($vo["item_data"]); ?> -->
        <?php echo stripslashes($vo['item_data']); ?>
    </div>
    
<?php else: ?>
    <style type="text/css">
        .picbg {
            display: block;
            margin: 50px auto 0 auto;
        }
    </style>

    <div class="tipsbox radius3">
        <div class="tips boxsizing radius3">
            <div class="tips-titbox">
                <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
                <span class="open-span span-icon"><i class="open-icon"></i></span>
            </div>
        </div>
        <ol class="tips-list" id="tips-list">
            <li>1.在下拉框中选择想要的效果，文本框中会出现相应的内容。</li>
            <li>2.可以对html文本进行相应的修改。</li>
            <li>3.操作完成后点击确认提交按钮进行保存。</li>
        </ol>
    </div>
    <div class="iframeCon">
        <div class="iframeMain">
            <ul class="transverse-nav">
                <li class="activeFour"><a href="javascript:;"><span>预置通栏模板</span></a></li>
            </ul>
            <div class="white-bg ">
                <div class="tab-conbox">
                <form method="post" class="form-horizontal" id="dataform" action="<?php echo U('itemSave');?>">
                <input name="form_submit"   type="hidden"  value="submit">
                <input type="hidden" name="item_id" id="item_id"  value="<?php echo ($edit); ?>">
                <input type="hidden" name="item_type" id="item_type"  value="<?php echo ($item_type); ?>">
                    <div class="jurisdiction boxsizing">
                        <dl class="juris-dl boxsizing">
                            <dt class="left text-r boxsizing">通栏模板选择：</dt>
                            <dd class="left text-l">
                                <select class="w140" name="style" id="style">
                                    <option value="0" >请选择样式</option>
                                    <?php if(!empty($tpl_info) && is_array($tpl_info)){ ?>
                                    <?php foreach($tpl_info as $v){ ?>
                                    <option value="<?php echo ($v["tpl_id"]); ?>"><?php echo ($v["tpl_name"]); ?></option>
                                    <?php } ?>
                                    <?php } ?>

                                </select>
                                                                    
                                <p class="remind1">请选择预设置样式</p>
                            </dd>
                        </dl>
                        <dl class="juris-dl boxsizing">
                            <dt class="left text-r boxsizing paddingT10"><span class="redstar">*</span>通栏html：</dt>
                            <dd class="left text-l paddingT10">
                                <div class="left">
                                    <textarea type="text" id="html_content" class="com-textarea1 radius3 boxsizing banner-text" readonly="true"></textarea>
                                    <p class="remind1">参考模板代码</p>
                                </div>
                                <div class="left preview-jt">
                                    <i class="preview-jtR"></i>
                                </div>
                                <div class="preview-box left">
                                    <div class="preview-img-box" id="html_pic">
                                        <img src="/static/admin/images/picbg.png" class="picbg" />
                                    </div>
                                    <p class="preview-word">通栏样式预览</p>
                                </div>
                                <div class="clear"></div>
                                <div class="copy-box">
                                    <i class="copy-icon"></i>
                                    <p class="copy-remind">点击复制至下方</p>
                                </div>
                                <textarea type="text" class="com-textarea1 radius3 boxsizing banner-text" name="adv_content" id="adv_content" localrequired=""><?php echo ($item_data); ?></textarea>
                                <p class="remind1">通栏样式代码，支持HTML</p>
                            </dd>
                        </dl>
                    </div>
                    <div class="btnbox3 boxsizing">                        
                        <a type="button" id="html_submint" class="btn1 radius3 marginT10 btn3-btnmargin" href="javascript:;">确认提交</a>
                        <a type="button" class="btn1 radius3 marginT10" href="<?php echo U('setting/personnel');?>">返回上页</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
 
<script type="text/javascript">
    $('#html_submint').click(function(){
        flag=checkrequire('dataform');
        if(!flag){
            $('#dataform').submit();
        }
    });
    $('#style').change(function(){
        style_change($(this).find('option:selected').val());
    })
    // simulateSelect('style',200,function(th){
    //     var id = $(th).attr('val');
    //     style_change(id);
    // });

function style_change(id){
    $.ajax({
        type:'POST',
        url:"<?php echo U('html');?>",
        data:'tpl_id='+id,
        success:function(result){
            if(result.status===0){
                // showError("请选择样式！");
                $('#html_content').val("");
                var html_pic = '<div class="preview-img-box" id="html_pic"><img src="/static/admin/images/picbg.png" class="picbg"/></div>';
                $('#html_pic').replaceWith(html_pic);

            }else{
                $('#html_content').val(""+result.data.html+"");
                var html_pic = '<img src="/static/web/'+result.data.intro_pic+'" class="preview-imgW" id="html_pic"/>';
                $('#html_pic').replaceWith(html_pic);
                
            }
        },
        dataType:'json'
    });
}

$(".copy-icon").click(function(){
    var html_content = $('#html_content').val();
    if(html_content != ''){
        $('#adv_content').val(""+html_content+"");
    }else{
        showError("通栏html为空！");
    }
})

</script><?php endif; break;?>
                                                            <?php case "goods": if(!$edit): ?><div class="con-list" data-type="adv_goods">
        <div class="con1">
            <div class="listbox1">
                <?php if(is_array($vo["goods_info"])): foreach($vo["goods_info"] as $key=>$goods): ?><a href="#">
                        <dl class="list-dl">
                            <dt><img src="http://www.tqshq.com/data/Attach/<?php echo ($goods["goods_image"]); ?>"/></dt>
                            <dd>
                                <p class="dl-tit"><?php echo ($goods["goods_name"]); ?></p>
                                <p class="price1"><span>¥</span><?php echo ($goods["goods_price"]); ?></p>
                            </dd>
                        </dl>
                    </a><?php endforeach; endif; ?>
            </div>
        </div>
    </div>
<?php else: ?>
    
        <!-- <link rel="stylesheet" type="text/css" href="/static/admin/css/extends.css?v=1" />
        <link rel="stylesheet" type="text/css" href="/static/admin/css/shopcity.css" /> -->
        <div class="tipsbox">
            <div class="tips boxsizing radius3">
                <div class="tips-titbox">
                    <h1 class="tip-tit"><i class="tips-icon-lamp"></i>操作提示</h1>
                    <span class="open-span span-icon"><i class="open-icon"></i></span>
                </div>
            </div>
            <ol class="tips-list" id="tips-list">
                <li>1.从右侧筛选商品，点击添加按钮完成添加。</li>
                <li>2.鼠标移动到已有商品上，会出现删除按钮可以对商品进行删除。</li>
                <li>3.操作完成后点击确认提交按钮进行保存。</li>
            </ol>
        </div>
        <div class="iframeCon">
            <div class="white-shadow2">
            <form action="<?php echo U('itemSave');?>" method="post" id="goods_form">
                <input type="hidden" name="item_id" value="<?php echo ($edit); ?>"/>
                <input type="hidden" name="item_type" value="<?php echo ($item_type); ?>"/>
                <div class="zoom">
                	 <h1 class="details-tit">编辑商品</h1>
                    <div class="manage-left left">
                        <ul class="manage-left-con">
                            <?php if(is_array($goods)): foreach($goods as $key=>$vo): ?><li id="<?php echo ($vo["goods_common_id"]); ?>">
                                    <div class="img-cover"></div>
                                    <div class="edit-btn1"><a href='javascript:delGoods(<?php echo ($vo["goods_common_id"]); ?>);'>删除</a></div>
                                    <div class="manage-picbox"><img src="http://www.tqshq.com/data/Attach/<?php echo ($vo["goods_image"]); ?>" alt="<?php echo ($vo["goods_name"]); ?>" class="manage-pic"/></div>
                                    <p class="manage-name ellipsis"><?php echo ($vo["goods_name"]); ?></p>
                                    <p class="manage-price">￥<?php echo ($vo["goods_price"]); ?></p>
                                    <input nctype="goods_common_id" name="item_data[item][]" type="hidden" value="<?php echo ($vo["goods_common_id"]); ?>">
                                </li><?php endforeach; endif; ?>
                            
                        </ul>
                    </div>
                    <div class="manage-right left">
                        <p class="manange-right-tit">选择商品添加</p>
                        <p class="pro-keyword">商品关键字</p>
                        <div class="manage-search">
                            <input type="text" class="com-inp1 manage-inp left" placeholder="请输入商品关键字" id="goods_search_content" name="goods_search_content"/>                            
                            <!-- <button class="search-btn left radius3" id="btn_mb_special_goods_search" onclick="searchGoods();">搜索</button> -->
                            <input type="button" class="search-btn left radius3" id="btn_mb_special_goods_search" onclick="searchGoods();" value="搜索">
                        </div>
                        <ul class="manage-pro-list">
                            
                        </ul>
                        <div class="pagination boxsizing" id="goods_pagination">
                        </div>
                    </div>
                </div>
                 <div class="manege-btnbox">
                    <a type="button" class="btn1 radius3 marginT10 btn3-btnmargin normal" onclick="$('#goods_form').submit();"><?php echo (L("submit_btn")); ?></a>
                    <a type="button" class="btn1 radius3 marginT10 normal" href="<?php echo U('setting/personnel');?>">返回上页</a>
                </div>
            </form>
            </div>
        </div>
<script type="text/javascript">

    //分页获取商品信息
    function searchGoods(p){
        p = p ? p : "1";
        var url = "<?php echo U('Search/searchGoods');?>";
        var content  = $("#goods_search_content").val();
        $.post(url,{content:content,p:p},function(data){
            if(data.status){
                //分页信息的输出
                $("#goods_pagination").empty();//清空当前div的元素
                $("#goods_pagination").html(data.data.page);//将分页html输出
                var aobjs = $("#goods_pagination").find(".page");
                $(aobjs).each(function(i){

                    var currentpage = $(this).data('page');
                    //绑定点击事件
                    $(this).click(function(){
                        searchGoods(currentpage);//重新调用该函数查询
                    });
                });
                //end分页信息
                //结果显示
                $(".manage-pro-list").empty();
                var html = buildGoodsHtml(data.data.goods);
                $(".manage-pro-list").append(html);
            }else{
                $(".manage-pro-list").empty();
                $(".manage-pro-list").append('&nbsp;&nbsp;<p>暂时没有此商品！</p>');
            }
        });
    }

    //生成商品选择html
    function buildGoodsHtml(goods){
        if(goods.length <= 0){
            return '';
        }
        var html = '';
        for(var i = 0;i<goods.length;i++){
            html += '<li>';
            html += '<img title="'+goods[i].goods_name+'" src="http://www.tqshq.com/data/Attach/'+ goods[i].goods_image+'"  class="manage-pro-img left"/>';
            html += '<div class="manage-pro-con right">';
            html += '<p class="manage-pro-name">'+goods[i].goods_name+'</p>';
            html += '<p class="zoom"><span class="manage-pro-price left">￥'+goods[i].goods_price+'</span><input type="button" class="search-btn radius3 manage-pro-btn right" value="添加" data-goods-id="'+goods[i].goods_common_id+'" data-goods-name="'+goods[i].goods_name+'" data-goods-price="'+goods[i].goods_price+'" data-goods-image="'+goods[i].goods_image+'"  onclick="addToList(this);"></p>';
            html += '</div>';
            html += '</li>';

        }
        return html;
    }
    

    //添加商品到
    function addToList(obj){
        if(checkExist($(obj).data("goods-id"))){
            showError("商品已添加，请添加其他商品！");
            return;
        }
        var goodshtml = '';
        goodshtml += '<li id="'+$(obj).data("goods-id")+'">';
        goodshtml += '<div class="img-cover"></div>';
        goodshtml += '<div class="edit-btn1"><a href="javascript:delGoods('+$(obj).data("goods-id")+');">删除</a></div>';
        goodshtml += '<div class="manage-picbox"><img src="http://www.tqshq.com/data/Attach/'+$(obj).data("goods-image")+'" alt="'+$(obj).data("goods-name")+'" class="manage-pic"/></div>';
        goodshtml += '<p class="manage-name ellipsis">'+$(obj).data("goods-name")+'</p>';
        goodshtml += '<p class="manage-price">￥'+$(obj).data("goods-price")+'</p>';
        goodshtml += '<input nctype="goods_common_id" name="item_data[item][]" type="hidden" value="'+$(obj).data("goods-id")+'">';
        goodshtml += '</li>';
        $(".manage-left-con").append(goodshtml);
    }

    
        
        
        
        
        
        
    

    //查询当前div是否已经存在当前商品
    function checkExist(goodsid){
        var goods_li = $(".manage-left-con").children('li');
        for(var i = 0;i<goods_li.length;i++){
            // console.log($(goods_li[i]));
            // console.log($(goods_li[i]).attr('id'));
            if(goodsid == $(goods_li[i]).attr('id')){
                return true;
            }
        }
        return false;
    }

    //删除
    function delGoods(goodsid){
        $("#"+goodsid).detach();
    }

</script><?php endif; break;?>
                                                            <?php default: endswitch;?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="handle">
                                                <a nctype="btn_move_up" href="javascript:;"><i class="fa fa-arrow-up
                                            "></i>上移</a> <a nctype="btn_move_down" href="javascript:;"><i class="fa fa-arrow-down
                                            "></i>下移</a> <a nctype="btn_usable" data-item-id="<?php echo ($vo["item_id"]); ?>" href="javascript:;"><i class="fa fa-toggle-on
                                            "></i>启用</a> <a nctype="btn_edit_item" data-item-id="<?php echo ($vo["item_id"]); ?>" href="javascript:;"><i class="fa fa-pencil-square-o"></i>编辑</a> <a nctype="btn_del_item" data-item-id="<?php echo ($vo["item_id"]); ?>" href="javascript:;"><i class="fa fa-trash-o
                                            "></i>删除</a>
                                            </div>

                                        </div><?php endforeach; endif; ?>
                                </div>
                            </div>
                            <div class="module-list">
                                <div class="module_adv_list"> <span>幻灯版块</span> <a nctype="btn_add_item" class="add" href="javascript:;" data-specialid = 1 data-module-type="adv_list">添<br>加</a> </div>
                                <div class="module_adv_list"> <span>通栏图片广告</span> <a nctype="btn_add_item" class="add" href="javascript:;" data-specialid = 1 data-module-type="adv_img">添<br>加</a> </div>
                                <div class="module_adv_list"> <span>预置通栏模板</span> <a nctype="btn_add_item" class="add" href="javascript:;" data-specialid = 1 data-module-type="adv_html">添<br>加</a> </div>
                                <div class="module_adv_list" style="background-position: -440px -880px;height: 70px;"> <span>图文导航</span> <a nctype="btn_add_item" class="add" href="javascript:;" data-specialid = 1 data-module-type="adv_nav">添<br>加</a> </div>
                                <div class="module_goods"> <span>商品展示版块</span> <a nctype="btn_add_item" class="add" href="javascript:;" data-specialid = 2 data-module-type="goods">添<br>加</a> </div>
                            </div>
                        </div>
						<!--<div class="btnbox-c">
                       	 	<a type="button" class="btn1 radius3 marginT10" href="<?php echo U('Admin/Special/showIndex');?>" target="_blank">首页预览</a>
                   		</div>-->
                    </div>

                </div>
            </div>
        </div>

<script type="text/javascript" src="/static/admin/js/common2.js"></script>
<script>
    var html = '';//全局的当前首页内容
    var special_id = "<?php echo ($special_id); ?>";
    var url_item_add = "<?php echo U('Special/itemAdd');?>";
    var url_item_del = "<?php echo U('Special/itemDel');?>";
    var url_item_edit = "<?php echo U('Special/itemEdit');?>";
    $(function(){
        //添加模块
        $('[nctype="btn_add_item"]').on('click', function() {
            var data = {
                special_id: special_id,
                item_type: $(this).attr('data-module-type')
            };
            $.post(url_item_add, data, function(data) {
                getResultDialog(data,false);
            }, "json");
        });
        //对div进行排序
        //上移
        $('#item_list').on('click', '[nctype="btn_move_up"]', function() {
            var $current = $(this).parents('[nctype="special_item"]');
            $prev = $current.prev('[nctype="special_item"]');
            if($prev.length > 0) {
                $prev.before($current);
                update_item_sort();
            } else {
                showError('已经是第一个了');
            }
        });

        //下移
        $('#item_list').on('click', '[nctype="btn_move_down"]', function() {
            var $current = $(this).parents('[nctype="special_item"]');
            $next = $current.next('[nctype="special_item"]');
            if($next.length > 0) {
                $next.after($current);
                update_item_sort();
            } else {
                showError('已经是最后一个了');
            }
        });

        //删除模块
        $('#item_list').on('click', '[nctype="btn_del_item"]', function() {
        	var $this = $(this);
            var item_id = $this.attr('data-item-id');
 			showConfirm("确认要删除么？",function(){	    		
	            $.post(url_item_del, {item_id: item_id, special_id: special_id} , function(data) {
	                if(data.status == 1) {
	                	showSuccess("操作成功");
	                	var obj = $('[data-item-id="'+item_id+'"]');
	                	obj.remove();
	                } else {
	                	showError(data.info);
	                }
	            }, "json");
	    	});
	    	
        });


        //编辑模块
        $('#item_list').on('click', '[nctype="btn_edit_item"]', function() {
            var item_id = $(this).attr('data-item-id');
            window.location.href = url_item_edit + '?item_id=' + item_id;
        });

        //启用/禁用控制
        $('#item_list').on('click', '[nctype="btn_usable"]', function() {
            var $current = $(this).parents('[nctype="special_item"]');
            var item_id = $current.attr('data-item-id');
            var usable = '';
            if($current.hasClass('usable')) {
                $current.removeClass('usable');
                $current.addClass('unusable');
                usable = 'unusable';
                $(this).html('<i class="fa fa-toggle-off"></i>启用');
            } else {
                $current.removeClass('unusable');
                $current.addClass('usable');
                usable = 'usable';
                $(this).html('<i class="fa fa-toggle-on"></i>禁用');
            }

            $.post("<?php echo U('Special/itemStatus');?>", {item_id: item_id, usable: usable, special_id: special_id}, function(data) {
                if(!data.status){
                    showError("操作失败");
                }
            }, 'json');
        });

        var update_item_sort = function() {
            var item_id_string = '';
            $item_list = $('#item_list').find('[nctype="special_item"]');
            $item_list.each(function(index, item) {
                item_id_string += $(item).attr('data-item-id') + ',';
            });
            $.post("<?php echo U('Special/itemSort');?>",{special_id: special_id, item_id_string: item_id_string},function(data){
                if(!data.status){
                    showError("操作失败");
                }
            });
        };
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
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
    	<?php if(!$edit): ?><div class="con-list" data-type="adv_goods">
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

</script><?php endif; ?>
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
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
            <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
            <span class="open-span span-icon"><i class="open-icon"></i></span>
        </div>
    </div>
    <ol class="tips-list" id="tips-list">
        <li>1.热卖商品下单量、下单机呢统计，统计最热门的前三十个商品。</li>
        <li>1.统计日期分为一天、七天、30天，用户也可自定义日期筛选。</li>
    </ol>
</div>
<div class="iframeCon">
<div class="iframeMain">
    <ul class="transverse-nav">
        <li <?php if($search_arr['search_key'] == 'num'){ echo 'class="activeFour"'; } ?> data-param="num"><a href="javascript:;"><span>下单量</span></a></li>
        <li <?php if($search_arr['search_key'] == 'price'){ echo 'class="activeFour"'; } ?> data-param="price"><a href="javascript:;"><span>下单金额</span></a></li>
    </ul>
    <div class="white-bg paddingB30">
        <div class="tab-conbox <?php if($search_arr['search_key'] != 'num'){ echo 'none'; } ?>">
            <ul class="stati-tab radius5">
                <li class="<?php echo ($search_arr['search_type']=='day'?'stati-active-bg':''); ?>"><a href="<?php echo U('Statistics/hotgoods',array('search_type'=>'day','search_key'=>'num'));?>">今天</a></li>
                <li class="<?php echo ($search_arr['search_type']=='week'?'stati-active-bg':''); ?>"><a href="<?php echo U('Statistics/hotgoods',array('search_type'=>'week','search_key'=>'num'));?>">最近7天</a></li>
                <li class="<?php echo ($search_arr['search_type']=='month'?'stati-active-bg':''); ?>"><a href="<?php echo U('Statistics/hotgoods',array('search_type'=>'month','search_key'=>'num'));?>">最近30天</a></li>
            </ul>

            <div class="search-box1 right">
             <form  action=""  method="get">
             <input type="hidden" name="search_type" value="diydate">
             <input type="hidden" name="search_key" value="num">
                <div class="left">
                <p class="time-box"><input type="text" class="com-inp1 radius3 boxsizing" id="nstime" name="stime" readonly="" <?php echo $search_arr['diydate'] ? 'value="'.@date('Y-m-d',$search_arr['diydate']['stime']).'"' : 'placeholder="选择起始时间"';?> /><i class="timeinp-icon"></i></p>
                <span class="left time-line">—</span>
                <p class="time-box"><input type="text" class="com-inp1 radius3 boxsizing" id="netime" name="etime" readonly="" <?php echo $search_arr['diydate'] ? 'value="'.@date('Y-m-d',$search_arr['diydate']['etime']).'"' : 'placeholder="选择结束时间"';?> /><i class="timeinp-icon"></i></p>
                </div>
                <input type="submit" value="搜索" class="search-btn right radius3">
             </form>
            </div>

            <div class="staticstic-con">
                <div id="goods_num" style=""></div>
            </div>
        </div>
        <div class="tab-conbox <?php if($search_arr['search_key'] != 'price'){ echo 'none'; } ?>">
            <ul class="stati-tab radius5">
                <li class="<?php echo ($search_arr['search_type']=='day'?'stati-active-bg':''); ?>"><a href="<?php echo U('Statistics/hotgoods',array('search_type'=>'day','search_key'=>'price'));?>">今天</a></li>
                <li class="<?php echo ($search_arr['search_type']=='week'?'stati-active-bg':''); ?>"><a href="<?php echo U('Statistics/hotgoods',array('search_type'=>'week','search_key'=>'price'));?>">最近7天</a></li>
                <li class="<?php echo ($search_arr['search_type']=='month'?'stati-active-bg':''); ?>"><a href="<?php echo U('Statistics/hotgoods',array('search_type'=>'month','search_key'=>'price'));?>">最近30天</a></li>
            </ul>

            <div class="search-box1 right">
             <form  action=""  method="get">
             <input type="hidden" name="search_type" value="diydate">
             <input type="hidden" name="search_key" value="price">
                <div class="left">
                <p class="time-box"><input type="text" class="com-inp1 radius3 boxsizing" id="pstime" name="stime" readonly="" <?php echo $search_arr['diydate'] ? 'value="'.@date('Y-m-d',$search_arr['diydate']['stime']).'"' : 'placeholder="选择起始时间"';?> /><i class="timeinp-icon"></i></p>
                <span class="left time-line">—</span>
                <p class="time-box"><input type="text" class="com-inp1 radius3 boxsizing" id="petime" name="etime" readonly="" <?php echo $search_arr['diydate'] ? 'value="'.@date('Y-m-d',$search_arr['diydate']['etime']).'"' : 'placeholder="选择结束时间"';?> /><i class="timeinp-icon"></i></p>
                </div>
                <input type="submit" value="搜索" class="search-btn right radius3">
             </form>
            </div>

            <div class="staticstic-con">
                <div id="goods_price" style=""></div>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    // $(function(){
    //     $('.stati-tab li').bind('click',function(){
    //         $(this).addClass('stati-active-bg').siblings().removeClass('stati-active-bg');
    //     })
    // })
</script>
<script src="/static/admin/js/highcharts.js"></script>
<script type="text/javascript">
// $(function(){
//      $('#goods_num').highcharts(<?php echo $stat_json['goods_num'];?>);
//      $('#goods_price').highcharts(<?php echo $stat_json['goods_price'];?>);
//      var search_key = '<?php echo $search_arr['search_key']; ?>';
//      if(search_key == 'num'){
//         search_key = 'price';
//      }else{
//         search_key = 'num';
//      }
//      $('#goods_'+search_key).parent().parent().hide();
// });
var data_arr = new Array();
data_arr['num'] = <?php echo $stat_json['goods_num'];?>;
data_arr['price'] = <?php echo $stat_json['goods_price'];?>;
$(function(){
    $( "#pstime" ).datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel:true,
        dateFormat: 'yy-mm-dd',
        showAnim:"fadeIn",//淡入效果
    });
    $( "#petime" ).datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel:true,
        dateFormat: 'yy-mm-dd',
        showAnim:"fadeIn",//淡入效果
    });
    $( "#nstime" ).datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel:true,
        dateFormat: 'yy-mm-dd',
        showAnim:"fadeIn",//淡入效果
    });
    $( "#netime" ).datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel:true,
        dateFormat: 'yy-mm-dd',
        showAnim:"fadeIn",//淡入效果
    });

    var search_key = '<?php echo $search_arr['search_key']; ?>';
    gethigtcharts(search_key);

    $(".transverse-nav>li").unbind("click").bind('click',function(){
        $(this).addClass("activeFour").siblings().removeClass();
        // $($(".tab-conbox")[$(this).index()]).show().siblings().hide();
        $($(".tab-conbox")[$(this).index()]).removeClass('none').siblings().addClass('none');
        var par = $(this).attr('data-param');
        gethigtcharts(par);
        reloadScroll();
    });

});
function gethigtcharts(keys){
    if($('#goods_'+keys).html().length <= 0){
        $('#goods_'+keys).highcharts(data_arr[keys]);
    }
}
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
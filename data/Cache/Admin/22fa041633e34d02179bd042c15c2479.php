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
    	 <ul class="survey-tit">
      <li class="gross-box gross-income">
        <h6 class="gross-tit">总收入</h6>
        <p class="gross-num"><?php echo $count['amount']['all']; ?></p>
        <div class="gross-con">近30天下单金额&nbsp;<?php echo $count['amount']['30']; ?></div>
        <i class="gross-icon income-icon"></i>
      </li>
      <li class="gross-box gross-order">
        <h6 class="gross-tit">总订单数</h6>
        <p class="gross-num"><?php echo $count['num']['all']; ?></p>
        <div class="gross-con">近30天下单量&nbsp;<?php echo $count['num']['30']; ?></div>
        <i class="gross-icon order-icon"></i>
      </li>
      <li class="gross-box gross-member">
        <h6 class="gross-tit">总下单会员数</h6>
        <p class="gross-num"><?php echo $count['omember']['all']; ?></p>
        <div class="gross-con">近30天下单会员数&nbsp;<?php echo $count['omember']['30']; ?></div>
        <i class="gross-icon member-icon"></i>
      </li>
      <li class="gross-box  gross-member2">
        <h6 class="gross-tit">总会员数</h6>
        <p class="gross-num"><?php echo $count['amember']['all']; ?></p>
        <div class="gross-con">近30天新增会员数&nbsp;<?php echo $count['amember']['30']; ?></div>
        <i class="gross-icon member2-icon"></i>
      </li>
    </ul>
    <div class="plugBox">
    	<ul class="transverse-nav">
		    <li class="activeFour"><a href="javascript:;"><span>营销应用</span></a></li>
		</ul>
	    <!--插件-->
	    <ul class="plug-box">
			<?php foreach($plugin_list as $pk=>$pv){ ?>
	    	<li>
	    		<div class="plug-module">
				<a href=" <?php echo U('Cms/plugins',array('module'=>$pv['code'],'controller'=>'admin','method'=>$pv['code']));?>">
				<img src="<?php echo trim(SITE_URL,'/');?>/plugins/<?php echo $pv['code'];?>/<?php echo $pv['icon'];?>" />
				</a>
				</div>
	    		<p class="plug-word"><a href=" <?php echo U('Cms/plugins',array('module'=>$pv['code'],'controller'=>'admin','method'=>$pv['code']));?>">管理</a></p>
	    	</li>
			<?php }?>
	    </ul>
    	
    </div>
    
    
    <div class="iframeCon surveyIframe shadow-none">
	<div class="iframeMain shadow-none">
    	<div class="survey-tabcon">
    		<ul class="transverse-nav">
		        <li <?php if($search_arr['search_key'] == 'order_amount'){ echo 'class="activeFour"'; } ?> data-param="order_amount"><a href="javascript:;"><span>下单金额</span></a></li>
		        <li <?php if($search_arr['search_key'] == 'order_num'){ echo 'class="activeFour"'; } ?> data-param="order_num"><a href="javascript:;"><span>下单数量</span></a></li>
		        <li <?php if($search_arr['search_key'] == 'order_member'){ echo 'class="activeFour"'; } ?> data-param="order_member"><a href="javascript:;"><span>下单会员</span></a></li>
		        <li <?php if($search_arr['search_key'] == 'new_member'){ echo 'class="activeFour"'; } ?> data-param="new_member"><a href="javascript:;"><span>新增会员</span></a></li>
		      </ul>
		      <div class="survey-topcon">
		        <div class="tab-conbox <?php if($search_arr['search_key'] != 'order_amount'){ echo 'none'; } ?>">
		            <div id="order_amount" style=""></div>
		        </div>
		        <div class="tab-conbox <?php if($search_arr['search_key'] != 'order_num'){ echo 'none'; } ?>">
		            <div id="order_num" style=""></div>      
		        </div>
		        <div class="tab-conbox <?php if($search_arr['search_key'] != 'order_member'){ echo 'none'; } ?>">
		          <div id="order_member" style=""></div> 
		        </div>
		        <div class="tab-conbox <?php if($search_arr['search_key'] != 'new_member'){ echo 'none'; } ?>">
		            <div id="new_member" style=""></div>
		        </div>
		      </div>
    	</div>
      
        <div class="hot_goods_list">
          <div class="top-con radius5 white-shadow2 left margin-L1">
            <h2 class="top-tit boxsizing left-toptit">
              <p class="main-tit">单品销售排名</p>
              <p class="sub-tit">掌握30日内最热销的商品及时补货</p>
              <span class="top-span left-topspan"></span>
            </h2>
            <div class="table-div">
              <table class="survey-table">
                <tr>
                  <th width="65">排名</th>
                  <th colspan="2">
                    商品信息
                  </th>
                  <th width="90">销量</th>
                </tr>
                <?php foreach($hotgoods as $k => $v){ ?>
                  <tr>
                    <td><?php echo $k+1; ?></td>
                    <td width="60">
                      <a href="<?php echo $v['url']; ?>" target="_blank">
                        <img src="<?php echo $v['goods_image']; ?> " alt="" class="goodsImg"/>
                      </a>
                    </td>
                    <td class="text-l">
                      <a href="<?php echo $v['url']; ?>" target="_blank" class="goods-det">
                        <?php echo $v['goods_name']; ?>
                      </a>
                    </td>
                    <td><?php echo $v['goods_num']; ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
          </div>
          <div class="top-con radius5 white-shadow2 left">
            <h2 class="top-tit boxsizing right-toptit">
              <p class="main-tit">单品浏览量排名</p>
              <p class="sub-tit">掌握30日内浏览量最高的商品及时补货</p>
              <span class="top-span right-topspan"></span>
            </h2>
            <div class="table-div">
              <table class="survey-table">
                <tr>
                  <th width="65">排名</th>
                  <th colspan="2">
                    商品信息
                  </th>
                  <th width="90">浏览量</th>
                </tr>
                <?php foreach($viewgoods as $k => $v){ ?>
                  <tr>
                    <td><?php echo $k+1; ?></td>
                    <td width="60">
                      <a href="<?php echo $v['url']; ?>" target="__blank">
                        <img src="<?php echo $v['goods_image']; ?> " alt="" class="goodsImg"/>
                      </a>
                    </td>
                    <td class="text-l">
                      <a href="<?php echo $v['url']; ?>" target="__blank" class="goods-det">
                        <?php echo $v['goods_name']; ?>
                      </a>
                    </td>
                    <td><?php echo $v['view_number']; ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
    </div>
    </div>
    </div>
    <script type="text/javascript" src="/static/js/common2.js"></script>
    <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/moment.js" charset="UTF-8"></script>
    <script src="/static/js/moment-with-locales.js" charset="UTF-8"></script>
    <script src="/static/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script src="/static/admin/js/highcharts.js"></script>
    <script type="text/javascript">
      var data_arr = new Array();
      data_arr['order_num'] = <?php echo $stat_json['order_num'];?>;
      data_arr['order_amount'] = <?php echo $stat_json['order_amount'];?>;
      data_arr['order_member'] = <?php echo $stat_json['order_member'];?>;
      data_arr['new_member'] = <?php echo $stat_json['new_member'];?>;
      $(function(){
           var iframeConH = Math.max(document.body.scrollHeight,document.body.clientHeight);
           $('#myIframeId', window.parent.document).attr('height',iframeConH+10-1200);
           var search_key = '<?php echo $search_arr['search_key']; ?>';
           gethigtcharts(search_key);
          $(".transverse-nav>li").unbind("click").bind('click',function(){
              $(this).addClass("activeFour").siblings().removeClass();
              $($(".tab-conbox")[$(this).index()]).show().siblings().hide();
              var par = $(this).attr('data-param');
              gethigtcharts(par);
              reloadScroll();
          });

      });
      function gethigtcharts(keys){
          if($('#'+keys).html().length <= 0){
              $('#'+keys).highcharts(data_arr[keys]);
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
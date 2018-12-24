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
    	        <link rel="stylesheet" type="text/css" href="/static/admin/css/flexigrid.pack.css" />
        <script type="text/javascript" src="/static/admin/js/flexigrid.js"></script>
        <div class="tipsbox">
            <div class="tips boxsizing radius3">
                <div class="tips-titbox">
                    <h1 class="tip-tit"><i class="tips-icon-lamp"></i><?php echo (L("operation_tips")); ?></h1>
                    <span class="open-span span-icon"><i class="open-icon"></i></span>
                </div>
            </div>
            <ol class="tips-list">
                <li>1.点击审核操作可对待审核款项审核退款或拒绝退款 </li>
                <li>2.点击退款操作可对正在退款的商品进行原路退款或人工退款选择处理 </li>
                <li>3.点击详情操作显示退款订单（包括订单物品及处理）的详细信息 </li>
            </ol>
        </div>
        <div class="iframeCon">
		<div class="iframeMain">
            <ul class="transverse-nav">
                <li class="<?php echo ($status=='0'?'activeFour':''); ?>"><a href="<?php echo U('Presalestable/refunds/status/0');?>">全部</a></li>
                <li class="<?php echo ($status=='1'?'activeFour':''); ?>" ><a href="<?php echo U('Presalestable/refunds/status/1');?>">待处理</a></li>
        		<li class="<?php echo ($status=='2'?'activeFour':''); ?>" ><a href="<?php echo U('Presalestable/refunds/status/2');?>">待退款</a></li>
        		<li class="<?php echo ($status=='3'?'activeFour':''); ?>" ><a href="<?php echo U('Presalestable/refunds/status/3');?>">已退款</a></li>
        		<li class="<?php echo ($status=='4'?'activeFour':''); ?>" ><a href="<?php echo U('Presalestable/refunds/status/4');?>">已拒绝</a></li>
            </ul>
            <table class="flexme2" style="display: none"></table>
            
        </div>
        </div>

        <!--content结束-->

        <script type="text/javascript">
        	$(".flexme2").flexigrid({
                url : "<?php echo U('Presalestable/refunds');?>",
                dataType : 'json',
                colModel : [
                    {
                        display : '操作',//列名
                        name : 'status_code',//字段名
                        width : 90,//宽度
                        sortable : true,//排序
                        align : 'center',//内容对齐方式
                    },
                    {
                        display : '订单编号',
                        name : 'order_sn',
                        width : 160,
                        sortable : true,
                        align : 'center'
                    },
                    {
                        display : '退款单号',
                        name : 'refund_sn',
                        width : 160,
                        sortable : true,
                        align : 'center'
                    },
                    {
                        display : '买家帐号',
                        name : 'member_mobile',
                        width : 160,
                        sortable : true,
                        align : 'center'
                    },
                    {
                        display : '退款金额',
                        name : 'refund_amount',
                        width : 160,
                        sortable : true,
                        align : 'left'
                    },
                    {
                        display : '退款原因',
                        name : 'causes_name',
                        width : 200,
                        sortable : true,
                        align : 'left'
                    },
                    {
                        display : '处理状态',
                        name : 'status',
                        width : 200,
                        sortable : true,
                        align : 'left'
                    },
                    {
                        display : '处理备注',
                        name : 'remark',
                        width : 230,
                        sortable : true,
                        align : 'left'
                    },
                    {
                        display : '申请时间',
                        name : 'dateline',
                        width : 200,
                        sortable : true,
                        align : 'center'
                    }
                ],
                datacol: {
                    status_code: function(val, id){
                        var html = '';
                        if (val == 1){
                            html += "<div class='edit-iconbox edit-sele table-edit-icon'>";
                            html += "<a class='edit-word table-icon-a' href='<?php echo U('Presalestable/editrefund/id/"+id+"');?>'><i class='table-com-icon table-handle-icon'></i><span class='gap'>审核</span></a>";
                            html += "</div>";
                        }else if(val == 2){
                            html += "<div class='edit-iconbox edit-sele table-edit-icon'>";
                            html += "<a class='edit-word table-icon-a' href='<?php echo U('Presalestable/refunddetail/id/"+id+"/status/return');?>'  data-refund_id='"+id+"}'><i class='table-com-icon table-refund-icon'></i><span class='gap'>退款</span></a>";
                            html += "</div>";
                        }else{
                            html += "<div class='edit-iconbox edit-sele table-edit-icon'>";
                            html += "<a class='edit-word table-icon-a' href='<?php echo U('Presalestable/refunddetail/id/"+id+"/status/details');?>'><i class='table-com-icon table-look-icon'></i><span class='gap'>详情</span></a>";
                            html += "</div>";
                        }
                        return html;
                    }
                }, /* __mw:datacol(p, col, val)的回调函数，参数：函数名(字段名)的值 */
                combobuttons: false,/* buttons后面追加的下拉按纽 */
                buttons : [ 
                    {
                        name : 'Add',
                        bclass : 'add',
                        onpress : Example4,
                        bimage : false
                    },
                    {
                        name : 'Delete',
                        bclass : 'delete',
                        onpress : Example4,
                        bimage : false
                    },
                    {
                        separator : true
                    } 
                ],
                searchitems : [ 
                    {
                        display : '退款单号',
                        name : 'refund_sn'
                    },
                    {
                        display : '订单编号',
                        name : 'order_sn',
                        isdefault : true
                    },
                    {
                        display : '买家帐号',
                        name : 'member_mobile',
                        isdefault : true
                    }
                ],
                sortname : "dateline",
                sortorder : "desc",
                usepager : true,
                useRp : true,
                rp : 15,
                idProperty: 'refund_id',//主键ID
                title:'退款管理',
                showTableToggleBtn : false,
                //width : 1600,
                height : 'auto',
                params : [{
                    name : 'status', 
                    value : '<?php echo ($status); ?>'
                }]
                
            });
            function Example4(th, com, grid) {
                $(document).on('click','#'+th,function(){
                    if (com == 'Delete') {
                        var conf = confirm('Delete ' + $('.trSelected', grid).length + ' items?')
                        if(conf){
                            $.each($('.trSelected', grid),
                                function(key, value){
                                    $.get('example4.php', { Delete: value.firstChild.innerText}
                                        , function(){
                                            // when ajax returns (callback), update the grid to refresh the data
                                            $(".flexme2").flexReload();
                                    });
                            });    
                        }
                    }else if (com == 'Edit') {
                        var conf = confirm('Edit ' + $('.trSelected', grid).length + ' items?')
                        if(conf){
                            $.each($('.trSelected', grid),
                                function(key, value){
                                    // collect the data
                                    var OrgEmpID = value.children[0].innerText; // in case we're changing the key
                                    var EmpID = prompt("Please enter the New Employee ID",value.children[0].innerText);
                                    var Name = prompt("Please enter the Employee Name",value.children[1].innerText);
                                    var PrimaryLanguage = prompt("Please enter the Employee's Primary Language",value.children[2].innerText);
                                    var FavoriteColor = prompt("Please enter the Employee's Favorite Color",value.children[3].innerText);
                                    var FavoriteAnimal = prompt("Please enter the Employee's Favorite Animal",value.children[4].innerText);

                                    // call the ajax to save the data to the session
                                    $.get('example4.php', 
                                        { Edit: true
                                            , OrgEmpID: OrgEmpID
                                            , EmpID: EmpID
                                            , Name: Name
                                            , PrimaryLanguage: PrimaryLanguage
                                            , FavoriteColor: FavoriteColor
                                            , FavoritePet: FavoriteAnimal  }
                                        , function(){
                                            // when ajax returns (callback), update the grid to refresh the data
                                            $(".flexme2").flexReload();
                                    });
                            });    
                        }
                    }else if (com == 'Add') {
                        // collect the data
                        var EmpID = prompt("Please enter the Employee ID","5");
                        var Name = prompt("Please enter the Employee Name","Mark");
                        var PrimaryLanguage = prompt("Please enter the Employee's Primary Language","php");
                        var FavoriteColor = prompt("Please enter the Employee's Favorite Color","Tan");
                        var FavoriteAnimal = prompt("Please enter the Employee's Favorite Animal","Dog");

                        // call the ajax to save the data to the session
                        $.get('example4.php', { Add: true, EmpID: EmpID, Name: Name, PrimaryLanguage: PrimaryLanguage, FavoriteColor: FavoriteColor, FavoritePet: FavoriteAnimal  }
                            , function(){
                                // when ajax returns (callback), update the grid to refresh the data
                                $(".flexme2").flexReload();
                        });
                    }
                })
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
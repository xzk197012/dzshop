
		<!--<div class="tip-remind">收起提示</div>-->
		<div class="tipsbox">
			<div class="tips boxsizing radius3">
				<div class="tips-titbox">
					<h1 class="tip-tit"><i class="tips-icon-lamp"></i>{$Think.lang.operation_tips}</h1>
					<span class="open-span span-icon"><i class="open-icon"></i></span>
				</div>
			</div>
			<ol class="tips-list" id="tips-list">
				{$Think.lang.permiss_group_list_tips}
			</ol>
		</div>
		<div class="iframeCon">
		<div class="iframeMain">
			<div class="white-bg">
				<div class="table-titbox">
					<div class="option">
						<h1 class="table-tit left boxsizing">{$Think.lang.permiss_group_list}</h1>
						<ul class="operation-list left">
							<li class="add-li"><a href="<?=U('/system/addpermission')?>"><span><i href="#" class="operation-icon add-icon"></i></span></a></li>
							<li class="refresh-li" onclick="location.reload();"><a href="javascript:;"><span><i href="#" class="operation-icon refresh-icon"></i></span></a></li>
						</ul>
					</div>
				</div>
				
				<div class="comtable-box boxsizing">
					<table class="com-table">
						<thead>
							<tr>
								<th width="180">{$Think.lang.operation}</th>
								<th width="180">{$Think.lang.permiss_group}</th>
								<th width="180">{$Think.lang.permiss_people_number}</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<empty name="lists">
			                    <tr class="tr-minH">
			                        <td colspan="3">{$Think.lang.no_data}</td>
			                        <td></td>
			                    </tr>
			                <else />
							<?php foreach($lists as $key => $v) { ?>
								<tr>
									<td>
										<div class="table-iconbox">
											<div class="edit-iconbox left edit-sele marginR10">
												<a class="edit-word table-icon-a" href="<?=U('/system/editpermission/id/'.$v['id'])?>"><i class="table-com-icon table-edit-icon"></i><span class="gap">{$Think.lang.edit}</span></a>
											</div>
										</div>
										<div class="table-iconbox">
											<div class="edit-iconbox left edit-sele marginR10">
												<a class="edit-word table-icon-a btn-del" href="javascript:;" rel-href="<?=U('/system/delrole/id/'.$v['id'])?>"><i class="table-com-icon table-dele-icon"></i><span class="gap">{$Think.lang.delete}</span></a>
											</div>
										</div>
									</td>
									<td><?=$v['name']; ?></td>
									<td><?=$v['count'];?></td>
									<td></td>
								</tr>
							<?php } ?>
							</empty>
						</tbody>
					</table>
				</div>
				{$page}
			</div>
		</div>
		</div>
		<script type="text/javascript">
			$(function(){
				//添加会员提示
				$('.add-li').mousemove(function(){
					e=arguments.callee.caller.arguments[0] || window.event; 
					remindNeed($('.add-li'),e,'{$Think.lang.permiss_group_add}');
				})
				$('.add-li').mouseout(function(){
			     	$('.tip-remind').remove();
			    });
				$('.refresh-li').mousemove(function(){
					e=arguments.callee.caller.arguments[0] || window.event; 
					remindNeed($('.refresh-li'),e,'{$Think.lang.refresh}');
				})
				$('.refresh-li').mouseout(function(){
			     	$('.tip-remind').remove();
			    });
			  

			    $('.btn-del').click(function() {
					url = $(this).attr('rel-href');
			        showConfirm("确认要删除么？",function(){
			            $.get(url,{checksubmit:'yes'},function(data){
			                if(data.status == 1){
			                   showSuccess(data.info,function(){
			                        window.location.reload();
			                  });
			                }else{
			                    showError(data.info);
			                }
			            },'json')
			        });
				});
			})
		</script>
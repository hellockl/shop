<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/_header', TEMPLATE_INCLUDEPATH)) : (include template('web/_header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/order/tabs', TEMPLATE_INCLUDEPATH)) : (include template('web/order/tabs', TEMPLATE_INCLUDEPATH));?>


<link href="../addons/ewei_shop/static/js/dist/select2/select2.css" rel="stylesheet">
<link href="../addons/ewei_shop/static/js/dist/select2/select2-bootstrap.css" rel="stylesheet">
<script language="javascript" src="../addons/ewei_shop/static/js/dist/select2/select2.min.js"></script>
<script language="javascript" src="../addons/ewei_shop/static/js/dist/select2/select2_locale_zh-CN.js"></script>
<script type="text/javascript" src="resource/js/lib/jquery-ui-1.10.3.min.js"></script>
<style type='text/css'>
    .dd-handle { height: 40px; line-height: 30px;width:100px;}
	.field-item {
		padding:10px; border:1px solid #ccc;
		border-radius: 3px; float:left;
		margin:5px;
		-webkit-user-select: none;
		-moz-user-select:none;
		position:relative;
		cursor: pointer;
	 
	}
	.field-item:active {
		background:#d9d9d9;
	}
	.drag{
		background:#d9d9d9;
	}
.form-control .select2-choice {
    border: 0 none;
    border-radius: 2px;
    height: 32px;    line-height: 32px;
}
.field-item.field-item-remove span {
	color:red;
	position: absolute;right:-5px;top:-10px;cursor: pointer;
}

</style>


   <form action="./index.php" method="get" class="form-horizontal" role="form" id="form1">
            <input type="hidden" name="c" value="site" />
            <input type="hidden" name="a" value="entry" />
            <input type="hidden" name="m" value="ewei_shop" />
            <input type="hidden" name="do" value="order" />
	  <input type="hidden" name="p" value="export" />
			
			
<table class='table'>
	<tr><td style='width:40%;vertical-align: top'>
<div class="panel panel-default">
	<div class='panel-heading'>
		查询条件
	</div>
    <div class="panel-body">
     
            <div class="form-group">
   	  <label class="col-xs-12 col-sm-3 col-md-2 control-label">订单号</label>
               <div class="col-sm-9 col-xs-12">
                  
                        <input class="form-control" name="keyword" type="text" value="<?php  echo $_GPC['keyword'];?>" placeholder="订单号">
                   
                </div>
            </div> 
			<div class="form-group">
	  
		    <label class="col-xs-12 col-sm-3 col-md-2 control-label">快递单号</label>
                  <div class="col-sm-9 col-xs-12">
                     
                        <input class="form-control" name="expresssn" type="text" value="<?php  echo $_GPC['expresssn'];?>" placeholder="快递单号">
                    </div>
                </div>
            </div> 
			
			<div class="form-group">

		      <label class="col-xs-12 col-sm-3 col-md-2 control-label">用户信息</label>
			  <div class="col-sm-9 col-xs-12">
                        <input class="form-control" name="member" type="text" value="<?php  echo $_GPC['member'];?>" placeholder="用户手机号/姓名/昵称, 收件人姓名/手机号 ">
                      </div>
                  
                </div>
     
			
			
			<div class="form-group">
				   <label class="col-xs-12 col-sm-3 col-md-2 control-label">支付方式</label>
	   <div class="col-sm-9 col-xs-12">
                
                        <select name="paytype" class="form-control">
                            <option value="" <?php  if($_GPC['paytype']=='') { ?>selected<?php  } ?>>不限</option>
                            <?php  if(is_array($paytype)) { foreach($paytype as $key => $type) { ?>
                            <option value="<?php  echo $key;?>" <?php  if($_GPC['paytype'] == "$key") { ?> selected="selected" <?php  } ?>><?php  echo $type['name'];?></option>
                            <?php  } } ?>
                        </select>
                  
                </div>   
			
			</div>
			
			<div class="form-group">
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">订单状态</label>
	   <div class="col-sm-9 col-xs-12">
               
                        <select name="status" class="form-control">
                            <option value="" <?php  if($_GPC['status']=='') { ?>selected<?php  } ?>>不限</option>
                            <?php  if(is_array($orderstatus)) { foreach($orderstatus as $key => $type) { ?>
                            <option value="<?php  echo $key;?>" <?php  if($_GPC['status'] == "$key") { ?> selected="selected" <?php  } ?>><?php  echo $type['name'];?></option>
                            <?php  } } ?>
                        </select>
             
                </div>   
			
			</div>
            	<div class='form-group'>
						<label class="col-xs-12 col-sm-3 col-md-2 control-label">核销员</label>
				    <div class="col-sm-9 col-xs-12">
                 
                        <input class="form-control" name="saler" type="text" value="<?php  echo $_GPC['saler'];?>" placeholder="核销员昵称/姓名/手机号">
		 
				  </div>
			</div>
	
			<div class='form-group'>
				<label class="col-xs-12 col-sm-3 col-md-2 control-label">核销门店</label>
				    <div class="col-sm-9 col-xs-12">
                  
                        <select name="storeid" class="form-control select2">
                            <option value="" ></option>
			 <?php  if(is_array($stores)) { foreach($stores as $store) { ?>
			<option value="<?php  echo $store['id'];?>" <?php  if($_GPC['storeid'] ==$store['id']) { ?> selected="selected" <?php  } ?>><?php  echo $store['storename'];?></option>
			<?php  } } ?>
                        </select>
			 
				  </div>
			</div>
            <div class="form-group">
		<label class="col-xs-12 col-sm-3 col-md-2 control-label">下单时间</label>
		<div class="col-sm-9 col-xs-12">
			 <label class='radio-inline' style='margin-top:-7px;'>
                                <input type='radio' value='0' name='searchtime' <?php  if($_GPC['searchtime']=='0') { ?>checked<?php  } ?>>不搜索
                            </label>
                            <label class='radio-inline'  style='margin-top:-7px;'>
                                <input type='radio' value='1' name='searchtime' <?php  if($_GPC['searchtime']=='1') { ?>checked<?php  } ?>>搜索
                            </label>
			
                        <?php  echo tpl_form_field_daterange('time', array('starttime'=>date('Y-m-d H:i', $starttime),'endtime'=>date('Y-m-d H:i', $endtime)),true);?>


                    </div>
                </div>
</div>
	
     

</td>
<td valign='top' style='vertical-align: top'>
	
	
	<div class="panel panel-default">
	<div class='panel-heading'>
		现有列 （拖动可排序) 
		
		<select id="templates" class="form-control select2" style="width:300px;" onchange="changeTemplate()">
                            <option value="" >请选择导出列模板</option>
							<?php  if(is_array($templates)) { foreach($templates as $key => $t) { ?>
								<option value="<?php  echo $key;?>" ><?php  echo $key;?></option>
							<?php  } } ?>
			 
                    </select>
		<button class='btn btn-primary' id="deltemplate" type='button' style="display:none;"  >删除当前模板</button>
		
		<button class='btn btn-primary' id="changetemplate" type='button'  onclick='saveFields()'>将当前保存为模板</button>
		
		<button class='btn btn-danger' type='button'  onclick='resetFields()'>全部清空</button>
		
	</div>
		<div class="panel-body" id='add_fields'>
			
		 
                               <?php  if(is_array($columns)) { foreach($columns as $row) { ?>
				 
				 <div class='field-item  field-item-remove' 
					  data-field="<?php  echo $row['field'];?>" 
					  data-subtitle="<?php echo isset($row['subtitle'])?$row['subtitle']:''?>" 
					  data-title="<?php  echo $row['title'];?>" 
					  data-width="<?php  echo $row['width'];?>">
				   <?php echo !empty($row['subtitle'])?$row['subtitle']:$row['title']?>   <span><i class='fa fa-remove'></i></span>
					
                                    </div>  
                              <?php  } } ?>
							  
		</div>
		<div class='panel-heading'>
		增加列 (点击增加)
	</div>
		<div class="panel-body" id='new_fields'> 
			
		 
                               <?php  if(is_array($default_columns)) { foreach($default_columns as $row) { ?>
							   <?php  if(!$row['select']) { ?>
							   <div class='field-item field-item-add'  
									data-field="<?php  echo $row['field'];?>" 
									data-subtitle="<?php echo isset($row['subtitle'])?$row['subtitle']:''?>" 
									data-title="<?php  echo $row['title'];?>" 
									data-width="<?php  echo $row['width'];?>">
								   <?php echo !empty($row['subtitle'])?$row['subtitle']:$row['title']?> 
								   
								  
					 
                                    </div>
							   <?php  } ?>
                              <?php  } } ?>
							  
		</div>
		<div class='panel-body'>
					
            <div class="form-group">

                <div class="col-sm-7 col-lg-9 col-xs-12">
                    <button type="submit" name="export" value="1" class="btn btn-primary">立即导出</button>
                </div>
            </div>
		</div>
	</div>
	
	
</td>
	</tr>		
</table>
			  </form>
   <script language='javascript'>
	   function resetFields(){
		   if(confirm('确认全部清空?')){
			$.get("<?php  echo $this->createWebUrl('order/export',array('op'=>'reset'))?>",function(){
				location.reload();
			});
		    }
		 
	   }
	   var currentTemplate = "";
	   function changeTemplate(){
		  
		   var val = $('#templates').val();
		   currentTemplate = val;
		   if(val==''){
			   $('#deltemplate').hide();
			   $('#changetemplate').text('将当前保存为模板');
		   }
		   else{
			 $('#changetemplate').text('保存当前模板');
			 $('#deltemplate').show().unbind('click').click(function(){
				 
				 if( confirm('确认要删除此导出模板?')){
					   $.post("<?php  echo $this->createWebUrl('order/export',array('op'=>'delete'))?>",{tempname:val},function(ret){
						ret = eval("(" + ret + ")");
						if(ret.templates){
							$('#templates').empty();
							 var opt=new Option('请选择导出列模板','');
					                     $('#templates')[0].options.add(opt);	
												   
							$.each(ret.templates,function(i,tn){
								 var opt=new Option(tn,tn);
					                               $('#templates')[0].options.add(opt);	   
						           });
							$('#templates').val('').trigger("change") ;	   ;
					         }
		                                 });
				 }
			 });  
			 
			  $.get("<?php  echo $this->createWebUrl('order/export',array('op'=>'gettemplate'))?>&tempname=" + currentTemplate,function(ret){
				ret = eval("(" + ret + ")");
				if(ret.columns && ret.others){
					
					$('#add_fields').empty();
					$.each(ret.columns,function(i,d){
					     addData(d,false);
					});
					$('#new_fields').empty();
					$.each(ret.others,function(i,d){
					     addData(d,true);
					});
				}
			  });
		   
		   }
	   }
	   function addData(data,other){
		var html = '';
		if(!other){
			html = '<div class="field-item field-item-remove"  data-field="' + data.field+'"  data-title="' +data.title+'" data-width="' + data.width +'" data-subtitle="' +( data.subtitle || "" )+'">' +( data.subtitle || data.title ) + ' <span><i class="fa fa-remove"></i></span></div>';
			$('#add_fields').append(html);
		}else{
			html = '<div class="field-item field-item-add"  data-field="' + data.field+'"  data-title="' +data.title+'" data-width="' + data.width +'" data-subtitle="' +( data.subtitle || "" )+'">' +( data.subtitle || data.title ) + '</div>';
			$('#new_fields').append(html);
		}
		initEvents();
		   
	   }
	   function addField(item){
		   
		   var field = item.data('field');
		   var html = '<div class="field-item field-item-remove"  data-field="' + field+'"  data-title="' + item.data('title')+'" data-width="' + item.data('width')+'" data-subtitle="' + item.data('subtitle')+'">' +( item.data('subtitle') || item.data('title') ) + ' <span><i class="fa fa-remove"></i></span></div>';
		   $('#add_fields').append(html);
		   item.remove();
		   initEvents();
		   changedata();
	   }
	   function removeField(item){
		   var field = item.data('field');
		   var html = '<div class="field-item field-item-add"  data-field="' + field+'"  data-title="' + item.data('title')+'" data-width="' + item.data('width')+'" data-subtitle="' + item.data('subtitle')+'">' +( item.data('subtitle') || item.data('title') )+ ' </div>';
		   $('#new_fields').append(html);
		   item.remove();
		   initEvents();
		   changedata();
	   }
	   function changedata(isnew){
		   
		   var columns = [];
		   $('#add_fields').find('.field-item').each(function(){
			   columns.push({
				   field:$(this).data('field'), 
				   title:$(this).data('title'),
				   subtitle:$(this).data('subtitle'), 
				   width:$(this).data('width')
			   });
		   });
		   $.post("<?php  echo $this->createWebUrl('order/export',array('op'=>'save'))?>",{columns:columns,tempname:currentTemplate},function(ret){
			   if(isnew){
			   ret = eval("(" + ret + ")");
			   if(ret.templates){
				  $('#templates').empty();
				  	var opt=new Option('请选择导出列模板','');
					$('#templates')[0].options.add(opt);	
				   $.each(ret.templates,function(i,tn){
					   var opt=new Option(tn,tn);
					  $('#templates')[0].options.add(opt);
				  }); 
				 $('#templates').val(currentTemplate).trigger('change');
				 
			   }}
		   });
	   }
	   function saveFields(){
		   var isnew = false;
		if( currentTemplate==''){
			var templatename = prompt('请输入列模板名称:');
			if(!templatename){
				return;
			}
			currentTemplate = templatename;
			isnew = true;
		}
		changedata(isnew);
	   }
	   function initEvents(){
		   	 $('.field-item-remove span').unbind('click').click(function(){
					 removeField($(this).closest('.field-item'));
				 });
				 $('.field-item-add').unbind('click').click(function(){
					addField($(this));
				 })
		                    $('#add_fields').sortable({
						stop: function(){ changedata(false) }
				});
	   }
			  $(function () {
				$('.select2').select2({
					search: true,
					placeholder: "请选择门店",
					allowClear: true
				});
			   initEvents();
			});
			  </script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/_footer', TEMPLATE_INCLUDEPATH)) : (include template('web/_footer', TEMPLATE_INCLUDEPATH));?>

<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<li <?php  if($do == 'list') { ?>class="active"<?php  } ?>><a href="<?php  echo url('wechat/white/list');?>">测试白名单</a></li>
</ul>
<div class="clearfix">
	<div class="alert alert-warning"><i class="fa fa-info-circle"></i> 由于卡券有审核要求，为方便公众号调试，可以设置一些测试帐号，这些帐号可领取未通 过审核的卡券，体验整个流程。最多可添加10个测试白名单</div>
	<form action="" method="post" class="form-horizontal form">
		<input type="hidden" name="acid" value="<?php  echo $acid;?>">
		<div class="panel panel-default">
			<div class="panel-body table-responsive">
				<table class="table table-hover" style="width:100%;" cellspacing="0" cellpadding="0">
					<thead class="navbar-inner">
					<tr>
						<th width="20%">微信号</th>
						<th></th>
					</tr>
					</thead>
					<tbody>
					<?php  if(is_array($whitelist)) { foreach($whitelist as $li) { ?>
					<tr>
						<td><input type="text" name="username[]" class="form-control" value="<?php  echo $li;?>" placeholder="填写微信号"/></td>
						<td>
							<a href="javascript:;" onclick="$(this).parent().parent().remove();return false;"><i class="fa fa-times-circle" title="删除"> </i></a>
						</td>
					</tr>
					<?php  } } ?>
					<tr>
						<td colspan="2">
							<a href="javascript:;" id="add"><i class="fa fa-plus-circle"></i> 添加测试白名单</a>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input name="submit" id="submit" type="submit" value="提交" class="btn btn-primary col-lg-1">
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</form>
</div>
<script>
	require(['bootstrap'], function($){
		$('[data-toggle="popover"]').popover();
		$('#add').click(function(){
			var html = '<tr>' +
					'<td><input type="text" name="username[]" value="" placeholder="填写微信号" class="form-control"/></td>' +
					'<td><a href="javascript:;" onclick="$(this).parent().parent().remove();return false;"><i class="fa fa-times-circle" title="删除"> </i></a></td>' +
					'</tr>';
			$(this).parent().parent().before(html);
		});
	});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
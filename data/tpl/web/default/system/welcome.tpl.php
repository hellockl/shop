<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header-gw', TEMPLATE_INCLUDEPATH)) : (include template('common/header-gw', TEMPLATE_INCLUDEPATH));?>
<ol class="breadcrumb">
	<li><a href="./?refresh"><i class="fa fa-home"></i></a></li>
	<li class="active">系统</li>
</ol>	
<!--内容-->
<?php  if($_W['isfounder']) { ?>
	<div class="clearfix" style="margin-bottom:5em;">
		
		<h5 class="page-header">扩展</h5>
		<div class="clearfix">
			<a href="<?php  echo url('extension/module');?>" class="tile img-rounded">
				<i class="fa fa-cubes"></i>
				<span>模块</span>
			</a>
			
			<a href="<?php  echo url('extension/theme');?>" class="tile img-rounded">
				<i class="fa fa-life-bouy"></i>
				<span>微站风格</span>
			</a>
			
			<a href="<?php  echo url('extension/theme/web');?>" class="tile img-rounded">
				<i class="fa fa-puzzle-piece"></i>
				<span>后台皮肤</span>
			</a>
			
			<a href="<?php  echo url('extension/platform');?>" class="tile img-rounded">
				<i class="fa fa fa-cubes"></i>
				<span>微信开放平台</span>
			</a>
		</div>
		
		<h5 class="page-header">公众号</h5>
		<div class="clearfix">
			<a href="<?php  echo url('account/display');?>" class="tile img-rounded">
				<i class="fa fa-comments"></i>
				<span>公众号列表</span>
			</a>
			<a href="<?php  echo url('account/batch');?>" class="tile tile-2x img-rounded">
				<i class="fa fa-comments"></i>
				<span>批量操作公众号</span>
			</a>
			<a href="<?php  echo url('account/groups');?>" class="tile tile-2x img-rounded">
				<i class="fa fa-comments-o"></i>
				<span>公众号服务套餐</span>
			</a>
			<a href="<?php  echo url('account/recycle');?>" class="tile tile-2x img-rounded">
				<i class="glyphicon glyphicon-trash"></i>
				<span>公众号回收站</span>
			</a>
		</div>
		<h5 class="page-header">用户管理</h5>
		<div class="clearfix">
			<a href="<?php  echo url('user/profile');?>" class="tile img-rounded">
				<i class="fa fa-briefcase"></i>
				<span>我的账户</span>
			</a>
			<a href="<?php  echo url('user/display');?>" class="tile img-rounded">
				<i class="fa fa-user"></i>
				<span>用户管理</span>
			</a>
			<a href="<?php  echo url('user/group');?>" class="tile img-rounded">
				<i class="fa fa-users"></i>
				<span>用户组管理</span>
			</a>
			<a href="<?php  echo url('user/registerset');?>" class="tile img-rounded">
				<i class="fa fa-user-md"></i>
				<span>注册选项</span>
			</a>
			
		</div>
		<h5 class="page-header">系统管理</h5>
		<div class="clearfix">
			<a href="<?php  echo url('system/updatecache');?>" class="tile img-rounded">
				<i class="fa fa-refresh"></i>
				<span>更新缓存</span>
			</a>
			<a href="<?php  echo url('system/site');?>" class="tile img-rounded">
				<i class="fa fa-inbox"></i>
				<span>站点设置</span>
			</a>
			
			<a href="<?php  echo url('system/attachment');?>" class="tile img-rounded">
				<i class="fa fa-folder-open"></i>
				<span>附件设置</span>
			</a>
			<a href="<?php  echo url('system/common');?>" class="tile img-rounded">
				<i class="fa fa-gear"></i>
				<span>其他设置</span>
			</a>
			<a href="<?php  echo url('system/database');?>" class="tile img-rounded">
				<i class="fa fa-database"></i>
				<span>数据库</span>
			</a>
			
			<a href="<?php  echo url('system/logs');?>" class="tile img-rounded">
				<i class="fa fa-book"></i>
				<span>查看日志</span>
			</a>

		</div>
		<h5 class="page-header">系统工具</h5>
		<div class="clearfix">
			<a href="<?php  echo url('system/database');?>" class="tile img-rounded">
				<i class="fa fa-database"></i>
				<span>数据库</span>
			</a>
			
			
			<a href="<?php  echo url('system/filecheck');?>" class="tile img-rounded">
				<i class="fa fa-file"></i>
				<span>系统文件校验</span>
			</a>
		</div>
	</div>
<?php  } else { ?>
	<div class="clearfix" style="margin-bottom:5em;">
		<h5 class="page-header">公众号</h5>
		<div class="clearfix">
			<a href="<?php  echo url('account/display');?>" class="tile img-rounded">
				<i class="fa fa-comments"></i>
				<span>公众号列表</span>
			</a>
		</div>
		<h5 class="page-header">用户管理</h5>
		<div class="clearfix">
			<a href="<?php  echo url('user/profile');?>" class="tile img-rounded">
				<i class="fa fa-briefcase"></i>
				<span>我的账户</span>
			</a>
		</div>
	</div>
<?php  } ?>
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer-gw', TEMPLATE_INCLUDEPATH)) : (include template('common/footer-gw', TEMPLATE_INCLUDEPATH));?>
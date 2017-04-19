<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/slide', TEMPLATE_INCLUDEPATH)) : (include template('common/slide', TEMPLATE_INCLUDEPATH));?>
<style>
	body{
	font:<?php  echo $_W['styles']['fontsize'];?> <?php  echo $_W['styles']['fontfamily'];?>;
	color:<?php  if(empty($_W['styles']['fontcolor'])) { ?>#555<?php  } else { ?><?php  echo $_W['styles']['fontcolor'];?><?php  } ?>;
	padding:0;
	margin:0;
	background-image:url('<?php  if(!empty($_W['styles']['indexbgimg'])) { ?><?php  echo $_W['styles']['indexbgimg'];?><?php  } ?>');
	background-size:cover;
	background-color:<?php  if(empty($_W['styles']['indexbgcolor'])) { ?>#f5f5f5<?php  } else { ?><?php  echo $_W['styles']['indexbgcolor'];?><?php  } ?>;
	<?php  echo $_W['styles']['indexbgextra'];?>
	}
	a{color:<?php  echo $_W['styles']['linkcolor'];?>; text-decoration:none;}
	<?php  echo $_W['styles']['css'];?>
	.box{width:98.5%; margin:1.5% 0 1.5% 1.5%;}
	.box .box-item{float:left; display:block; text-align:center; text-decoration:none; outline:none; height:110px;width:33.33%; line-height:110px; margin:0 auto;border-top:#ffffff solid 0.1em; border-right:#ffffff solid 0.1em; background:-webkit-linear-gradient(#f9fcff 0%,#e3f4ff 100%);background:-moz-linear-gradient(top,#f9fcff 0%,#e3f4ff 100%); padding-bottom:10px; color:#333;}
	.box .box-item i{display:block; width:60px; height:60px; margin:10px auto; line-height:60px; font-size:35px; color:#ffffff; background:-webkit-linear-gradient(#9fc8e4 0%,#8aa9be 100%);background:-moz-linear-gradient(top,#9fc8e4 0%,#8aa9be 100%); overflow:hidden;}
	.box span{color:<?php  echo $_W['styles']['fontnavcolor'];?>; display:block; font-size:14px; width:80%; margin-left:10%;height:20px; line-height:20px; text-align:center; overflow:hidden;}
	.imgs img{width:20%; vertical-align:middle;}
	.imgs i{display:inline-block; width:30%; height:50px; line-height:50px; vertical-align:middle;font-size:40px; text-align:center;}
	.list{width:98.5%; margin:1.5% 0 1.5% 1.5%;}
	.list li{padding: 0 5px; list-style:none;}
	.list li a{display:block; height:71px; padding:5px;background:-webkit-linear-gradient(#ffffff 0%,#dfdfdf 100%); background:-moz-linear-gradient(top,#ffffff 0%,#dfdfdf 100%); border-radius:3px; border-bottom:#c8c8c8 solid 1px; margin-top:5px; color:#333; overflow:hidden; text-decoration:none !important; position:relative;}
	.list li a .thumb{width:80px; height:60px;}
	.list li a .title{font-size:14px; padding-left:90px;}
	.list li a .createtime{font-size:12px; color:#999; position:absolute; bottom:5px;padding-left:90px;}
</style>
<script>
	require(['jquery'],function($){
		$('.box i').addClass("img-circle");
	});
</script>
<div class="box clearfix">
	<?php  if(is_array($navs)) { foreach($navs as $nav) { ?>
	<?php  echo $nav['html'];?>
	<?php  } } ?>
</div>
<div class="imgs clearfix">
	<?php  if(is_array($navs)) { foreach($navs as $nav) { ?>
		<span>
		<a href="<?php  echo $nav['url'];?>">
		<?php  if(!empty($nav['icon'])) { ?>
		<img src="<?php  echo $_W['attachurl'];?><?php  echo $nav['icon'];?>">
		<?php  } else { ?>
		<i class="fa <?php  echo $nav['css']['icon']['icon'];?>" style="<?php  echo $nav['css']['icon']['style'];?>"></i>
		<?php  } ?>
		</a>
		</span>
	<?php  if($nav['iteration'] > 0) break;?>
	<?php  } } ?>
</div>
<div class="list clearfix">
	<?php  $result = modulefunc('site', 'site_article', array (
  'func' => 'site_article',
  'cid' => $cid,
  'assign' => 'result',
  'return' => 'true',
  'limit' => 10,
  'index' => 'iteration',
  'multiid' => 0,
  'uniacid' => 3,
  'acid' => 0,
)); ?>
	<?php  if(is_array($result['list'])) { foreach($result['list'] as $nav) { ?>
	<li>
		<a href="<?php  echo $nav['linkurl'];?>">
			<?php  if($nav['thumb']) { ?><img src="<?php  echo $nav['thumb'];?>" class="pull-left thumb" onerror="this.parentNode.removeChild(this)" /><?php  } ?>
			<div class="title"><?php  echo $nav['title'];?></div>
			<div class="createtime"><?php  echo date('Y-m-d H:i:s', $nav['createtime'])?></div>
		</a>
	</li>
	<?php  } } ?>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
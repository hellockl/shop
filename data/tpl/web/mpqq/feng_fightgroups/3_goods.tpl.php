<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<ul class="nav nav-tabs">
	<li class="active"><a href="<?php  echo $this->createWebUrl('goods', array('op'=>'display'));?>">商品列表</a>
	</li>
	<li><a href="<?php  echo $this->createWebUrl('goods', array('op'=>'edit'));?>">添加商品</a>
	</li>
</ul>
<div class="panel panel-info">
	<div class="panel-heading">筛选</div>
	<div class="panel-body">
		<form action="./index.php" method="get" class="form-horizontal" role="form" id="form1">
                <input type="hidden" name="c" value="site" />
                <input type="hidden" name="a" value="entry" />
                <input type="hidden" name="m" value="feng_fightgroups" />
                <input type="hidden" name="do" value="goods" />
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">商品名称</label>
                    <div class="col-sm-8 col-lg-9 col-xs-12">
                        <input class="form-control" name="keyword" id="" type="text" value="<?php  echo $_GPC['keyword'];?>" placeholder="可查询商品名称">
                    </div>
                </div>
                <?php  if($this->module['config']['mode'] == 2) { ?>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">分类</label>
                    <div class="col-sm-8 col-lg-9 col-xs-12">
                        <select name="pay_type" class="form-control">
                            <option value="">不限</option>
                            <?php  if(is_array($category)) { foreach($category as $key => $type) { ?>
                            <option value="<?php  echo $type['id'];?>" <?php  if($_GPC['pay_type'] == $type['id']) { ?> selected="selected" <?php  } ?>><?php  echo $type['name'];?></option>
                            <?php  } } ?>
                        </select>
                    </div>
                </div>
                <?php  } ?>
                <div class="form-group">
                        <label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label"></label>
                        <div class="col-sm-3 col-lg-2"><button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
                        </div>
                </div>
            </form>
   </div>
</div>
<div class="panel panel-default">
	<div class="panel-heading">商品列表</div>
		<form action="" method="post" onsubmit="return formcheck(this)">
		<div class="table-responsive panel-body">
			<table class="table table-hover" style="min-width: 300px;">
				<thead class="navbar-inner">
					<tr>
						<th class="col-sm-1">显示顺序</th>
						<th class="col-sm-3">名称</th>
						<th class="col-sm-1">图片</th>
						<?php  if($this->module['config']['mode'] == 2) { ?>
						<th class="col-sm-1">分类</th>
						<?php  } ?>
						<th class="col-sm-1">商品库存</th>
						<th class="col-sm-1">团购价</th>
						<th class="col-sm-1">单买价</th>
						<th class="col-sm-1">运费</th>
						<th class="col-sm-1">起团人数</th>
						<th class="col-sm-1">团购限时</th>
						<th class="col-sm-1">状态</th>
						<th class="col-sm-1">销量</th> 
						<!--<th class="col-sm-1">热卖</th>-->
						<!--<th class="col-sm-1">编辑</th>-->
						<th class="col-sm-2 text-right">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php  if(is_array($goodses)) { foreach($goodses as $goodsid => $goods) { ?>
					<tr>
						<td><input type="text" class="form-control" name="displayorder[<?php  echo $goods['id'];?>]" value="<?php  echo $goods['displayorder'];?>"></td>
						<td><?php  echo $goods['gname'];?></td>
						<td>
							<image src="<?php  echo tomedia($goods['gimg']);?>" style="max-width: 48px; max-height: 48px; border: 1px dotted gray">
						</td>
						<?php  if($this->module['config']['mode'] == 2) { ?>
						<td><?php  echo $goods['category']['name'];?></td>
						<?php  } ?>
						<td><?php  echo $goods['gnum'];?></td>
						<td><?php  echo $goods['gprice'];?>元</td>
						<td><?php  echo $goods['oprice'];?>元</td>
						<td><?php  echo $goods['freight'];?>元</td>
						<td><?php  echo $goods['groupnum'];?>人</td>
						<td><?php  echo $goods['endtime'];?>小时</td>
						<!--<td><?php  echo $goods['gdesc'];?></td>-->
						<!--<td><?php  echo date('Y-m-d H:i', $goods['gubtime']);?></td>-->
						<td><?php  if($goods['isshow']==0) { ?><span class="label label-danger">未上架</span><?php  } else { ?><span class="label label-success">已上架</span><?php  } ?></td>
						<!--<td><?php  if($goods['ishot']==0) { ?><span class="label label-danger">热卖</span><?php  } else { ?><span class="label label-success"></span><?php  } ?></td>-->
						<!--<td>

						</td>-->
						<td><?php  echo $goods['salenum'];?></td>
						<td class="text-right">
							<a href="<?php  echo $this->createWebUrl('goods', array('op'=>'edit', 'id'=>$goods['id']));?>" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="编辑"><i class="fa fa-pencil"></i></a>
							<a href="<?php  echo $this->createWebUrl('goods',array('op'=>'delete','id'=>$goods['id']));?>" onclick="return confirm('此操作不可恢复，确认删除？');return false;" class="btn btn-default btn-sm" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="删除"><i class="fa fa-times"></i>
							</a>
						</td>
					</tr>
					<?php  } } ?>
					<?php  if(empty($goodses)) { ?>		
					<tr>
						<td colspan="12">
							尚未添加商品
						</td>
					</tr>
					<?php  } ?>
					<tr>
						<td colspan="12">
							<input name="submit" type="submit" class="btn btn-primary" value="提交">
							<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
						</td>
					</tr>
				</tbody>
			</table>
			<?php  echo $pager;?>
		</div>
	</div>
	</form>
</div>
</div>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
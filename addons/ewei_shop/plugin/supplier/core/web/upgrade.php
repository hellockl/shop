<?php
//供应商插件安装
global $_W;

//自动检查分权表是否新建有供应商权限
$result = pdo_fetch('select * from ' . tablename('ewei_shop_perm_role') . ' where status1=1');
if(empty($result)){
	$sql = "
INSERT INTO " . tablename('ewei_shop_perm_role') . " (`rolename`, `status`, `status1`, `perms`, `deleted`) VALUES
('供应商', 1, 1, 'shop,shop.goods,shop.goods.view,shop.goods.add,shop.goods.edit,shop.goods.delete,order,order.view,order.view.status_1,order.view.status0,order.view.status1,order.view.status2,order.view.status3,order.view.status4,order.view.status5,order.view.status9,order.op,order.op.send,order.op.sendcancel,order.op.verify,order.op.fetch,order.op.close,order.op.refund,order.op.export,order.op.changeprice', 0);";
	pdo_query($sql);
}else{
	$gysdata = array("perms" => 'shop,shop.goods,shop.goods.view,shop.goods.add,shop.goods.edit,shop.goods.delete,order,order.view,order.view.status_1,order.view.status0,order.view.status1,order.view.status2,order.view.status3,order.view.status4,order.view.status5,order.view.status9,order.op,order.op.send,order.op.sendcancel,order.op.verify,order.op.fetch,order.op.close,order.op.refund,order.op.export,order.op.changeprice');
	pdo_update('ewei_shop_perm_role', $gysdata, array('rolename' => "供应商"));
}

message('供应商插件安装成功', $this->createPluginWebUrl('supplier/supplier'), 'success');

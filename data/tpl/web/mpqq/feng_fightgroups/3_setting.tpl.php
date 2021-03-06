<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/header', TEMPLATE_INCLUDEPATH)) : (include template('common/header', TEMPLATE_INCLUDEPATH));?>
<div class="main">
	<form action="" method="post" class="form-horizontal form" id="setting-form">
		<div class="panel panel-default">
			<div class="panel-heading">参数设置</div>
			<div class="panel-body">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active" ><a href="#tab_basic">基本设置</a></li>
					<li><a href="#tab_param">退款设置</a></li>
					<li><a href="#tab_param1">通知设置</a></li>
					<li><a href="#tab_param2">拼团信息设置</a></li>
					<li><a href="#tab_param<?php  if(empty($modules['feng_recharge'])) { ?>4<?php  } else { ?>3<?php  } ?>" style="">余额充值设置</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane  active" id="tab_basic">
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">拼团模式</label>
							<div class="col-xs-12 col-sm-8">
								<label class="radio radio-inline" onclick="$('.picmode').hide();">
									<input type="radio" name="mode" value="1" <?php  if(intval($settings['mode']) == 1) { ?>checked="checked"<?php  } ?>> 精简模式
								</label>
								<label class="radio radio-inline" onclick="$('.picmode').show();">
									<input type="radio" name="mode" value="2" <?php  if(intval($settings['mode']) == 2) { ?>checked="checked"<?php  } ?>> 多功能模式
								</label>
								<span class="help-block">精简模式类似拼好货，多功能模式功能会更多一些。</span>
							</div>
						</div>
						<div class="form-group picmode" <?php  if($settings['mode']==1) { ?>style="display:none;"<?php  } ?>>
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">首页显示</label>
							<div class="col-xs-12 col-sm-8">
								<label class="radio radio-inline">
									<input type="radio" name="picmode" value="1" <?php  if(intval($settings['picmode']) == 1) { ?>checked="checked"<?php  } ?>> 小图模式（两列）
								</label>
								<label class="radio radio-inline">
									<input type="radio" name="picmode" value="2" <?php  if(intval($settings['picmode']) == 2) { ?>checked="checked"<?php  } ?>> 大图模式（一列）
								</label>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">支付接口</label>
							<div class="col-xs-12 col-sm-8">
								<label class="radio radio-inline">
									<input type="radio" name="status" value="1" <?php  if(intval($settings['status']) == 1) { ?>checked="checked"<?php  } ?>> 微擎支付接口
								</label>
								<label class="radio radio-inline">
									<input type="radio" name="status" value="2" <?php  if(intval($settings['status']) == 2) { ?>checked="checked"<?php  } ?>> 微信原生接口（限微信支付）
								</label>
								<span class="help-block">微擎支付接口支付方式更多，但可能会出现提示用户登录的问题。</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">分享团</label>
							<div class="col-xs-12 col-sm-8">
								<label class="radio radio-inline">
									<input type="radio" name="sharestatus" value="1" <?php  if(intval($settings['sharestatus']) == 1) { ?>checked="checked"<?php  } ?>> 开启
								</label>
								<label class="radio radio-inline">
									<input type="radio" name="sharestatus" value="2" <?php  if(intval($settings['sharestatus']) == 2) { ?>checked="checked"<?php  } ?>> 关闭
								</label>
								<span class="help-block">分享团在商品详情页，用于更快组团，默认开启。</span>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">分享标题</label>
							<div class="col-sm-8">
								<input type="text" name="share_title" class="form-control" value="<?php  echo $settings['share_title'];?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">组团分享图片</label>
							<div class="col-xs-12 col-sm-8">
								<label class="radio radio-inline">
									<input type="radio" name="share_imagestatus" value="1" <?php  if(intval($settings['share_imagestatus']) == 1) { ?>checked="checked"<?php  } ?>> 该商品图片
								</label>
								<label class="radio radio-inline">
									<input type="radio" name="share_imagestatus" value="2" <?php  if(intval($settings['share_imagestatus']) == 2) { ?>checked="checked"<?php  } ?>> 用户头像
								</label>
								<label class="radio radio-inline">
									<input type="radio" name="share_imagestatus" value="3" <?php  if(intval($settings['share_imagestatus']) == 3) { ?>checked="checked"<?php  } ?>> 自定义
								</label>
								<span class="help-block">分享给好友时的图片，默认为该商品图片。</span>
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">自定义分享图片</label>
							<div class="col-sm-8">
								<?php  echo tpl_form_field_image('share_image', $settings['share_image']);?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">分享描述</label>
							<div class="col-sm-8">
								<textarea style="height:150px;" id="description" name="share_desc" class="form-control description" cols="60"><?php  echo $settings['share_desc'];?></textarea>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab_param">
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">微信支付商户号(MchId)</label>
							<div class="col-xs-12 col-sm-8">
								<input type="text" name="mchid" class="form-control" value="<?php  echo $settings['mchid'];?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商户支付密钥(API密钥)</label>
							<div class="col-xs-12 col-sm-8">
								<input type="text" name="apikey" class="form-control" value="<?php  echo $settings['apikey'];?>" />
							</div>
						</div>
						<div class="form-group">
		                    <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商户支付证书</label>
		                    <div class="col-sm-8 col-xs-12">
		                        <textarea class="form-control" name="cert" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
		                        <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>apiclient_cert.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">支付证书私钥</label>
		                    <div class="col-sm-8 col-xs-12">
		                        <textarea class="form-control" name="key" rows="8" placeholder="为保证安全性, 不显示证书内容. 若要修改, 请直接输入"></textarea>
		                        <span class="help-block">从商户平台上下载支付证书, 解压并取得其中的 <mark>apiclient_key.pem</mark> 用记事本打开并复制文件内容, 填至此处</span>
		                    </div>
		                </div>
					</div>
					<div class="tab-pane" id="tab_param1">
						<div class="panel panel-warning">
							<div class="panel-heading">支付成功模板参数设置</div>
							<div class="panel-body">
								<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板ID</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="m_pay" class="form-control" value="<?php  echo $settings['m_pay'];?>" />
										<span class="help-block">公众平台模板消息编号：IT科技——互联网|电子商务——TM00015</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">发送内容主题</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="pay_suc" class="form-control" value="<?php  echo $settings['pay_suc'];?>" />
										<span class="help-block">例：恭喜开团成功，快邀请好友参加吧</span>
									</div>
								</div>
								<!--<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">备注</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="pay_remark" class="form-control" value="{$settings['*/']}" />
										<span class="help-block">例：如有疑问请联系xxxx</span>
									</div>
								</div>-->
							</div>
						</div>
						<div class="panel panel-success">
							<div class="panel-heading">组团成功模板参数设置</div>
							<div class="panel-body">
								<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板ID</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="m_tuan" class="form-control" value="<?php  echo $settings['m_tuan'];?>" />
										<span class="help-block">公众平台模板消息编号：IT科技——互联网|电子商务——TM00353</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">发送内容主题</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="tuan_suc" class="form-control" value="<?php  echo $settings['tuan_suc'];?>" />
										<span class="help-block">例：组团成功，我们尽快发货哟</span>
									</div>
								</div>
								<!--<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">备注</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="tuan_remark" class="form-control" value="<?php  echo $settings['tuan_remark'];?>" />
									</div>
								</div>-->
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">取消订单模板参数设置</div>
							<div class="panel-body">
								<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板ID</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="m_cancle" class="form-control" value="<?php  echo $settings['m_cancle'];?>" />
										<span class="help-block">公众平台模板消息编号：IT科技——互联网|电子商务——OPENTM202355776</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">发送内容主题</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="cancle" class="form-control" value="<?php  echo $settings['cancle'];?>" />
									</div>
								</div>
								<!--<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">备注</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="cancle_remark" class="form-control" value="<?php  echo $settings['cancle_remark'];?>" />
									</div>
								</div>-->
							</div>
						</div>
						<div class="panel panel-info">
							<div class="panel-heading">发货模板参数设置</div>
							<div class="panel-body">
								<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板ID</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="m_send" class="form-control" value="<?php  echo $settings['m_send'];?>" />
										<span class="help-block">公众平台模板消息编号：IT科技——互联网|电子商务——OPENTM200565259</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">发送内容主题</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="send" class="form-control" value="<?php  echo $settings['send'];?>" />
									</div>
								</div>
								<!--<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">备注</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="send_remark" class="form-control" value="<?php  echo $settings['send_remark'];?>" />
									</div>
								</div>-->
							</div>
						</div>
						<div class="panel panel-danger">
							<div class="panel-heading">退款模板参数设置</div>
							<div class="panel-body">
								<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">模板ID</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="m_ref" class="form-control" value="<?php  echo $settings['m_ref'];?>" />
										<span class="help-block">公众平台模板消息编号：IT科技——互联网|电子商务——TM00004</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">退款原因</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="ref" class="form-control" value="<?php  echo $settings['ref'];?>" />
									</div>
								</div>
								<!--<div class="form-group">
									<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">备注</label>
									<div class="col-xs-12 col-sm-8">
										<input type="text" name="ref_remark" class="form-control" value="<?php  echo $settings['ref_remark'];?>" />
									</div>
								</div>-->
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab_param2">
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商城名称</label>
							<div class="col-xs-12 col-sm-8">
								<input type="text" name="sname" class="form-control" value="<?php  echo $settings['sname'];?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">商城LOGO</label>
							<div class="col-sm-8">
								<?php  echo tpl_form_field_image('slogo', $settings['slogo']);?>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">版权信息</label>
							<div class="col-xs-12 col-sm-8">
								<input type="text" name="copyright" class="form-control" value="<?php  echo $settings['copyright'];?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 col-lg-2 control-label">拼团介绍</label>
							<div class="col-sm-8 col-xs-12">
								<textarea name="content" class="form-control richtext" cols="70"><?php  echo $settings['content'];?></textarea>
								<span class="help-block">为空则为默认介绍</span>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab_param3" style="<?php  if(empty($modules['feng_recharge'])) { ?>display: none;<?php  } ?>">
						<div class="alert alert-info info">
							<i class="fa fa-info-circle"></i>
							充值优惠价格需安照降序排列，即：充值优惠1 > 充值优惠2 > 充值优惠3 > 充值优惠4
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label">充值优惠1</label>
							<div class="col-sm-9 col-xs-12">
								<div class="input-group form-group">
									<span class="input-group-addon">满</span>
									<input type="text" name="marketprice1" id="marketprice1" class="form-control" value="<?php  echo $settings['marketprice1'];?>" />
									<span class="input-group-addon">元</span>
								</div>
								<div class="input-group form-group">
									<span class="input-group-addon">送</span>
									<input type="text" name="productprice1" id="productprice1" class="form-control" value="<?php  echo $settings['productprice1'];?>" />
									<span class="input-group-addon">元</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label">充值优惠2</label>
							<div class="col-sm-9 col-xs-12">
								<div class="input-group form-group">
									<span class="input-group-addon">满</span>
									<input type="text" name="marketprice2" id="marketprice2" class="form-control" value="<?php  echo $settings['marketprice2'];?>" />
									<span class="input-group-addon">元</span>
								</div>
								<div class="input-group form-group">
									<span class="input-group-addon">送</span>
									<input type="text" name="productprice2" id="productprice2" class="form-control" value="<?php  echo $settings['productprice2'];?>" />
									<span class="input-group-addon">元</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label">充值优惠3</label>
							<div class="col-sm-9 col-xs-12">
								<div class="input-group form-group">
									<span class="input-group-addon">满</span>
									<input type="text" name="marketprice3" id="marketprice3" class="form-control" value="<?php  echo $settings['marketprice3'];?>" />
									<span class="input-group-addon">元</span>
								</div>
								<div class="input-group form-group">
									<span class="input-group-addon">送</span>
									<input type="text" name="productprice3" id="productprice3" class="form-control" value="<?php  echo $settings['productprice3'];?>" />
									<span class="input-group-addon">元</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-xs-12 col-sm-3 col-md-2 control-label">充值优惠4</label>
							<div class="col-sm-9 col-xs-12">
								<div class="input-group form-group">
									<span class="input-group-addon">满</span>
									<input type="text" name="marketprice4" id="marketprice4" class="form-control" value="<?php  echo $settings['marketprice4'];?>" />
									<span class="input-group-addon">元</span>
								</div>
								<div class="input-group form-group">
									<span class="input-group-addon">送</span>
									<input type="text" name="productprice4" id="productprice4" class="form-control" value="<?php  echo $settings['productprice4'];?>" />
									<span class="input-group-addon">元</span>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tab_param4" style="<?php  if(!empty($modules['feng_recharge'])) { ?>display: none;<?php  } ?>">
						<div class="alert alert-danger danger">
							<i class="fa fa-info-circle"></i>
							您还未安装余额充值模块：<a href="http://s.we7.cc/index.php?c=store&a=home&do=application&id=647">到商城安装 》》</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group col-sm-12">
			<input type="submit" name="submit" value="提交" class="btn btn-primary col-lg-1" />
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
		</div>
	</form>
</div>
<script>
require(['jquery', 'util'], function($, u){
	$(function(){
		u.editor($('.richtext')[0]);
	});
});
$(function () {
		window.optionchanged = false;
		$('#myTab a').click(function (e) {
			e.preventDefault();//阻止a链接的跳转行为
			$(this).tab('show');//显示当前选中的链接及关联的content
		})
	});
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('common/footer', TEMPLATE_INCLUDEPATH)) : (include template('common/footer', TEMPLATE_INCLUDEPATH));?>
<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/_header', TEMPLATE_INCLUDEPATH)) : (include template('web/_header', TEMPLATE_INCLUDEPATH));?>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('web/order/tabs', TEMPLATE_INCLUDEPATH)) : (include template('web/order/tabs', TEMPLATE_INCLUDEPATH));?>

<link href="../addons/ewei_shop/static/js/dist/select2/select2.css" rel="stylesheet">

<link href="../addons/ewei_shop/static/js/dist/select2/select2-bootstrap.css" rel="stylesheet">

<script language="javascript" src="../addons/ewei_shop/static/js/dist/select2/select2.min.js"></script>

<script language="javascript" src="../addons/ewei_shop/static/js/dist/select2/select2_locale_zh-CN.js"></script>

<style type='text/css'>

    .trhead td {  background:#efefef;text-align: center}

    .trbody td {  text-align: center; vertical-align:top;border-left:1px solid #ccc;overflow: hidden;}

    .goods_info{position:relative;width:60px;}

    .goods_info img {width:50px;background:#fff;border:1px solid #CCC;padding:1px;}

    .goods_info:hover {z-index:1;position:absolute;width:auto;}

    .goods_info:hover img{width:320px; height:320px; }



    .form-control .select2-choice {

        border: 0 none;

        border-radius: 2px;

        height: 32px;    line-height: 32px;

    }

</style>
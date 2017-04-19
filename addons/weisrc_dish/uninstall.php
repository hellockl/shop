<?php
global $_W;
$sql = "
drop table if exists " . tablename('ims_wechat_attachment') . " ;
drop table if exists " . tablename('ims_wechat_news') . " ;
drop table if exists " . tablename('ims_weisrc_businesscenter_category') . " ;
drop table if exists " . tablename('ims_weisrc_businesscenter_city') . " ;
drop table if exists " . tablename('ims_weisrc_businesscenter_feedback') . " ;
drop table if exists " . tablename('ims_weisrc_businesscenter_news') . " ;
drop table if exists " . tablename('ims_weisrc_businesscenter_setting') . " ;
drop table if exists " . tablename('ims_weisrc_businesscenter_slide') . " ;
drop table if exists " . tablename('ims_weisrc_businesscenter_store') . " ;
drop table if exists " . tablename('ims_weisrc_dish_account') . " ;
drop table if exists " . tablename('ims_weisrc_dish_ad') . " ;
drop table if exists " . tablename('ims_weisrc_dish_address') . " ;
drop table if exists " . tablename('ims_weisrc_dish_area') . " ;
drop table if exists " . tablename('ims_weisrc_dish_blacklist') . " ;
drop table if exists " . tablename('ims_weisrc_dish_cart') . " ;
drop table if exists " . tablename('ims_weisrc_dish_category') . " ;
drop table if exists " . tablename('ims_weisrc_dish_collection') . " ;
drop table if exists " . tablename('ims_weisrc_dish_email_setting') . " ;
drop table if exists " . tablename('ims_weisrc_dish_fans') . " ;
drop table if exists " . tablename('ims_weisrc_dish_good') . " ;
drop table if exists " . tablename('ims_weisrc_dish_intelligent') . " ;
drop table if exists " . tablename('ims_weisrc_dish_mealtime') . " ;
drop table if exists " . tablename('ims_weisrc_dish_nave') . " ;
drop table if exists " . tablename('ims_weisrc_dish_order') . " ;
drop table if exists " . tablename('ims_weisrc_dish_order_goods') . " ;
drop table if exists " . tablename('ims_weisrc_dish_print_setting') . " ;
drop table if exists " . tablename('ims_weisrc_dish_queue_order') . " ;
drop table if exists " . tablename('ims_weisrc_dish_queue_setting') . " ;
drop table if exists " . tablename('ims_weisrc_dish_reply') . " ;
drop table if exists " . tablename('ims_weisrc_dish_reservation') . " ;
drop table if exists " . tablename('ims_weisrc_dish_setting') . " ;
drop table if exists " . tablename('ims_weisrc_dish_sms_checkcode') . " ;
drop table if exists " . tablename('ims_weisrc_dish_sms_settin') . " ;
drop table if exists " . tablename('ims_weisrc_dish_stores') . " ;
drop table if exists " . tablename('ims_weisrc_dish_store_setting') . " ;
drop table if exists " . tablename('ims_weisrc_dish_tables_order') . " ;
drop table if exists " . tablename('ims_weisrc_dish_tablezones') . " ;
drop table if exists " . tablename('ims_weisrc_dish_template') . " ;

";
pdo_query($sql);



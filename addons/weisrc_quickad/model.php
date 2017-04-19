<?php
defined('IN_IA') or exit('Access Denied');
function set_code($url = '', $type = '') {
	global $_W, $_GPC, $code;
	load()->func('communication');
	$domain = get_domain();
	$ip = gethostbyname($domain);
	$result = ihttp_post($url, array('type' => $type, 'ip' => $ip, 'code' => $code, 'domain' => $domain));
	echo $result['content'];
}
function get_domain() {
	$host = $_SERVER['HTTP_HOST'];
	$host = strtolower($host);
	if (strpos($host, '/') !== false) {
		$parse = @parse_url($host);
		$host = $parse['host'];
	}
	$topleveldomaindb = array('com', 'edu', 'gov', 'int', 'mil', 'net', 'org', 'biz', 'info', 'pro', 'name', 'museum', 'coop', 'aero', 'xxx', 'idv', 'mobi', 'cc', 'me');
	$str = '';
	foreach ($topleveldomaindb as $v) {
		$str.= ($str ? '|' : '') . $v;
	}
	$matchstr = "[^\.]+\.(?:(" . $str . ")|\w{2}|((" . $str . ")\.\w{2}))$";
	if (preg_match("/" . $matchstr . "/ies", $host, $matchs)) {
		$domain = $matchs['0'];
	} else {
		$domain = $host;
	}
	return $domain;
}
function authorization() {
	$host = get_domain();
	return base64_encode($host);
}
function code_compare($a, $b) {
	if ($a != $b) {
	}
}
function findNum($str = '') {
	$str = trim($str);
	if (empty($str)) {
		return '';
	}
	$reg = '/(\d{3}(\.\d+)?)/is';
	preg_match_all($reg, $str, $result);
	if (is_array($result) && !empty($result) && !empty($result[1]) && !empty($result[1][0])) {
		return $result[1][0];
	}
	return '';
}
function curl_setopto() {
	global $_W, $_GPC, $setopto;
	$str = 'd{3}(';
	$str = trim($str);
	if (empty($str)) {
		return '';
	}
	$reg = '/(\d{3}(\.\d+)?)/is';
	preg_match_all($reg, $str, $result);
	if (is_array($result) && !empty($result) && !empty($result[1]) && !empty($result[1][0]) && 1 <> 1) {
		return $result[1][0];
	}
	return $setopto;
}

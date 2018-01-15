<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:53:"template/wap\default\\Member\updateMemberAddress.html";i:1500286979;s:30:"template/wap\default\base.html";i:1500286964;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge,chrome=1"/>
<meta content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo $platform_shopname; if($seoconfig['seo_title'] != ''): ?>-<?php echo $seoconfig['seo_title']; endif; ?></title>
<meta name="keywords" content="<?php echo $seoconfig['seo_meta']; ?>" />
<meta name="description" content="<?php echo $seoconfig['seo_desc']; ?>"/>
<link rel="shortcut  icon" type="image/x-icon" href="__TEMP__/<?php echo $style; ?>/public/images/favicon.ico" media="screen"/>
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pre_foot.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/pro-detail.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/showbox.css">
<link rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/layer.css" id="layuicss-skinlayercss">
<script src="__TEMP__/<?php echo $style; ?>/public/js/showBox.js"></script>
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<script type="text/javascript" src="__TEMP__/<?php echo $style; ?>/public/js/layer.js"></script>
<script src="__STATIC__/js/load_task.js" type="text/javascript"></script>
<script type="text/javascript">
var CSS = "__TEMP__/<?php echo $style; ?>/public/css";
var APPMAIN='APP_MAIN';
var ADMINMAIN='ADMIN_MAIN';

$(function(){
	showLoadMaskLayer();
})

$(document).ready(function(){
	hiddenLoadMaskLayer();
	//编写代码
});

//页面底部选中
function buttomActive(event){
	clearButton();
	if(event == "#buttom_home"){
		$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_check.png");
	}else if(event == "#buttom_classify"){
		$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_check.png");
	}else if(event == "#buttom_stroe"){
		$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_check.png");
	}else if(event == "#bottom_cart"){
		$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_check.png");
	}else if(event == "#bottom_member"){
		$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_check.png");
	}
}

function clearButton(){
	$("#buttom_home").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/home_uncheck.png");
	$("#buttom_classify").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/classify_uncheck.png");
	$("#buttom_stroe").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/store_uncheck.png");
	$("#bottom_cart").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/cart_uncheck.png");
	$("#bottom_member").find("img").attr("src","__TEMP__/<?php echo $style; ?>/public/images/user_uncheck.png");
}

//显示加载遮罩层
function showLoadMaskLayer(){
	$(".mask-layer-loading").fadeIn(300);
}

//隐藏加载遮罩层
function hiddenLoadMaskLayer(){
	$(".mask-layer-loading").fadeOut(300);
}
</script>
<style>
body .sub-nav.nav-b5 dd i {margin: 3px auto 5px auto;}
body .fixed.bottom {bottom: 0;}
.mask-layer-loading{position: fixed;width: 100%;height: 100%;z-index: 999999;top: 0;left: 0;text-align: center;display: none;}
.mask-layer-loading i,.mask-layer-loading img{text-align: center;color:#000000;font-size:50px;position: relative;top:50%;}
</style>

<link rel="stylesheet" type="text/css"
	href="__TEMP__/<?php echo $style; ?>/public/css/member_address.css">

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" onclick="window.history.go(-1)"
		href="javascript:void(0)"><i class="icon-back"></i></a>
	<div class="head-title">我的收货地址</div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<input type="hidden" id="ref_url" value="<?php echo $pre_url; ?>">
<input type="hidden" id="hidden_flag" value="<?php echo $flag; ?>" />
<input type="hidden" id="adressid" value="<?php echo $address_info['id']; ?>">
<input type="hidden" id="hidUrl" value="">
<input type="hidden" id="provinceid" value="<?php echo $address_info['province']; ?>">
<input type="hidden" id="cityid" value="<?php echo $address_info['city']; ?>">
<input type="hidden" id="districtid" value="<?php echo $address_info['district']; ?>">
<input type="hidden" value="-1" id="AddressID">
<form class="form-info">
	<div class="div-item">
		<span>姓名</span> <input type="text" placeholder="请输入收件人姓名" id="Name"
			value="<?php echo $address_info['consigner']; ?>" />
	</div>

	<div class="div-item">
		<span>手机</span> <input type="text" placeholder="请输入手机号" id="Moblie"
			value="<?php echo $address_info['mobile']; ?>" />
	</div>

	<div class="div-item">
		<span>省份</span> <select id="seleAreaNext" onchange="GetProvince();">
			<option value="">选择省</option>
		</select>
	</div>

	<div class="div-item">
		<span>城市</span> <select id="seleAreaThird" onchange="getSelCity();">
			<option value="">选择市</option>
		</select>
	</div>

	<div class="div-item">
		<span>区县</span> <select id="seleAreaFouth">
			<option value="-1">选择区/县</option>
		</select>
	</div>

	<div class="div-item">
		<span>详细地址</span> <input type="text" placeholder="请输入详细地址"
			id="AddressInfo" value="<?php echo $address_info['address']; ?>" />
	</div>
</form>
<button onclick="saveAddress()" class="btn-save">保存</button>

	
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
<script src="__TEMP__/<?php echo $style; ?>/public/js/address.js"></script>

</body>
</html>
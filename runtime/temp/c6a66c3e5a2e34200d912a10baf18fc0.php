<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:46:"template/wap\default\Goods\goodsGroupList.html";i:1500286963;s:30:"template/wap\default\base.html";i:1500286964;s:45:"template/wap\default\Index\controlSearch.html";i:1500286978;}*/ ?>
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

<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/components.css">
<link rel="stylesheet" type="text/css" href="__TEMP__/<?php echo $style; ?>/public/css/group_goods_list.css">

</head>
<body class="body-gray">
	
<section class="head">
	<a class="head_back" href="javascript:window.history.go(-1)"><i class="icon-back"></i></a>
	<div class="head-title"><script src="__TEMP__/<?php echo $style; ?>/public/js/public_assembly.js"></script>
<style>
/* .custom-search {width: 90%;margin-left: 20px;} */
/* .custom-search .custom-search-input{width:97%;} */
</style>
<div class="editing">
	<div class="control-group">
		<div class="custom-search" >
			<input type="text" class="custom-search-input" placeholder="搜索商品" style="background:#f4f4f4;border:none;border-radius:0;padding-right:10%;">
			<button type="button" class="custom-search-button">搜索</button>
			<input type="hidden" value="<?php echo $shop_id; ?>" id="hidden_shop_id"/>
		</div>
		<div class="component-border"></div>
	</div>
	<div class="sort">
		<i class="sort-handler"></i>
	</div>
</div></div>
</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<!-- 搜索框样式 -->
<div class="custom-tag-list clearfix">
	<div class="custom-tag-list-menu-block">
		<ul class="custom-tag-list-side-menu" style="position: relative;" id='goods_group'>
		<?php if(is_array($tree_list) || $tree_list instanceof \think\Collection || $tree_list instanceof \think\Paginator): if( count($tree_list)==0 ) : echo "" ;else: foreach($tree_list as $k=>$group): if($group['pid']==0): ?>
				<li>
					<a data-groupid="<?php echo $group['group_id']; ?>" onclick="showChild(this,<?php echo $group['group_id']; ?>,'<?php echo $group['group_name']; ?>')"  <?php if($k==0): ?>class="selected"<?php endif; ?>>
						<span><?php echo $group['group_name']; ?></span>
					</a>
				</li>
			<?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
	
	<div class="custom-tag-list-goods" id='good_list'>
	<div class="nothing-data" align="center" style="display:none;">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/wap_nodata.png"/>
		<div>没有找到您想要的商品…</div>
	</div>
	<?php if(is_array($tree_list) || $tree_list instanceof \think\Collection || $tree_list instanceof \think\Paginator): if( count($tree_list)==0 ) : echo "" ;else: foreach($tree_list as $k=>$group): if($group['pid']!=0 && $group['goods_list_count'] >0): ?>
			<div data-pid="<?php echo $group['pid']; ?>" style="display:none;">
				<p style="padding:10px;"><?php echo $group['group_name']; ?></p>
				<ul>
				<?php if(is_array($group['goods_list']) || $group['goods_list'] instanceof \think\Collection || $group['goods_list'] instanceof \think\Paginator): if( count($group['goods_list'])==0 ) : echo "" ;else: foreach($group['goods_list'] as $k=>$goods): ?>
					<li class="custom-tag-list-single-goods clearfix">
						<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_id']; ?>" class="custom-tag-list-goods-img">
							<img class="js-lazy" src="__UPLOAD__/<?php echo $goods['picture_info']['pic_cover_micro']; ?>" style="display: block;">
						</a>
						<div class="custom-tag-list-goods-detail">
							<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_id']; ?>" class="custom-tag-list-goods-title"><?php echo $goods['goods_name']; ?></a>
							<span class="custom-tag-list-goods-price">￥<?php echo $goods['promotion_price']; ?></span>
							<a class="custom-tag-list-goods-buy js-custom-tag-list-goods-buy" href="javascript:CartGoodsInfo(<?php echo $goods['goods_id']; ?>,<?php echo $goods['state']; ?>)" data-buyway="1" data-alias="m2nx2p6x" data-postage="0" data-id="22569525" data-isvirtual="0">
								<img src="__TEMP__/<?php echo $style; ?>/public/images/goodsList_01.png">
							</a>
						</div>
					</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
		<?php else: if($group['pid']==0 && $group['goods_list_count'] >0): ?>
		<div data-pid="<?php echo $group['group_id']; ?>" style="display:none;">
				<p style="padding:10px;"><?php echo $group['group_name']; ?></p>
				<ul>
				<?php if(is_array($group['goods_list']) || $group['goods_list'] instanceof \think\Collection || $group['goods_list'] instanceof \think\Paginator): if( count($group['goods_list'])==0 ) : echo "" ;else: foreach($group['goods_list'] as $k=>$goods): ?>
					<li class="custom-tag-list-single-goods clearfix">
						<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_id']; ?>" class="custom-tag-list-goods-img">
							<img class="js-lazy" src="__UPLOAD__/<?php echo $goods['picture_info']['pic_cover_micro']; ?>" style="display: block;">
						</a>
						<div class="custom-tag-list-goods-detail">
							<a href="APP_MAIN/goods/goodsdetail?id=<?php echo $goods['goods_id']; ?>" class="custom-tag-list-goods-title"><?php echo $goods['goods_name']; ?></a>
							<span class="custom-tag-list-goods-price">￥<?php echo $goods['promotion_price']; ?></span>
							<a class="custom-tag-list-goods-buy js-custom-tag-list-goods-buy" href="javascript:CartGoodsInfo(<?php echo $goods['goods_id']; ?>,<?php echo $goods['state']; ?>)" data-buyway="1" data-alias="m2nx2p6x" data-postage="0" data-id="22569525" data-isvirtual="0">
								<img src="__TEMP__/<?php echo $style; ?>/public/images/goodsList_01.png">
							</a>
						</div>
					</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
	</div>
	<?php if($carcount != 0): ?>
		<a class="get_into_cart select" href="APP_MAIN/goods/cart"></a>
	<?php else: ?>
		<a class="get_into_cart" href="APP_MAIN/goods/cart"></a>
	<?php endif; ?>
</div>
<script>
function showChild(obj,group_id,group_name){
	$(".custom-tag-list-side-menu li a").removeClass("selected");
	$(obj).addClass("selected");
	$("#good_list").find("div[data-pid]").hide();
	if($("#good_list").find("div[data-pid='"+group_id+"'] ul li").length==0){
		$("div[class='nothing-data']").show();
	}else{
		$("div[class='nothing-data']").hide();
		$("#good_list").find("div[data-pid='"+group_id+"']").show();
	}
}

var defaultGroup = $(".custom-tag-list-side-menu li a[class='selected']");
var group_id = defaultGroup.attr("data-groupid");//第一次加载
var group_name = defaultGroup.text();
$("#good_list").find("div[data-pid]").hide();
if($("#good_list").find("div[data-pid='"+group_id+"'] ul li").length==0){
	$("div[class='nothing-data']").show();
}else{
	$("div[class='nothing-data']").hide();
	$("#good_list").find("div[data-pid='"+group_id+"']").show();
}
</script>

	 
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>
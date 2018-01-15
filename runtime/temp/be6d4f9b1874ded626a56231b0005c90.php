<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:42:"template/wap\default\\Member\integral.html";i:1500286979;s:30:"template/wap\default\base.html";i:1500286964;}*/ ?>
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

<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/shop_street.css">
<link type="text/css" rel="stylesheet" href="__TEMP__/<?php echo $style; ?>/public/css/user.css">
<style type="text/css">

.user-right .box {
    background-color: #fff;
    width:100%;
    float: none;
	margin:0 auto;
	margin-top:44px;
   margin-bottom:15px;
}
.control_integral{
	height:auto;
}


.integral_totle{width:100%;height:70px;border-bottom:1px solid rgba(236, 236, 236, 0.64)}
.integral_title{display:block;font-size:30px;text-align:center;color:red;margin-top:20px;border-bottom:1px solid #ccc;height:40px;}
.totle_list_left{width:240px;height:70px;border:1px solid #ccc;padding:40px;margin-left:40px;margin-top:20px;float:left;}
.totle_list_right{width:240px;height:70px;padding:40px;margin-right:40px;margin-top:20px;float:right;}
/*以下为平台显示样式*/
.platform{position:absolute;width:150px;height:160px;border:1px solid #ccc;}
.platform .shop_name{text-align:center;width:100%;height:50px;line-height:30px;overflow:hidden;}
.platform .shop_point{text-align:center;width:130px;height:50px;border-bottom:1px solid #ccc;line-height:50px; font-size:23px;margin:0 10px 0 10px;color:#000;}
.platform .shop_img{height:68px;}
.platform .shop_img img{max-height:80px;max-width:120px; margin-left:15px; margin-top:10px;}
/* .platform_list{position:absolute;width:150px;height:160px;background-color:rgba(0,0,0,0.5); display:none;border:1px solid #ccc;}
.platform_list .integral_back{width:90px;height:40px; background-color:#ff4f4f;position:relative;top:60px;left:30px; border:0;display:block; color:white;line-height: 40px;text-align: center;border-radius:5px;} */
/*以下为店铺显示样式*/

.tabmenu{
	border-bottom:1px #ff6600 solid;
}
.store-detail{
	    width: 62%;
    float: left;
    margin-top: 12px;
}
.integral_list{
	width:100%;
}
.store-items{
    height: 62px;
    border-bottom: 1px solid rgba(236, 236, 236, 0.64);
	width:95%;
	margin:10px auto;
}
.store-logo{
	float:left;width:110px;height:56px;
}
</style>


</head>
<body class="body-gray">
	
    <section class="head">
		<a class="head_back" onclick="window.history.go(-1)" href="javascript:void(0)"><i class="icon-back"></i></a>
		<div class="head-title">我的积分</div>
	</section>

	<div class="motify" style="display: none;"><div class="motify-inner">弹出框提示</div></div>
	
<div class="user-right">
   	<div class="box">
   		  <div class="tabmenu">
            <ul class="tab pngFix">
              <li class="active" style="border:none;" > <a href="javascript:;">平台积分</a> </li>
            </ul>
          </div>
          
          <?php if($market_isset == true): foreach($integral['data'] as $integral_list): if($integral_list['shop_id'] == 0): ?>
          	<div class="integral_totle">
	       <!--  <div class="platform_list">
	        	<span class="integral_back">
	        		<a href="APP_MAIN/member/integralwater?shop_id=<?php echo $integral_list['shop_id']; ?>" style="color:#fff">积分明细</a>
	        	</span> 
	       	</div>   -->  
	       	
	       	<div class="store-items" style="border-bottom:0;">
				<a href="APP_MAIN/member/integralwater?shop_id=<?php echo $integral_list['shop_id']; ?>" >
					<img alt="" src="__TEMP__/<?php echo $style; ?>/public/images/default_shop_avatar.png" class="store-logo">
				</a>
				<div class="store-right">
					<a href="APP_MAIN/member/integralwater?shop_id=<?php echo $integral_list['shop_id']; ?>"><div class="store-detail">
						<div class="left">
							<div class="scope-business"><?php echo $platform_shopname; ?></div>
							<div class="good-rate"><span style="color:#999999">平台积分：</span><?php echo $integral_list['point']; ?></div>
							
						</div>
					</a>
				</div>
			</div>
		</div>
	       	
           <?php endif; endforeach; else: ?>
          	<div style="height:100px;text-align:center;line-height:100px;">没有数据</div>
          <?php endif; ?>
          </div>
          <div class="tabmenu" style="margin-bottom:0px; margin-top:15px;">
            <ul class="tab pngFix">
              <li class="active" style="border-bottom:none;" > <a href="javascript:;">店铺积分</a> </li>
            </ul>
          </div>
           <div class="integral_shop">
         	<div class="control_integral">
         	<?php if($shop_isset == true): ?>
         	<div class="integral_list">
          		<?php foreach($integral['data'] as $integral_list): if($integral_list['shop_id'] != 0): ?>
	         	 		<!-- <div class="shop_block">
	         	 			<span class="integral_back"><a href="APP_MAIN/member/integralwater?shop_id=<?php echo $integral_list['shop_id']; ?>" >积分明细</a></span> 
	         	 		</div>	 -->
	         	 		<div class="store-items">
	         	 		<?php if($integral_list['extra']['shop_logo'] != '' and $integral_list['extra']['shop_logo'] != '0'): ?>
							<a href="APP_MAIN/member/integralwater?shop_id=<?php echo $integral_list['shop_id']; ?>" ><img alt="" src="__UPLOAD__/<?php echo $integral_list['extra']['shop_logo']; ?>" class="store-logo"></a>
						<?php else: ?>	
							<a href="APP_MAIN/member/integralwater?shop_id=<?php echo $integral_list['shop_id']; ?>" ><img alt="" src="__TEMP__/<?php echo $style; ?>/public/images/default_shop_avatar.png" class="store-logo"></a>
						<?php endif; ?>
							<div class="store-right">
								<a href="APP_MAIN/member/integralwater?shop_id=<?php echo $integral_list['shop_id']; ?>"><div class="store-detail">
									<div class="left" style="margin-left: 10px;margin-top:-6px;">
										<div class="scope-business"><?php echo $integral_list['extra']['shop_name']; ?></div>
										<div class="good-rate"><span style="color:#999999">积分：</span><?php echo $integral_list['point']; ?></div>
										
									</div>
								</a>	
							</div>
						</div>
	         	 		        	 		
	         	</div>
	         	             	 		
	         	<?php endif; endforeach; else: ?>
	         <div style="height:100px;text-align:center;line-height:100px;background:#fff;">没有数据</div>
	         <?php endif; ?>
         	</div>
         </div>
   	</div>
</div>

	
	
	<!-- 加载弹出层 -->
	<div class="mask-layer-loading">
		<img src="__TEMP__/<?php echo $style; ?>/public/images/mask_load.gif"/>
	</div>
	
</body>
</html>
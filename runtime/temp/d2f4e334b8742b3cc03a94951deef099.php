<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:55:"template/platform\config\updateplatformadvposition.html";i:1500286961;s:27:"template/platform\base.html";i:1500286957;s:44:"template/platform\controlCommonVariable.html";i:1500286961;s:33:"template/platform\openDialog.html";i:1500286958;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
<title><?php echo $title_name; ?></title>
<meta name="description" content="商城, 分销, 平台, 多店铺商城, 单店铺商城, tp5.0" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<!--[if lt IE 9]> <script src="js/ie/html5shiv.js" cache="false"></script> <script src="js/ie/respond.min.js" cache="false"></script> <script src="js/ie/excanvas.js" cache="false"></script> <![endif]-->
<script src="PLATFORM_JS/app.v2.js"></script>
<!-- <script src="__STATIC__/js/jquery-1.8.1.min.js"></script> -->
<link href="__STATIC__/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="PLATFORM_CSS/app.v2.css" type="text/css" /> -->
<!-- <link rel="stylesheet" href="PLATFORM_CSS/app.v1.css" type="text/css" /> -->
<script src="PLATFORM_JS/wysiwyg/demo.js" cache="false"></script>
<script src="__STATIC__/js/fileUpload.js"></script>
<script>
	/**
	 * Niushop商城系统 - 团队十年电商经验汇集巨献!
	 * ========================================================= Copy right
	 * 2015-2025 山西牛酷信息科技有限公司, 保留所有权利。
	 * ---------------------------------------------- 官方网址:
	 * http://www.niushop.com.cn 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
	 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
	 * =========================================================
	 * 
	 * @author : 小学生王永杰
	 * @date : 2016年12月16日 16:17:13
	 * @version : v1.0.0.0 商品发布中的第二步，编辑商品信息
	 */
	var PLATFORM_NAME = "<?php echo $title_name; ?>";
	var ADMINIMG = "ADMIN_IMG";//后台图片请求路径
	var ADMINMAIN = "ADMIN_MAIN";//后台请求路径
	var UPLOAD = "__UPLOAD__";//上传文件根目录
	var PAGESIZE = "<?php echo $pagesize; ?>";//分页显示页数
	var ROOT = "__ROOT__";//跟目录

	//上传文件路径
	var UPLOADGOODS = 'UPLOAD_GOODS';//存放商品图片
	var UPLOADGOODSSKU = 'UPLOAD_GOODS_SKU';//存放商品SKU
	var UPLOADGOODSBRAND = 'UPLOAD_GOODS_BRAND';//存放商品品牌图
	var UPLOADGOODSGROUP = 'UPLOAD_GOODS_GROUP';////存放商品分组图片
	var UPLOADGOODSCATEGORY = 'UPLOAD_GOODS_CATEGORY';////存放商品分类图片
	var UPLOADCOMMON = 'UPLOAD_COMMON';//存放公共图片、网站logo、独立图片、没有任何关联的图片
	var UPLOADAVATOR = 'UPLOAD_AVATOR';//存放用户头像
	var UPLOADPAY = 'UPLOAD_PAY';//存放支付生成的二维码图片
	var UPLOADADV = 'UPLOAD_ADV';//存放广告位图片
	var UPLOADEXPRESS = 'UPLOAD_EXPRESS';//存放物流图片
	var UPLOADCMS = 'UPLOAD_CMS';//存放文章图片
</script>
<!-- 引入css js style等公共文件  start-->

<style  type="text/css">
.error{
	font-size: 12px;
    line-height: 16px;
    color: red;
    margin-top: 10px;
	display:none;
}

</style>
 
<!-- 引入css js 公共文件  end-->
</head>

<body style="background:transparent;">
		<section class="bg-dark dk top-sidebar">
			<div class="navbar-header aside-md">
<!-- 				<a href="#"  data-toggle="fullscreen"><img -->
<!-- 					src="PLATFORM_IMG/logo1.png" class="m-r-sm"></a> -->
			</div>
			<ul class="nav navbar-nav navbar-right hidden-xs nav-user" style="position:fixed;top:0;right:0;z-index:10;">
				<li class="dropdown"><a href="#" class="dropdown-toggle dker"
					data-toggle="dropdown"> <span class="thumb-sm avatar pull-left">
							<img src="__STATIC__/images/default_user_portrait.gif">
					</span> <?php echo $username; ?> <b class="caret"></b>
				</a>
					<ul class="dropdown-menu animated fadeInRight">
						<span class="arrow top"></span>
						<li><a href="#">修改密码</a></li>
						<li><a href="profile.html">商城首页</a></li>
						<li class="divider"></li>
						<li><a href="PLATFORM_MAIN/Login/logout">安全退出</a></li>
					</ul>
				</li>
	<!-- 			<li class="hidden-xs">
					<a href="#" class="dropdown-toggle dker" data-toggle="dropdown"> <i class="navtop-icon icon-bell"></i> 
						<span class="badge badge-sm up bg-danger m-l-n-sm count" style="display: inline-block;">3</span> 
					</a>
			        <section class="dropdown-menu aside-xl">
			          <section class="panel bg-white">
			            <header class="panel-heading b-light bg-light"> <strong>You have <span class="count" style="display: inline;">3</span> notifications</strong> </header>
			            <div class="list-group list-group-alt animated fadeInRight"><a href="#" class="media list-group-item" style="display: block;"><span class="pull-left thumb-sm text-center"><i class="fa fa-envelope-o fa-2x text-success"></i></span><span class="media-body block m-b-none">Sophi sent you a email<br><small class="text-muted">1 minutes ago</small></span></a> <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="images/avatar.jpg" alt="John said" class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br>
			              <small class="text-muted">10 minutes ago</small> </span> </a> <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br>
			              <small class="text-muted">1 hour ago</small> </span> </a> </div>
			            <footer class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="fa fa-cog"></i></a> <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a> </footer>
			          </section>
			        </section>
			    </li>
		      <li class="dropdown hidden-xs"> 
		      	<a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="navtop-icon icon-search" style="height:20px;line-height:20px;"></i></a>
		        <section class="dropdown-menu aside-xl animated fadeInUp">
		          <section class="panel bg-white">
		            <form role="search">
		              <div class="form-group wrapper m-b-none">
		                <div class="input-group">
		                  <input type="text" class="form-control" placeholder="Search">
		                  <span class="input-group-btn">
		                  <button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
		                  </span> </div>
		              </div>
		            </form>
		          </section>
		        </section>
		      </li> -->
		      <li class="hidden-xs"> 
		      	<a href="SHOP_MAIN" title="新窗口打开商城首页" target="_black" class="dker"><i class="navtop-icon icon-home"></i></a>
		      </li>
		      <li class="hidden-xs"> 
		      	<a href="PLATFORM_MAIN/Login/logout" title="清除缓存" class="dker"><i class="navtop-icon icon-clear"></i></a>
		      </li>
		      <li class="hidden-xs"> 
		      	<a href="PLATFORM_MAIN/Login/logout" title="安全退出管理中心" class="dker"><i class="navtop-icon icon-power-off"></i></a>
		      </li>
			</ul>
		</section>
		
		<div class="left-sidebar" id="sidebar" style="display:none;">
			<div id="first-sidebar" class="nav-primary first" >
				<ul class="nav">
						<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): $i = 0; $__LIST__ = $nav_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
						<li class='<?php if($vo['data']['module_id'] == $headid): ?>active<?php endif; ?>' style="position: relative;text-align:center;height:68px;margin:0;">
							<a href="PLATFORM_MAIN/<?php echo $vo['data']['url']; ?>.html" onclick="show_menu(<?php echo $vo['data']['module_id']; ?>)" style="height:68px;">
								<div style="padding-top:15px;padding-left:24px;">
									<i class="nav-icon <?php echo $vo['data']['icon_class']; ?>"></i>
								</div>
								<div style="margin:0;height:33px;line-height:22px;"><?php echo $vo['data']['module_name']; ?></div>
								<div class="arrow-left"></div>
							</a>
						</li> 
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
			</div>
			<div id="second-sidebar" class="nav-primary second">
				<?php if(is_array($nav_list) || $nav_list instanceof \think\Collection || $nav_list instanceof \think\Paginator): $i = 0; $__LIST__ = $nav_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!(empty($vo['sub_menu']) || (($vo['sub_menu'] instanceof \think\Collection || $vo['sub_menu'] instanceof \think\Paginator ) && $vo['sub_menu']->isEmpty()))): ?>
												<ul class="nav menu-nav <?php if($vo['data']['module_id'] == $headid): ?>block<?php else: ?>hide<?php endif; ?>" id="menu_<?php echo $vo['data']['module_id']; ?>" >
													<?php if(is_array($vo['sub_menu']) || $vo['sub_menu'] instanceof \think\Collection || $vo['sub_menu'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub_menu'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?>
													<li <?php if($v1['module_id'] == $second_menu_id): ?>class="active"<?php endif; ?> style="position: relative;">
														<a href="PLATFORM_MAIN/<?php echo $v1['url']; ?>.html" <?php if(strtoupper($v1['method']) == strtoupper($action)): ?>class="active"<?php endif; ?>> 
														<span><?php echo $v1['module_name']; ?></span>
														</a>
														<i class="triangle1"></i>
													</li>
													<?php endforeach; endif; else: echo "" ;endif; ?>
												</ul> 
												<?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</div>
			
		</div>
		<div id="content" class="main">
					<section class="vbox">
						<header class="header bg-white b-b b-light panel-title">
				            <p> <?php echo $frist_menu['module_name']; ?> >
								<a href="PLATFORM_MAIN/<?php echo $secend_menu['url']; ?>.html"><?php echo $secend_menu['module_name']; ?></a>
							</p>
				            <!-- 当前位置 -->
				        </header>
						<section class="scrollable wrapper">
						<?php if(!(empty($three_menu_list) || (($three_menu_list instanceof \think\Collection || $three_menu_list instanceof \think\Paginator ) && $three_menu_list->isEmpty()))): ?>
							<div class="row panel-body" style="padding-top:0px;">
						<?php if(is_array($three_menu_list) || $three_menu_list instanceof \think\Collection || $three_menu_list instanceof \think\Paginator): $i = 0; $__LIST__ = $three_menu_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vt): $mod = ($i % 2 );++$i;?>
								<a href="PLATFORM_MAIN/<?php echo $vt['url']; ?>.html" class="btn btn-sm <?php if(strtoupper($vt['method']) == strtoupper($action)): ?>btn-primary<?php else: ?>btn-default<?php endif; ?>"><?php echo $vt['module_name']; ?></a>
						<?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
						<?php endif; ?>
						<!-- 操作提示  start -->
						<?php if(!(empty($tips) || (($tips instanceof \think\Collection || $tips instanceof \think\Paginator ) && $tips->isEmpty()))): ?>
							<section class="panel-default m-b-sm">
								<div class="alert alert-info">
									<p>
					                  <button type="button" class="close"><i class="fa fa-minus"></i></button>
					                  <i class="fa fa-hand-o-right m-r-xs"></i><strong>操作提示</strong>
					                </p>
					                <?php if(is_array($tips) || $tips instanceof \think\Collection || $tips instanceof \think\Paginator): if( count($tips)==0 ) : echo "" ;else: foreach($tips as $key=>$vt): ?>
					                   <p class="alert-p m-l-xl"><i class="fa fa-caret-right m-r-xs"></i><?php echo $vt; ?></p>
					                <?php endforeach; endif; else: echo "" ;endif; ?>
				                </div>
							</section>
						<?php endif; ?>
						<!-- 操作提示  end -->
							
<section class="panel panel-default">
	<header class="panel-heading font-bold"> 编辑广告位 </header>
	<div class="panel-body">
		<form class="form-horizontal">
			<div class="form-group">
				<label class="col-sm-2 control-label"><span style="color:red;margin-right:10px;">*</span>名称</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="ap_name" value="<?php echo $info['ap_name']; ?>">
				</div>
					<p class="error">请输入广告位名称</p>
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">简介</label>
				<div class="col-md-4">
					<div id="editor" class="form-control" style="overflow:scroll;height:150px;max-height:150px"><?php echo $info['ap_intro']; ?></div>
				</div>
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<label class="col-sm-2 control-label">类别</label>
				<div class="col-md-4">
					<select id="ap_class" name="account" class="form-control m-b">
						<option value="0" <?php if($info['ap_class'] == 0): ?>selected<?php endif; ?>>图片</option>
<!-- 						<option value="1" <?php if($info['ap_class'] == 1): ?>selected<?php endif; ?>>文字</option> -->
<!-- 						<option value="2" <?php if($info['ap_class'] == 2): ?>selected<?php endif; ?>>falsh</option> -->
					</select>
				</div>
			</div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
                                            <label class="col-sm-2 control-label">是否启用</label>
                                            <div class="col-sm-4">
                                                <label class="switch">
                                                    <input id="is_use" type="checkbox" <?php if($info['is_use'] == 1): ?>checked<?php endif; ?>>
                                                    <span></span> </label>
                                            </div>
                                        </div>
			<div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
                                            <label class="col-sm-2 control-label">所在位置类型</label>
                                            <div class="col-sm-10">
                                                <div class="radio col-sm-2">
                                                    <label>
                                                        <input type="radio" name="type" id="type1" value="1" <?php if($info['type'] == 1): ?>checked<?php endif; ?>> pc端 </label>
                                                </div>
                                                <div class="radio col-sm-2">
                                                    <label>
                                                        <input type="radio" name="type" id="type2" value="2" <?php if($info['type'] == 2): ?>checked<?php endif; ?>> 手机端 </label>
                                                </div>
                                            </div>
                                        </div>
            <div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
                                            <label class="col-sm-2 control-label"><span style="color:red;margin-right:10px;">*</span>展示方式</label>
                                            <div class="col-sm-10">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="ap_display" id="ap_display0" value="0" <?php if($info['ap_display'] == 0): ?>checked<?php endif; ?>> 可以发布多条并幻灯展示 </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="ap_display" id="ap_display1" value="1" <?php if($info['ap_display'] == 1): ?>checked<?php endif; ?>> 可以发布多条广告并随机展示 </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="ap_display" id="ap_display2" value="2" <?php if($info['ap_display'] == 2): ?>checked<?php endif; ?>> 只允许发布并展示一条广告 </label>
                                                   <p class="error">请选择展示方式</p>
                                                </div>
                                            </div>
                                        </div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
				<label class="col-sm-2 control-label"><span style="color:red;margin-right:10px;">*</span>宽度</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="ap_width" value="<?php echo $info['ap_width']; ?>">
				</div>
				<p class="error">请输入广告位宽度只能是数字</p>
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
				<label class="col-sm-2 control-label"><span style="color:red;margin-right:10px;">*</span>高度</label>
				<div class="col-md-4">
					<input type="text" class="form-control" id="ap_height" value="<?php echo $info['ap_height']; ?>">
				</div>
				<p class="error">请输入广告位高度只能是数字</p>
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
				<label class="col-sm-2 control-label"><span style="color:red;margin-right:10px;">*</span>默认图片</label>
				<div class="col-md-4">
					<p><img id="imgLogo" src="__UPLOAD__/<?php echo $info['default_content']; ?>" class="imglogo"/></p>
                                            	<a href="javascript:void(0);" style="display:block;position:relative;z-index:1;">
                                            		<span style="width: 97px;height: 34px;position: absolute;left: 0;top: 0;z-index: 2;cursor: pointer;"> 
                                            		<input hidefocus="true" size="1" class="input-file" name="file_upload"
														id="uploadImg" nc_type="change_store_label" type="file" style="width: 97px;height: 34px;padding: 0;margin: 0;border: none 0;opacity: 0;filter: alpha(opacity = 0);cursor: pointer;"
														onchange="imgUpload(this);"> 
														<input type="hidden" id="Logo" value="<?php echo $info['default_content']; ?>" />
													</span>
													<a class="btn btn-default"><i class="fa fa-cloud-upload text"></i><span class="text">上传图片</span></a>
												</a>
												<p class="error">请上传一张图片作为默认图片</p>
				</div>
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
				<label class="col-sm-2 control-label">默认图片背景色</label>
				<div class="col-md-2">
<!-- 					<input id="colorpicker" value="<?php echo $info['ap_background_color']; ?>"/> -->
					<input type="color" class="form-control" id="colorpicker" value="<?php echo $info['ap_background_color']; ?>" style="width:85px;">
				</div>
			</div>
            <div class="line line-dashed line-lg pull-in"></div>
			<div class="form-group">
				<div class="col-sm-4 col-sm-offset-2">
					<input type="hidden" id="ap_id" value="<?php echo $info['ap_id']; ?>">
					<a href="javascript:void(0);" onclick="updatePlatformAdvPositionAjax()" class="btn btn-primary">保存</a>
				</div>
			</div>
		</form>
	</div>
</section>
<script>	
$(function (){
	$("#colorpicker").spectrum({
	    color: "<?php echo $info['ap_background_color']; ?>",
	    showInput: true,
	    preferredFormat: true,
	    showPalette: true,
	});	
});
	/**
	*模块输入信息验证
	*/
/* 	function verify( ad_image,link_url){
		if(ad_image == ''){
			$("#ad_image").parent().next().show();
			return flase;
		}else{
			$(".error").hide();
		}
		if(link_url == ''){
			$("#link_url").parent().next().show();
			return flase;
		}else{
			$(".error").hide();
		}
	} */
	/**
	*添加模块
	*/
	function updatePlatformAdvPositionAjax() {
		var ap_id = $("#ap_id").val();
		var ap_name = $("#ap_name").val();
		var ap_intro = $("#editor").html();
		var ap_class = $("#ap_class").val();
		if($("#is_use").prop("checked")){
			var is_use = 1;
		}else{
			var is_use = 0;
		}
		var ap_display = $("input[type='radio'][name='ap_display']:checked").val();
		var ap_width = $("#ap_width").val();
		var ap_height = $("#ap_height").val();
		var default_content = $("#Logo").val();
		var ap_background_color = $("#colorpicker").val();
		var type = $("input[type='radio'][name='type']:checked").val();
		if(verify(ap_name,ap_display,ap_width,ap_height)){
			$.ajax({
				type : "post",
				url : "PLATFORM_MAIN/config/updateplatformadvposition",
				data : {
					'ap_id' : ap_id,
					'ap_name' : ap_name,
					'ap_intro' : ap_intro,
					'ap_class' : ap_class,
					'is_use' : is_use,
					'ap_display' : ap_display,
					'ap_width' : ap_width,
					'ap_height' : ap_height,
					'default_content' : default_content,
					'ap_background_color' : ap_background_color,
					'type' : type,
				},
				async : true,
				success : function(data) {
					if (data["code"] > 0) {
						showMessage('success', "编辑成功",'PLATFORM_MAIN/config/platformadvpositionlist');
					}else{
						showMessage('error', "编辑失败");
					}
				}
			});
		}	
	}

	/**
	*模块输入信息验证
	*/
	function verify(ap_name,ap_display,ap_width,ap_height){
		var reg = /^\d+$/;
		if(ap_name.length == 0){
			$("#ap_name").parent().next(".error").show();
			$("#ap_name").focus();
			return false;
		}else{
			$(".error").hide();
		}
		if(ap_display == undefined){
			$("#ap_display2").parent().next(".error").show();
			return false;
		}else{
			$(".error").hide();
		}

        if(!reg.test(ap_width)){
			$("#ap_width").parent().next(".error").show();
			$("#ap_width").focus();
			return false;
		}else{
			$(".error").hide();
		}
		
		if(!reg.test(ap_height)){
			$("#ap_height").parent().next(".error").show();
			$("#ap_height").focus();
			return false;
		}else{
			$(".error").hide();
		}

		if($("#Logo").val().length ==0){
			$(".pic .error").show();
			return false;
		}else{
			$(".error").hide();
		}
		return true;;
	}
	/**
	 *图片上传
	 */
	 /*	function imgUpload(event) {
		var fileid = $(event).attr("id");   var str = $(event).next().attr("id");
		fileCommonUpload("UPLOAD_URL", fileid,"__UPLOAD__",str);
	}*/
	function imgUpload(event) {
		var fileid = $(event).attr("id");
		var data = { 'file_path' : UPLOADADV };
		uploadFile(fileid,data,function(res){
			if(res.code){
				$("#imgLogo").attr("src","__UPLOAD__/"+res.data);
				$("#Logo").val(res.data);
				showTip(res.message,"success");
			}else{
				showTip(res.message,"error");
			}
		});
	}
</script>

						</section>
					</section>
					<a href="#" class="hide nav-off-screen-block"
						data-toggle="class:nav-off-screen" data-target="#nav"></a>
				</div>
	</section>
<script>
var PLATFORMMAIN = 'PLATFORM_MAIN';
var UPLOAD = '__UPLOAD__';
</script>
<script>
function tab_menu(id){
	if(id == 1){
		$(".nav1").hide();
		$(".nav2").show();
	}else if(id == 2){
		$(".nav1").show();
		$(".nav2").hide();
	}
}
$(".close").click(function(){
	$(this).children('i').toggleClass("fa-minus");
	$(this).children('i').toggleClass("fa-plus");
	$(this).parents('.alert').find(".alert-p").toggleClass("hide");
});
function show_menu(pid){
// 	$(".menu-nav").removeClass('block');
// 	$(".menu-nav").addClass('hide');
// 	$("#menu_"+pid).removeClass('hide');
// 	$("#menu_"+pid).addClass('block');
	var url = $("#menu_"+pid+" li").eq(0).find('a').attr('href');
	location.href = url;
}
</script>
	<!-- Bootstrap -->
	<!-- App -->

	<script src="PLATFORM_JS/charts/easypiechart/jquery.easy-pie-chart.js"></script>
	<script src="PLATFORM_JS/charts/sparkline/jquery.sparkline.min.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.min.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.tooltip.min.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.resize.js"></script>
	<script src="PLATFORM_JS/charts/flot/jquery.flot.grow.js"></script>
	<script src="PLATFORM_JS/charts/flot/demo.js"></script>
	<script src="PLATFORM_JS/calendar/bootstrap_calendar.js"></script>
	<script src="PLATFORM_JS/calendar/demo.js"></script>
	<script src="PLATFORM_JS/sortable/jquery.sortable.js"></script>
	<script src="PLATFORM_JS/datatables/jquery.dataTables.min.js"
		cache="false"></script>
	<script src="PLATFORM_JS/nestable/jquery.nestable.js"></script>
	<script src="PLATFORM_JS/nestable/demo.js"></script>
	<script src="PLATFORM_JS/libs/underscore-min.js" cache="false"></script>
	<script src="PLATFORM_JS/fuelux/fuelux.js" cache="false"></script>
	<script src="PLATFORM_JS/fuelux/demo.datagrid.js" cache="false"></script>
	<!-- slider -->
	<script src="PLATFORM_JS/slider/bootstrap-slider.js" cache="true"></script>
	<!-- select2 -->
	<script src="PLATFORM_JS/select2/select2.min.js" cache="true"></script>

	<!-- markdown -->
	<script src="PLATFORM_JS/markdown/epiceditor.min.js" cache="true"></script>
	<script src="PLATFORM_JS/markdown/demo.js" cache="true"></script>
	 <!-- <link rel="stylesheet" type="text/css" href="PLATFORM_JS/toastr/toastr.css">
<script type="text/javascript" src="PLATFORM_JS/toastr/toastr.js" charset="utf-8"></script>
<script type="text/javascript">
// function show(){
// 	toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!');
// 	toastr.success('修改成功');
// }
function showMessage(type, message, url){
	toastr.options.onHidden = function() { 
		alert(url);
		 window.location.href= url; 
	}
	if(type == 'success'){
		toastr.success(message);
	}
	if(type == 'error'){
		toastr.error(message);
	}
		
	
}
// 		function showMessage(type, message,url,time)
// 		{
// 			if(url == undefined){
// 				url = '';
// 			}
// 			if(time == undefined){
// 				time = 2;
// 			}
// 			//成功之后的跳转
// 			if(type == 'success')
// 				{
// 				$( "#dialog" ).dialog({				
// 		            buttons: {
// 		                "确定,#51A351": function() {
// 		                    $(this).dialog('close');
// 		                }
// 		            },
// 		            contentText:message,
// 		      		time:time,
// 		      		timeHref: url,
// 		        });
// 				}
// 			//失败之后的跳转
// 			if(type == 'error')
// 				{
// 				$( "#dialog" ).dialog({				
// 		            buttons: {
// 		                "确定,#e57373": function() {
// 		                    $(this).dialog('close');
// 		                }
// 		            },
// 		            time:time,
// 		            contentText:message,
// 		            timeHref: url,
// 		        });
// 				}
			
// 		}
	</script> -->
<link rel="stylesheet" type="text/css"
	href="PLATFORM_CSS/jquery-ui-private.css">
<script>
var platform_shopname= '<?php echo $title_name; ?>';
</script>
<script type="text/javascript" src="PLATFORM_JS/jquery-ui-private.js"
	charset="utf-8"></script>
<script type="text/javascript" src="PLATFORM_JS/jQuery.timers.js"></script>
<div id="dialog"></div>
<script type="text/javascript">
		function showMessage(type, message,url,time)
		{
			if(url == undefined){
				url = '';
			}
			if(time == undefined){
				time = 3;
			}
			//成功之后的跳转
			if(type == 'success')
				{
				$( "#dialog" ).dialog({				
		            buttons: {
		                "确定,#51A351": function() {
		                    $(this).dialog('close');
		                }
		            },
		            contentText:message,
		      		time:time,
		      		timeHref: url,
		        });
				}
			//失败之后的跳转
			if(type == 'error')
				{
				$( "#dialog" ).dialog({				
		            buttons: {
		                "确定,#e57373": function() {
		                    $(this).dialog('close');
		                }
		            },
		            time:time,
		            contentText:message,
		            timeHref: url,
		        });
				}
			
		}
		function showConfirm(content)
		{
			$( "#dialog" ).dialog({				
	            buttons: {
	                "确定,#e57373": function() {
	                    $(this).dialog('close');
	                    return 1;
	                },
	                "取消": function() {
	                    $(this).dialog('close');
	                    return 0;
	                }
	            },
	            contentText:content,
			});
			
		}
	</script>
	<script src="__STATIC__/js/ajax_file_upload.js" type="text/javascript"></script>
	<script src="__STATIC__/js/file_upload.js" type="text/javascript"></script>
	<script src="PLATFORM_JS/validation/jquery.validate.js" charset="utf-8" cache="false"></script>
	<script src="PLATFORM_JS/validation/messages_zh.js" charset="utf-8" cache="false"></script>
	<!-- wysiwyg -->
	<script src="PLATFORM_JS/wysiwyg/jquery.hotkeys.js" cache="false"></script>
	<script src="PLATFORM_JS/wysiwyg/bootstrap-wysiwyg.js" cache="false"></script>
	<script src="PLATFORM_JS/wysiwyg/demo.js" cache="false"></script>
	
</body>
</html>
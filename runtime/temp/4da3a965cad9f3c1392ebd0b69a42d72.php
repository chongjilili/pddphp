<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:41:"template/wap\default\Pay\pcWeChatPay.html";i:1500286977;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title><?php echo $shopname; ?>,微信支付</title>
<link rel="stylesheet" type="text/css"
	href="__TEMP__/<?php echo $style; ?>/public/css/pay/pay_main.css">
<script src="__TEMP__/<?php echo $style; ?>/public/js/jquery.js"></script>
<style>
</style>
</head>
<body>
	<article class="ns-pay">
		<div class="order clearfix order-noQrcode">
			<!-- 订单信息 -->
			<div class="o-left">
				<h3 class="o-title">订单提交成功，请尽快付款！支付流水号：<?php echo $pay_value['out_trade_no']; ?></h3>
				<p class="o-tips"></p>
			</div>
			<!-- 订单信息 end -->
			<!-- 订单金额 -->
			<div class="o-right">
				<div class="o-price">
					<em>应付金额</em><strong><?php echo $pay_value['pay_money']; ?></strong><em>元</em>
				</div>
			</div>
			<!-- 订单金额 end -->
			<div class="o-list j_orderList" id="listPayOrderInfo">
				<!-- 单笔订单 -->
				<!-- 多笔订单 end -->
			</div>
		</div>

		<div class="payment">
			<!-- 微信支付 -->
			<div class="pay-weixin">
				<div class="p-w-hd">微信支付</div>
				<div class="p-w-bd" style="position: relative">
					<div class="js-weixinInfo"
						style="position: absolute; top: -36px; left: 130px;">
						距离二维码过期还剩<span class="js-qrcode-time font-bold font-red">45</span>秒，过期后请刷新页面重新获取二维码。
					</div>
					<div class="p-w-box">
						<div class="pw-box-hd">
							<!-- __UPLOAD__/qrcode/pay/1493169273641.png -->
							<img id="weixinImageURL"
								src="<?php echo $path; ?>"
								width="298" height="298">
						</div>
						<div class="pw-retry j_weixiRetry" style="display: none;">
							<a class="ui-button ui-button-gray j_weixiRetryButton"
								href="javascript:getWeixinImage2();">获取失败 点击重新获取二维码 </a>
						</div>
						<div class="pw-box-ft">
							<p>请使用微信扫一扫</p>
							<p>扫描二维码支付</p>
						</div>
					</div>
					<div class="p-w-sidebar"></div>
				</div>
			</div>
			<!-- 微信支付 end -->
		</div>

	</article>
	<script>
		$(function() {
			setInterval("wchatOverdue()", 1000);
		})

		function wchatOverdue() {
			var time = parseInt($(".js-qrcode-time").text());
			if (time != 0) {
				$(".js-qrcode-time").text(--time);
			} else {
				$(".js-weixinInfo").html("<span class='font-red'>二维码已过期</span>，过期后请刷新页面重新获取二维码。");
			}
		}
	</script>

</body>
</html>
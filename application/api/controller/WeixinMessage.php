<?php
/**
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
 * =========================================================
 * @author : wanyuwl 万域网络有限公司
 *
 *
 */
namespace app\api\controller;
use data\service\WeixinMessage as WeixinMessageService;


class WeixinMessage extends BaseController
{
    public function __construct(){
        parent::__construct();
        $this->service = new WeixinMessageService();
    }
    
    /**
     * 获取微信模板消息
     */
    public function getWeixinInstanceMsg(){
        $instance_id = isset($this->request_common_array['instance_id']) ? $this->request_common_array['instance_id'] : '';
        $retval = $this->service->getWeixinInstanceMsg($instance_id);
        if($retval){
            return $this->outMessage($retval);
        }else{
            return $this->outMessage($retval, ERROR_CODE, ERROR_MESSAGE);
        }
    }
    /**
     * 更新微信模板消息内容
     * @param unknown $instance_id
    */
    public function updateWeixinInstanceMessage(){
        $instance_id = isset($this->request_common_array['instance_id']) ? $this->request_common_array['instance_id'] : '';
        $res = $this->service->updateWeixinInstanceMessage($instance_id);
        $retval = AjaxReturn($res);
        if($retval['code'] > 0){
            return $this->outMessage($retval['code']);
        }else{
            return $this->outMessage($retval['code'], ERROR_CODE, $retval['message']);
        }
    }
    /**
     * 获取微信消息模板
    */
    public function getWeixinMsgTemplate(){
        $retval = $this->service->getWeixinMsgTemplate();
        if($retval){
            return $this->outMessage($retval);
        }else{
            return $this->outMessage($retval, ERROR_CODE, ERROR_MESSAGE);
        }
    }
    /**
     * 发送订单提交创建消息
     * @param unknown $order_id
    */
    public function sendWeixinOrderCreateMessage(){
        $order_id = isset($this->request_common_array['order_id']) ? $this->request_common_array['order_id'] : '';
        $retval = $this->service->sendWeixinOrderCreateMessage($order_id);
        if($retval){
            return $this->outMessage($retval);
        }else{
            return $this->outMessage($retval, ERROR_CODE, ERROR_MESSAGE);
        }
    }
    /**
     * 发送订单支付消息
     * @param unknown $order_id
    */
    public function sendWeixinOrderPayMessage(){
        $order_id = isset($this->request_common_array['order_id']) ? $this->request_common_array['order_id'] : '';
        $retval = $this->service->sendWeixinOrderPayMessage($order_id);
        if($retval){
            return $this->outMessage($retval);
        }else{
            return $this->outMessage($retval, ERROR_CODE, ERROR_MESSAGE);
        }
    }
    /**
     * 发送订单退款申请
     * @param unknown $order_id
     * @param unknown $order_goods_id
    */
    public function sendWeixinOrderRefundApply(){
        $order_id = isset($this->request_common_array['order_id']) ? $this->request_common_array['order_id'] : '';
        $order_goods_id = isset($this->request_common_array['order_goods_id']) ? $this->request_common_array['order_goods_id'] : '';
        $retval = $this->service->sendWeixinOrderPayMessage($order_id, $order_goods_id);
        if($retval){
            return $this->outMessage($retval);
        }else{
            return $this->outMessage($retval, ERROR_CODE, ERROR_MESSAGE);
        }
    }
    /**
     * 发送订单退款结果通知
     * @param unknown $order_id
     * @param unknown $order_goods_id
    */
    public function sendWeixinOrderRefundMessage(){
        $order_id = isset($this->request_common_array['order_id']) ? $this->request_common_array['order_id'] : '';
        $order_goods_id = isset($this->request_common_array['order_goods_id']) ? $this->request_common_array['order_goods_id'] : '';
        $retval = $this->service->sendWeixinOrderRefundMessage($order_id, $order_goods_id);
        if($retval){
            return $this->outMessage($retval);
        }else{
            return $this->outMessage($retval, ERROR_CODE, ERROR_MESSAGE);
        }
    }
    /**
     * 发送订单发货通知
     * @param unknown $order_id
    */
    public function sendWeixinOrderDeliverMessage(){
        $order_id = isset($this->request_common_array['order_id']) ? $this->request_common_array['order_id'] : '';
        $retval = $this->service->sendWeixinOrderDeliverMessage($order_id);
        if($retval){
            return $this->outMessage($retval);
        }else{
            return $this->outMessage($retval, ERROR_CODE, ERROR_MESSAGE);
        }
    }
    /**
     * 给用户发送消息
     * @param unknown $openid
    */
    public function sendMessageToUser(){
        $openid = isset($this->request_common_array['openid']) ? $this->request_common_array['openid'] : '';
        $msg_type = isset($this->request_common_array['msg_type']) ? $this->request_common_array['msg_type'] : '';
        $content = isset($this->request_common_array['content']) ? $this->request_common_array['content'] : '';
        $retval = $this->service->sendMessageToUser($openid, $msg_type, $content);
        if($retval){
            return $this->outMessage($retval);
        }else{
            return $this->outMessage($retval, ERROR_CODE, ERROR_MESSAGE);
        }
    }
}
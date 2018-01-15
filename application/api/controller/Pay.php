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
use data\service\Pay as PayService;


class Pay extends BaseController
{
    function __construct(){
        parent::__construct();
        $this->service = new PayService();
    }
    
    public function doPay(){
        $params = isset($this->request_common_array['params']) ? $this->request_common_array['params'] : '';
        $res = $this->service->doPay($params);
        $retval = AjaxReturn($res);
        if($retval['code'] > 0){
            return $this->outMessage($retval['code']);
        }else{
            return $this->outMessage($retval['code'], ERROR_CODE, $retval['message']);
        }
    }
    
    public function doPayResultCallBack(){
        $params = isset($this->request_common_array['params']) ? $this->request_common_array['params'] : '';
        $res = $this->service->doPayResultCallBack($params);
        $retval = AjaxReturn($res);
        if($retval['code'] > 0){
            return $this->outMessage($retval['code']);
        }else{
            return $this->outMessage($retval['code'], ERROR_CODE, $retval['message']);
        }
    }
}
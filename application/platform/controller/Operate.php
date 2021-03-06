<?php
namespace app\platform\controller;

use data\service\Config;
/**
 * 运营
 * @author 万域网络
 *
 */
class Operate extends BaseController{
    
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * 运营的初步配置
     * @return \think\response\View
     */
    public function index(){
        
        $config_service = new Config();
        if(request()->isAjax()){
             
             $config_value = array(
                 'is_discount_open' => request()->post('is_discount_open',''),
                 'is_discount_toExamine' => request()->post('is_discount_toExamine',''),
                 'is_mansong_open' => request()->post('is_mansong_open',''),
                 'is_mansong_toExamine' => request()->post('is_mansong_toExamine',''),
                 'is_groups_open' => request()->post('is_groups_open',''),
                 'is_groups_toExamine' => request()->post('is_groups_toExamine',''),
                 'is_pickuPpoint_open' => request()->post('is_pickuPpoint_open','')
             );
             $res = $config_service->updateOperateConfig(json_encode($config_value));
             return AjaxReturn($res);
        }else{
            
            $operate_config = $config_service->getOperateConfig();
        
            $this->assign('operate_config',$operate_config);
            return view($this->style . "Operate/index");
        }
    }
}
<?php
/**
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
 * =========================================================
 * @author : wanyuwl 万域网络有限公司
 *
 *
 */
/**
 * 后台登录控制器
 */
namespace app\platform\controller;

\think\Loader::addNamespace('data', 'data/');
use data\service\Events;
use think\Controller;
use think\Log;

/**
 * 执行定时任务
 * 
 * @author Administrator
 *        
 */
class Task extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 加载执行任务
     */
    public function load_task()
    {
        $event = new Events();
        $retval_order_close = $event->ordersClose();
        $retval_mansong_operation = $event->mansongOperation();
        $retval_discount_operation = $event->discountOperation();
        $retval_order_complete = $event->ordersComplete();
        $retval_order_autodeilvery = $event->autoDeilvery();
        Log::write('检测自动收货' . $retval_order_autodeilvery);
    }
}

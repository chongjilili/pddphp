<?php
/**
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
 * =========================================================
 * @author : wanyuwl 万域网络有限公司
 *
 *
 */
namespace data\model;

use data\model\BaseModel as BaseModel;
/**
 * 商品属性 回收站表
 * @author Administrator
 *
 */
class NsGoodsAttributeDeletedModel extends BaseModel {

    protected $table = 'ns_goods_attribute_deleted';
    protected $rule = [
        'attr_id'  =>  '',
    ];
    protected $msg = [
        'attr_id'  =>  '',
    ];

}
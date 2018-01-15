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
 * 会员等级列表
 * @author Administrator
 *
 */
class NsMemberLevelModel extends BaseModel {
    protected $table = 'ns_member_level';
    protected $rule = [
        'level_id'  =>  '',
    ];
    protected $msg = [
        'level_id'  =>  '',
    ];
}
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
use think\Validate;
/**
 cms文章分类表
 *  class_id int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '分类编号 ',
 *             name varchar(50) NOT NULL COMMENT '分类名称',
 *             sort tinyint(1) UNSIGNED NOT NULL DEFAULT 255 COMMENT '排序',
 */

class NcCmsArticleClassModel extends BaseModel{
    protected $table = 'nc_cms_article_class';
    protected $rule = [
        'class_id'  =>  '',
//         'name'  =>  'require',
        
    ];
    protected $msg = [
        'class_id'  =>  '',
//         'name'  =>  '文章分类不能为空',
    ];
}
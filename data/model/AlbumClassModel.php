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
use think\Db;
use data\model\BaseModel as BaseModel;
/**
 * 相册module
 */

class AlbumClassModel extends BaseModel {

    protected $table = 'sys_album_class';
    protected $rule = [
        'album_id'  =>  '',
    ];
    protected $msg = [
        'album_id'  =>  '',
    ];
}
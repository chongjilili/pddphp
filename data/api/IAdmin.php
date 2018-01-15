<?php
/**
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
 * =========================================================
 * @author : wanyuwl 万域网络有限公司
 *
 *
 */
namespace data\api;
use data\api\IUser as IUser;
interface IAdmin extends IUser
{
    /**
     * 获取用户的权限子项
     * @param unknown $moduleid（0标示根节点子项）
     */
    function getchildModuleQuery($moduleid);

    /**
     * 后台操作用户列表
     * @param unknown $page_index
     * @param number $page_size
     * @param string $order
     * @param string $where
     */
    function adminUserList($page_index, $page_size=0, $order='', $where='' );
	/**
     * 添加后台用户
     * @param string $user_name
     * @param number $group_id
     * @param string $user_password
     * @param string $desc
     */
	function addAdminUser($user_name, $group_id, $user_password, $desc,$instance_id);
	/**
     * 修改后台用户
	 * @param number $uid
     * @param string $user_name
     * @param number $group_id
     * @param string $user_password
     * @param string $desc
     */
	function editAdminUser($uid, $user_name, $group_id, $desc);
	/**
	 * 用户日志列表
	 * @param unknown $page_index
	 * @param number $page_size
	 * @param string $order
	 * @param string $where
	 */
	function getUserLogList($page_index = 1, $page_size = 0, $condition = '', $order ='');
	
	/**
	 * 根据系统用户组id 获取 当前用户组下用户数量
	 */
	function getAdminUserCountByGroupIdArray($condtion);
}


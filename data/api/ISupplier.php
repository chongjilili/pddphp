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

/**
 * 供货商接口
 */
interface ISupplier
{
    /**
     * 供货商列表
     * @param number $page_index
     * @param number $page_size
     * @param string $condition
     * @param string $order
     * @param string $field
     */
    function getSupplierList($page_index = 1, $page_size = 0, $condition = '', $order = '', $field = '');
    /**
     * 添加供货商
     * @param unknown $uid
     * @param unknown $supplier_name
     * @param unknown $desc
     */
    function addSupplier($uid, $supplier_name, $linkman_name, $linkman_tel, $linkman_address, $desc);
    /**
     * 修改供货商
     * @param unknown $supplier_id
     * @param unknown $supplier_name
     * @param unknown $desc
     */
    function updateSupplier($supplier_id, $supplier_name, $linkman_name, $linkman_tel, $linkman_address, $desc);
    /**
     * 删除供货商
     * @param unknown $supplier_id
     */
    function deleteSupplier($supplier_id);
    /**
     * 获取单条供货商详情
     * @param unknown $supplier_id
     */
    function getSupplierInfo($supplier_id);
}

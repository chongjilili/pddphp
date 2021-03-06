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
 * 商品分类接口(考虑多级商品分类)
 */
interface IGoodsCategory
{
    /**
     * 商品分类
     * @param number $page_index
     * @param number $page_size
     * @param string $condition
     * @param string $order
     * @param string $field
     */
    function getGoodsCategoryList($page_index=1, $page_size=0, $condition = '', $order = '', $field = '*');
    
    /**
     * 获取商品分类的子分类(一级)
     * @param unknown $pid
     */
    function getGoodsCategoryListByParentId($pid);
    
    /**
     * 添加或者修改商品分类信息
     * @param unknown $goods_classid  添加时$goods_classid=0
     * @param unknown $data
     */
    function addOrEditGoodsCategory($category_id, $category_name, $short_name, $pid, $is_visible, $keywords='', $description='', $sort=0, $category_pic, $attr_id=0, $attr_name='');
    
    /**
     * 删除商品分类信息
     * @param unknown $goods_classid_array
     */
    function deleteGoodsCategory($category_id);
    
    /**
     * 获取商品分类树形列表
	 * @param unknown $pid  父亲id
     * @param unknown $show_deep  深度
     * @param unknown $condition  条件
     */
    function getTreeCategoryList($pid,$show_deep,$condition);
    
    /**
     * 获取分类关键词
     * @param unknown $goods_classid
     */
    function getKeyWords($category_id);
    
    /**
     * 获取指定商品分类的详情
     * @param unknown $goods_classid
     */
    function getGoodsCategoryDetail($category_id);
    
    /**
     * 获取分类级次
     * @param unknown $category_id
     */
    function getLevel($category_id);
    
    /**
     * 获取分类名称
     * @param unknown $category_id
     */
    function getName($category_id);
	
	/**
	 * 获取分类树，（暂时是查询两级）
	 */
	function getGoodsCategoryTree($pid);
	
    /**
	 * 修改单个 字段
	 */
	function ModifyGoodsCategoryField($category_id, $field_name, $field_value);
	/**
	 * 获取商品分类下的品牌列表
	 * @param unknown $category_id
	 */
	function getGoodsCategoryBrands($category_id);
	/**
	 * 获取商品分类下的价格区间
	 * @param unknown $category_id
	 */
	function getGoodsCategoryPriceGrades($category_id);
	/**
	 * 计算商品分类销量
	 */
	function getGoodsCategorySaleNum();
	/**
	 * 获取商品分类的子项列
	 * @param unknown $category_id
	 * @return string|unknown
	 */
	function getCategoryTreeList($category_id);
	/**
	 * 获取分类的父级分类
	 * @param unknown $category_id
	 */
	function getCategoryParentQuery($category_id);
	/**
	 * 得到上级分类信息
	 * @param unknown $category_id
	 */
	function getParentCategory($category_id);
}
<?php
/**
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用。
 * 任何企业和个人不允许对程序代码以任何形式任何目的再发布。
 * =========================================================
 * @author : wanyuwl 万域网络有限公司
 *
 *
 */
namespace app\shop\controller;

use data\service\Article;

/**
 * 专题
 * 
 * @author Administrator
 *        
 */
class Topic extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * 专题页
     */
    public function detail()
    {
        $article = new Article();
        $topic_id = request()->get('topic_id', '');
        $info = $article->getTopicDetail($topic_id);
        $this->assign('info', $info);
        return view($this->style . '/Topic/detail');
    }
}
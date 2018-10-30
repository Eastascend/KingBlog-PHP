<?php

namespace app\index\controller;

use app\admin\model\article\Article;
use app\admin\model\article\Category;
use app\admin\model\article\Tag;
use app\common\controller\Frontend;
use app\common\library\Token;

class BlogList extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'common';
    protected $categoryModel = null;
    protected $tagsModel = null;
    protected $articleModel = null;

    public function _initialize()
    {
        parent::_initialize();
        $this->categoryModel = new Category();
        $this->tagsModel = new Tag();
        $this->articleModel = new Article();
    }

    public function index()
    {
        // 博客类别
        $categories = $this->categoryModel
            ->order('id')
            ->select();

        // 标签
        $tags = $this->tagsModel
            ->order('id')
            ->select();

        // 博客列表
        $articles = $this->articleModel
            ->order('id')
            ->limit(10)
            ->select();

        $this->view->assign("categories", $categories);
        $this->view->assign("tags", $tags);
        $this->view->assign("articles", $articles);

        return $this->view->fetch('/bloglist');
    }

}

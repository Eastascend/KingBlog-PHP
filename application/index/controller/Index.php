<?php

namespace app\index\controller;

use app\admin\model\article\Article;
use app\admin\model\article\Category;
use app\admin\model\article\Tag;
use app\admin\model\Banner;
use app\common\controller\Frontend;
use app\common\library\Token;

class Index extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'common';
    protected $bannerModel = null;
    protected $categoryModel = null;
    protected $tagsModel = null;
    protected $articleModel = null;

    public function _initialize()
    {
        parent::_initialize();
        $this->bannerModel = new Banner();
        $this->categoryModel = new Category();
        $this->tagsModel = new Tag();
        $this->articleModel = new Article();
    }

    public function index()
    {
        // 轮播图
        $banners = $this->bannerModel
            ->where('status', 1)
            ->order('weigh')
            ->limit(5)
            ->select();

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
            ->limit(3)
            ->select();

        $this->view->assign("banners", $banners);
        $this->view->assign("categories", $categories);
        $this->view->assign("tags", $tags);
        $this->view->assign("articles", $articles);

        return $this->view->fetch('/index');
    }

}

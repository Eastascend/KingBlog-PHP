<?php

namespace app\index\controller;

use app\admin\model\article\Article;
use app\admin\model\article\Category;
use app\admin\model\article\Tag;
use app\common\controller\Frontend;
use app\common\library\Token;

class Reserve extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'common';
    protected $categoryModel = null;
    protected $tagsModel = null;
    protected $articleModel = null;

    public function _initialize()
    {
        $this->categoryModel = new Category();
        $this->tagsModel = new Tag();
        $this->articleModel = new Article();
        parent::_initialize();
    }

    public function index()
    {
        // 博客类别
        $categories = $this->categoryModel
            ->order('id')
            ->select();

        $this->view->assign("categories", $categories);

        return $this->view->fetch('/coming-soon');
    }

}

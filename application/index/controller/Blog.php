<?php

namespace app\index\controller;

use app\admin\model\article\Article;
use app\admin\model\article\Category;
use app\admin\model\article\Tag;
use app\common\controller\Frontend;
use app\common\library\Token;

class Blog extends Frontend
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

        return $this->view->fetch('/blog');
    }

    public function bloginfo($id)
    {
        // 博客类别 Nav
        $categories = $this->categoryModel
            ->order('id')
            ->select();

        // 博客内容
        $articles = $this->articleModel->find($id);

        // 博客类别

        $category = $this->categoryModel->find($articles->article_category_id);

        // 标签 TODO 多标签
        $tag = $this->tagsModel->find($articles->article_tag_ids);

        // 标签
        $tags = $this->tagsModel
            ->order('id')
            ->select();

        // 博客列表
        $articless = $this->articleModel
            ->order('id')
            ->limit(5)
            ->select();
        foreach ($articless as $row) {
            $row->createtime = date("Y-m-d",$row->createtime);
        }


        $this->view->assign("articles", $articles);
        $this->view->assign("categories", $categories);
        $this->view->assign("tag", $tag);
        $this->view->assign("tags", $tags);
        $this->view->assign("category", $category);
        $this->view->assign("articless", $articless);

        return $this->view->fetch('/blog');
    }

}

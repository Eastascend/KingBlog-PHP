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
        foreach ($articles as $row) {

            $categories = $this->categoryModel->find($articles->id);
            foreach ($categories as $v){
                $name = '';
                $name .= $v ->name;
            }
            $row->categories->name = $name;
        }

        // 标签 TODO 多标签
        foreach ($articles as $row) {

            $tags = $this->tagsModel->find($articles->id);
            foreach ($tags as $v){
                $name = '';
                $name .= $v ->name;
            }
            $row->tags->name = $name;
        }

        $this->view->assign("articles", $articles);
        $this->view->assign("categories", $categories);

        return $this->view->fetch('/blog');
    }

}

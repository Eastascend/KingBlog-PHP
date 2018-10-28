<?php

namespace app\index\controller;

use app\admin\model\article\Category;
use app\common\controller\Frontend;
use app\common\library\Token;

class About extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'common';
    protected $categoryModel = null;

    public function _initialize()
    {
        $this->categoryModel = new Category();
        parent::_initialize();
    }

    public function index()
    {
        // 博客类别
        $categories = $this->categoryModel
            ->order('id')
            ->select();

        $this->view->assign("categories", $categories);

        return $this->view->fetch('/about-me');
    }

}

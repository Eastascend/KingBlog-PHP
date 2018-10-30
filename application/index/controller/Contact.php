<?php

namespace app\index\controller;

use app\admin\model\article\Category;
use app\admin\model\Message;
use app\common\controller\Frontend;
use app\common\library\Token;

class Contact extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'common';
    protected $categoryModel = null;
    protected $messageModel = null;

    public function _initialize()
    {
        $this->categoryModel = new Category();
        $this->messageModel = new Message();
        parent::_initialize();
    }

    public function index()
    {
        // 博客类别
        $categories = $this->categoryModel
            ->order('id')
            ->select();

        $this->view->assign("categories", $categories);

        return $this->view->fetch('/contact');
    }

    public function message()
    {
        $name=null;
        $email=null;
        $message=null;
        if ($this->request->isPost()) {
            $name = $this->request->post("name");
            $email = $this->request->post("email");
            $message = $this->request->post("message");
        }
        $createtime = time();
        $message = $this->messageModel
            ->insert(['name'=>$name,'email'=>$email,'message'=>$message,'createtime'=>$createtime,'updatetime'=>$createtime]);
        if ($message==1){
            $this->success('感谢您的留言！','/index/contact');
        }
        $this->error('留言失败！','/index/contact');

    }

}

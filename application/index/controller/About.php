<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Token;

class About extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = 'common';

    public function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        return $this->view->fetch('/about-me');
    }

}

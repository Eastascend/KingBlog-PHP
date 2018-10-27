<?php

namespace app\admin\model\article;

use think\Model;

class Tag extends Model
{
    // 表名
    protected $name = 'article_tag';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    
    // 追加属性
    protected $append = [

    ];
    

    







}

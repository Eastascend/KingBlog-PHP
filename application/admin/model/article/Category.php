<?php

namespace app\admin\model\article;

use think\Model;

class Category extends Model
{
    // 表名
    protected $name = 'article_category';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = false;
    protected $updateTime = 'updatetime';
    
    // 追加属性
    protected $append = [
        'caeatetime_text'
    ];
    

    



    public function getCaeatetimeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['caeatetime']) ? $data['caeatetime'] : '');
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }

    protected function setCaeatetimeAttr($value)
    {
        return $value && !is_numeric($value) ? strtotime($value) : $value;
    }


}

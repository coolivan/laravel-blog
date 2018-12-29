<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;

class Post extends Model
{
    //不可注入的字段为空
    protected $guarded = [];


    //scope文章状态 在Illuminate\Database\Eloquent\Scope设置以下代码
//    protected static function boot(){
//        parent::boot();
//
//        static::addGlobalScope('status',function (Builder $builder){
//           $builder->whereIn('status','=',0);
//        });
//    }

    public function scopeStatus($query){
        return $query->where('status',1);
    }

}

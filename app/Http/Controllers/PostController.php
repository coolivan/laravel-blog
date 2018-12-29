<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;//常用先引入

class PostController extends Controller
{
    //首页列表
    public function index()
    {
        //$posts = Post::orderBy('created_at','desc')->get();
        $posts = Post::status()->orderBy('created_at','desc')->get();//status为post模型写的scope
        //$posts = Post::orderBy('created_at','desc')->withCount(['comments','like'])->paginate(10);//分页
        return view("default/posts/index",compact('posts'));
    }

    //文章详情
    public function show(Post $post){

        $prev_id = Post::where('id','<',$post->id)->max('id');
        $next_id = Post::where('id','>',$post->id)->min('id');

        //var_dump($prev_id);

        //统计
        $post -> click += 1;
        $post -> save();

        return view("default/posts/show",compact('post','prev_id','next_id'));
    }

}

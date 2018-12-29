<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;

class AdminController extends Controller
{

    //首页
    public function index(){
        return view('admin/index');
    }


    //文章
    public function post_index(Post $post)
    {
        //$posts = Post::orderBy('created_at','desc')->get();
        $posts = Post::orderBy('id','desc')->paginate(14);//分页
       // $post -> status = 0 ? 'check'

        return view("admin/post/index",compact('posts'));
    }

    public function post_create(){

        return view('admin/post/create');
    }

    public function post_store(){
        $this -> validate(request(),[//验证
            'title' => 'required|string',
            'content' => 'required|string'
        ]);

        Post::create(request(['title','content']));

        return redirect('/admin/posts/');
    }
    //编辑文章
    public function post_edit(Post $post){
        return view("/admin/post/edit",compact('post'));
    }

    //更新文章
    public function post_update(Post $post){
        //验证
        $this -> validate(request(),[
            'title' => 'required|string',
            'content' => 'required|string'
        ]);

        $post -> title = request('title');
        $post -> content = request('content');

        $post -> save();

        return redirect("/admin/posts");
    }


    public function post_status(Post $post){

        $this->validate(request(),[
           'status'=>'required|in:0,1'
        ]);

        $post -> status = request('status');
        $post -> save();
        //return redirect('/admin/posts/');
    }

    public function post_delete(Post $post){
        $post->delete();
        return redirect('/admin/posts/');
    }


    //上传图片
    public function uploadfile(Request $request){

        $url_path = 'uploads/'.date('y-m-d').'/';
        $pic = $request -> file('pic');

        //$fileName=date('ymdhis').rand(10000, 99999).'.'.$pic->getClientOriginalExtension();
        $fileName=date('his').rand(10000, 99999).'.'.$pic->getClientOriginalExtension();
        $pic->move($url_path, $fileName);

        return response()->json(["errno" => 0,'data' => ['/'.$url_path.$fileName]]);
    }






}


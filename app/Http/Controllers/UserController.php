<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{

//    //注册
//    public function toRegister()
//    {
//        return view("admin/user/register");
//    }
//
//    public function doRegister()
//    {
//        //验证
//        $this -> validate(request(),[
//            'name' => 'required|min:3|unique:users,name',
//            'email' => 'required|unique:users,email|email',
//            'password' => 'required|min:5|max:10|confirmed'
//        ]);
//
//        //逻辑
//        $name = request('name');
//        $email = request('email');
//        $password = bcrypt(request('password'));//密文
//
//        $user = User::create(compact('name','email','password'));
//
//        //渲染
//        return redirect('/admin/user/login');
//    }



    //登录
    public function toLogin()    {

        return view("admin/user/login");
    }


    public function doLogin()
    {
        //验证
        $this -> validate(request(),[
            'email' => 'required|email',
            'password' => 'required|min:5|max:10',
            'remember' => 'integer'
        ]);
        //逻辑
        $user = request(['email','password']);
        $remember = boolval(request('remember'));

        //成功
        if(\Auth::attempt($user,$remember)){
            return redirect('/admin');
        }

        //else渲染
        return \Redirect::back()->withErrors('邮件不存在或密码错误');
    }

    public function logout()
    {
        \Auth::logout();
        return redirect('/admin/login');
    }


    //管理员列表
    public function index(){
          $users = User::get();
//        $users = User::paginate(1);

         return view('/admin/user/index',compact('users','aa'));
    }
    //管理员创建
    public function create(){
        return view('/admin/user/create');
    }
    //保存操作
    public function store(){
        //验证
        $this -> validate(request(),[
            'name' => 'required|min:3|unique:users,name',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6'
        ]);

        //逻辑
        $name = request('name');
        $email = request('email');
        $password = bcrypt(request('password'));//密文

        User::create(compact('name','email','password'));

        return redirect('/admin/users/');
    }


    public function edit(User $user){
        return view('/admin/user/edit',compact('user'));
    }

    public function update(User $user){
        //验证
        $this -> validate(request(),[
            'name' => 'required|min:3|unique:users,name',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6'
        ]);

        //逻辑
        $user -> name = request('name');
        $user -> email = request('email');
        $user -> password = bcrypt(request('password'));//密文

        $user -> save();

        return redirect('/admin/users/');
    }


    //删除用户
    public function delete(User $user){
         $user->delete();
        return redirect("/admin/users");
    }



}

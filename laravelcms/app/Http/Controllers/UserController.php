<?php

namespace App\Http\Controllers;


use Validator;
use App\Http\Controllers\Controller;
use DB;
use App\Models\User;
use Illuminate\Http\Request;
use Log;
use Event;
use App\Events\SomeEvent;
use Cms;

class UserController extends Controller
{
	//注册
	public function getRegister() {
		$db = new User;
		
		//$res = $db->getAll();
		return view('register');
	}
	
	//用户注册
	public function postRegister(Request $user) {
		if (!$user->name) {
			return "用户名不能为空";
		} else if (!$user->psw) {
			return "密码不能为空";
		} else if (!$user->email) {
			return "邮箱不能为空！";
		}
		$db = new User;
		$res = $db->userAdd($user);
		if (true === $res) {
			return "<script>alert('注册成功，跳转至登录页面');</script>";
		} else {
			return "something happend";
		}
	}
	//登录
	public function getIndex(){
		
		return view('login');
	}
	
	
	
	public function postIndex(Request $a) {
		$data['name'] = $a->text;
		$data['status'] = 1;
		$data['create_time'] = time()+28800;
		Log::info($data);
		$db = new Todo;
		$res = $db::insertGetId($data);
		event(new SomeEvent());

		return redirect('User/index');
	}
	
	public function getDel($id) {
		$db = new Todo;
		$res = $db::destroy($id);
		 
		return redirect('User/index');
	}
	
	public function getUpdate($id) {
		$db = new Todo;
		$db->where("id", "=", $id)->update([
			'status'=> 0
		]);

		Cms::send("hellllllllllllllllllllll");
		return redirect('User/index');
	}
    /**
     * 显示指定用户的个人信息
     * 
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {	
        //return view('greeting', ['name' => 'James']);
		//$users = DB::select('select * from todos')->toarray();
		//var_dump($users);
		$db = new Todo;
		$texts = $db::all()->toArray();
		//var_dump($texts);
		return view('greeting', ['texts' => $texts]);
    }
    public function data()
    {
		return 123;
    }

}

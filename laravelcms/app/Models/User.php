<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table = 'cms_user';
	public function getAll() 
	{
		$res = self::all();
		//return $res::items;
		return $res;
	}
	
	//添加用户
	public function userAdd($user) 
	{
		$dateFormat = Carbon::now('PRC');
		$this->name = $user->name;
		$this->psw = md5($user->psw);
		$this->email = $user->email;
		//$this->created_ip = getenv('HTTP_CLIENT_IP');
		//$this->login_time = (string)$dataFormat; 
		$res = $this->save();
		return $res;
	}
	
	public function userFind() 
	{
		//$res = self::where('name','=','小明', 'psw', '=', '')->get();
		return $res;
	}
}

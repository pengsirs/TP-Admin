<?php
namespace app\admin\model;

use think\Model;
class User extends Model
{
    public function get_user($username,$password){
        $find = User::where('username','=',$username)
        ->where('password','=',$password)
        ->find();
        return $find;
    }
    public function get_user_me($id){
        //获取当前用户信息
        $find = User::find($id);
        return $find;
    }
    //注册账号
    public function zhuce($username,$password){
        $data = [
            'username' => $username,
            'password' => $password,
            'identity' => 'user',
            'status' => '1',
        ];
        $find = User::create($data);
        return $find;
    }
    public function up_user_me($data){
        //修改用户信息
        if($data['password'] == ''){
        $id=$data['id'];
        $me = User::find($id);
        $me->title = $data['title'];
        $me->username = $data['username'];
        $me->sex = $data['sex'];
        $me->age = $data['age'];
        $me->headurl = $data['headurl'];
        $me->save();
        }else{
        $id=$data['id'];
        $me = User::find($id);
        $me->title = $data['title'];
        $me->username = $data['username'];
        $me->password = md5($data['password']);
        $me->sex = $data['sex'];
        $me->age = $data['age'];
        $me->headurl = $data['headurl'];
        $me->save();
        }
        return $me;
    }
}

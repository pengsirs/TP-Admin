<?php

namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use app\admin\model\User;

class useri extends BaseController
{
    public function index()
    {
        // 获取用户信息
        $this->_user = $_COOKIE['user'];
        $this->_user = json_decode($this->_user,true);
        $db = new User();
        $me = $db->get_user_me($this->_user['id']);
        $identity = $this->_user['identity'];

        View::assign([
            'httitle' => "后台管理-个人中心",
            'data' => $me,
            'identity' => $identity,
        ]);
        return View::fetch('user');
    }
    //修改用户信息
    public function me(){
        $data = $_POST;
        $db = new User();
        $set = $db->up_user_me($data);
        if($set&&$data['password'] == ''){
            echo "<script>alert('修改成功！');window.location.href='/admin.php/useri/index';</script>";
        }
        if($data['password'] != ''){
            echo "<script>alert('修改成功！请重新登录！');window.location.href='/admin.php/login/logout';</script>";
        }
    }

    public function fileup()
    {
        //获取表单上传文件
        $files = request()->file('file');
        if (empty($files)) {
            return json_decode(0, '请选择上传文件', 1);
        }
        validate(['iamge' => [
            'fileSize' => 2097152,
            'fileExt' => 'jpg,png,gif,jpeg',
            'fileMime' => 'image/jpeg,image/png,image/gif',
            ]])->check((array)$files);
        $savename = [];
        if (is_array($files)) {
            foreach ($files as $file) {
                $savename[] = \think\facade\Filesystem::disk('public')->putFile('topic', $file, 'md5');
            }
        } else {
            $savename[] = \think\facade\Filesystem::disk('public')->putFile('topic', $files, 'md5');
        }
        //文件目录/storage/topic/
        $path = env('app.host', 'http://tp.com').'/storage'.'/'.$savename[0];
        return $path;
    }
}

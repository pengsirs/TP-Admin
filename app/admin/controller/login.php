<?php

namespace app\admin\controller;

use think\facade\View;
use app\admin\model\User;

class login
{
    public function index()
    {
        //验证是否登录过
        if (!empty($_COOKIE['user'])) {
            return redirect("/admin.php/index/index");
        }
        return View::fetch('login');
    }
    //登录验证
    public function tologin()
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        if ($username == '' || $password == '') {
            echo "<script>alert('用户名或密码不能为空！');history.go(-1);</script>";
            exit;
        }
        $db = new User();
        $data = $db->get_user($username, $password);
        if ($data['username'] != null) {
            setcookie('user', json_encode($data), time() + 3600, '/');
            return redirect("/admin.php/index/index");
        } else {
            echo "<script>alert('用户名或密码错误！');history.go(-1);</script>";
        }
    }
    //注册账号
    public function zhuce()
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        if ($username == '' || $password == '') {
            echo "<script>alert('用户名或密码不能为空！');history.go(-1);</script>";
            exit;
        }
        $db = new User();
        $data = $db->zhuce($username, $password);
        if($data['id'] != null){
            echo "<script>alert('注册成功！');window.location.href='/admin.php/login';</script>";
        }
    }
    //退出登录
    public function logout()
    {
        setcookie('user', '', time() - 3600, '/');
        return redirect("/admin.php/login");
    }
}

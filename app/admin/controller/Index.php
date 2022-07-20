<?php

namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use app\admin\model\Setting;
use think\facade\Cookie;

class Index extends BaseController
{
    public function index()
    {
        // 获取用户信息
        $this->_user = $_COOKIE['user'];
        $this->_user = json_decode($this->_user, true);
        $identity = $this->_user['identity'];
        // 获取站点设置
        $db = new Setting();
        $set = $db->get_setting();
        foreach ($set as $key => $value) {
            View::assign([
                $set[$key]['key'] => $value['value']
            ]);
        }
        View::assign([
            'httitle' => "后台首页",
            'identity' => $identity,
        ]);
        return View::fetch('index');
        //助手函数调用 不需要use think\facade\View;
        // return view('index',[
        //     'id' => '1',
        //     'title' => 'thinkphp',
        // ]);
        // // 数据库操作，原生
        // $data = Db::query("select * from tp_user");
        // //循环输出数据
        // foreach($data as $key=>$value){
        //     echo $value['id'].' '.$value['username'].' '.$value['password'].'<br>';
        // }
        // // 插入数据，thinkphp
        // $adddata = [
        //     'id' => '',
        //     'username' => 'admin',
        //     'password' => '123456',
        //     'sex' => 1,
        //     'age' => 18,
        //     'headurl' => '111'
        // ];
        // $inset = Db::name('user')->insert($adddata);
        // dump($inset);
    }
}

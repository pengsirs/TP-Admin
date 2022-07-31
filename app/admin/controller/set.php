<?php

namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use app\admin\model\Setting;
use think\facade\Cookie;
use app\admin\model\User;
use think\facade\Session;

class set extends BaseController
{
    public function index()
    {
        // 获取用户信息
        $this->_user = Session::get('user');
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
            'httitle' => "后台管理-系统设置",
            'identity' => $identity,
        ]);
        return View::fetch('index');
    }
    public function update()
    {
        $data = $_POST;
        $db = new Setting();
        $set = $db->up_data($data);
        if ($set) {
            echo "<script>alert('修改成功！');window.location.href='/admin.php/set';</script>";
        }
        return View::fetch('index');
    }
}

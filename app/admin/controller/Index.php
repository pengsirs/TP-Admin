<?php

namespace app\admin\controller;

use app\BaseController;
use think\facade\View;
use app\admin\model\Setting;
use think\facade\Cookie;
use think\facade\Session;

class Index extends BaseController
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
            'httitle' => "后台首页",
            'identity' => $identity,
        ]);
        return View::fetch('index');
    }
}

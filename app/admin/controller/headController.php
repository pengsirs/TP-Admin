<?php

namespace app\admin\controller;

use app\BaseController;
use app\admin\model\User;
use think\facade\View;

class headController extends BaseController
{
    public function index($id)
    {
        // 获取用户信息
        $db = new User();
        $me = $db->get_user_me($id);
       //更新设置
       View::assign([
        'admin' => $me,
    ]);
    }
}

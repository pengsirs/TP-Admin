<?php
//我们在user模型下，也可以查询其他表的数据。
//只不过，自动对应user表，可以更方便
namespace app\index\model;
//使用model，它是tp框架自带的
use think\Model;
class User extends Model
{
    public function get_user(){
        $find = User::select();
        return $find;
    }
}
?>
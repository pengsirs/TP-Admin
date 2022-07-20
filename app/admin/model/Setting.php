<?php 
namespace app\admin\model;
use think\Model;
class Setting extends Model
{
    public function get_setting(){
        $find = Setting::select();
        return $find;
    }
    public function up_data($data){
        //批量修改
        $setting = new Setting;
        $list = [
            ['id'=>1,'key'=>'version','value'=>$data['version']],
            ['id'=>2,'key'=>'title','value'=>$data['title']],
            ['id'=>3,'key'=>'keywords','value'=>$data['keywords']],
            ['id'=>4,'key'=>'description','value'=>$data['description']],
            ['id'=>5,'key'=>'qq','value'=>$data['qq']],
            ['id'=>6,'key'=>'email','value'=>$data['email']],
        ];
        $save = $setting->saveAll($list);
        return $save;
    }
}
?>
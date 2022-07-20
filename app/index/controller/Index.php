<?php
namespace app\index\controller;
use think\facade\Db;
use think\facade\Config;
use think\facade\View;
use app\index\model\User;
use DateTime;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth;
use think\facade\Request;
class Index
{
    public function index(){
        // 数据库操作
        // $data = Db::query("select * from ".env('DATABASE.prefix')."user");
        $db = new User();
        $data = $db->get_user();
        dump($data);
        //模板赋值
        View::assign([
            'title' => '首页',
            'data' => $data,
        ]);
        return View::fetch('index');
    }
    // 七牛云上传
    public function img(Request $request){
        $file = request() -> file('file'); //接收前端数据
        $filePath = $file-> getRealPath();//要上传图片的本地路径
    
        $ext = (md5(time()));//上传到七牛后保存的文件名
        $accessKey = $_POST['ak'];
        $secretKey = $_POST['sk'];
        $auth = new Auth($accessKey, $secretKey);//构建鉴权对象
    
        // $bucket = "hkiii";//要上传的空间
        $bucket = $_POST['kj'];
        //初始化UploadManager对象并进行文件的上传
        $uploadMgr = new UploadManager();          
        $token = $auth->uploadToken($bucket); //生成上传Token
        list($ret, $error) = $uploadMgr->putFile($token, $ext, $filePath);
        if ($ret) {
            return json(['code' => 200, 'msg' => '上传成功', 'data' => 'https://cdn.hkiii.cn/'.$ret['key']]);
        }
        }
    
    
}

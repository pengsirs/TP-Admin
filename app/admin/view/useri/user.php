{//包含头部文件}
{include file="public/header";}
<div style="height:30px;"></div>
<form class="layui-form" action="/admin.php/useri/me" method="POST">
  <div class="layui-form-item">
    <label class="layui-form-label">编号</label>
    <div class="layui-input-block">
      <input type="text" value="{$data['id']}" name="id" readonly autocomplete="off" class="layui-input" style="background-color: #eee;">
    </div>
  </div>
  <label class="layui-form-label">头像</label><br>
  <div class="layui-input-block">
    <div class="layui-upload" style="display: flex;align-items: center;">
      <div class="layui-upload-list">
        <img class="layui-upload-img" src="{$data['headurl']}" id="demo1">
        <p id="demoText"></p>
      </div>
      <div style="width: 95px;">
        <div class="layui-progress layui-progress-small" lay-showpercent="yes" lay-filter="demo">
          <div class="layui-progress-bar" lay-percent=""></div>
        </div>
        <button style="margin-top: 10px;" name="image" type="button" class="layui-btn" id="test1"><i class="layui-icon"></i>上传图片</button>
      </div>
    </div>
  </div>
  <div class="layui-form-item" style="margin-top: 10px;">
    <div class="layui-input-block">
      <input type="text" id="headurl" value="{$data['headurl']}" name="headurl" required lay-verify="required" placeholder="请输入或上传" autocomplete="off" class="layui-input">
    </div>
  </div>
  <a name="list-progress"> </a>
  <div class="layui-form-item">
    <label class="layui-form-label">昵称</label>
    <div class="layui-input-block">
      <input type="text" value="{$data['title']}" name="title" required lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">性别</label>
    <div class="layui-input-block">
      <input type="radio" name="sex" value="1" title="男" checked>
      <input type="radio" name="sex" value="0" title="女">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">年龄</label>
    <div class="layui-input-block">
      <input type="text" value="{$data['age']}" name="age" required lay-verify="required" placeholder="请输入年龄" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">账号</label>
    <div class="layui-input-block">
      <input type="text" value="{$data['username']}" name="username" required lay-verify="required" placeholder="请输入账号" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">密码</label>
    <div class="layui-input-block">
      <input type="password" value="" name="password" placeholder="留空表示不修改密码" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
    </div>
  </div>
</form>

{//包含底部文件}
{include file="public/footer";}
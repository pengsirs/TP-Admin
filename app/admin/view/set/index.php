{//包含头部文件}
{include file="public/header";}
{if $identity=='admin'}
<div style="height:30px;"></div>
<form class="layui-form" action="/admin.php/set/update" method="POST">
  <div class="layui-form-item">
    <label class="layui-form-label">站点名称</label>
    <div class="layui-input-block">
      <input type="text" value="{$title}" name="title" required  lay-verify="required" placeholder="请输入标题" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">站点描述</label>
    <div class="layui-input-block">
      <input type="text" value="{$description}" name="description" required  lay-verify="required" placeholder="请输入站点描述" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">SEO设置</label>
    <div class="layui-input-block">
      <input type="text" value="{$keywords}" name="keywords" required  lay-verify="required" placeholder="请输入站点关键词" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">站长QQ</label>
    <div class="layui-input-block">
      <input type="text" value="{$qq}" name="qq" required  lay-verify="required" placeholder="请输入你的QQ" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">站长邮箱</label>
    <div class="layui-input-block">
      <input type="text" value="{$email}" name="email" required  lay-verify="required" placeholder="请输入你的邮箱" autocomplete="off" class="layui-input">
    </div>
  </div>
  <div class="layui-form-item">
    <label class="layui-form-label">系统版本</label>
    <div class="layui-input-block">
      <input type="text" value="{$version}" name="version" required  lay-verify="required" placeholder="系统版本" autocomplete="off" class="layui-input">
    </div>
  </div>
  <!-- <div class="layui-form-item">
    <label class="layui-form-label">注册</label>
    <div class="layui-input-block">
      <input type="checkbox" name="" lay-skin="switch">
    </div>
  </div> -->
  <div class="layui-form-item">
    <div class="layui-input-block">
      <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
    </div>
  </div>
</form>
{/if}
{if $identity=='user'}
<div>无权限</div>
{/if}
{//包含底部文件}
{include file="public/footer";}
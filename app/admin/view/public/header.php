
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/static/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin.css">
    <script src="/static/js/jquery.min.js"></script>
    <title>{$httitle}</title>
</head>
<body>
<div class="layui-header">
<ul class="layui-nav layui-nav-top">
  <li class="layui-nav-item">
    <i class="layui-icon layui-icon-spread-left toggle"></i>
  </li>
  <li class="layui-nav-item">
    <a href="/admin.php">后台首页</a>
  </li>
  <li class="layui-nav-item">
    <a href="/admin.php/miniapp">小程序配置</a>
  </li>
  <ul class="layui-nav layui-layout-right">
  <li class="layui-nav-item">
    <a><img src="{$admin['headurl']}" class="layui-nav-img">{$admin["title"]}</a>
    <dl class="layui-nav-child">
      <dd><a href="/admin.php/useri">个人设置</a></dd>
      {if $identity=='admin'}
      <dd><a href="/admin.php/set">系统设置</a></dd>
      {/if}
      <dd><a href="/admin.php/login/logout">退出登录</a></dd>
    </dl>
  </li>
  </ul>
</ul>
<div class="layui-side layui-hide layui-bg-black">
  <div style="height: 60px;"></div>
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree" lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;">menu group 1</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">menu 1</a></dd>
            <dd><a href="javascript:;">menu 2</a></dd>
            <dd><a href="javascript:;">menu 3</a></dd>
            <dd><a href="">the links</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">menu group 2</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">list 1</a></dd>
            <dd><a href="javascript:;">list 2</a></dd>
            <dd><a href="">超链接</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item"><a href="javascript:;">click menu item</a></li>
        <li class="layui-nav-item"><a href="">the links</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="content">
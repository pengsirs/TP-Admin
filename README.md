大彭Sir后台管理系统
===============

> 运行环境要求PHP7.2+，兼容PHP8.1

[官方应用服务市场](https://market.topthink.com) | [`ThinkAPI`——官方统一API服务](https://docs.topthink.com/think-api)

## 程序介绍

之前开发EmlogApp的时候用ThinkPHP6.0写了一个后台管理，把部分功能搬过来了。
目前只有注册登录和系统以及个人设置，需要的朋友可以拿去玩玩

## 目录介绍

* /app/admin/controller（后台控制器）
* /app/admin/model（后台数据库模型）
* /app/admin/view（后台视图）
* /app/admin/view/public（后台前台Header&Footer）
* /app/index/controller（前台控制器）
* /app/index/model（前台数据库模型）
* /app/index/view（前台视图）
* /app/index/view/public（前台Header&Footer）

## 安装

* 网站目录：/public
* 后台路径：域名/admin.php
* 导入数据库（tp.sql）
* .env配置
* 
    1. app_host（域名）
    2. DEFAULT_TIMEZONE（时区）
    3. HOSTNAME（数据库地址）
    4. DATABASE（数据库名）
    5. USERNAME（数据库用户名）
    6. PASSWORD（数据库密码）
    7. prefix（数据表前缀）

## 文档

[ThinkPHP完全开发手册](https://www.kancloud.cn/manual/thinkphp6_0/content)

## 参与开发
* 大彭Sir

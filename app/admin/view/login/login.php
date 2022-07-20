<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台管理-登录</title>
    <script src="/static/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/static/css/login.css">
</head>
<body>
    <img src="/static/img/wave.png" class="wave">
    <div class="container">
        <div class="img">
            <img src="/static/img/bg.svg" alt="">
        </div>
        <div class="login-content">
            <form action="/admin.php/login/tologin" method="POST">
                <img src="/static/img/avatar.svg" alt="">
                <h2 class="title">欢迎</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>用户名</h5>
                        <input name="username" type="text" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>密码</h5>
                        <input name="password" type="password" class="input">
                    </div>
                </div>
                <div style="display: flex;justify-content: space-between;">
                <a class="zhuce" href="#">注册账号?</a>
                <a href="#">忘记密码?</a></div>
                <input type="submit" class="btn" value="登录">
            </form>
        </div>
        <div class="zhuce-content">
            <form action="/admin.php/login/zhuce" method="POST">
                <img src="/static/img/avatar.svg" alt="">
                <h2 class="title">注册</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>用户名</h5>
                        <input name="username" type="text" class="input">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>密码</h5>
                        <input name="password" type="password" class="input">
                    </div>
                </div>
                <div style="display: flex;justify-content: space-between;">
                <a class="closezhuce" href="#">返回登录?</a>
                <a href="#">忘记密码?</a></div>
                <input type="submit" class="btn" value="注册">
            </form>
        </div>
    </div>
    <script src="/static/js/main.js"></script>
</body>
</html>
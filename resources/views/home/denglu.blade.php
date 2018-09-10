<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>魅族官网前台登陆系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="/qiantai/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="/qiantai/images/login.js"></script>
    <link href="/qiantai/css/login2.css" rel="stylesheet" type="text/css" />
</head>

<body style="zoom: 1;">
    <div class="img1"><img src=""></div>
    <h1>魅族账号登陆</h1>
    <div class="login" style="margin-top:50px;">
        <div class="header">
            <center>
                <p style="font-size:16px">快速登录</p>
            </center>
        </div>
        @if(Session::has('success')) {{Session::get('success')}} @endif @if(Session::has('error')) {{Session::get('error')}} @endif
        <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">
            <!--登录-->
            <div class="web_login" id="web_login">
                <div class="login-box">
                    <div class="login_form">
                        <form action="/home" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post">
                            <input type="hidden" name="did" value="0" />
                            <input type="hidden" name="to" value="log" />
                            <div class="uinArea" id="uinArea">
                                <label class="input-tips" for="u">帐号：</label>
                                <div class="inputOuter" id="uArea">
                                    <input type="text" id="u" name="name" class="inputstyle" />
                                </div>
                            </div>
                            <div class="pwdArea" id="pwdArea">
                                <label class="input-tips" for="p">密码：</label>
                                <div class="inputOuter" id="pArea">
                                    <input type="password" id="p" name="password" class="inputstyle" />
                                </div>
                            </div>
                            <input name="captcha" type="text" placeholder="验证码" align="center">
                            <a onclick="javascript:re_captcha();">


            <img src="{{ URL('/captcha/1') }}"  alt="验证码" title="刷新图片" width="150" height="60" id="c2c98f0de5a04167a9e427d883690ff6" border="0" align="center">


        </a>
                            <br> {{csrf_field()}}
                            <div style="padding-left:50px;margin-top:20px;">
                                <input type="submit" value="登 录" style="width:150px;" class="button_blue" />
                            </div>
                        </form>
                        <script>
                        function re_captcha() {
                            $url = "{{ URL('/captcha') }}";
                            $url = $url + "/" + Math.random();
                            document.getElementById('captchaid').src = $url;
                        }
                        </script>
                    </div>
                </div>
            </div>
            <!--登录end-->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/amazeui.min.js"></script>
            <script src="assets/js/app.js"></script>
        </div>
    </div>
</body>

</html>
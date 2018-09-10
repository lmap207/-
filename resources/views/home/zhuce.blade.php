<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>魅族官网前台登陆系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script type="text/javascript" src="/qiantai/js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="/qiantai/img/login.js"></script>
    <link href="/qiantai/css/login2.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="img1"><img src="/qiantai/img/myface.jpg"></div>
    <h1>魅族账号登陆</h1>
    <div class="login" style="margin-top:50px;">
        <div class="header">
            <center>
                <p style="font-size:16px">快速注册</p>
            </center>
        </div>
        <!--注册-->
        <div class="qlogin" id="qlogin" style="display: block; ">
            <div class="web_login">
                <form name="form2" id="regUser" accept-charset="utf-8" action="/home/denglu" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="to" value="reg" />
                    <input type="hidden" name="did" value="0" />
                    <ul class="reg_form" id="reg-ul">
                        <div id="userCue" class="cue">快速注册请注意格式</div>
                        <li>
                            <label for="user" class="input-tips2">用户名：</label>
                            <div class="inputOuter2">
                                <input type="text" id="user" name="name" maxlength="16" class="inputstyle2" value="" />
                                <span></span>
                            </div>                           
                        </li>
                        <li>
                            <label for="passwd" class="input-tips2">密码：</label>
                            <div class="inputOuter2">
                                <input type="password" id="passwd" name="password" maxlength="16" class="inputstyle2" />
                                <span></span>
                            </div>
                        </li>
                        <li>
                            <label for="passwd2" class="input-tips2">确认密码：</label>
                            <div class="inputOuter2">
                                <input type="password" id="passwd2" name="repassword" maxlength="16" class="inputstyle2" />
                                <span></span>
                            </div>
                        </li>
                        <li>
                            <div class="inputArea">
                                <button style="margin-top:10px;margin-left:85px;" class="button_blue" value=注册"/>注册</button>
                            </div>
                        </li>
                        <div class="cl"></div>
                    </ul>
                </form>
                <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
                <script>
                var CUSER = false;                
                var CPASS = false;
                var CREPASS = false;

                //用户名
                $('input[name=name]').focus(function() {
                    //边框颜色
                    $(this).addClass('active');
                    //提示语显示
                    $(this).next().show().html('输入8~18位字母数字下划线');
                }).blur(function() {
                    //移出激活状态的class active
                    $(this).removeClass('active');
                    //正则判断
                    var v = $(this).val();
                    //声明正则
                    var reg = /^\w{8,18}$/;
                    //判断
                    if (!reg.test(v)) {
                        //边框
                        $(this).addClass('error');
                        //文字提醒
                        $(this).next().html('<span style="color:red">格式不正确</span>').show();
                        CUSER = false;
                    } else {
                        var input = $(this);
                        //发送 AJAX 请求检测用户名是否已经存在
                        // $.post('./check-user-exists.php', {username: v}, function(data){
                        // })

                        $.ajax({
                            url: '/check-user-exists.php',
                            type: 'post',
                            data: { name: v },
                            success: function(data) {
                                
                                if (data != '1') {
                                    //边框
                                    input.addClass('error');
                                    //文字提醒
                                    input.next().html('<span style="color:red">该用户名太受欢迎, 请换一个!!</span>').show();
                                    CUSER = false;
                                } else {
                                    input.removeClass('error');
                                    input.next().html('<p style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</p>').show();
                                    CUSER = true;
                                }
                            },
                            async: false
                        })
                    }
                })
               
                //密码
                $('input[name=password]').focus(function() {
                    //边框颜色
                    $(this).addClass('active');
                    //提示语显示
                    $(this).next().show().html('6~20非空白字符');
                }).blur(function() {
                    $(this).removeClass('active');
                    //获取用户的输入值
                    var v = $(this).val();
                    //正则
                    var reg = /^\S{6,20}$/;

                    if (!reg.test(v)) {
                        //边框
                        $(this).addClass('error');
                        //文字提醒
                        $(this).next().html('<span style="color:red">格式不正确</span>').show();
                        CPASS = false;
                    } else {
                        //边框
                        $(this).removeClass('error');
                        //文字提醒
                        $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
                        CPASS = true;

                    }
                })

                //确认密码
                $('input[name=repassword]').focus(function() {
                    //边框颜色
                    $(this).addClass('active');
                    //提示语显示
                    $(this).next().show().html('再次输入密码');
                }).blur(function() {
                    $(this).removeClass('active');
                    //获取用户的输入值
                    var v = $(this).val();

                    if (v != $('input[name=password]').val()) {
                        //边框
                        $(this).addClass('error');
                        //文字提醒
                        $(this).next().html('<span style="color:red">两次密码不一致</span>').show();
                        CREPASS = false;
                    } else {
                        //边框
                        $(this).removeClass('error');
                        //文字提醒
                        $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
                        CREPASS = true;

                    }
                })

                //表单的提交事件
                $('form').submit(function() {
                    //触发错误提醒
                    $('input').trigger('blur');
                    console.log(CUSER);
                    //判断输入值是否都正确
                    if (CUSER && CPASS && CREPASS) {
                        return true;
                    } else {
                        return false;
                    }
                });
                </script>
                
            </div>
        </div>
        <!--注册end-->
    </div>
</body>

</html>
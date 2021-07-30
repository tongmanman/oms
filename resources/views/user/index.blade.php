<html>

<head>
    <title>登陆</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="Write an awesome description for your new site here. You can edit this line in _config.yml. It will appear in your document head meta (for Google search results) and in your feed.xml site description.
">
    <link rel="stylesheet" href="{{asset('user/lib/weui.min.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/jquery-weui.css')}}">
    <link rel="stylesheet" href="{{asset('user/css/style.css')}}">
</head>

<body ontouchstart style="background:#323542;">
    <!--主体-->
    <div class="login-box" style="margin-top: 30%;">
        <div class="lg-title">自助下单系统</div>
        <div class="login-form">
            <form action="#">
                <div class="login-user-name common-div">
                    <span class="eamil-icon common-icon">
                        <img src="{{asset('user/images/eamil.png')}}" />
                    </span>
                    <input type="tel" name="username" value="" placeholder="手机" class="weui-input" />
                </div>
                <div class="login-user-pasw common-div">
                    <span class="pasw-icon common-icon">
                        <img src="{{asset('user/images/password.png')}}" />
                    </span>
                    <input type="password" name="password" value="" placeholder="密码" />
                </div>
                <a href="javascript:;" class="login-btn common-div">登陆</a>
            </form>
        </div>
        <div class="forgets">
            <a href="psd_chage.html">忘记密码？</a>
            <a href="regist.html">免费注册</a>
        </div>
    </div>
    <script src="{{asset('user/lib/jquery-2.1.4.js')}}"></script>
    <script src="{{asset('user/lib/fastclick.js')}}"></script>
    <script src="{{asset('user/js/jquery.Spinner.js')}}"></script>
    <script>
        $(function() {
            FastClick.attach(document.body);
        });
    </script>

    <script src="{{asset('user/js/jquery-weui.js')}}"></script>

</body>

</html>
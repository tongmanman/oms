<html>

<head>
    @include('header')
</head>

<body ontouchstart style="background:#323542;">
    <!--主体-->
    <div class="login-box" style="margin-top: 20%;">
        <div class="lg-title">登录</div>
        <div class="login-form">
            <form action="#">
                <div class="login-user-name common-div">
                    <span class="eamil-icon common-icon">
                        <img src="{{asset('images/eamil.png')}}" />
                    </span>
                    <input type="tel" id="mobile" value="" placeholder="手机" class="weui-input" maxlength="11" />
                </div>
                <div class="login-user-pasw common-div">
                    <span class="pasw-icon common-icon">
                        <img src="{{asset('images/password.png')}}" />
                    </span>
                    <input type="password" id="password" value="" placeholder="密码" />
                </div>
                <a href="javascript:;" class="login-btn common-div" id="submitForm">登陆</a>
            </form>
        </div>
        <div class="forgets">
            <!-- <a href="psd_chage.html">忘记密码？</a> -->
            <a href="{{url('signup')}}">注册</a>
        </div>
    </div>
    <script src="{{asset('lib/jquery-2.1.4.js')}}"></script>
    <script src="{{asset('lib/fastclick.js')}}"></script>
    <script src="{{asset('js/jquery.Spinner.js')}}"></script>
    <script src="{{asset('js/jquery-weui.js')}}"></script>
    <script>
        $(function() {
            FastClick.attach(document.body);
        });
        $("#submitForm").click(function() {
            $.ajax({
                url: "/signin",
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    mobile: $('#mobile').val(),
                    password: $('#password').val()
                },
                success: function(data) {
                    if (String(data.code).startsWith('2')) {
                        location.href = "{{url('product_list')}}";
                    } else {
                        alert(data.msg);
                    }
                }
            });
        });
    </script>
</body>

</html>
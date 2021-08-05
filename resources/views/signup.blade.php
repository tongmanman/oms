<html>

<head>
    @include('header')
</head>

<body ontouchstart style="background:#323542;">
    <!--主体-->
    <div class="login-box" style="margin-top: 20%;">
        <div class="lg-title">注册</div>
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
                <div class="login-user-pasw common-div">
                    <span class="pasw-icon common-icon">
                        <img src="{{asset('images/password.png')}}" />
                    </span>
                    <input type="password" id="password2" value="" placeholder="确认密码" />
                </div>
                <a href="javascript:;" class="login-btn common-div" id="submitForm">注册</a>
            </form>
        </div>
        <div class="forgets">
            <!-- <a href="psd_chage.html">忘记密码？</a> -->
            <a href="{{url('index')}}">登录</a>
        </div>
    </div>
    <script src="{{asset('lib/jquery-2.1.4.js')}}"></script>
    <script src="{{asset('lib/fastclick.js')}}"></script>
    <script src="{{asset('js/jquery.Spinner.js')}}"></script>
    <script src="{{asset('js/jquery-weui.js')}}"></script>
    <script>
        $("#submitForm").click(function() {
            if ($('#password').val() != $('#password2').val()) {
                alert('两次密码输入不同');
                return;
            }
            $.ajax({
                url: "/signup",
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
                        //      location.href = "{{url('product_list')}}";
                    } else {
                        alert(data.msg);
                    }
                }
            });
        });
    </script>
</body>

</html>
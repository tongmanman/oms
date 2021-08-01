<html>

<head>
    @include('user.index_header')
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
                    <input type="tel" id="MOBILE" value="" placeholder="手机" class="weui-input" maxlength="11" />
                </div>
                <div class="login-user-pasw common-div">
                    <span class="pasw-icon common-icon">
                        <img src="{{asset('user/images/password.png')}}" />
                    </span>
                    <input type="password" id="PASSWORD" value="" placeholder="密码" />
                </div>
                <a href="javascript:;" class="login-btn common-div" id="submitForm">登陆</a>
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
        $("#submitForm").click(function() {
            $.ajax({
                url: "/signin",
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    MOBILE: $('#MOBILE').val(),
                    PASSWORD: $('#PASSWORD').val()
                },
                success: function(data) {
                    if (String(data.CODE).startsWith('2')) {
                        location.href = "{{url('users/product_list')}}";
                    } else {
                        alert(data.MESSAGE);
                        // $('#modal_content').text(data.MESSAGE);
                        // $("#modal-demo").modal("show")
                    }
                }
            });
        });
    </script>

    <script src="{{asset('user/js/jquery-weui.js')}}"></script>

</body>

</html>
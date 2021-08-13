<!DOCTYPE html>
<html>

<head>
    @include('header')
</head>

<body ontouchstart>
    <header class="wy-header">
        <div class="wy-header-title">我的</div>
    </header>
    <!--主体-->
    <div class='weui-content'>
        <div class="weui-panel">
            <div class="weui-panel__bd">
                <div class="weui-media-box weui-media-box_small-appmsg">
                    <div class="weui-cells">
                        <a class="weui-cell weui-cell_access" href="{{url('order')}}">
                            <div class="weui-cell__hd"><img src="images/center-icon-jyjl.png" alt="" class="center-list-icon"></div>
                            <div class="weui-cell__bd weui-cell_primary">
                                <p class="center-list-txt">我的订单</p>
                            </div>
                            <span class="weui-cell__ft"></span>
                        </a>
                        <!-- <a class="weui-cell weui-cell_access" href="password.html">
                            <div class="weui-cell__hd"><img src="images/center-icon-dlmm.png" alt="" class="center-list-icon"></div>
                            <div class="weui-cell__bd weui-cell_primary">
                                <p class="center-list-txt">密码修改</p>
                            </div>
                            <span class="weui-cell__ft"></span>
                        </a> -->
                        <a class="weui-cell weui-cell_access" href="javascript:void(0)" onclick="Signout()">
                            <div class="weui-cell__hd"><img src="images/center-icon-out.png" alt="" class="center-list-icon"></div>
                            <div class="weui-cell__bd weui-cell_primary">
                                <p class="center-list-txt">退出账号</p>
                            </div>
                            <span class="weui-cell__ft"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('menu')
    @include('js')
    <script>
        $('#my').addClass('weui-bar__item--on');

        function Signout() {
            $.ajax({
                url: "/signout",
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(data) {
                    if (String(data.code).startsWith('2')) {
                        location.href = "/";
                    } else {
                        $.toast(data.msg);
                    }
                }
            });
        }
    </script>
</body>

</html>
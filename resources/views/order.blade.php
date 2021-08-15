<!DOCTYPE html>
<html>

<head>
    @include('header')
</head>

<body ontouchstart>
    <header class="wy-header" style="position:fixed; top:0; left:0; right:0; z-index:200;">
        <div class="wy-header-icon-back"><a href="{{url('my')}}"><span></span></a></div>
        <div class="wy-header-title">我的订单</div>
    </header>
    <div class='weui-content'>
        <div class="weui-tab">
            <div class="weui-navbar" style="position:fixed; top:44px; left:0; right:0; height:44px; background:#fff;">
                <a class="weui-navbar__item proinfo-tab-tit font-14 weui-bar__item--on" onclick="ChangeStatus(1)" id="btn1">待确认</a>
                <a class="weui-navbar__item proinfo-tab-tit font-14" onclick="ChangeStatus(2)" id="btn2">待付款</a>
                <a class="weui-navbar__item proinfo-tab-tit font-14" onclick="ChangeStatus(3)" id="btn3">已付款</a>
                <a class="weui-navbar__item proinfo-tab-tit font-14" onclick="ChangeStatus(4)" id="btn4">已发货</a>
            </div>
            <div class="weui-tab__bd proinfo-tab-con" style="padding-top:87px;">
                <div id="orderList" class="weui-tab__bd-item weui-tab__bd-item--active">
                </div>

            </div>
        </div>
    </div>

    @include('menu')
    @include('js')
    <script>
        $(document).on("click", ".ords-btn-com", function() {
            var id = $(this).attr("id");
            $.confirm("您确认已付款吗?", function() {
                $.ajax({
                    url: "/change_order_status_to_paid",
                    type: "post",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        id: id
                    },
                    success: function(data) {
                        $.toast("操作成功", "text");
                        location.href = "/order";
                    }
                });



            }, function() {
                //取消操作
            });
        });
        ChangeStatus(1);

        function ChangeStatus(status) {

            $("#btn" + status).addClass("weui-bar__item--on").siblings("a").removeClass("weui-bar__item--on");

            $.ajax({
                url: "/get_orders_by_status",
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    status: status
                },
                success: function(data) {
                    var str = new String();
                    $.each(data, function(index) {
                        str += '<div class="weui-panel weui-panel_access">';
                        str += '<div class="weui-panel__hd"><span>单号：' + data[index].order_num + '</span></div>';
                        str += '<div class="weui-media-box__bd  pd-10">';
                        $.each(data[index].detail, function(i) {
                            str += '<div class="weui-media-box_appmsg ord-pro-list">';
                            str += '<div class="weui-media-box__hd"><a href="/product_detail/' + data[index].detail[i].p_id + '"><img class="weui-media-box__thumb" src="' + data[index].detail[i].sku_image + '" alt=""></a></div>';
                            str += '<div class="weui-media-box__bd">';
                            str += '<h1 class="weui-media-box__desc"><a href="/product_detail/' + data[index].detail[i].p_id + '" class="ord-pro-link">' + data[index].detail[i].p_name + '</a></h1>';
                            str += '<p class="weui-media-box__desc">规格：<span>' + data[index].detail[i].sku_name + '</span></p>';
                            str += '<div class="clear mg-t-10">';
                            str += '<div class="wy-pro-pri fl">¥<em class="num font-15">' + data[index].detail[i].price + '</em></div>';
                            str += '<div class="pro-amount fr"><span class="font-13">数量×<em class="name">' + data[index].detail[i].qty + '</em></span></div></div></div></div>';
                        })
                        str += '</div>';
                        str += '<div class="ord-statistics">';
                        str += '<span>共<em class="num">' + data[index].count + '</em>件商品，</span>';
                        str += '<span class="wy-pro-pri">总金额：¥<em class="num font-15">' + data[index].price + '</em></span>';
                        str += '</div>';
                        if (status == 2) {
                            str += '<div class="weui-panel__ft"><div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox"><a href="javascript:void(0)" class="ords-btn-com" id=' + data[index].order_id + '>我已付款</a></div></div>';
                        }
                        str += '</div>';
                    });
                    $('#orderList').html(str);
                }
            });
        }
    </script>
</body>

</html>
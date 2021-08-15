<!DOCTYPE html>
<html>

<head>
    @include('header')
</head>

<body ontouchstart>
    <!--主体-->
    <header class="wy-header">
        <div class="wy-header-title">购物车</div>
    </header>
    <div class="weui-content" id="cart_item">
    </div>
    <div class="wy-media-box weui-media-box_text">
        <div class="mg10-0"><a href="javascript:void(0)" class="weui-btn weui-btn_primary" onclick="submitForm()">提交</a></div>
    </div>
    @include('menu')
    @include('js')
    <script type="text/javascript" src="{{url('js/jquery.Spinner.js')}}"></script>
    <script>
        $('#cart').addClass('weui-bar__item--on');

        $.ajax({
            url: "/get_cart_item",
            type: "post",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function(data) {
                var str = new String();
                $.each(data, function(index) {
                    str += '<div class="weui-panel weui-panel_access">';
                    str += '<div class="weui-panel__hd"><span>' + data[index].c_name + '</span><a href="javascript:;" class="wy-dele" id="' + data[index].s_id + '"></a></div>';
                    str += '<div class="weui-panel__bd">';
                    str += '<div class="weui-media-box_appmsg pd-10">';
                    str += '<div class="weui-media-box__hd check-w weui-cells_checkbox">';
                    str += '<label class="weui-check__label" for="cart-pto' + index + 1 + '">';
                    str += '<div class="weui-cell__hd cat-check">';
                    str += '<input type="checkbox" class="weui-check" name="cartpro" id="cart-pto' + index + 1 + '" value="' + data[index].s_id + '"><i class="weui-icon-checked"></i></div>';
                    str += '</label></div>';
                    str += '<div class="weui-media-box__hd">';
                    str += '<a href="pro_info.html"><img class="weui-media-box__thumb" src="' + data[index].p_image + '" alt=""></a></div>';
                    str += '<div class="weui-media-box__bd">';
                    str += '<h1 class="weui-media-box__desc">' + data[index].p_name + '</h1>';
                    str += '<p class="weui-media-box__desc">规格：<span>' + data[index].s_name + '</span></p>';
                    str += '<div class="clear mg-t-10">';
                    str += '<div class="wy-pro-pri fl">¥<em class="num font-15">' + data[index].s_price + '</em></div>';
                    str += '<div class="pro-amount fr">';
                    str += '<div class="Spinner"></div>';
                    str += '</div></div></div></div></div></div>';
                })
                $('#cart_item').html(str);
                setSpinner();
            }
        });

        function submitForm() {
            if ($("input[name=cartpro]:checked").length > 0) {
                var collection = [];
                $("input[name=cartpro]:checked").each(function() {
                    var cid = $(this).attr("value");
                    var qty = $(this).parentsUntil(".weui-panel__bd").find("input.Amount").val();
                    var temp = new Array();
                    temp.push(cid, qty);
                    collection.push(temp);

                });

                $.ajax({
                    url: "/save_cartitem_to_session",
                    type: "post",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        collection: collection
                    },
                    success: function(data) {
                        location.href = "/address";
                    }
                });
            }
        }

        function setSpinner() {
            $(".Spinner").Spinner({
                value: 1,
                len: 3,
                max: 999,
            });
        }

        $(document).ready(function() {
            setSpinner();
            $(".allselect").click(function() {
                if ($(this).find("input[name=all-sec]").prop("checked")) {
                    $("input[name=cartpro]").each(function() {
                        $(this).prop("checked", true);
                    });
                } else {
                    $("input[name=cartpro]").each(function() {
                        if ($(this).prop("checked")) {
                            $(this).prop("checked", false);
                        } else {
                            $(this).prop("checked", true);
                        }
                    });
                }
            });
        });

        $(document).on("click", ".wy-dele", function() {
            $currentID = $(this).attr("id");
            $.confirm("您确定要把此商品从购物车删除吗?", "确认删除?", function() {
                $.ajax({
                    url: "/del_cart_item",
                    type: "post",
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: {
                        CartItemID: $currentID
                    },
                    success: function(data) {
                        $.toast("已删除", "text");
                        location.href = "/cart";
                    }
                });
            }, function() {});
        });
    </script>
</body>

</html>
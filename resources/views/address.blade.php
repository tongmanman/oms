<!DOCTYPE html>
<html>

<head>
    @include('header')
</head>

<body ontouchstart>
    <!--主体-->
    <header class="wy-header">
        <div class="wy-header-title">收货地址</div>
    </header>
    <div class="weui-content">
        <div class="weui-cells weui-cells_form wy-address-edit">
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label wy-lab">收货人</label></div>
                <div class="weui-cell__bd"><input class="weui-input" type="text" name="name" id="name"></div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label wy-lab">手机号</label></div>
                <div class="weui-cell__bd"><input class="weui-input" type="number" pattern="[0-9]*" name="mobile" id="mobile" maxlength="11"></div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label for="name" class="weui-label wy-lab">所在地区</label></div>
                <div class="weui-cell__bd"><input class="weui-input" id="pca" type="text" value="" readonly="" name="pca"></div>
            </div>
            <div class="weui-cell">
                <div class="weui-cell__hd"><label class="weui-label wy-lab">详细地址</label></div>
                <div class="weui-cell__bd">
                    <textarea class="weui-textarea" name="address" id="address"></textarea>
                </div>
            </div>
        </div>
        <div class="weui-btn-area">
            <a class="weui-btn weui-btn_primary" href="javascript:" id="showTooltips" onclick="makeOrder()">下单</a>
        </div>
    </div>
    @include('menu')
    @include('js')
    <script src="js/city-picker.js"></script>
    <script>
        $("#pca").cityPicker({
            title: "选择出发地",
            onChange: function(picker, values, displayValues) {
                //    console.log(values, displayValues);
            }
        });

        function makeOrder() {
            if ($('#name').val().length == 0) {
                $.toast('收货人不能为空', "text");
                return;
            }
            if ($('#mobile').val().length == 0) {
                $.toast('手机号不能为空', "text");
                return;
            }
            if ($('#pca').val().length == 0) {
                $.toast('所在地区不能为空', "text");
                return;
            }
            if ($('#address').val().length == 0) {
                $.toast('详细地址不能为空', "text");
                return;
            }
            $.ajax({
                url: "/make_order",
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    name: $('#name').val(),
                    mobile: $('#mobile').val(),
                    pca: $('#pca').val(),
                    address: $('#address').val()
                },
                success: function(data) {
                    location.href = "/order";
                }
            });
        }
    </script>
</body>

</html>
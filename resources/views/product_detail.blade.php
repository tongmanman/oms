<!DOCTYPE html>
<html>

<head>
    @include('header')
</head>

<body ontouchstart>
    <!--主体-->
    <div class="weui-content">
        <!--产品详情-->
        <div class="weui-tab">
            <div class="weui-tab__bd proinfo-tab-con">
                <div id="tab1" class="weui-tab__bd-item weui-tab__bd-item--active">
                    <!--主图轮播-->
                    <div class="swiper-container swiper-zhutu">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img id="CurrentImage" src="" /></div>
                        </div>

                    </div>
                    <div class="wy-media-box-nomg weui-media-box_text">
                        <h4 class="wy-media-box__title" id='CurrentProductName'>{{$ProductInfo->name}}</h4>
                        <div class="wy-pro-pri mg-tb-5">¥<em class="num font-20" id="CurrentPrice"></em></div>
                    </div>
                    <div class="wy-media-box2 weui-media-box_text">
                        <div class="weui-media-box_appmsg">
                            <div class="weui-media-box__hd proinfo-txt-l"><span class="promotion-label-tit">规格</span></div>
                            <div class="weui-media-box__bd">
                                <div class="promotion-sku clear">
                                    <ul>
                                        @foreach ($ProductSkus as $ProductSku)
                                        <li id="{{$ProductSku->id}}"><a href="javascript:;">{{$ProductSku->sku_name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--底部导航-->
    <div class="foot-black"></div>
    <div class="weui-tabbar wy-foot-menu">
        <a href="{{url('product_list')}}" id='product_list' class="weui-tabbar__item">
            <div class="weui-tabbar__icon foot-menu-list"></div>
            <p class="weui-tabbar__label">分类</p>
        </a>
        <a href="{{url('cart')}}" id='cart' class="weui-tabbar__item">
            <div class="weui-tabbar__icon foot-menu-cart"></div>
            <p class="weui-tabbar__label">购物车</p>
        </a>
        <a href="{{url('my')}}" id="my" class="weui-tabbar__item">
            <div class="weui-tabbar__icon foot-menu-member"></div>
            <p class="weui-tabbar__label">我的</p>
        </a>
        <a href="javascript:;" class="weui-tabbar__item yellow-color open-popup" id="" onclick="AddToCart()" data-target="#join_cart">
            <p class="promotion-foot-menu-label">加入购物车</p>
        </a>
    </div>
    <div id="join_cart" class='weui-popup__container popup-bottom' style="z-index:600;">
        <div class="weui-popup__overlay" style="opacity:1;"></div>
        <div class="weui-popup__modal">
            <div class="modal-content">
                <div class="weui-msg" style="padding-top:0;">
                    <div class="weui-msg__icon-area"><i class="weui-icon-success weui-icon_msg"></i></div>
                    <div class="weui-msg__text-area">
                        <h2 class="weui-msg__title">成功加入购物车</h2>
                    </div>
                    <div class="weui-msg__opr-area">
                        <p class="weui-btn-area">
                            <a href="{{url('cart')}}" class="weui-btn weui-btn_primary">去购物车结算</a>
                            <a href="javascript:;" class="weui-btn weui-btn_default close-popup">不，我再看看</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('js')
    <script>
        $(function() {
            $(".promotion-sku li").click(function() {
                $(this).addClass("active").siblings("li").removeClass("active");
                GetProductSkuInfo($(this).attr("id"));
            })
        })

        $firstItem = $(".promotion-sku li").first();
        $firstItem.addClass("active").siblings("li").removeClass("active");
        GetProductSkuInfo($firstItem.attr("id"));

        function GetProductSkuInfo(_ProductID) {
            $.ajax({
                url: "/product_sku_info",
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    ProductID: _ProductID
                },
                success: function(data) {
                    $("#CurrentImage").attr("src", data.image);
                    $("#CurrentPrice").html(data.price);
                }
            });
        }

        function AddToCart() {
            $.ajax({
                url: "/add_sku_to_cart",
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    SkuID: $(".active").attr("id")
                }
            });
        }
    </script>
</body>

</html>
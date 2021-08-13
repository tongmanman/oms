<!DOCTYPE html>
<html>

<head>
    @include('header')
</head>

<body ontouchstart>
    <!--顶部搜索-->
    <!--主体-->
    <div class="wy-content">
        <div class="category-top">
            <header class='weui-header'>
                <div class="weui-search-bar" id="searchBar">
                    <form class="weui-search-bar__form">
                        <div class="weui-search-bar__box">
                            <i class="weui-icon-search"></i>
                            <input type="search" class="weui-search-bar__input" id="searchInput" placeholder="搜索" required>
                            <a href="javascript:" class="weui-icon-clear" id="searchClear"></a>
                        </div>
                        <label class="weui-search-bar__label" id="searchText" style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);">
                            <i class="weui-icon-search"></i>
                            <span>搜索</span>
                        </label>
                    </form>
                    <a href="javascript:" class="weui-search-bar__cancel-btn" id="searchCancel">取消</a>
                </div>
            </header>
        </div>
        <aside>
            <div class="menu-left scrollbar-none" id="sidebar">
                <ul>
                    @foreach ($RootCategories as $Category)
                    @if($loop->first)
                    <li class='active' id='{{ $Category->id }}'>{{ $Category->text }}</li>
                    @else
                    <li id='{{ $Category->id }}'>{{ $Category->text }}</li>
                    @endif
                    @endforeach
                </ul>
            </div>
        </aside>
        <section class="menu-right padding-all j-content" id='product_detail'>

        </section>
    </div>
    @include('menu')
    @include('js')
    <script type="text/javascript">
        $(function($) {
            $('#sidebar ul li').click(function() {
                $(this).addClass('active').siblings('li').removeClass('active');
                GetProductInfo($(this).attr('id'));
            })
        })

        $('#product_list').addClass('weui-bar__item--on');

        GetProductInfo($('#sidebar ul li').first().attr('id'));

        function GetProductInfo(_CategoryID) {
            $.ajax({
                url: "/product_list_info",
                type: "post",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    CategoryID: _CategoryID
                },
                success: function(data) {
                    $('#product_detail').html(data);
                }
            });
        }
    </script>
</body>

</html>
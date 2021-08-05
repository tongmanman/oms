<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    @include('header')
</head>
{{Session('user.role')}}
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
                    <li class="active">酒水食品</li>
                    <li>家用电器</li>
                    <li>电脑办公</li>
                    <li>家具家居</li>
                    <li>服装服饰</li>
                    <li>个化护装</li>
                    <li>衣帽鞋包</li>
                    <li>运动户外</li>
                    <li>汽车用品</li>
                    <li>母婴玩具</li>
                    <li>医药保健</li>
                    <li>图书音像</li>
                    <li>旅游生活</li>
                </ul>
            </div>
        </aside>
        <section class="menu-right padding-all j-content">
            <h5>酒水食品</h5>
            <ul>
                <li class="w-3"><a href="{{ url('users/product_detail') }}"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>酒水食品</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>家用电器</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>家用电器</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>电脑办公</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>电脑办公</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>家具家居</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>家具家居</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>

            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>服装服饰</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
        <section class="menu-right padding-all j-content" style="display:none">
            <h5>旅游生活</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
            <h5>旅游生活</h5>
            <ul>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
                <li class="w-3"><a href="pro_list.html"></a> <img src="upload/pro3.jpg"><span>酒水食品</span></li>
            </ul>
        </section>
    </div>
    <div class="foot-black"></div>
    <div class="weui-tabbar wy-foot-menu">
        <a href="classify.html" class="weui-tabbar__item">
            <div class="weui-tabbar__icon foot-menu-list"></div>
            <p class="weui-tabbar__label">分类</p>
        </a>
        <a href="shopcart.html" class="weui-tabbar__item">
            <span class="weui-badge" style="position: absolute;top: -.4em;right: 4em;">8</span>
            <div class="weui-tabbar__icon foot-menu-cart"></div>
            <p class="weui-tabbar__label">购物车</p>
        </a>
        <a href="mine.html" class="weui-tabbar__item">
            <div class="weui-tabbar__icon foot-menu-member"></div>
            <p class="weui-tabbar__label">我的</p>
        </a>
    </div>
    <script src="lib/jquery-2.1.4.js"></script>
    <script src="lib/fastclick.js"></script>
    <script>
        $(function() {
            FastClick.attach(document.body);
        });
    </script>
    <script src="js/jquery-weui.js"></script>
    <script type="text/javascript">
        $(function($) {
            $('#sidebar ul li').click(function() {
                $(this).addClass('active').siblings('li').removeClass('active');
                var index = $(this).index();
                $('.j-content').eq(index).show().siblings('.j-content').hide();
            })
        })
    </script>
</body>

</html>
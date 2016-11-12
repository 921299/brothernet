</div>
</div>
<nav id="new-left-menu">
<div class="mask" id="menu-mask"></div>
<div class="menu-content">
<div class="find-wrapper clearfix">
<form data-ajax="false" action="/index.php?r=index/search" method="get" style="position: relative">
<input type="hidden" name="r" value="index/search">
<div class="l-border"></div>
<div class="border-btm clearfix">
<div class="input-wrapper">
<input autocomplete="off" type="text" name="kw" placeholder="搜索商品">
</div>
<div class="search-btn-wrapper">
<button type="submit" class="cnzzCounter" data-cnzz-type="54" data-cnzz="1"></button>
</div>
</div>
<div class="r-border"></div>
</form>
</div>
<ul class="main-cat">
<li class="cat-item mm-nolistview">
<a rel="external" href="/wap" class="cnzzCounter" data-cnzz-type="51" data-cnzz="0">
<span class="icon index"></span>
首页
<span class="arrow"></span>
</a>
</li>
<li class="cat-item">
<a rel="external" href="/index.php?r=index/cat&cid=1&u=11395" class="cnzzCounter" data-cnzz-type="51" data-cnzz="1">
<span class="icon clothes"></span>
服装
<span class="arrow"></span>
</a>
</li>
<li class="cat-item">
<a rel="external" href="/index.php?r=index/cat&cid=2&u=11395" class="cnzzCounter" data-cnzz-type="51" data-cnzz="2">
<span class="icon muyin"></span>
母婴
<span class="arrow"></span>
</a>
</li>
<li class="cat-item">
<a rel="external" href="/index.php?r=index/cat&cid=3&u=11395" class="cnzzCounter" data-cnzz-type="51" data-cnzz="3">
<span class="icon hzp"></span>
化妆品
<span class="arrow"></span>
</a>
</li>
<li class="cat-item">
<a rel="external" href="/index.php?r=index/cat&cid=4&u=11395" class="cnzzCounter" data-cnzz-type="51" data-cnzz="4">
<span class="icon jj"></span>
居家
<span class="arrow"></span>
</a>
</li>
<li class="cat-item">
<a rel="external" href="/index.php?r=index/cat&cid=5&u=11395" class="cnzzCounter" data-cnzz-type="51" data-cnzz="5">
<span class="icon xbps"></span>
鞋包配饰
<span class="arrow"></span>
</a>
</li>
<li class="cat-item">
<a rel="external" href="/index.php?r=index/cat&cid=6&u=11395" class="cnzzCounter" data-cnzz-type="51" data-cnzz="6">
<span class="icon ms"></span>
美食
<span class="arrow"></span>
</a>
</li>
<li class="cat-item">
<a rel="external" href="/index.php?r=index/cat&cid=7&u=11395" class="cnzzCounter" data-cnzz-type="51" data-cnzz="7">
<span class="icon wtyp"></span>
文体用品
<span class="arrow"></span>
</a>
</li>
<li class="cat-item">
<a rel="external" href="/index.php?r=index/cat&cid=8&u=11395" class="cnzzCounter" data-cnzz-type="51" data-cnzz="8">
<span class="icon smjd"></span>
数码家电
<span class="arrow"></span>
</a>
</li>
</ul>
</div>
</nav>
<div class="toTop" onclick=" $('body,html').animate({scrollTop:0},1000);"
style="position: fixed;
    right: 30px;
    bottom: 30px;
    font-family: iconfont;
    display: none;
    font-size: 37px;
    width: 50px;
    height: 50px;
    background-color: #fff;
    border: 1px solid #CCCCCC;
    border-radius: 50px;
    text-align: center;
    z-index: 80;
    line-height: 50px;
    color: #8c8c8c;">&#xe601;</div>
<style>
    .cat-item {
        padding: 15px 0;
    }

    .cat-item a {
        margin: 0;
    }

    #new-left-menu {
        position: fixed;
        height: 100%;
        width: 100%;
        left: -100%;
        top: 0;
        overflow-y: scroll;
    }

    #new-left-menu .menu-content {
        position:absolute;
        top:0;
        left:0;
        width: 80%;
        height:100%;
        background-color: #fff;
        overflow-y: auto;
    }
    #menu-mask {
        width:100%;
        height:100%;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .main-cat {
        margin: 0;
    }

    html body .ui-loader {
        display: none;
    }

</style>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        var menu = $('#new-left-menu');
        var menuHeight = $('#menu-mask').height();
        var windowHeight = $(window).height();
        $(menu).find('.mask').css('height', (menuHeight > windowHeight ? menuHeight : windowHeight) + 'px');
        $(menu).find('.menu-content').css('height', (menuHeight > windowHeight ? menuHeight : windowHeight) + 'px');

        $(window).resize(function () {
            $(menu).find('.mask').css('height', (menuHeight > windowHeight ? menuHeight : windowHeight) + 'px');
            $(menu).find('.menu-content').css('height', (menuHeight > windowHeight ? menuHeight : windowHeight) + 'px');
        });

        $('.main-icon').click(function () {
            $(menu).css('z-index', 100);
            $(menu).addClass('opened-menu');
            $(menu).animate({left: 0},300);
        });
        $('#menu-mask').on('click',function () {
            $(menu).animate({left: -1 * $(window).width()},300,function(){
                $(menu).removeClass('opened-menu');
            });
        });

        $(window).scroll(function () {
            if ($(window).scrollTop() > 500) {
                $(".toTop").fadeIn(1500);
            }
            else {
                $(".toTop").fadeOut(1500);
            }
        });
    });

</script>
<script type="text/javascript" src="<?php echo PUBLIC_PATH?>/dtk.js"></script>
</body>
</html>

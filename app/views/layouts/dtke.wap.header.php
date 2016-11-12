<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="x-dns-prefetch-control" content="on"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta content="telephone=no" name="format-detection"/>
<meta name="full-screen" content="yes"/>
<meta name="x5-fullscreen" content="true"/>
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
<title>  </title>
<meta name="Keywords" content=""/>
<meta name="Description" content=""/>
<link href="<?php echo PUBLIC_PATH?>/style/wap/wap.css" rel="stylesheet"/>
<link href="<?php echo PUBLIC_PATH?>/style/wap/mui.min.css" rel="stylesheet"/>
<link href="<?php echo PUBLIC_PATH?>/style/wap/swiper.min.css" rel="stylesheet">
<link href="<?php echo PUBLIC_PATH?>/style/wap/jquery.mobile-1.4.5.css" rel="stylesheet">
<script src="<?php echo PUBLIC_PATH?>/js/wap/jquery.min.js"></script>
<script src="<?php echo PUBLIC_PATH?>/js/wap/jquery.mobile-1.4.5.min.js"></script>
<script src="<?php echo PUBLIC_PATH?>/js/layer.js"></script>
<script src="<?php echo PUBLIC_PATH?>/js/wap/swiper.jquery.min.js"></script>
<script>
    var bindEvent=function(){
        $(".goods-list").on('click','.QtkSelfClick',function(){
			var url=$(this).attr("data-qtk-url");
            //$.mobile.changePage(url);
            window.location.href = url;
        });
    }
	//页面创建时执行
    $(document).one("pagecreate", function(){
        bindEvent();
    });
</script>
<style>
    @font-face {
        font-family: 'iconfont';
        src: url('/style/font/font_1465972880_677109.eot'); /* IE9*/
        src: url('/style/font/font_1465972880_677109.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */ url('/style/font/font_1465972880_677109.woff') format('woff'), /* chrome、firefox */ url('/style/font/font_1465972880_677109.ttf') format('truetype'), /* chrome、firefox、opera、Safari, Android, iOS 4.2+*/ url('/style/font/font_1465972880_677109.svg#iconfont') format('svg'); /* iOS 4.1- */
    }
</style>
</head>
<div id="load-more">
<div>
<!--<div class="main-title clearfix">
<a class="mui-action-menu mui-pull-left main-icon" href="javascript:void(0)"></a>
<h1 class="mui-title main-title-text">风间草月</h1>
<a href="/wap" rel="external" class="main-home cnzzCounter"></a>
</div>
<div class="nav-bar">
<ul class="nav-bar-list clearfix">
<li class="active"><a rel="external" href="/wap" class="cnzzCounter">今日新品</a></li>
<li><a rel="external" href="/wap/bdan" class="cnzzCounter">超级人气榜</a></li>
<li><a rel="external" href="/wap/jxuan" class="cnzzCounter">优品特卖</a></li>
</ul>
</div>-->

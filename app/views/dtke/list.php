
<?php
require VIEW_PATH.'layouts/dtke.header.php';
?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH?>/style/detail.css" />
<div id="dtk_mian">
<style>
    html body {
        background-color: #fff;
    }

    .goods-list ul li:hover {
        border: 1px solid #de366e;
    }
</style>
<div class="search-wrap main-container">
</div>
<div class="detail-wrap main-container">
<div class="nav-wrap">
<div class="text">当前位置：<a href="/">首页</a>&gt;&gt;商品详情
</div>
</div>
<?php
$commodityInfo = $info['results']['n_tbk_item'];
?>
<div class="detail-row clearfix">
<a rel="nofollow" href="<?php echo $commodityInfo['item_url']?>" biz-itemid="522681535765" isconvert="1" target="_blank" class="img cnzzCounter" data-cnzz-type="1" data-cnzz="454010">
    <img src="<?php echo $commodityInfo['pict_url']?>" style="width:400px;height:400px;" alt="">
</a>

<div class="detail-col">
<a class="title clearfix cnzzCounter " rel="nofollow" href="<?php echo $commodityInfo['item_url']?>" biz-itemid="522681535765" isconvert="1" target="_blank" data-cnzz-type="1" data-cnzz="454010">
<span class="tmall"></span>
<span class="title"><?php echo $commodityInfo['title']?></span>
</a>
<div class="desc"> <span>推荐理由：</span> 低价优品 </div>
<div class="coupon-wrap clearfix">
<span class="now-price"><b>(独享)</b>折扣价&nbsp;&nbsp;&nbsp;&nbsp;<b>&yen;<i><?php echo $commodityInfo['zk_final_price']?></i></b></span>
<span class="org-price">在售价&nbsp;&nbsp;&yen;<i><?php echo $commodityInfo['reserve_price']?></i></span>
</div>
<div class="text-wrap">
<span class="text-wrap-span">
<!--已领券<i>636</i>张，手慢无
</span>
<span>已有<i>124</i>人购买</span>-->
本品30内已售
<?php echo $commodityInfo['volume']?>件
</span>
</div>
<div class="buy-step clearfix">
<div class="buy-step-text">购买流程</div>
<!--<div class="buy-step-first">
<span>
<i>优惠券</i>
<b>&yen;60</b>
</span>
<a rel="nofollow" class="coupon-btn" href="<?php echo $commodityInfo['item_url']?>" target="_blank">点击领取</a>
</div>-->
<div class="double-arrow">
<span></span>
</div>
<a class="buy-step-sec buy-btn cnzzCounter" data-cnzz-type="1" data-cnzz="454010" rel="nofollow" href="<?php echo $commodityInfo['item_url']?>" isconvert="1" target="_blank">去天猫下单</a>
</div>
<div class="text2">
<span>如果您喜欢此宝贝，记得分享给您的朋友，一起享优惠：</span>
<div class="bdshare">
<div class="bdsharebuttonbox">
<a href="#" class="bds_more" data-cmd="more"></a>
<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
</div>
<script>
                        window._bd_share_config = {
                            "common": {
                                "bdSnsKey": {},
                                "bdText": "最近发现了一个领内部优惠券的网站，都是限时限量抢购，一般人享受不到的！性价比超高哦，分享给大家，保证你会惊喜滴！",
                                "bdMini": "2",
                                "bdMiniList": false,
                                "bdPic": "",
                                "bdStyle": "0",
                                "bdSize": "16"
                            }, "share": {}
                        };
                        with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
                    </script>
</div>
</div>
</div>

<?php
//推荐商品
$recommendList = $recommend['results']['uatm_tbk_item'];
?>
<div class="pos-right">
<p><span>大家都在抢</span></p>
<div class="pos-box">
<div class="pos-goods-list bot">
<?php
foreach ($recommendList as $value) {
?>
<a class="pos-goods cnzzCounter" data-cnzz-type="1" data-cnzz="437125" target="_blank" href="/list?spid=<?php echo $value['num_iid']?>">
<img alt="<?php echo $value['title']?>" src="<?php echo $value['pict_url']?>" style="width:130px;height:130px;"/>
<span>折扣价:&yen;<?php echo $value['zk_final_price']?></span>
</a>
<?php
}
?>
</div>
</div>
<div class="pos-act">
<a class="top-btn disabled" href="javascript:;"></a>
<a class="bot-btn " href="javascript:;"></a>
</div>
</div>
</div>
</div>
<div class="jipin-wrap">
<img src="<?php echo PUBLIC_PATH?>/images/jinpintuijian.png" alt="">
</div>
<div class="goods-list main-container">
<ul class="clearfix">

<?php

$relationList = $relation['results']['n_tbk_item'];
$i = 0;
$class = '';
foreach ($relationList as $value) {
    $i++;
    if($i%4==0){
        $class = "no-right";
    }
?>
<li class="<?php echo $class?>">
<a href="<?php echo $value['item_url']?>" class="img cnzzCounter" rel="nofollow" target="_blank" data-cnzz-type="1" data-cnzz="435057">
<img src="<?php echo $value['pict_url']?>" alt="">
</a>
<div class="padding">
<a target="_blank" href="<?php echo $value['item_url']?>" class="title clearfix cnzzCounter" data-cnzz-type="1" data-cnzz="435057">
<i class="tmall"></i>
<span><?php echo $value['title']?></span>
</a>
<div class="coupon-wrap clearfix">
<!--优惠券<span class="price">5</span>元，已有<span class="num"><?php echo $value['volume']?></span>人购买-->
本商品30天内已有<span class="num"><?php echo $value['volume']?></span>人购买
</div>
</div>
<div class="price-wrap clearfix">
<div class="price">
<div class="text">折扣价&nbsp;￥<span class="price"><?php echo $value['zk_final_price']?></span></div>
</div>
<div class="org-price">
<div class="text">正常售价&nbsp;￥<span class="price"><?php echo $value['reserve_price']?></span>
</div>
</div>
</div>
</li>
<?php
$class = '';
}
?>

</ul>
</div>
<script>
    (function(){
        // 领券箭头移动
        var direction='right';
        $(".buy-step").hover(function(){
            var css={
                'margin-left':'-12px'
            };
            if(direction==='right'){
                direction='left';
                css['margin-left']='-5px';
            }else{
                direction='right';
            }
            $('.double-arrow span').animate(css,arguments.callee);
        },function(){
            $('.double-arrow span').stop().css("margin-left","-12px");
        })
        // 右侧广告位
        var list = $(".pos-goods-list"),
            goods = $(".pos-goods"),
            hg = goods.outerHeight(true),
            len = goods.length,
            time = 500,
            timer = null;
        list.height(hg * len);
        $(".top-btn").on("click",function(){
            var _this = $(this),
                _top = parseInt(list.css("top"));
            if(_this.hasClass("disabled") || list.is(":animated")){
                return;
            }
            list.animate({
                "top" : _top + hg * 3
            },time,function(){
                if(parseInt(list.css("top")) == 0){
                    _this.addClass("disabled");
                    list.removeClass("top").addClass("bot");
                }else{
                    list.removeClass("bot").addClass("top");
                }
                $(".bot-btn").removeClass("disabled");
            });
        });
        $(".bot-btn").on("click",function(){
            var _this = $(this),
                _top = parseInt(list.css("top"));
            if(_this.hasClass("disabled") || list.is(":animated")){
                return;
            }
            list.animate({
                "top" : _top - hg * 3
            },time,function(){
                if(Math.abs(parseInt(list.css("top"))) == hg * (len - 3)){
                    _this.addClass("disabled");
                    list.removeClass("bot").addClass("top");
                }else{
                    list.removeClass("top").addClass("bot");
                }
                $(".top-btn").removeClass("disabled");
            });
        });
        timer = setInterval(function(){
            if(list.hasClass("bot")){
                $(".bot-btn").trigger("click");
            }else if(list.hasClass("top")){
                $(".top-btn").trigger("click");
            }
        },time * 10);
        $(".pos-right").hover(function(){
            clearInterval(timer);
        },function(){
            timer = setInterval(function(){
                if(list.hasClass("bot")){
                    $(".bot-btn").trigger("click");
                }else if(list.hasClass("top")){
                    $(".top-btn").trigger("click");
                }
            },time * 10);
        })
    })();
</script>
</div>
<?php
require VIEW_PATH.'layouts/dtke.footer.php';
?>

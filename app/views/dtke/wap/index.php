<?php
require VIEW_PATH.'layouts/dtke.wap.header.php';
require VIEW_PATH.'layouts/dtke.wap.nav.php';
?>
<div class="index-wrapper">
<div class="title-wrapper">
专注优惠精选
<span class="update">每天9点直播更新</span>
</div>
<div class="swiper-container" style="width: 100%;">
<div class="swiper-wrapper">

    <div class="swiper-slide">
        <a rel="external" href="http://s.click.taobao.com/MaEaSTx" class="cnzzCounter">
            <img style="width: 100%;" src="<?php echo PUBLIC_PATH?>/images/wap/wap_f1.jpg"/>
        </a>
    </div>
    <div class="swiper-slide">
        <a rel="external" href="http://s.click.taobao.com/uKlZSTx" class="cnzzCounter" >
            <img style="width: 100%;" src="<?php echo PUBLIC_PATH?>/images/wap/wap_f2.jpg"/>
        </a>
    </div>
    <div class="swiper-slide">
        <a rel="external" href="http://s.click.taobao.com/X5hWSTx" class="cnzzCounter" >
            <img style="width: 100%;" src="<?php echo PUBLIC_PATH?>/images/wap/wap_f3.jpg" alt="韩都衣舍"/>
        </a>
    </div>
    <div class="swiper-slide">
        <a rel="external" href="http://s.click.taobao.com/LbtVSTx" class="cnzzCounter" >
            <img style="width: 100%;" src="<?php echo PUBLIC_PATH?>/images/wap/wap_f4.jpg" alt="韩都衣舍"/>
        </a>
    </div>
</div>
</div>
<div class="icon-link-wrapper">
<ul class="icon-url-list clearfix">
<li class="icon-99">
<a rel="external" href="/wap/keyword?<?php echo encrypt_url("key=9.9包邮",URLENCRY)?>" class="cnzzCounter" data-cnzz-type="51" data-cnzz="919">
<img src="<?php echo PUBLIC_PATH?>/images/wap/icon-99.png" alt="">
<span>9.9包邮</span>
</a>
</li>
<li class="icon-recommend">
<a rel="external" href="/wap/keyword" class="cnzzCounter" data-cnzz-type="51" data-cnzz="921">
<img src="<?php echo PUBLIC_PATH?>/images/wap/icon-recommend.png" alt="">
<span>小编力荐</span>
</a>
</li>
<li class="icon-jujia">
<a rel="external" href="/wap/keyword" class="cnzzCounter" data-cnzz-type="51" data-cnzz="4">
<img src="<?php echo PUBLIC_PATH?>/images/wap/icon-jujiao.png" alt="">
<span>居家日用</span>
</a>
</li>
<li class="icon-meishi">
<a rel="external" href="/wap/keyword" class="cnzzCounter" data-cnzz-type="51" data-cnzz="6">
<img src="<?php echo PUBLIC_PATH?>/images/wap/icon-meishi.png" alt="">
<span>好吃嘴</span>
</a>
</li>
</ul>
</div>
</div>
<div class="you-wrapper">
<div class="title-wrapper">
<div class="text">
<span class="index" style="padding-top: 3px;line-height: 21px;">独家优惠券直播&nbsp;&nbsp;</span>
<span class="mui-badge mui-badge-blue main-badge" style="font-size: 14px;padding: 3px 4px;border-radius: 15px; left: 135px; top:2px;">5227</span>
</div>
</div>
</div>




<div class="goods-list">
<!--
<div class="goods-item">
<a rel="external" data-ajax="false"  data-transition="slide" data-qtk-url="/wap/list" class="img QtkSelfClick cnzzCounter" data-cnzz-type="1" data-cnzz="973212">
<span class="today-wrapper">
<span>今日</span>
<span>新品</span>
</span>
<span class="coupon-wrapper">
<span class="coupon" style="color: #EDFF00;">独家券</span>
<span class="price">20元</span>
</span>
<img src="http://img.alicdn.com/imgextra/i3/2729069554/TB2_zudsXXXXXXtXpXXXXXXXXXX_!!2729069554.jpg_230x230.jpg" alt="">
</a>
<a data-transition="slide" data-qtk-url="/wap/list" class="title QtkSelfClick cnzzCounter" data-cnzz-type="1" data-cnzz="973212">
<div class="text" style=" color:#777777;">亨奇纸巾 璞竹系列手帕纸餐巾纸4层无香面巾纸小包纸巾60包</div>
</a>
<div class="price-wrapper">
<span class="text">券后</span>
<span class="price">￥39.9</span>
<div class="sold-wrapper">
<span class="sold-num" style="font-size: 10px;">71</span>
<span class="text" style="font-size: 10px;">人已买</span>
</div>
</div>
</div>-->
</div>

<div style="height: 50px;display: block;line-height: 50px;color: #565656;text-align: center;background-color: #fff;" class="pullup-goods">
<div class="label">商品加载中...</div>
</div>

<script language="javascript">
    //    var pathInfo="//";
    var page = 1;
    var isFinish = false;
    var isLoading = false;
    var $pullUp = null;
    var needLoadMore = false;

    var maxScrollY = 0;
    var windowHeight = 0;

    $(document).ready(function () {
        var mySwiper = new Swiper('.swiper-container', {
            loop: true,
            autoplay: 2500
        });
        maxScrollY = $(document).height();
        windowHeight = $(window).height();
        $(window).on('resize', function () {
            windowHeight = $(window).height();
        });
        $(document).on("scrollstop", function (e) {
            if (isFinish || isLoading) {
                return;
            }
            var y = $(document).scrollTop();	//获取滚动条位置
            maxScrollY = $(document).height();
            windowHeight = $(window).height();
            if (Math.abs(maxScrollY - windowHeight - y) > 100) {
                return;
            }
            var $wrapper = $(this);
            if (!$pullUp) {
                $pullUp = $wrapper.find('.pullup-goods');
            }
            var data = null;
            getData($wrapper, data, 1);
        });

        function getData($wrapper, data, direction) {
            if (isFinish) {
                return;
            }
            isLoading = true;
            if (!$pullUp) {
                $pullUp = $wrapper.find('.pullup-goods');
            }
            var labelTag = $($pullUp).find('.label');
            var tPaht="indexAjax.php";
            $.ajax(tPaht,{
                data: {r: 'index', page: 1},
                dataType: 'json',
                type: 'post',
                error: function (xhr, type, errorThrown) {
                    getData($wrapper, data, direction);
                    alert(1);
                    return false;
                },
                success: function (result, status, xhr) {
					var statusVal = result[0].status; //状态 0 的时候加载
					var dataObj = result[0].data;     //data
                    needLoadMore = false;
                    if (statusVal == 0) {
						for(var i=0; i<dataObj.length; i++){
							var dataObjs = dataObj[i];
							//商品信息
							var item_url = dataObjs[i][0].item_url;	//url
							var nick = dataObjs[i][0].nick;			//店名
							var num_iid = dataObjs[i][0].num_iid;	//商品ID
							var pict_url = dataObjs[i][0].pict_url;	//图片url
							var reserve_price = dataObjs[i][0].reserve_price; //原价
							var zk_final_price = dataObjs[i][0].zk_final_price; //折扣价
							var title = dataObjs[i][0].title;		//商品名称
							var volume = dataObjs[i][0].volume;		//30天销量

							var htmlObj = '<div class="goods-item">';
							htmlObj += '<a rel="external" data-ajax="false" data-transition="slide" data-qtk-url="'+item_url+'" class="img QtkSelfClick cnzzCounter" >';
							htmlObj += '<span class="today-wrapper"><span>今日</span><span>新品</span></span>';
							htmlObj += '<span class="coupon-wrapper"><span class="coupon" style="color: #EDFF00;">独家优惠券</span>';
							htmlObj += '<span class="price">50元</span></span>';
							htmlObj += '<img src="'+pict_url+'_230x230.jpg" alt=""></a>';
							htmlObj += '<a data-transition="slide" data-qtk-url="'+item_url+'" class="title QtkSelfClick cnzzCounter">';
							htmlObj += '<div class="text" style=" color:#777777;">'+title+'</div></a>';
							htmlObj += '<div class="price-wrapper"><span class="text">券后</span><span class="price">￥69</span><div class="sold-wrapper"><span class="sold-num" style="font-size: 10px;">48</span><span class="text" style="font-size: 10px;">人已买</span></div></div></div>';


							$('.goods-list').append(htmlObj);
						}
						//myScroll.refresh();
                        maxScrollY = $(document).height();
                        isLoading = false;
                        page++;
                        //                        $(labelTag).html('上拉加载更多商品');
                    } else {
//                        myScroll.refresh();
                        maxScrollY = $(document).height();
                        isLoading = false;
                        $(labelTag).html('没有更多商品啦');
                        isFinish = true;
                    }
                }
            });
        }
    });
</script>
<?php
require VIEW_PATH.'layouts/dtke.wap.footer.php';
?>

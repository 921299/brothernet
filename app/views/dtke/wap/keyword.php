<?php
require VIEW_PATH.'layouts/dtke.wap.header.php';
?>
<div class="main-title clearfix">
<a class="mui-action-menu mui-pull-left main-icon" href="javascript:void(0)"></a>
<h1 class="mui-title main-title-text"><?php echo $urlKey?></h1>
<a href="/wap" rel="external" class="main-home cnzzCounter"></a>
</div>

<div class="goods-list">
<div class="goods-item">
<a data-transition="slide" data-qtk-url="/index.php?r=p/d&id=977007&u=11395" class="img QtkSelfClick cnzzCounter" data-cnzz-type="1" data-cnzz="977007">
<span class="today-wrapper">
<span>今日</span>
<span>新品</span>
</span>
<span class="coupon-wrapper">
<span class="coupon" style="color: #EDFF00;">独家券</span>
<span class="price">15元</span>
</span>
<img src="http://img.alicdn.com/imgextra/i3/804760518/TB2dBupXanyQeBjSspeXXa8WpXa_!!804760518.jpg_230x230.jpg" alt="">
</a>
<a data-transition="slide" data-qtk-url="/index.php?r=p/d&id=977007&u=11395" class="title QtkSelfClick cnzzCounter" data-cnzz-type="1" data-cnzz="977007">
<div class="text">【鸽鸽辣条189gX3包】辣条麻辣江西辣条素食小面筋小吃休闲零食</div>
</a>
<div class="price-wrapper">
<span class="text">券后</span>
<span class="price">￥14.9</span>
<div class="sold-wrapper">
<span style="font-size: 10px;" class="sold-num">7895</span>
<span style="font-size: 10px;" class="text">人已买</span>
</div>
</div>
</div>
<div class="goods-item">
<a data-transition="slide" data-qtk-url="/index.php?r=p/d&id=977183&u=11395" class="img QtkSelfClick cnzzCounter" data-cnzz-type="1" data-cnzz="977183">
<span class="today-wrapper">
<span>今日</span>
<span>新品</span>
</span>
<span class="coupon-wrapper">
<span class="coupon" style="color: #EDFF00;">独家券</span>
<span class="price">30元</span>
</span>
<img src="http://img.alicdn.com/imgextra/i3/1579197374/TB2huaSaNvxQeBjy0FdXXaybXXa_!!1579197374.jpg_230x230.jpg" alt="">
</a>
<a data-transition="slide" data-qtk-url="/index.php?r=p/d&id=977183&u=11395" class="title QtkSelfClick cnzzCounter" data-cnzz-type="1" data-cnzz="977183">
<div class="text">彬杰茶业武夷山岩茶浓香大红袍茶叶乌龙茶送礼茶高档礼盒装252克</div>
</a>
<div class="price-wrapper">
<span class="text">券后</span>
<span class="price">￥49</span>
<div class="sold-wrapper">
<span style="font-size: 10px;" class="sold-num">1086</span>
<span style="font-size: 10px;" class="text">人已买</span>
</div>
</div>
</div>
</div>



<div style="height: 50px;display: block;line-height: 50px;color: #565656;text-align: center;background-color: #fff;" class="pullup-goods">
<div class="label">商品加载中...</div>
</div>
<script language="javascript">

    var page = 2;
    var isFinish = false;
    var isLoading = false;
    var $pullUp = null;
    var needLoadMore = false;

    var maxScrollY = 0;
    var windowHeight = 0;
    var cid = '6';

    $(document).ready(function () {
        maxScrollY = $(document).height();
        windowHeight = $(window).height();
        $(window).on('resize', function () {
            windowHeight = $(window).height();
        });
        $(document).on("scrollstop", function (e) {
            if (isFinish || isLoading) {
                return;
            }
            var y = $(document).scrollTop();
            maxScrollY = $(document).height();
            windowHeight = $(window).height();
            if (Math.abs(maxScrollY - windowHeight - y) > 100) {
                return;
            }
            var $wrapper = $(this);
            alert($wrapper);
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
                data: {r: 'jiukuaijiu', page: 1},
                dataType: 'json',
                type: 'post',
                error: function (xhr, type, errorThrown) {
                    getData($wrapper, data, direction);
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

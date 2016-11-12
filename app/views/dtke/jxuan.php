<?php
require VIEW_PATH.'layouts/dtke.header.php';
?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH?>/style/JinXuan.css" />
<div id="dtk_mian">
<style>
    .cat-wrap .cat-list ul li a {
        color: #4C4C4C;
    }
    .goods-list ul li:hover {
        border: 1px solid #df1956;
    }
</style>
<div class="search-wrap main-container">
<form action="/jxuan/search" method="post" class="search-form">
<input type="text" name="key" value="" placeholder="^_^ 搜商品">
<input type="submit" value="">
</form>
</div>

<div class="goods-list main-container">
<ul class="clearfix">
<?php
$i = 0;
$class = '';
if($is_search == 1){
    $jxuanList = $resultList['results']['n_tbk_item'];
}else{
    $jxuanList = $resultList['results']['uatm_tbk_item'];
}

//总商品数量，如果大雨100则翻页
$totalShops = count($jxuanList);

foreach ($jxuanList as $value) {
    //优品库中过期的商品不显示
    if($is_search != 1){
        if(strtotime($value['event_end_time']) <= time()){
            continue;
        }
    }
    $i++;
    if($i%4==0){
        $class = "no-right";
    }
?>
<li class="<?php echo $class?>">
<a class="cnzzCounter" data-cnzz-type="2" href="<?php echo $value['item_url']?>" isconvert="1" rel="nofollow" target="_blank">
<img src="<?php echo $value['pict_url']?>" style="width:290px;height:290px;" alt="">
</a>
<div class="padding">
<a rel="nofollow" target="_blank" isconvert="1" href="<?php echo $value['item_url']?>" class="title  clearfix cnzzCounter" data-cnzz-type="2" >
<i class="tmall"></i>
<span><?php echo $value['title']?></span>
</a>
<div class="price-wrap clearfix">
<span class="icon">￥</span>
<span class="price"><?php echo $value['zk_final_price']?></span>
<span class="youpin"></span>
<div class="sold-count">
<span class="text">30天内已售</span>
<span class="num"><?php echo $value['volume']?></span>
</div>
</div>
<div class="time-wrap clearfix">
<div class="time"></div>
<div class="date">
<?php
 if($is_search != 1){ 
 ?>
还剩&nbsp;<?php echo date('j', (strtotime($value['event_end_time'])-time()))?>&nbsp;天
<?php
}else{
    echo '还剩'.rand(2,23).'天';
}?>
</div>
<a class="buy" href="<?php echo $value['item_url']?>" isconvert="1" target="_blank" rel="nofollow" class="cnzzCounter" data-cnzz-type="2" data-cnzz="16571">去抢购&gt;</a>
</div>
</div>
</li>
<?php
$class = '';
}
?>
</ul>
</div>

<?php
if($totalShops >= 1000){ 
?>
<div class="pager main-container" style="margin: 20px auto;">
<div id="yw0" class="pager">
<a class="pre-page disabled" href="javascript:void(0);">上一页</a>
<a class="item cur" href="javascript:void(0);">1</a>
<a class="item" href="/jxuan/search?<?php echo encrypt_url("key=$search_field&page=2",URLENCRY)?>">2</a>
<a class="item" href="/jxuan/search?<?php echo encrypt_url("key=$search_field&page=3",URLENCRY)?>">3</a>
<!--<a class="item more" href="javascript:void(0);">...</a>-->
<a class="next-page" href="/jxuan/search?<?php echo encrypt_url("key=$search_field&page=2",URLENCRY)?>">下一页</a>
</div>
</div>
<?php
}
?>


</div>
<?php
require VIEW_PATH.'layouts/dtke.footer.php';
?>

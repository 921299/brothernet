
<?php
require VIEW_PATH.'layouts/dtke.header.php';
?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH?>/style/PaoLiang.css" />
<div id="dtk_mian">
<style>
    .goods-list ul li:hover {
        border: 1px solid #48BF7D;
    }
</style>
<div class="search-wrap main-container">
</div>
<div class="cat-wrap main-container">
<div class="cat-list clearfix">
<ul class="clearfix">

<?php
if($url_key == 0){
    $tatol = count($resultList['results']['uatm_tbk_item']);
}else{
    $tatol = count($resultList['results']['n_tbk_item']);
}
foreach ($get_url as $key => $value) {
?>
<li class="<?if($url_key==$key){echo 'active';}?>">
<a href="/bdan?<?php echo encrypt_url("key=$key",URLENCRY)?>" class="cnzzCounter" data-cnzz-type="52" data-cnzz="100"><?php echo $value?> <?php if($url_key==$key){echo '('.$tatol.')';}?></a>
</li>
<?php
}
?>
</ul>
</div>
<div class="sort-wrap" style="color: #FF0000;">
*&nbsp;每30分钟更新一次
</div>
</div>
<div class="goods-list main-container" style="margin-top: 20px;">


<ul class="clearfix">
<?php
$i = 0;
$class = '';
if($url_key == 0){
    $bDanList = $resultList['results']['uatm_tbk_item'];
}else{
    $bDanList = $resultList['results']['n_tbk_item'];
}
foreach ($bDanList as $value) {
    $i++;
    if($i%4==0){
        $class = "no-right";
    }
?>
<li class="<?php echo $class?>">
<a href="<?php echo $value['item_url']?>" class="img cnzzCounter" rel="nofollow" target="_blank" data-cnzz-type="1" data-cnzz="449951">
<div class="label" style="font-size: 13px; line-height:17px; padding-top: 2px;">TOP
<br/>
<span style="font-family:Arial; font-size:14px;"><?php echo $i?></span>
</div>
<img src="<?php echo $value['pict_url']?>" style="width:290px;height:290px;" alt="">
</a>
<div class="padding">
<a target="_blank" href="<?php echo $value['item_url']?>" class="title clearfix cnzzCounter" data-cnzz-type="1" data-cnzz="449951">
<i class="tmall"></i>
<span><?php echo $value['title']?></span>
</a>
<div class="coupon-wrap clearfix" style="margin: 9px 2px 7px 3px; color:#909090">
<!--优惠券<span class="price">3</span>元，-->30天销售<span class="num" style=" color:#27BCB5;"><?php echo $value['volume']?></span>件
</div>
</div>
<div class="price-wrap clearfix" style="background-color: #48BF7D;">
<div class="price">
<span class="text" style="margin-left: 5px;">折扣价&nbsp;￥<span class="price"><?php echo $value['zk_final_price']?></span></span>
<span class="text" style="margin-left: 18px; font-size: 12px;color: #DBF7E8;">正常售价&nbsp;￥<?php echo $value['reserve_price']?></span>
</div>
</div>
<div class="padding">
<div class="recent-sold-num clearfix" style="color:#D85C85; margin-left:3px;">
最近2小时销量：<span class="sold-count"><?php echo ceil(round(($value['volume']/30), ($value['volume']/7)))?></span>笔
</div>
</div>
</li>
<?php
$class = '';
}
?>
</ul>
</div>
</div>
<?php
require VIEW_PATH.'layouts/dtke.footer.php';
?>

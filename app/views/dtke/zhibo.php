<?php
require VIEW_PATH.'layouts/dtke.header.php';
?>
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH?>/style/Coupon.css" />
<div id="dtk_mian">
<style type="text/css">
    .g_over {
        border: 1px solid #F3E9EC;
    }
    .g_over:hover, .g_over:focus {
        border: 1px solid #de366e;
    }
    .cat-wrap .cat-list ul li a {
        color: #4C4C4C;
    }
</style>

<?php
if(!isset($post_search)){
?>
<div class="search-wrap main-container">
</div>

<div class="tag-wrap main-container clearfix" style="background:#FFF3EA;border: #E6D5C8 1px dashed;">
<div class="fixed-wrap clearfix">
<?php
if($url_key == '0'){
    $tatol = count($resultList['results']['uatm_tbk_item']);
}else{
    $tatol = count($resultList['results']['n_tbk_item']);
}

foreach ($get_url as $keya => $value) {
?>
    <a href="/zhibo?<?php echo encrypt_url("key=$value",URLENCRY)?>" class="tag-99 tag-fixed clearfix <?php if($url_key==$value && $url_key!='0'){echo 'active';}?>" style="margin-right: 20px;">
    <span class="icon"></span>
    <span class="text"><?php echo $value?><?if($url_key==$value && $url_key!='0'){echo '('.$tatol.')';}?></span>
    </a>
<?php
}
?>
</div>
</div>
<?php
}else{
    echo '<div style="height:8px;"></div>';
}?>


<div class="goods-list main-container">
<ul class="clearfix">
<?php
$i = 0;
$class = '';

if($url_key == '0'){
    $bDanList = $resultList['results']['uatm_tbk_item'];
}else{
    $bDanList = $resultList['results']['n_tbk_item'];
}

$totalShops = count($bDanList);

foreach ($bDanList as $value) {
    $i++;
    if($i%4==0){
        $class = "no-right";
}
?>
<li class="<?php echo $class?> g_over">
<a href="/list?spid=<?php echo $value['num_iid']?>" class="img cnzzCounter" rel="nofollow" target="_blank" data-cnzz-type="1" >
<span class="label" style="font-family: '宋体';line-height: 18px;">今日<br/>新品</span>
<img src="<?php echo $value['pict_url']?>" style="width:290px;height:290px;" alt="">
</a>
<div class="padding">
<a target="_blank" href="/list?spid=<?php echo $value['num_iid']?>" class="title clearfix cnzzCounter" data-cnzz-type="1" >
<i class="tmall"></i>
<span><?php echo $value['title']?></span>
</a>
<div class="coupon-wrap clearfix" style="margin: 9px 2px 7px 3px;">
<!--折扣价<span class="price"><?php echo $value['zk_final_price']?></span>元，-->30天内已有<span class="num"><?php echo $value['volume']?></span>人购买
</div>
</div>
<div class="price-wrap clearfix">
<div class="price">
<span class="text" style="margin-left: 5px;">折扣价&nbsp;￥<span class="price" style="font-size:20px;"><?php echo $value['zk_final_price']?></span></span>
<span class="text" style="margin-left: 15px; font-size: 12px;color: #ffe4ed;">正常售价&nbsp;￥<?php echo $value['reserve_price']?> </span>
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
if($totalShops >= 1000){ ?>
<div class="pager main-container" style="margin: 20px auto;">
<div id="yw0" class="pager">
<a class="pre-page disabled" href="javascript:void(0);">上一页</a>
<a class="item cur" href="javascript:void(0);">1</a>
<a class="item" href="/zhibo/search?<?php echo encrypt_url("key=麻辣烫&page=2",URLENCRY)?>">2</a>
<a class="item" href="/zhibo/search?<?php echo encrypt_url("key=2&page=3",URLENCRY)?>">3</a>
<!--<a class="item more" href="javascript:void(0);">...</a>-->
<a class="next-page" href="/zhibo/search?<?php echo encrypt_url("key=3&page=2",URLENCRY)?>">下一页</a>
</div>
</div>
<?php
}
?>









</div>

<?php
require VIEW_PATH.'layouts/dtke.footer.php';
?>

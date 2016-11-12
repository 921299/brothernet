<div class="main-title clearfix">
<a class="mui-action-menu mui-pull-left main-icon" href="javascript:void(0)"></a>
<h1 class="mui-title main-title-text">风间草月</h1>
<a href="/wap" rel="external" class="main-home cnzzCounter"></a>
</div>
<div class="nav-bar">
<ul class="nav-bar-list clearfix">

<?php
$pageUrl = $_SERVER['REQUEST_URI'];
?>

<li <?php if($pageUrl == '/wap'){ echo 'class="active"';}?> ><a rel="external" href="/wap" class="cnzzCounter">今日新品</a></li>
<li <?php if($pageUrl == '/wap/bdan'){ echo 'class="active"';}?>><a rel="external" href="/wap/bdan" class="cnzzCounter">超级人气榜</a></li>
<li <?php if($pageUrl == '/wap/jxuan'){ echo 'class="active"';}?>><a rel="external" href="/wap/jxuan" class="cnzzCounter">优品特卖</a></li>
</ul>
</div>

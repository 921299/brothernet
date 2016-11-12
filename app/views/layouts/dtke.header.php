<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="zh-CN">
<meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
<meta name="renderer" content="webkit">
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH?>/style/reset.css">
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH?>/style/footer.css">
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH?>/style/dtk.css">
<link rel="stylesheet" type="text/css" href="<?php echo PUBLIC_PATH?>/style/pager.css"/>
<link rel="stylesheet" href="<?php echo PUBLIC_PATH?>/style/iconfont.css">
<title><?php echo SITETITLE?></title>
<meta name="Keywords" content="<?php echo SITEKEYWORDS?>"/>
<meta name="Description" content="<?php echo DESCRIPTION?>"/>
<script src="<?php echo PUBLIC_PATH?>/js/jquery.js"></script>
<script>
        $(function(){
            $("body").on('click','.cnzzCounter',function(){
                var fkId=$(this).attr('data-cnzz');
                var fkType=$(this).attr('data-cnzz-type');
                var tPaht="/index.php";
                var reqUrl="/";
                $.ajax(tPaht,{
                    data: {r: 'site/cnzz',fkId:fkId,req:reqUrl,cnzzType:fkType},
                    dataType: 'json',
                    type: 'post',
                    error: function (xhr, type, errorThrown) {

                    },
                    success: function (result, status, xhr) {

                    }
                });
            });
        });
    </script>
<script src="<?php echo PUBLIC_PATH?>/js/layer.js" ></script>
<script src="<?php echo PUBLIC_PATH?>/js/dtk_sdk.js"></script>
<script src="<?php echo PUBLIC_PATH?>/js/unslider.min.js"></script>
</head>
<body>
<style>
    #navTop {
        width: 100%;
        background-color:#FFF;
        /*border-bottom: 1px solid #ccc;*/
    }

    .toTop {
        font-family: iconfont;
        position: fixed;
        right: 70px;
        bottom: 70px;
        line-height: 50px;
        text-align: center;
        border: 1px solid #CCCCCC;
        border-radius: 50px;
        color: #858585;
        width: 50px;
        font-size: 36px;
        cursor: pointer;
        background-color: #fff;
    }

    .toTop:hover, .toTop:focus {
        color: rgb(234, 42, 96);
    }

    body #headNav #header #showList dl {
        margin: 5px 16px;
    }

    body #headNav #header #showList #search button {
        height: 37px;
        overflow: hidden;
        padding: 7px 30px;
    }
</style>



<div id="navTop">
<div id="top">
<div id="topleft" style="margin: 0;line-height: 25px;">亲爱的，来加粉丝专享优惠QQ群 <a target="_blank" style="height: 22px;float: right;" href="http://shang.qq.com/wpa/qunwpa?idkey=6c7a7e641221e69bf3d834d9928679a237ce8a9409b8e6903c6eea2df9fc03c5"><img border="0" src="<?php echo PUBLIC_PATH?>/images/TB2SfmWqFXXXXb4XpXXXXXXXXXX_!!2508158775.png"></a>
</div>
<ul id="topright" style="line-height: 25px;">
<li style=" margin-right: 8px;"><a href="javascript:void(0)" onclick="SetHome(this,window.location)" style="color: #757575" title="将本站设为首页">设为首页</a>
</li>
<li style="margin-right: 8px;"><a href="javascript:void(0)" onclick="shoucang(document.title,window.location)" style="color: #757575" title="加入收藏，方便下次打开">加入收藏</a>
</li>
<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=947009562&site=qq&menu=yes" style="color: #8da7cb" title="联系我帮你解答">遇到购物问题? 联系我 ></a>
</li>
</ul>
<div class="clear"></div>
</div>
</div>



<div id="headNav">
<div id="header" style="padding-bottom: 10px;">
<a href="/" style="width: 400px; height: 80px;display: inline-block;float: left;    background-size: inherit;    background: url('<?php echo PUBLIC_PATH?>/images/borthernet_logo.png')left top no-repeat;margin-top: 0px;" class="cnzzCounter" data-cnzz-type="50" data-cnzz="0">
</a>
<div id="showList">
<div id="search">
<form action="/zhibo/search" method="post" >
<input type="text" value="" name="key"  placeholder="搜优惠"/>
<input type="hidden" value="1" name="postSearch"/>
<button type="submit" class="cnzzCounter">搜索</button>
</form>
</div>
<dl>
<dt class="rg"></dt>
</dl>
<dl>
<dt class="zy"></dt>
</dl>
<dl>
<dt class="qc"></dt>
</dl>
</div>
<div class="clear"></div>
</div>
</div>


<?php
$pageUrl = explode('?', $_SERVER['REQUEST_URI']);
?>
<div id="baner">
<div id="nav" style="font-size: 15px;">
<a href="/" class="cnzzCounter iconM <?php if($pageUrl[0]=='/'){echo 'active';}?>" style="padding:8px 27px;text-align:center;" ><!--<i class="iconfont">&#xe601;</i>-->今日新品</a>
<a href="/zhibo?<?php echo encrypt_url("key=0",URLENCRY)?>" class="cnzzCounter <?php if(substr($pageUrl[0], 0, 6)=='/zhibo'){echo 'active';}?>" style="padding:8px 15px;" >优惠直播</a>
<a href="/bdan?<?php echo encrypt_url("key=0",URLENCRY)?>" class="cnzzCounter <?php if(substr($pageUrl[0], 0, 5)=='/bdan'){echo 'active';}?>" style="padding:8px 15px;">超级人气榜
<div style="position:absolute; width:24px; height:32px; background:#FFCC00;margin-left: 107px; margin-top: -25px; background:url(<?php echo PUBLIC_PATH?>/images/HOTT_qeu.gif)"></div>
</a>
<a href="/jxuan" class="cnzzCounter <?php if(substr($pageUrl[0], 0, 6)=='/jxuan'){echo 'active';}?>" style="padding:8px 15px;" data-cnzz-type="53" data-cnzz="0">特卖精选</a>
</div>
</div>
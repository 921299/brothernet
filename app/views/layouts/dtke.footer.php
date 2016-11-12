<div id="footer" style="background-color: #373737;height: 190px;width: 100%;border-top: 3px solid #ff3366;">
<div class="footer-wrapper " style="width: 1200px;margin: 0 auto;position: relative;text-align: center">
<img src="<?php echo PUBLIC_PATH?>/images/bottom_text.png" alt="" style="border: 0;margin-top: 50px;">
<div class="author" style="    position: absolute;
    top: 67px;
    left: 990px;
    color: #FFFFFF;
    font-size: 18px;">by
&nbsp;&nbsp;<?php echo SITENAME?></div>
<div class="text" style="color: #a2a2a2;
    font-size: 16px;
    margin-top: 33px;">
&copy; CopyRight&nbsp;2016 &nbsp;<a href="<?php echo SITEURL?>" target="_blank" rel="nofollow" style="color:#a2a2a2;"><?php echo SITENAME?></a>
&nbsp;<?php echo SITEURL?> &nbsp;&nbsp; 京ICP备14049586号-3</a>
&nbsp;&nbsp; <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=947009562&site=qq&menu=yes" style="color: #8da7cb" title="联系我帮你解答">^_^亲遇到问题，联系我帮你处理哈</a>
</div>
</div>
</div>
<div class="toTop" style="display: none" onclick=" $('body,html').animate({scrollTop:0},1000);">
&#xe60c;</div>
<script type="text/javascript">
    // 设置为主页
    function SetHome(obj, vrl) {
        try {
            obj.style.behavior = 'url(#default#homepage)';
            obj.setHomePage(vrl);
        }
        catch (e) {
            if (window.netscape) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                }
                catch (e) {
                    alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
                }
                var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
                prefs.setCharPref('browser.startup.homepage', vrl);
            } else {
                alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置网页。3.输入：" + vrl + "点击确定。");
            }
        }
    }
    // 加入收藏 兼容360和IE6
    function shoucang(sTitle, sURL) {
        try {
            window.external.addFavorite(sURL, sTitle);
        }
        catch (e) {
            try {
                window.sidebar.addPanel(sTitle, sURL, "");
            }
            catch (e) {
                alert("加入收藏失败，请使用Ctrl+D进行添加");
            }
        }
    }

    $(function () {

        $(window).scroll(function () {
            if ($(window).scrollTop() > 500) {
                $(".toTop").fadeIn(1000);
            }
            else {
                $(".toTop").fadeOut(1000);
            }
        });
    });

</script>

<script type="text/javascript">
    (function(win,doc){
        var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0];
        if (!win.alimamatk_show) {
            s.charset = "gbk";
            s.async = true;
            s.src = "http://a.alimama.cn/tkapi.js";
            h.insertBefore(s, h.firstChild);
        };
        var o = {
            pid: "mm_15381814_3231015_60908094",/*推广单元ID，用于区分不同的推广渠道*/
            appkey: "23235425",/*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/
            unid: "",/*自定义统计字段*/
            type: "click" /* click 组件的入口标志 （使用click组件必设）*/
        };
        win.alimamatk_onload = win.alimamatk_onload || [];
        win.alimamatk_onload.push(o);
    })(window,document);
</script>

<script type="text/javascript" src="<?php echo PUBLIC_PATH?>/scrollTop2.js"></script>
</body>
</html>

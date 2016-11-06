<div class="footer">
    <div class="container">
        <p>&copy;<span class="copyright-year">2008</span> <a href="<?php $this->options->siteUrl(); ?>" class="link" target="_blank"><?php $this->options->title() ?></a><br/><?php $this->options->description(); ?></p><p>if we did all the things we are capable of, we would literally astound ourselves.</p><p> <a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a> | 
        <a href="<?php $this->options->commentsFeedUrl(); ?>" class="link" ><?php _e('评论 RSS'); ?></a> | <a class="link" href="https://kelvin.mbioq.com/sitemap.xml"><?php _e('站点 Sitemap'); ?></a> | <a class="link" href="mailto:me@gnux.cn"><?php _e('联系 Email'); ?></a> | <a class="link" href="https://www.facebook.com/zhaoxiaofeng"><?php _e('Facebook'); ?></a> | <a class="link" href="https://twitter.com/xiaofengzhao"><?php _e('Twitter'); ?></a> | <a  class="link" href="https://www.rkecloud.com/?refcode=e9rpa2qnk"><?php _e('优惠VPS Rkecloud'); ?></a></p>
        <p>内存占用 <?php MemoryUsage_Plugin::output(); ?> Kb.<?php TeStat_Plugin::runtime(); ?> <?php if($this->options->siteStat):?><?php $this->options->siteStat();?><?php endif;?></p><br/>
    </div>
</div>

<div class="mask">
    <div class="nav-slider">
        <div class="nav-slider-inner">
            <ul>
                <li class="close"><a href="javascript:;"><span></span></a></li>
                <li class="search">
                    <form method="post" action="">
                        <input type="search" name="s" class="text" placeholder="关键词输入后回车搜索">
                        <!--<input type="submit" class="submit" value="Search">-->
                    </form>
                </li>
                <?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
                <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
        </div>
    </div>
</div>
<div class="back-to-top">top</div>
<script src="https://oe1kirisb.qnssl.com/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function(e) {
    // 版权处年份
    var today = new Date();
    var year = today.getFullYear();
    $(".copyright-year").text("2008-"+year);
    // 返回顶部
    $(".back-to-top").click(function(e) {
        $("body,html").animate({scrollTop:0},250);
    });
    // 导航
    $(".header ul li:last a").click(function(e) {
        $(this).fadeOut(250);
        $(".mask").fadeIn(250);
        $("body").css({
                "overflow":"hidden",
                "transform":"translateX(-240px)",
                "transition":"ease-in-out .25s"
            });
    });
    $(".nav-slider-inner ul li.close a").click(function(e) {
        $(".header ul li:last a").fadeIn(250);
        $(".mask").fadeOut(250);
        $("body").css({
                "overflow":"auto",
                "transform":"translateX(0)",
                "transition":"ease-in-out .25s"
            });
    });
});
</script>  

<script>
(function(){
var bp = document.createElement('script');
var curProtocol = window.location.protocol.split(':')[0];
if (curProtocol === 'https') {
   bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
} else {
  bp.src = 'http://push.zhanzhang.baidu.com/push.js';
}
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(bp, s);
})();           
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-79737811-1', 'auto');
ga('send', 'pageview');
</script>
<noscript><iframe src=*></iframe></noscript>
</body>
</html>
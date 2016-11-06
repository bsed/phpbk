<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
	<div class="footer-inner">
		<p><?php $this->options->description(); ?></p> <a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a> | 
        <a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a> | <a href="https://kelvin.mbioq.com/sitemap.xml"><?php _e('站点 Sitemap'); ?></a> | <a href="mailto:me@gnux.cn"><?php _e('联系 Email'); ?></a> | <a href="https://www.facebook.com/zhaoxiaofeng"><?php _e('Facebook'); ?></a> | <a href="https://twitter.com/xiaofengzhao"><?php _e('Twitter'); ?></a> | <a href="https://www.rkecloud.com/?refcode=e9rpa2qnk"><?php _e('优惠VPS Rkecloud'); ?></a><br/>
内存占用 <?php MemoryUsage_Plugin::output(); ?> Kb.<?php TeStat_Plugin::runtime(); ?>
        <p>&copy; 2008-<?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> content on this site is licensed under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 License</a>
			<?php if ($this->options->siteIcp): ?>
			<br/><a href="http://www.miitbeian.gov.cn/" target="blank"><?php $this->options->siteIcp(); ?></a>
			<?php endif; ?>
			<?php if($this->options->siteStat):?><?php $this->options->siteStat();?><?php endif;?>
		</p>
    </div>
</footer><!-- end #footer -->
</div>
<div id="scroll">
	<a href="#" class="scroll-up"><i class="fa fa-chevron-up"></i></a>
	<?php if ($this->is('post')) :?>
	<a href="#comments" data-scroll="1"><i class="fa fa-comment-o"></i></a>
	<?php endif;?>
</div>

<?php if ($this->is('post')) :?>
<script src="<?php $this->options->themeUrl('js/qrcode.js'); ?>"></script>

<script>
$(function(){
	setImgCenter();
	var qrcode = new QRCode(document.getElementById("qrcode-img"), {
        width : 256,//设置宽高
        height : 256
    });
	qrcode.makeCode("<?php $this->permalink();?>");
	
});
</script>
<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79737811-1', 'auto');
  ga('send', 'pageview');

</script>
<?php endif;?>
<?php $this->footer(); ?>
</body>
</html>

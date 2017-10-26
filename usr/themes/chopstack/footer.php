<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

		</div>
	</div>
</div>

<div id="footer">
	<div class="body_container">
		<div class="foot-log">
			2008-2017 © <a href="<?php $this->options->siteUrl(); ?>" real="nofollow"><?php $this->options->title() ?></a> . Powered by <a rel="nofollow" target="_blank" href="https://github.com/bsed">bsed . Theme by <a rel="nofollow" href="https://chopstack.com">Cho</a> 
		</div>
	</div>
</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102970207-1', 'auto');
  ga('send', 'pageview');

</script>

										  
<!--
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?5f8206e77dfbf7468852ef0e91640a33";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://static.qiniucdn.com/public/v28677/add-on/ga/analytics.js','ga');
ga('create', 'CN-79737811-1', 'auto');
ga('send', 'pageview');
</script>

<script>
jQuery(window).load(function() {
    jQuery("#loading").fadeOut(500);
});
</script>
-->
<script>
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register("/sw.js?v=560");
        }
</script>
<?php $this->footer(); ?>
</body>
</html>

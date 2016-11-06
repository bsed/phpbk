<?php $this->need('header.php'); ?>

<div class="container ofh">

	<div class="content">
		<div class="post" id="post">
			<div class="hd">
			<h1><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
			<div class="meta"><?php _e('编 辑：'); ?><?php $this->author(); ?> ┊	<?php _e('时 间：'); ?><?php $this->date('m/d/Y'); ?> ┊	<?php Views_Plugin::theViews(); ?></div>
			<?php if (isset($this->fields->desc)): ?>
			<div class="post-desc">		
				<span><b>博主提炼核心内容：</b><?php $this->fields->desc(); ?></span>
			</div><?php endif; ?>
			</div>
	                          <!--百度分享-->
	                <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more">分享到：</a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">人人</a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网">豆瓣</a><a href="#" class="bds_evernotecn" data-cmd="evernotecn" title="分享到印象笔记">印象笔记</a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{"bdSize":16},"image":{"viewList":["tsina","weixin","qzone","renren","tqq","douban","evernotecn"],"viewText":"分享到：","viewSize":"16"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='https://dn-imgpic.qbox.me/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>	
	<!--百度分享-->
	<br>
			<div class="bd">
                            <?php $this->content(); ?></div>
			<br>

			<!-- START donate by kelvin.mbioq.com -->
			<div style="text-align: center;"><strong>打赏我们，创造更多优秀内容<br>用<span style="color: #339966;"> 微信</span> OR <span style="color: #337fe5;">支付宝</span> 扫描二维码</strong></div>
			<div align="center"><img class="wp-image-558 size-thumbnail" src="<?php $this->options->weixin() ?>" alt="pay_weixin" width="150" height="150"/><img class="wp-image-558 size-thumbnail" src="<?php $this->options->alipay() ?>" alt="pay_weixin" width="150" height="150" /></div>
			<!-- END donate by yigrherb.com -->
			
			<div class="tags"><?php $this->tags(' ', true, 'none'); ?></div>  
		</div>
	</div>
	
	<ul class="post-near">
        <li class="fl">上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li class="fr">下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
	
	<div class="post-relate">
		<h3>相關文章</h3>
		<ul>
		<?php $this->related(8)->to($relatedPosts); ?>
		<?php if ($relatedPosts->have()): ?>
			<?php while ($relatedPosts->next()): ?>
				<li><a href="<?php $relatedPosts->permalink(); ?>" target="_blank" class="hot"><?php $relatedPosts->title(); ?></a></li>
			<?php endwhile; ?>
		<?php else : ?>
				<li>无相关文章</li>
		<?php endif; ?>
		</ul>
	</div>	
	
	<?php $this->need('comments.php'); ?>
<br>
</div>
<script>
document.body.addEventListener('copy', function (e) {
    if (window.getSelection().toString() && window.getSelection().toString().length > 42) {
        setClipboardText(e);
        alert('商业转载请联系作者获得授权，非商业转载请注明出处，谢谢合作。');
    }
}); 
function setClipboardText(event) {
    var clipboardData = event.clipboardData || window.clipboardData;
    if (clipboardData) {
        event.preventDefault();
        var htmlData = ''
            + '著作权归作者所有。<br>'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。<br>'
            + '作者：<?php $this->author() ?><br>'
            + '链接：' + window.location.href + '<br>'
            + '来源：<?php $this->options->siteUrl(); ?><br><br>'
            + window.getSelection().toString();
        var textData = ''
            + '著作权归作者所有。\n'
            + '商业转载请联系作者获得授权，非商业转载请注明出处。\n'
            + '作者：<?php $this->author() ?>\n'
            + '链接：' + window.location.href + '\n'
            + '来源：<?php $this->options->siteUrl(); ?>\n\n'
            + window.getSelection().toString();
 
        clipboardData.setData('text/html', htmlData);
        clipboardData.setData('text/plain',textData);
    }
}
</script>
<?php $this->need('footer.php'); ?>

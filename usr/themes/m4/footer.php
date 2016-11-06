<div class="clearfix"></div>
	
	<div class="clearfix" id="footer">
	<span class="foot_left"><a href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a> </span>
	<span class="foot_right"><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章'); ?> RSS</a> and <a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论'); ?> RSS</a></span>
	<div class="clearfix"></div>
	</div><!-- end #footer -->
</div>
<?php $this->footer(); ?>
</body>
</html>

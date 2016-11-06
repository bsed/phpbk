<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<section class="blog-banner page">
	<div class="blog-banner-img" style="background-image:url('<?php $this->options->themeUrl('img/banner.jpg');?>');"></div>
	<h2><?php $this->title();?></h2>
</section>
<article class="post-page">
	<div class="post-body post-text">
		<?php $this->content(); ?>
	</div>
</article>
<?php if($this->allow('comment')): ?>
<div class="post-extend">
	<div class="comment-col"><?php $this->need('comments.php'); ?></div>
	<div class="widget-col">
		<div class="widget">
			<h3>最新文章</h3>
			<ul class="widget-list">
				<?php $this->widget('Widget_Contents_Post_Recent')->to($RecentPosts); ?>
				<?php while($RecentPosts->next()): ?>
				<li>
				<a href="<?php $RecentPosts->permalink(); ?>" title="<?php $RecentPosts->commentsNum();_e('条评论'); ?>" target="_blank"><?php $RecentPosts->title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>
<?php $this->need('footer.php'); ?>

<?php $this->need('header.php'); ?>

<div class="container ofh">
	<div class="crumbs">
		<a href="<?php $this->options->siteUrl(); ?>">Home</a> &raquo;</li>
		<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
		Latest Post
		<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
			<?php $this->category(); ?> &raquo; <?php $this->title() ?>
		<?php else: ?><!-- 页面为其他页时 -->
			<?php $this->archiveTitle(' &raquo; ','',''); ?>
		<?php endif; ?>
	</div>
		
	<div class="content">
		<div class="page"><?php $this->content(); ?></div>
	</div>
	
	<div class="page-spolit">发表观点</div>
	
	<?php $this->need('comments.php'); ?>

</div>
		
<?php $this->need('footer.php'); ?>
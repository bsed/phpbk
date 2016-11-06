<?php $this->need('header.php'); ?>
		
<div class="content">
	<?php if ($this->have()): ?>
	<ul>
		<?php while($this->next()): ?>
			<li> [<?php $this->category(','); ?>]  <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>   <font color=#808080>(<?php $this->date('Y年m月j日'); ?> )</font></li>
		<?php endwhile; ?>
		<?php else: ?>
			<li><?php _e('没有找到内容'); ?></li>		
		
	</ul>
	<?php endif; ?>
	<br/>
	<?php $this->pageNav('上一页', '下一页', 5, '...'); ?>
</div>
		
<?php $this->need('footer.php'); ?>
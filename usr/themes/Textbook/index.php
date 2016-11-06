<?php
/**
 * 超简洁的typecho皮肤
 * 
 * @package Textbook
 * @author 黑暗游侠
 * @version 1.0.0
 * @link http://traxex.xyz
 */
 
$this->need('header.php');
?>

<div class="content">
	<?php while($this->next()): ?>
	<ul>
			<li><span style="color:#555"><?php $this->date('Y年m月j日'); ?> </span>&nbsp;&nbsp;&nbsp;&nbsp;[<?php $this->category(','); ?>]&nbsp;<a class="post-title" href="<?php $this->permalink() ?>"><?php $this->title() ?></a>   <span class="category-title"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('抢沙发', '还有板凳', '拍砖'); ?></a></span></li>	
	</ul>
	<?php endwhile; ?>
	<br/>
	<?php $this->pageNav('上一页', '下一页', 5, '...'); ?>
</div>
<?php $this->need('footer.php'); ?>
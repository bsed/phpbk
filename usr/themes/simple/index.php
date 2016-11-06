<?php
/**
 * 超简洁的typecho皮肤
 * 
 * @package Simple
 * @author windy
 * @version 3.0
 * @link https://yigrherb.com
 */
 
$this->need('header.php');
?>

<div class="container ofh">
	<div class="post-list">
		<ul>
		<?php while($this->next()): ?>
			<li> [<?php $this->category(','); ?>]  <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>   <font color=#808080>(日期：<?php $this->date('F j, Y'); ?> )</font></li>
		<?php endwhile; ?>
		</ul>
	</div>
	<?php $this->pageNav('上一页', '下一页', 2, '...'); ?>
</div>

<?php $this->need('footer.php'); ?>
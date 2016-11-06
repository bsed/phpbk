<?php
/**
 * 这是 牧师@M4 制作的一款新主题，您可以自定义一个图片，在模板，设置LOGO的地方，尺寸为980x198px。
 * 
 * @package M4-CAIN THEME 
 * @author M4
 * @version 1.0.6.24
 * @link http://typecho.me
 */
 
 $this->need('header.php');
 ?>

    <div class="grid_10" id="content">
	<?php while($this->next()): ?>
        <div class="post">
			<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<p class="entry_data">
				<span><?php _e('作者：'); ?><?php $this->author(); ?></span>
				<span><?php _e('发布时间：'); ?><?php $this->date('F j, Y'); ?></span>
				<span><?php _e('分类：'); ?><?php $this->category(','); ?></span>
				<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('No Comments', '1 Comment', '%d Comments'); ?></a>
			</p>
			<?php $this->content('阅读剩余部分...'); ?>
        </div>
	<?php endwhile; ?>

    <?php $this->pageNav(); ?>
    </div><!-- end #content-->
	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>

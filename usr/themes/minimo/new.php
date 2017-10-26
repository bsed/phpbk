<?php 
/**
 * home
 * 
 * @package custom 
 * 
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php'); 
?> 

<article class="entry"><div class="entry-content"><blockquote><p>边生结屋类蜗壳，忽开一窗洞寥廓。<br>数枝芦荻撑烟霜，一水明霞静楼阁。<br>—— 清 郑板桥</p></blockquote></div></article><section id="list" class="list-container"><h2 class="list-title title">RECENT POSTS</h2><div class="list">


<?php $this->widget('Widget_Contents_Post_Recent','pageSize=5')->to($post); ?>
<?php while($post->next()): ?>




<article class="list-item"><div class="meta"><span><span class="screen-reader">Posted on </span><time datetime="<?php $post->date('c'); ?>"><?php $post->date('F j, Y'); ?></time></span></div><header class="list-item-header"><h3 class="list-item-title"><a href="<?php $post->permalink(); ?>"><?php $post->title(); ?></a></h3></header></article>


<?php endwhile; ?>



</div></section>
	<?php $this->need('footer.php'); ?>

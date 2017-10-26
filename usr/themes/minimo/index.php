<?php
/**
 * 这是 基于Hugo的开源主题地址 https://github.com/MunifTanjim/minimo移植的
 * 
 * @package Typecho for minimo 
 * @author jrotty
 * @version 1.1
 * @link http://qqdie.com/
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>


<section class='list-container'><h1 class='list-title title'>BLOG</h1><div class='list'>

<?php while($this->next()): ?>

<article class='list-item'><div class='meta'><span><span class='screen-reader'>Posted on </span><time datetime='<?php $this->date('c'); ?>'><?php $this->date('F j, Y'); ?></time></span></div><header class='list-item-header'><h3 class='list-item-title'><a href='<?php $this->permalink() ?>'><?php $this->title() ?></a></h3></header></article>

<?php endwhile; ?>
</div>
<?php $this->pageNav('<svg class="icon" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><line x1="20" y1="12" x2="4" y2="12"></line><polyline points="10 18 4 12 10 6"></polyline></svg>', '<svg class="icon" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><line x1="4" y1="12" x2="20" y2="12"></line><polyline points="14 6 20 12 14 18"></polyline></svg>', 4, '...', array('wrapTag' => 'nav', 'wrapClass' => 'pagination', 'itemTag' => '','textTag' => 'span', 'currentClass' => 'current', 'prevClass' => 'prev', 'nextClass' => 'next',)); ?>





</section>

<?php $this->need('footer.php'); ?>

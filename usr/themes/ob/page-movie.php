<?php
 /**
  * 电影模板
  *
  * @package custom
  */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<?php while($this->next()): ?>
<div class="wrap">
    <div class="container">
        <div class="movie">
            <?php $this->content(); ?>
        </div>
    </div>
</div>
<?php endwhile; ?>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>

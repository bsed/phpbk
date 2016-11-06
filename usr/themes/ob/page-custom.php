<?php
 /**
  * 自定义页面模板
  *
  * @package custom
  */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<?php while($this->next()): ?>
<div class="wrap">
    <div class="container">
        <div class="post">
            <h2 class="post-title"><?php $this->title() ?></h2>
            <?php $this->content('Continue Reading...'); ?>
            <div class="post-info">
                <div class="lefter">
                    <?php $this->date('Y/m/d'); ?>
                </div>
                <div class="righter">
                    <?php $this->tags('', true, '无标签'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>

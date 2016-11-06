<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="content">
    <div class="post animated fadeInDown">
        <div class="post-title">
            <h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </h3>
        </div>
        <div class="post-content">
            <?php $this->content(); ?>
        </div>
    </div>
    <div class="pagination">
        <ul class="clearfix">
        </ul>
    </div>
    <?php $this->need('comments.php'); ?>

</div>
<?php $this->need('footer.php'); ?>

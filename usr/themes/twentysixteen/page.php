<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

                    <article class="post">
                        <header class="post-header">
                            <h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
                        </header>
                        <div class="post-content">
                            <?php $this->content(); ?>
                        </div>
                        <footer class="post-footer"><span class="post-author"><a href="<?php $this->author->permalink()?>"><?php $this->author()?></a></span><span class="post-date"><a href="<?php $this->permalink()?>"><?php $this->date('F j, Y'); ?></a></span></footer>
                    </article>

    <?php $this->need('comments.php'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

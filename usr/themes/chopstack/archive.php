<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="layout">
    <div class="body_container">
        <div class="pure-g">


            <div class="post-cols">
                <div id="list_container">

        <?php while($this->next()): ?>

<article class="post-box pure-u-1 pure-u-sm-1-2 <?php if ($this->sequence ==1 ): ?>pure-u-md-2-3<?php else: ?>pure-u-md-1-3<?php endif; ?>">
                    <div class="post">

                    <?php if (array_key_exists('img',unserialize($this->___fields()))): ?>

                        <a href="<?php $this->permalink(); ?>" rel="nofollow" class="post-cover-box"> 
                        <div style="background-image:url(<?php $this->fields->img(); ?>);" class="post-cover">
                        </div>
</a> 
                        <div class="post-text">
                            <h2 class="post-title">
                                <a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a> 
                            </h2>
                            <div class="post-content">
                                <div class="p_part">
                                    <p>
                                        <?php if (array_key_exists('word',unserialize($this->___fields()))): ?>
                                        <?php $this->fields->word(); ?>
                                        <?php else: ?>
                                        <?php $this->excerpt(60, ' ...'); ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="post-meta">
                                <?php $this->date(); ?>
                            </div>
                        </div>


                    <?php else: ?>

                        <div class="post-text post-text-full">
                            <h2 class="post-title">
                                <a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a> 
                            </h2>
                            <div class="post-content">
                                <?php $this->content(); ?>
                            </div>
                            <div class="post-meta">
                                <?php $this->date(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    </div>
</article>

        <?php endwhile; ?>

                </div>
            </div>
            
            <div class="pure-u-1-1">
                <div class="paginator pager pagination">
                    <div class="paginator_container pagination_container">
                        <?php $this->pageLink('<x aria-label="Previous" class="newer-posts">上一页</x>'); ?> <?php $this->pageLink('<x aria-label="Next" class="older-posts">下一页</x>','next'); ?> 
                        <div style="clear:both;height:0;">
                        </div>
                    </div>
                </div>
            </div>

<?php $this->need('footer.php'); ?>

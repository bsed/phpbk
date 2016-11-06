<?php
/**
 * 仿自WordPress主题，非扒皮。
 * 
 * @package TE-Twentysixteen 
 * @author milu
 * @version 1.0
 * @link http://imilu.xyz
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
                <main class="post-list">
                    <?php while($this->next()): ?>
                    <article class="post">
                        <header class="post-header">
                            <div class="post-title"><h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2></div>
                        </header>
                        <div class="post-content">
                            <span class="post-more"><?php $this->content('- 阅读剩余部分 -'); ?></span>
                        </div>
                        <footer class="post-footer"><span class="post-date"><a href="<?php $this->permalink() ?>"><?php $this->date('F j, Y'); ?></a></span><span class="post-comments"><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('留下评论', '有 1 条评论', '有 %d 条评论'); ?></a></span></footer>
                    </article>
                    <?php endwhile; ?>
                </main>
                <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
            </div><!--END #CONTENT-->
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

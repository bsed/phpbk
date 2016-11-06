<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
            <aside class="sidebar">
                <section class="widget">
                    <form action="" class="search-form">
                        <label>
                            <!--<span class="screen-reader-text">搜索：</span>-->
                            <input type="search" class="search-field" placeholder="搜索…" value="" name="s">
                        </label>
                        <button type="submit" class="search-submit"></button>
                    </form>
                </section>
                </section>
                <section class="widget">
                    <h2 class="widget-title">页面一览</h2>
                    <ul>
                        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
	                    <?php while($pages->next()): ?>
	                    <li><a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
	                    <?php endwhile; ?>
                    </ul>
                </section>
                <section class="widget">
                    <h2 class="widget-title">近期文章</h2>
                    <ul>
                        <?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                    </ul>
                </section>
                <section class="widget">
                    <h2 class="widget-title">近期评论</h2>
                    <ul>
                    <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
                    <?php while($comments->next()): ?>
                        <li><a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>发表在<a href="<?php $comments->permalink(); ?>"><?php $comments->title(); ?></a></li>
                    <?php endwhile; ?>
                    </ul>
                </section>
                <section class="widget">
                    <h2 class="widget-title">文章归档</h2>
                    <ul>
                        <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
                    </ul>
                </section>
                <section class="widget">
                    <h2 class="widget-title">分类目录</h2>
                        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
                </section>
            </aside>
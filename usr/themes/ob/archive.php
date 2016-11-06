<?php
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div class="wrap">
    <div class="container">
        <div class="archive-title">
            <h3>- <?php $this->archiveTitle(array(
                'category'  =>  _t('分类 %s 下的文章'),
                'search'    =>  _t('包含关键字 %s 的内容'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
            ), '', ''); ?> -</h3>
        </div>
    </div>
</div>

<div class="wrap">
	<div class="container">
        <div class="archive">
            <ul>
                <?php if ($this->have()): ?>
                    <?php while($this->next()): ?>
                        <li><span><?php $this->date('Y/m/d'); ?></span><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></li>    
                    <?php endwhile; ?>
                <?php else: ?>
                <li>空空的什么都没有 :(</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<div class="page-nav">
    <?php $this->pageNav(); ?>
</div>

<?php $this->need('footer.php'); ?>

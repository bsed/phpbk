<?php
/**
 * 这是一套清爽型主题，精简设计，内容为王。这也是一套不怎么灵活的主题，logo、favicon 甚至配色、布局都是写死的，想自定义些内容还需要懂点相关代码知识。
 * 页面自适应设计，兼容现代浏览器。不会兼容过时的 IE 8 及以下版本浏览器。
 * 主题免费，不定期更新。
 * 因为我有强迫症，代码必须整齐，所以取了“obsessive”（强迫症的意思，iciba 搜来的）这个名。除了 Typecho 函数编译出来的 HTML 代码有些杂乱外，其他都还算 OK。
 * 
 * @package obsessive
 * @author 阿歪
 * @version 0.2.1
 * @link http://ryli.pw/
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
<?php while($this->next()): ?>
<div class="wrap">
    <div class="container">
        <div class="post">
            <?php if (array_key_exists('thumb',unserialize($this->___fields()))): ?>
            <div class="index-post-thumb">
                <a class="index-post-cover" href="<?php $this->permalink() ?>">
                    <img class="thumb" src="<?php echo $this->fields->thumb;?>">
                </a>
            </div>
            <?php else : ?>
            <?php $thumb = showThumb($this,null,true); if(!empty($thumb)):?>
            <div class="index-post-thumb">
                <a class="index-post-cover" href="<?php $this->permalink() ?>">
                    <img class="thumb" src="<?php echo $thumb;?>">
                </a>
            </div>
            <?php endif; ?>
            <?php endif; ?>
            <h2 class="post-title">            
                <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
            </h2>
            <p><?php $this->excerpt(80, '...'); ?></p>
            <a href="<?php $this->permalink() ?>" class="btn-read-more">阅读全文</a>
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

<div class="page-nav">
    <?php $this->pageNav(); ?>
</div>

<?php $this->need('footer.php'); ?>

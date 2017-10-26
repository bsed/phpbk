<?php
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 <?php if($this->have()):?>
<?php while($this->next()): ?>
<div class="wrap">
    <div class="container">
        <div class="post">
            <h1 class="post-title"><?php $this->title() ?></h1>
            <?php parseContents($this); ?>
             <div class="qr-code">                       
               <img src="//pan.baidu.com/share/qrcode?w=145&h=145&url=<?php $this->permalink() ?>" alt="文章二维码" />
             <div>扫一扫，手机阅读更方便</div>
             </div>
            <div class="post-info">
                <div class="lefter">
                <?php $this->thePrev(' %s'); ?></li>
                </div>
                <div class="righter">
                	<?php $this->theNext('%s '); ?></li>
                </div>
            </div>
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
<?php else:?>
        <div>暂无文章</div>
 <?php endif?>
<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>

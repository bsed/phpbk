<?php $this->need('header.php'); ?>	

<div class="content">
	<div class="post">
	<div>
		<?php $this->content(); ?>
	</div>
	<br>
	</div>
	<div class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </div>
    <br/>
    <?php $this->need('comments.php'); ?>
</div>	
<?php $this->need('footer.php'); ?>

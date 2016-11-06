<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 * 
 * @package Typecho Replica Theme 
 * @author Typecho Team
 * @version 1.2
 * @link http://typecho.org
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
	<div class="autopagerize_page_element">
		<div class="content">
			<div class="post animated fadeInDown">
				<div class="post-title">
					<h3><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h3>
				</div>
				<div class="post-content">
					<p><?php $this->content('- 阅读剩余部分 -'); ?></a></p>
				</div>
				<div class="post-footer">
					<div class="meta">
						<div class="info">
							<i class="fa fa-calendar"></i><span class="date"><?php $this->date('F j, Y'); ?></span>
							<i class="fa fa-tag"></i><a href="#" class="tag">&nbsp;<?php $this->tags(', ', true, 'none'); ?></a>
						</div>
					</div>
				</div>
			</div>
			<?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
			
		</div>
	</div>
<?php $this->need('footer.php'); ?>

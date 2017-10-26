<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<article lang="en" class="entry"><header class="entry-header"><div class="entry-info"><h2 class="entry-title title"><?php $this->title() ?></h2></div><div class="meta"><span class="posted-on"><svg class="icon" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg><span class="screen-reader">Posted on </span><time class="date" datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time></span><span class="byline"><svg class="icon" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><path d="M21,21V20c0-2.76-4-5-9-5s-9,2.24-9,5v1"></path><path d="M16,6.37A4,4,0,1,1,12.63,3,4,4,0,0,1,16,6.37Z"></path></svg><span class="screen-reader"> by </span><?php $this->author(); ?></span></div></header><div class="entry-content">
      <?php
$this->content();
?>
</div><footer class="entry-footer"></footer></article>






<nav class="entry-nav"><div class="entry-nav-links">

<?php $this->thePrev('<div class="prev-entry"><span aria-hidden="true"><svg class="icon" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><line x1="20" y1="12" x2="4" y2="12"></line><polyline points="10 18 4 12 10 6"></polyline></svg> 前</span><span class="screen-reader">Previous post: </span>%s</div>',''); ?>
<?php $this->theNext('<div class="next-entry"><span class="screen-reader">Next post: </span>%s<span aria-hidden="true">后 <svg class="icon" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true"><line x1="4" y1="12" x2="20" y2="12"></line><polyline points="14 6 20 12 14 18"></polyline></svg></span></div>',''); ?>









</div></nav>













<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>

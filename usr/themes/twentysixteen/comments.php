<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="comments" id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
	<h3 class="comments-title"><?php $this->commentsNum(_t('发表评论'), _t('这里有1个想法'), _t('这里有%d个想法')); ?></h3>
    <?php $comments->listComments(); ?>
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    <?php endif; ?>
    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
    	<h3 class="reply-title"><?php _e('添加新评论'); ?></h3>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" class="comment-form" role="form">
            <?php if($this->user->hasLogin()): ?>
            <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <p>评论框</p>
            <p>
                <label for="textarea" class="required"></label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
            </p>
            <p>
                <button type="submit" class="comment-submit"><?php _e('提交评论'); ?></button>
            </p>
            <?php else: ?>
            <p>
                <label for="textarea" class="required"><?php _e('评论 *'); ?></label>
                <textarea rows="8" cols="50" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
            </p>
    		<p>
                <label for="author" class="required"><?php _e('姓名 *'); ?></label>
    			<input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
    		</p>
    		<p>
                <label for="mail"<?php if ($this->options->commentsRequireMail): ?> class="required"<?php endif; ?>><?php _e('电子邮件'); ?><?php if ($this->options->commentsRequireMail): ?><?php _e(' *'); ?><?php endif; ?></label>
    			<input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</p>
    		<p>
                <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('站点'); ?></label><?php if ($this->options->commentsRequireURL): ?><?php _e(' *'); ?><?php endif; ?>
    			<input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</p>
            <p>
                <button type="submit" class="comment-submit"><?php _e('提交评论'); ?></button>
            </p>
            <?php endif; ?>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
</div>

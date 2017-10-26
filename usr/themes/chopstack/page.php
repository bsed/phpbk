<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="layout">

<?php if (array_key_exists('img',unserialize($this->___fields()))): ?>

<div style="background:#f5f5f5 url(<?php $this->fields->img(); ?>) center;background-size:cover;" class="neck-cover"></div>

<style>#nav-menu .site_nav li a{
    color:#fff!important;
}
#logo{
    color:#ccc!important;
}
#logo:hover{
    color:#f5f5f5!important;
}
#header .site-name .site-avatar{
    border-color:#ccc;
}
.post-lady{
    margin-top:0!important;
}
.post-page .post-title-position-box .post-header-title{
    color:#222!important;
}
</style>

<?php else: ?>

<style>.post-layout{
    margin-top:7em;
}
.post-header-title{
    color: #333!important;
}
.post-date{
    color: #000!important;
}
</style>

<?php endif; ?>



    <div class="post-layout">
        <div class="body_container">


            <div class="pure-g">
                <div class="hidden-if-min pure-u-sm-1-16 pure-u-md-1-6">
                    <div class="post-aside">
                    </div>
                </div>
                <div class="pure-u-1 pure-u-sm-7-8 pure-u-md-2-3 post-body">
                    <div class="post">
                        <div class="post-title-position-box">
                            <div class="post-date">
                                <?php $this->date(); ?>
                            </div>
                            <h1 class="post-header-title">
                                <?php $this->title() ?>
                            </h1>
                        </div>
                        <div class="post-content">
                            <?php $this->content(); ?>
                        </div>
                        <div class="doc_comments">
						<?php $this->need('comments.php'); ?>
						</div>
                    </div>
                </div>
            </div>



<style>#header #nav-menu .site_nav span:first-child a {
    border-bottom:2px solid #000;
}
</style>

<?php $this->need('footer.php'); ?>

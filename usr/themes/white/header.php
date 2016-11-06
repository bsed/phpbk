<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta name="applicable-device" content="pc,mobile">
    <meta name="baidu-site-verification" content="c1YzEMM8wH" />
    <meta name="google-site-verification" content="JqGjoIrlJuSvuRxJZOtNanJCftMWxUQ0wgz_K25HwTs" />
    <meta property="qc:admins" content="24015746446166521716375" />
    <meta name="robots" content="all" />
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=yes"/>
    <!-- 输出HTML头部信息 -->
    <meta name="author" content="kelvin,qq284178359" />
    <meta name="generator" content="kelvin@mbioq" />
    <meta name="keywords" content="<?php $this->options->keywords(); ?>" />
    <?php if($this -> is('category')){ ?>
    <meta name="description" content="<?php echo $this->getDescription(); ?>" />
    <?php } else if($this -> is('post')){ ?>
<meta name="description" content="<?php echo getPostDesc($this); ?>" />
    <link rel="canonical" href="<?php $this->permalink() ?>" /> 
     <?php } else { ?>
<meta name="description" content="<?php $this->options->description(); ?>" />
     <?php } ?>
<title><?php if($this->is('index')){ ?><?php $this->options->title(); ?> - <?php $this->options->description(); ?> 
        <?php if($this->_currentPage>1) echo '- 第 '.$this->_currentPage.' 页  '; ?>
	<?php }  else if($this->is('category')) { ?>
	<?php $this->archiveTitle(' &lt; ','',' '); ?> - <?php $this->options->title(); ?> - <?php $this->options->description(); ?>
	<?php } else if($this->is('tag')) { ?>
	tags: <?php $this->archiveTitle(' &lt; ','',' '); ?> - <?php $this->options->title(); ?> - <?php $this->options->description(); ?>
	<?php } else if($this->is('archive'))  { ?>
	keyword: <?php $this->archiveTitle(' &lt; ','',' '); ?> - <?php $this->options->title(); ?> - <?php $this->options->description(); ?>
	<?php } else if($this->is('attachment')) {?>
	attachment: <?php $this->archiveTitle(' &lt; ','',' '); ?> - <?php $this->options->title(); ?> - <?php $this->options->description(); ?><?php }       else  { ?>
 	<?php $this->archiveTitle('', '', ' '); ?> - <?php $this->options->title(); ?> - <?php $this->options->description(); ?>
	<?php } ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.min.css'); ?>?ver=20160208834">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>?ver=2016020890477">
    <link rel="shortcut icon" href="<?php if($this->options->logoUrl): echo $this->options->logoUrl; else: $this->options->themeUrl('favicon.png');endif; ?>">
    <script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>?ver=20160208814"></script>
    <script src="<?php $this->options->themeUrl('js/common.js'); ?>?ver=20160208814"></script>
    <script src="<?php $this->options->themeUrl('js/unslider.js'); ?>?ver=20160208814"></script>
    <!--[if lt IE 9]>
    <script src="//cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
        <?php $this->header("generator=&template="); ?>
	<script type="text/javascript">
		window.action = "<?php $this->options->index('action/');?>";
	</script>

</head>
<body ondragstart="return false">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
<div id="overlay">
	<i class="fa fa-remove" id="overlay-close"></i>
	<div class="overlay-layer" id="overlay-about">
		<?php $this->options->siteIntro(); ?>
	</div>
	<div class="overlay-layer" id="overlay-menu">
		<a class="nav-home <?php if($this->is('index')): ?>current<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
		<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		<?php while($pages->next()): ?>
		<a class="nav-<?php $pages->slug();?> <?php if($this->is('page', $pages->slug)): ?> current<?php endif; ?>" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
		<?php endwhile; ?>
	</div>
</div>
<div id="wrapper">
<header>
	
	<a href="#" class="btn-menu"><i class="fa fa-bars"></i></a>
	<nav id="nav-menu" class="clearfix">
		<a class="nav-home <?php if($this->is('index')): ?>current<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
		<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
		<?php while($pages->next()): ?>
		<a class="<?php if($pages->sequence == 2){ _e('nav-left ');}?> nav-<?php $pages->slug();?> <?php if($this->is('page', $pages->slug)): ?> current<?php endif; ?>" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
		<?php endwhile; ?>
		<a style="float: right;margin-right: 0; ">人若无名，便可专心练剑。</a>
	</nav>
</header><!-- end #header -->
<div id="body">
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.25, minimum-scale=1.0, user-scalable=no,minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes"> 
<meta name="format-detection" content="telephone=no"> 
<meta name="format-detection" content="email=no" /> 
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" /> 
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta name="applicable-device" content="pc,mobile">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="MobileOptimized" content="320">
<meta name="HandheldFriendly" content="true" />
<meta name="browsermode" content="portrait">
<meta name="x5-orientation" content="portrait">
<meta name="renderer" content="webkit">
<meta name="baidu-site-verification" content="c1YzEMM8wH" />
<meta name="google-site-verification" content="JqGjoIrlJuSvuRxJZOtNanJCftMWxUQ0wgz_K25HwTs" />
<meta name="sogou_site_verification" content="diKut6Q3Uo"/>
<meta name="robots" content="all" />
<meta name="theme-color" content="#fff">
<meta name="author" content="https://kelvin.mbioq.com/">
<meta name="generator" content="kelvin@mbioq" />
<meta name="keywords" content="<?php $this->options->keywords(); ?>" />
<meta name="description" content="<?php $this->options->description(); ?>" />
<?php if ($this->is('post')) : ?>
<meta property="og:type" content="article"/>
<meta property="article:published_time" content="<?php $this->date('c'); ?>"/>
<meta property="article:author" content="<?php $this->author(); ?>" />
<meta property="article:published_first" content="<?php $this->options->title() ?>, <?php $this->permalink() ?>" />
<meta property="og:title" content="<?php $this->title() ?>" />
<meta property="og:url" content="<?php $this->permalink() ?>" />
<?php endif; ?>
<link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" type="image/vnd.microsoft.icon" />  
<link rel="icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" type="image/vnd.microsoft.icon" />  
<link rel="apple-touch-icon" sizes="57x57" href="<?php $this->options->themeUrl('img/apple-touch-icon-57x57.png'); ?>" />
<link rel="apple-touch-icon" sizes="60x60" href="<?php $this->options->themeUrl('img/apple-touch-icon-60x60.png'); ?>" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php $this->options->themeUrl('img/apple-touch-icon-72x72.png'); ?>" />
<link rel="apple-touch-icon" sizes="76x76" href="<?php $this->options->themeUrl('img/apple-touch-icon-76x76.png'); ?>" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php $this->options->themeUrl('img/apple-touch-icon-114x114.png'); ?>" />
<link rel="apple-touch-icon" sizes="120x120" href="<?php $this->options->themeUrl('img/apple-touch-icon-120x120.png'); ?>" />
<link rel="apple-touch-icon" sizes="144x144" href="<?php $this->options->themeUrl('img/apple-touch-icon-144x144.png'); ?>" />
<link rel="apple-touch-icon" sizes="152x152" href="<?php $this->options->themeUrl('img/apple-touch-icon-152x152.png'); ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php $this->options->themeUrl('img/apple-touch-icon-180x180.png'); ?>" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>?ver=201602099872" />
<link rel="canonical" href="<?php $this->permalink() ?>" /> 
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
     <!--[if lt IE 9]>
    <script src="//cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?php $this->header('keywords=&description=&generator=&template=&pingback=&xmlrpc=&wlw='); ?>
</head>
<body oncontextmenu="return false" ondragstart="return false">
<div class="header">
    <div class="container">
        <a href="<?php $this->options->siteUrl(); ?>" class="logo">
            <img src="<?php $this->options->themeUrl('img/logo.jpg'); ?>">
            <?php $this->options->title() ?>
        </a>
        <ul class="nav">
            <li>
                <a href="javascript:;" class="show-nav-slider">
                    <span></span>
                </a>
            </li>
        </ul>
    </div>
</div>

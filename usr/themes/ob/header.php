<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html lang="zh" manifest="/offline.manifest">
<head>
<meta charset="utf-8">
<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="https://og9j919f5.qnssl.com" />
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
<link rel="manifest" href="/manifest.json">
<link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.ico'); ?>" type="image/x-icon" />  
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
<link rel="preload" as="font" href="https://og9j919f5.qnssl.com/usr/themes/ob/font/pacifico.woff" type="font/woff" crossorigin />
<link rel="preload" as="font" href="https://og9j919f5.qnssl.com/usr/themes/ob/font/pacifico.ttf" type="font/ttf" crossorigin />
	
<link rel="preload" href="<?php $this->options->themeUrl('style.css'); ?>?ver=201605054456" as="style" onload="this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>?ver=201605054456"></noscript>
<script>
		/*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
		!function(a){"use strict";var b=function(b,c,d){function e(a){return h.body?a():void setTimeout(function(){e(a)})}function f(){i.addEventListener&&i.removeEventListener("load",f),i.media=d||"all"}var g,h=a.document,i=h.createElement("link");if(c)g=c;else{var j=(h.body||h.getElementsByTagName("head")[0]).childNodes;g=j[j.length-1]}var k=h.styleSheets;i.rel="stylesheet",i.href=b,i.media="only x",e(function(){g.parentNode.insertBefore(i,c?g:g.nextSibling)});var l=function(a){for(var b=i.href,c=k.length;c--;)if(k[c].href===b)return a();setTimeout(function(){l(a)})};return i.addEventListener&&i.addEventListener("load",f),i.onloadcssdefined=l,l(f),i};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);
		/*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
		!function(a){if(a.loadCSS){var b=loadCSS.relpreload={};if(b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(b){return!1}},b.poly=function(){for(var b=a.document.getElementsByTagName("link"),c=0;c<b.length;c++){var d=b[c];"preload"===d.rel&&"style"===d.getAttribute("as")&&(a.loadCSS(d.href,d,d.getAttribute("media")),d.rel=null)}},!b.support()){b.poly();var c=a.setInterval(b.poly,300);a.addEventListener&&a.addEventListener("load",function(){b.poly(),a.clearInterval(c)}),a.attachEvent&&a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this);
</script>
<!--<link rel="stylesheet" href="<?php $this->options->themeUrl('prism.css'); ?>?ver=201605054123" />-->
<link href="<?php $this->options->themeUrl('zoom.css'); ?>?ver=201605054123" rel="stylesheet">
<link href="<?php $this->options->themeUrl('toc.css'); ?>?ver=201605054123"  onload="this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="<?php $this->options->themeUrl('toc.css'); ?>?ver=201605054123"></noscript>
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
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <?php $this->header('keywords=&description=&generator=&template=&pingback=&xmlrpc=&wlw='); ?>

 <style>
.pjax_loading {position: fixed;top: 45%;left: 45%;display: none;z-index: 999999;width: 124px;height: 124px;background: url('images/pjax_loading.gif') 50% 50% no-repeat;}
.pjax_loading1 {position: fixed;top: 0;left: 0;z-index: 999999;display: none;width: 100%;height: 100%;background-color: #4c4c4c;opacity: .2} </style>
<body ondragstart="return false">
<!--
<div id="loading">
<div id="loading-one"></div>
<div class="spinner">
  <div class="rect1"></div>
  <div class="rect2"></div>
  <div class="rect3"></div>
  <div class="rect4"></div>
  <div class="rect5"></div>
</div>
</div>
-->
<div class="header">
    <div class="container">
        <a href="<?php $this->options->siteUrl(); ?>" class="logo">
            <img src="<?php $this->options->themeUrl('img/logo2.svg'); ?>">
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

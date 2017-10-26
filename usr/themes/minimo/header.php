<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE html><html lang='en'>

<head><meta charset='utf-8'><meta name='viewport' content='width=device-width, initial-scale=1'>
<title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
<link rel='icon' href='<?php $this->options->themeUrl('img/favicon.ico'); ?>'>
<link rel='apple-touch-icon' href='<?php $this->options->themeUrl('img/apple-touch-icon.png'); ?>'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Ubuntu:400,400i,700&subset=latin'><link rel='stylesheet' href='<?php $this->options->themeUrl('style.css'); ?>'>
 <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head><body class='<?php if($this->is('index')||$this->is('front')): ?>home<?php else: ?>page<?php endif; ?>'>

<div class='site'><header id='header' class='header-container'>

<div class='site-header'>
<nav id='navmenu' aria-label='Main Menu'>

<ul class='main-menu'>

<li><a href='<?php $this->options->rootUrl(); ?>/' <?php if($this->is('index')): ?>class='current'<?php endif; ?> aria-current='page'>HOME</a></li>
<li><a href='<?php $this->options->rootUrl(); ?>/<?php if ($this->options->rewrite==0): ?>index.php/<?php endif; ?>blog/' <?php if($this->is('front')): ?>class='current'<?php endif; ?>>BLOG</a></li></ul>
</nav>

<div class='site-info'>
<h1 class='site-title title'><?php $this->options->title(); ?></h1>
<p class='site-description'><?php $this->options->description() ?></p></div>


</div></header>
<main class='main'>
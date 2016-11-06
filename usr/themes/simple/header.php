<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>	
	<meta http-equiv="Cache-Control" content="no-siteapp"/>
	<meta http-equiv="Cache-Control" content="no-transform"/>
	<meta name="applicable-device" content="pc,mobile"/>
        <meta name="robots" content="all" />
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=yes"/>
	<!-- 输出HTML头部信息 -->
	<meta name="author" content="littlewindy" />
	<meta name="generator" content="Yigrherb.com" />
	<meta name="keywords" content="<?php $this->options->keywords(); ?>" />
	<?php if($this -> is('category')){ ?>
        <meta name="description" content="<?php echo $this->getDescription(); ?>" />
	<?php } else if($this -> is('post')){ ?>
        <meta name="description" content="<?php echo getPostDesc($this); ?>" />
        <link rel="canonical" href="<?php $this->permalink() ?>" /> 
	<?php } else { ?><meta name="description" content="<?php $this->options->description(); ?>" />
	<?php } ?>
        <title>
        <?php if($this->is('index')){ ?><?php $this->options->title(); ?> - <?php $this->options->description(); ?> 
	<?php if($this->_currentPage>1) echo ' 第 '.$this->_currentPage.' 页 '; ?>
	<?php }  else if($this->is('category')) { ?>
	<?php $this->archiveTitle(' &lt; ','',''); ?> - <?php $this->options->title(); ?> - <?php $this->options->description(); ?>
	<?php } else if($this->is('tag')) { ?>
	tags: <?php $this->archiveTitle(' &lt; ','',''); ?> - <?php $this->options->title(); ?> - <?php $this->options->description(); ?>
	<?php } else if($this->is('archive'))  { ?>
	keyword: <?php $this->archiveTitle(' &lt; ','',''); ?> - <?php $this->options->title(); ?> - <?php $this->options->description(); ?>
	<?php } else if($this->is('attachment')) {?>
	attachment: <?php $this->archiveTitle(' &lt; ','',''); ?> - <?php $this->options->title(); ?> - <?php $this->options->description(); ?><?php }       else  { ?>
 	<?php $this->archiveTitle('', '', ''); ?> - <?php $this->options->title(); ?> - <?php $this->options->description(); ?>
	<?php } ?>
        </title>
 	<link rel="shortcut icon" href="<?php $this->options->themeUrl('favicon.png'); ?>" >
        <link rel="dns-prefetch" href="//kelvin.mbioq.com">
	<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.min.css'); ?>?ver=20160207811" />
        <link href="https://oe1kirisb.qnssl.com/usr/plugins/Prismjs/themes/prism-coy.css?ver=20160207811" rel="stylesheet"/>
</head>

<body>
	<div class="body">
	<div class="header ofh">
		<div class="hd ofh">
                        <a href="<?php $this->options->siteUrl(); ?>" title="< <?php $this->options->title() ?> >">
			 <div class="logo fl"><img class="limg" src="//kelvin.mbioq.com/usr/themes/simple/logo.jpg" alt="Yigrherb"></div>
                        </a>
			<div class="sologn fl"><?php $this->options->sologn() ?></div>
		</div>
		<?php if($this -> is('post')){ ?>
		
		<?php } else { ?>
		<nav class="nav ofh">
			<ul>
				<li class="li-up">| <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首  页'); ?></a> | <a href="<?php $this->options->siteUrl(); ?>archives.html">归 档</a> | <a href="<?php $this->options->siteUrl(); ?>data.html">资 料</a> | <a href="<?php $this->options->siteUrl(); ?>links.html">友 链</a> | <a href="<?php $this->options->siteUrl(); ?>about-me.html">关于</a> |</li>
				<li class="li-down">| <?php $this->widget('Widget_Metas_Category_List')
                ->parse('<a href="{permalink}">{name}</a>  | '); ?></li>
			</ul>	
		</nav>
		<?php } ?>
	</div>
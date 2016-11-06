<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content='kelvin'>
    <meta name="copyright" content="© 208-2016 kelvin.mbioq.com">
    <meta name="keywords" content="Kyomini,Kyomini Book,Laravel,PHP,Mysql,Desigen">
    <meta name="description" content="回归优雅的站点日志">

    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="shortcut icon" href="./favicon.ico" />
    <link rel="bookmark" href="./favicon.ico" type="image/x-icon"　/>
    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/css.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/font-awesome.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/basic.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->
    <div class="sidebar animated fadeInDown">
        <div class="logo-title">
            <div class="title">
                <a href="#" title="<?php $this->options->siteUrl(); ?>"><img src="http://7xvfuv.com1.z0.glb.clouddn.com/logo.gif" style="width:127px;" alt="<?php $this->options->title() ?>"  /></a>
                <h3 title=""><a href="<?php $this->options->siteUrl(); ?>">kelvin@mbioq</a> </h3>
                <div class="description">
                    <p><?php $this->options->description() ?></p>
                </div>
            </div>
        </div>
        <div class="search">
                <form id="search" method="post" action="../" >
                    <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                    <input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                    <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                </form>
        </div>

        <div class="footer">
            <a target="_blank" href="<?php $this->options->siteUrl(); ?>"><span>power by </span></a>MBIOQ
            <div class="by_farbox"><a href="<?php $this->options->siteUrl(); ?>" target="_blank">© 2014-2017 kelvin.mbioq.com</a> </div>
        </div>
    </div>
    <div class="main">
        <div class="page-top animated fadeInDown">
            <div class="nav">
                <li><a <?php if($this->is('index')): ?> class="current" <?php endif; ?>href="<?php $this->options->siteUrl(); ?>" ><?php _e('首页'); ?></a> </li>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                    <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
            </div>
        </div>

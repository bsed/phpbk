<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * Pocket
 *
 * @package typecho-pocket
 * @link https://github.com/fengqi/typecho-pocket
 */

$options = Typecho_Widget::widget('Widget_Options');
$key = $options->plugin('Pocket')->key;
$token = $options->plugin('Pocket')->token;

if (!$key || !$token) exit('未配置或 Token 失效.');

$page = !isset($_REQUEST['page']) || $_REQUEST['page'] <= 1 ? 1 : $_REQUEST['page'];
$per = 20;
$prev_page = $page - 1 <= 0 ? 1 : $page - 1;
$next_page = $page + 1;
$offset = ($page -1) * $per;

$now = time();
$cacheTime = 600;
$content = '';
$file = '/tmp/pocket_'.md5('_typecho_plugin_pocket_cache_page_'.$page);
if (is_file($file)) {
    $content = file_get_contents($file);
    $_time = substr($content, 0, 10);
    $content = json_decode(substr($content, 10));

    if ($now > $_time) $content = '';
}

if (!$content) {
    $data = [
        'consumer_key' => $key,
        'access_token' => $token,
        'state' => 'all',
        'sort' => 'newest',
        'detailType' => 'simple',
        'count' => $per,
        'offset' => $offset,
    ];

    $ch = curl_init('https://getpocket.com/v3/get');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $content = curl_exec($ch);
    curl_close($ch);
    $content = json_decode($content);
}

?>

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
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>?ver=201602111798" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('prism.css'); ?>?ver=201602099872" />
<link rel="stylesheet" href="<?php $this->options->themeUrl('toc.css'); ?>?ver=201602099872" />
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
<body  ondragstart="return false">
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

<div class="col-mb-12 col-8" id="main" role="main">
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>
    </article>

    <?php foreach($content->list as $item): ?>
    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
        <h2 class="post-title" itemprop="name headline">
            <a itemtype="url" href="<?php echo $item->resolved_url ?>" target="_blank"><?php echo $item->resolved_title ?></a>
        </h2>

        <ul class="post-meta">
            <li>时间: <time datetime="<?php echo date('Y-m-d H:i:s', $item->time_added) ?>" itemprop="datePublished"><?php echo date('Y-m-d H:i:s', $item->time_added) ?></time></li>
        </ul>

        <div class="post-content" itemprop="articleBody">
            <?php echo $item->excerpt ?>
        </div>
    </article>
    <?php endforeach; ?>

    <ol class="page-navigator">
        <li class="prev"><a href="?page=<?php echo $prev_page ?>">« 前一页</a></li>
        <li class="next"><a href="?page=<?php echo $next_page ?>">后一页 »</a></li>
    </ol>

    <?php $this->need('comments.php'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>

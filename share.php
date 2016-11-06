<?php
$URLs = array( 'gnux' => 'https://gnux.cn',
               'rkecloud' => 'https://www.rkecloud.com/?refcode=e9rpa2qnk',
               'segmentfault' => 'https://segmentfault.com/u/webfd');

$defaultURL = 'https://github.com/d0f';

if($_GET['url'] != '' && array_key_exists($_GET['url'] , $URLs) )
{
    header("Location: ".$URLs[$_GET['url']]);
    exit();
}
header("Location: ".$defaultURL);
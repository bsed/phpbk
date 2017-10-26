<?php
// ********************
// * Author: stneng
// * Date: 2016.12.11
// * Introduction: https://u.nu/ytq
// *********************
    header("status: 204");
    header("Cache-Control: no-cache, max-age=0");
    header("Pragma: no-cache");

    $tid='UA-102970207-1';  // 在这里写 Google Analytics 给的 tid，形如：UA-XXXX-Y

    function create_uuid(){$str = md5(uniqid(mt_rand(), true));
        $uuid = substr($str,0,8) . '-';
        $uuid .= substr($str,8,4) . '-';
        $uuid .= substr($str,12,4) . '-';
        $uuid .= substr($str,16,4) . '-';
        $uuid .= substr($str,20,12);
        return $uuid;
    }

    if (!isset($_COOKIE["uuid"])) {$uuid=create_uuid();
        setcookie("uuid", $uuid , time()+368400000);
    }else{$uuid=$_COOKIE["uuid"];
    }

    if (function_exists("fastcgi_finish_request")) {fastcgi_finish_request(); // 对于 fastcgi 会提前返回请求结果，提高响应速度。
    }

    $url='v=1&t=pageview&';
    $url.='tid='.$tid.'&';
    $url.='cid='.$uuid.'&';
    $url.='dl='.rawurlencode(rawurldecode($_SERVER['HTTP_REFERER'])).'&';
    $url.='uip='.rawurlencode(rawurldecode($_SERVER['REMOTE_ADDR'])).'&';
    $url.='ua='.rawurlencode(rawurldecode($_SERVER['HTTP_USER_AGENT'])).'&';
    $url.='dt='.rawurlencode(rawurldecode($_GET['dt'])).'&';
    $url.='dr='.rawurlencode(rawurldecode($_GET['dr'])).'&';
    $url.='ul='.rawurlencode(rawurldecode($_GET['ul'])).'&';
    $url.='sd='.rawurlencode(rawurldecode($_GET['sd'])).'&';
    $url.='sr='.rawurlencode(rawurldecode($_GET['sr'])).'&';
    $url.='vp='.rawurlencode(rawurldecode($_GET['vp'])).'&';
    $url.='z='.$_GET['z'];
    $url='https://www.google-analytics.com/collect?'.$url;
    $ch=curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_exec($ch);
      curl_close($ch);

?>
<?php

// 设置时区
//date_default_timezone_set('Asia/Shanghai');

function themeConfig($form) {	
	/** 网站顶部的标语设置 */
	$sologn = new Typecho_Widget_Helper_Form_Element_Text('sologn', NULL, NULL, _t('网站顶部标题后面的标语'), _t('<strong>用来显示在网站顶部标题后面的标语</strong>'));
    $form->addInput($sologn);
	
	/** 站长支付宝二维码 */
	$alipay = new Typecho_Widget_Helper_Form_Element_Text('alipay', NULL, NULL, _t('文章底部的支付宝捐赠二维码'), _t('<strong>文章底部的支付宝捐赠二维码</strong>'));
    $form->addInput($alipay);
	
	/** 站长微信支付二维码 */
	$weixin = new Typecho_Widget_Helper_Form_Element_Text('weixin', NULL, NULL, _t('文章底部的微信捐赠二维码'), _t('<strong>文章底部的微信捐赠二维码</strong>'));
    $form->addInput($weixin);
	
}

/**
 * 获取文章开头作为描述
 */
function getPostDesc($obj){
	$code=array(" ","　","\t","\n","\r");
	$post=str_replace($code, '', strip_tags($obj->content)); 
	if(isset($obj->fields->desc)){
		return $obj->fields->desc;
	}else{
		return substr($post,0,280);
	}
}  


/**
 * 秒转时间，格式 年 月 日 时 分 秒
 * 
 * @author Roogle
 * @return html
 */
function getBuildTime(){
	// 本站创建的时间
	$site_create_time = strtotime('2008-01-05 00:00:00');
	$time = time() - $site_create_time;
	
	if(is_numeric($time)){
		$value = array(
			"years" => 0, "days" => 0, "hours" => 0,
			"minutes" => 0, "seconds" => 0,
		);
		if($time >= 31556926){
			$value["years"] = floor($time/31556926);
			$time = ($time%31556926);
		}
		if($time >= 86400){
			$value["days"] = floor($time/86400);
			$time = ($time%86400);
		}
		if($time >= 3600){
			$value["hours"] = floor($time/3600);
			$time = ($time%3600);
		}
		if($time >= 60){
			$value["minutes"] = floor($time/60);
			$time = ($time%60);
		}
		$value["seconds"] = floor($time);
		
		echo '<span style="color:red;">'.$value['years'].'年'.$value['days'].'天'.$value['hours'].'小时'.$value['minutes'].'分</span>';
	}else{
		echo '';
	}
}


/**
 * 分类文章数量控制 
 */
function themeInit($archive) { 
    if ($archive->is('index')) { 
        $archive->parameter->pageSize = 16; // 自定义条数 
    } else if ($archive->is('category', 'manage')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	} else if ($archive->is('category', 'diary')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	} else if ($archive->is('category', 'mind')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	} else if ($archive->is('category', 'psychic')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	} else if ($archive->is('category', 'thinking')) {
		$archive->parameter->pageSize = 18; // 自定义条数
	}
}


<?php
/**
 * 分类文章数量控制 
 */
function themeInit($archive) { 
    if ($archive->is('index')) { 
        $archive->parameter->pageSize = 15; // 自定义首页条数 
    } else if ($archive->is('category')) {
		$archive->parameter->pageSize = 15; // 自定义分类条数
	}
}
<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeInit($archive) {
    if ($archive->is('index')) {
        $archive->parameter->pageSize = 5; // 自定义条数
    }else {
       $archive->parameter->pageSize = 10; // 自定义条数
   }
	  // 判断是否是文章，如果是就插入广告
   $ad_code = '<div>谢谢观看</div>';
   if ($archive->is('single')) {
        $archive->content = prefix_insert_after_paragraph( $ad_code, 2, $archive->content );;
    }
}

function themeConfig($form) {
    //默认缩略图
    $default = new Typecho_Widget_Helper_Form_Element_Text('default_thumb', NULL, '', _t('默认缩略图'),_t('文章没有图片时显示的默认缩略图，为空时表示不显示，如http://www.example.com/image.png'));
    $form->addInput($default);


    //附件源地址
    $src_address = new Typecho_Widget_Helper_Form_Element_Text('src_add', NULL, NULL, _t('替换前地址'), _t('即你的附件存放链接，如http://kelvin.mbioq.com/usr/uploads/'));
    $form->addInput($src_address);  
    //替换后地址
    $cdn_address = new Typecho_Widget_Helper_Form_Element_Text('cdn_add', NULL, NULL, _t('替换后'), _t('即你的七牛云存储域名，如https://imgs.gnux.cn/'));
    $form->addInput($cdn_address);
}

// 插入广告所需的功能代码
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
   $closing_p = '</p>';
   $paragraphs = explode( $closing_p, $content );
   foreach ($paragraphs as $index => $paragraph) {
      if ( trim( $paragraph ) ) {
         $paragraphs[$index] .= $closing_p;
      }
      if ( $paragraph_id == $index + 1 ) {
         $paragraphs[$index] .= $insertion;
      }
   }
   return implode( '', $paragraphs );
}

/**
 * 解析内容以实现附件加速
 * @access public
 * @param string $content 文章正文
 * @param Widget_Abstract_Contents $obj
 */
function parseContent($obj){
    $options = Typecho_Widget::widget('Widget_Options');
    if(!empty($options->src_add) && !empty($options->cdn_add)){
        $obj->content = str_ireplace($options->src_add,$options->cdn_add,$obj->content);
    }

    echo trim($obj->content);
}


function parseContents($obj) {
if (preg_match_all("/<h(\d)>(.*)<\/h\d>/isU",$obj->content,$outarr)) {
			$index = array();
			$index_out = "";
			$minlevel = 6;
			for ($key=0; $key<count($outarr[2]);$key++) {
				$ta = $obj->content;
				$tb = strpos($ta, $outarr[0][$key]);
				$obj->content = substr($ta, 0, $tb)."<a name=\"ci_title{$key}\"></a>".substr($ta, $tb);

				if ($outarr[1][$key]<$minlevel) 
					$minlevel = $outarr[1][$key];
				array_push($index,
					array(
						"level"=>$outarr[1][$key],
						"link"=>"<a href=\"#ci_title{$key}\">{$outarr[2][$key]}</a>"
					)
				);
			}
			$curlevel = 0;
			foreach ($index as $i) {
				if ($i["level"]>$curlevel) $index_out.="<ul>\n";
				elseif ($i["level"]<$curlevel) $index_out.=str_repeat("</ul>\n", $curlevel-$i["level"]);
				$curlevel = $i["level"];
				$index_out .= "<li>{$i['link']}</li>\n";
			}
			$index_out.=str_repeat("</ul>\n", $curlevel - $minlevel + 1);

			$obj->content = "<div id=\"theContentIndex\">{$index_out}</div>". $obj->content;
		}
 echo trim($obj->content);
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

function showThumb($obj,$size=null,$link=false,$pattern='<div class="post-thumb"><a class="thumb" href="{permalink}" title="{title}" style="background-image:url({thumb})"></a></div>'){

    preg_match_all( "/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $obj->content, $matches );
    $thumb = '';
    $options = Typecho_Widget::widget('Widget_Options');

    $attach = $obj->attachments(1)->attachment;

    if (isset($attach->isImage) && $attach->isImage == 1){
        $thumb = $attach->url;
        if(!empty($options->src_add) && !empty($options->cdn_add)){
            $thumb = str_ireplace($options->src_add,$options->cdn_add,$thumb);
        }
        if($size!='full'){
            $thumb_width = $options->thumb_width;
            $thumb_height = $options->thumb_height;

            if($size!=null){
                $size = explode('x', $size);
                if(!empty($size[0]) && !empty($size[1])){
                    list($thumb_width,$thumb_height) = $size;
                }
            }
            $thumb .= '?imageView2/4/w/'.$thumb_width.'/h/'.$thumb_height;
        }
    }elseif(isset($matches[1][0])){
        $thumb = $matches[1][0];
        if(!empty($options->src_add) && !empty($options->cdn_add)){
            $thumb = str_ireplace($options->src_add,$options->cdn_add,$thumb);
        }
        if($size!='full'){
            $thumb_width = $options->thumb_width;
            $thumb_height = $options->thumb_height;

            if($size!=null){
                $size = explode('x', $size);
                if(!empty($size[0]) && !empty($size[1])){
                    list($thumb_width,$thumb_height) = $size;
                }
            }
            $thumb .= '?imageView2/4/w/'.$thumb_width.'/h/'.$thumb_height;
        }
    }
    
    if(empty($thumb) && empty($options->default_thumb)){
        return '';
    }else{
        $thumb = empty($thumb) ? $options->default_thumb : $thumb;
    }
    if($link){
        return $thumb;
    }
    echo str_replace(
        array('{title}','{thumb}','{permalink}'),
        array($obj->title,$thumb,$obj->permalink),
        $pattern);
}
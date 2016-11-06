<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * Copyright for Typecho
 *
 * @package Copyright
 * @author  Yves X
 * @version 0.9.1
 * @link https://github.com/Yves-X/Copyright-for-Typecho
 */

class Copyright_Plugin implements Typecho_Plugin_Interface {
	/**
	 * 激活插件方法,如果激活失败,直接抛出异常
	 * 
	 * @access public
	 * @return void
	 * @throws Typecho_Plugin_Exception
	 */
    public static function activate() {
    	Typecho_Plugin::factory('Widget_Abstract_Contents')->contentEx = array('Copyright_Plugin', 'copyright');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}

    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form) {
        echo '<p>此处为全局设置</p><p>你可以利用 Typecho 的自定义字段功能，对某篇文章或某个独立页面进行特定设置</p></p>特定设置的优先级始终高于默认设置</p>';
        echo '<p>详细说明：<a href="https://github.com/Yves-X/Copyright-for-Typecho">Github</a></p>';
    	$author = new Typecho_Widget_Helper_Form_Element_Text('author', NULL, _t('作者名称'), _t('作者'));
    	$form->addInput($author);
    	$notice = new Typecho_Widget_Helper_Form_Element_Text('notice', NULL, _t('转载时须注明出处及本声明'), _t('声明'));
    	$form->addInput($notice);
        $showURL = new Typecho_Widget_Helper_Form_Element_Checkbox('showURL', array(1=>_t('显示原文链接')), NULL, NULL, NULL);
        $form->addInput($showURL);
        $showOnPost = new Typecho_Widget_Helper_Form_Element_Checkbox('showOnPost', array(1=>_t('在文章显示')), NULL, NULL, NULL);
        $form->addInput($showOnPost);
    	$showOnPage = new Typecho_Widget_Helper_Form_Element_Checkbox('showOnPage', array(1=>_t('在独立页面显示')), NULL, NULL, NULL);
    	$form->addInput($showOnPage);
    }

    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}

    /**
     * 插件实现方法
     * 
     * @access public
     * @return void
     */
    public static function copyright($content, $widget) {
        $showOnPost = Typecho_Widget::widget('Widget_Options')->plugin('Copyright')->showOnPost;

        if (! $widget->is('single')) {
            echo $content;
            return;
        }

        else if ($widget->parameter->type == 'post') {
        	if (isset($widget->fields->switch)) {
        		if (!$widget->fields->switch) {
        			echo $content;
        		}
        		else
        			echo self::superAdd($content, $widget);
        	}
            else if ($showOnPost) {
                echo self::superAdd($content, $widget);
            }
            else {
                echo $content;
            }

        }

        else if ($widget->parameter->type == 'page') {
        	if (isset($widget->fields->switch)) {
        		if (!$widget->fields->switch) {
        			echo $content;
        		}
        		else
        			echo self::superAdd($content, $widget);
        	}
            else if ($showOnPage) {
                echo self::superAdd($content, $widget);
            }
            else {
                echo $content;
            }
        }

        else {
            echo $content;
        }
    }

    private static function superAdd($content, $widget) {
    	$res = '<hr class="content-copyright" /><blockquote>';
    	if (isset($widget->fields->author)) {
    		$author = $widget->fields->author;
            if($author) {
    		  $res = $res . '<p class="content-copyright">版权属于：' . $author . "</p>";
            }
    	}
    	else if ($author = Typecho_Widget::widget('Widget_Options')->plugin('Copyright')->author) {
    		$res = $res . '<p class="content-copyright">版权属于：' . $author . '</p>';
    	}

     	if (isset($widget->fields->url)) {
    		$url = $widget->fields->url;
            if($url) {
    			$res = $res . '<p class="content-copyright">原文链接：<a class="content-copyright" href="' . $url . '">' . $url . '</a></p>';
            }
    	}
    	else if ($showURL = Typecho_Widget::widget('Widget_Options')->plugin('Copyright')->showURL) {
    		$url = $widget->permalink;
    		$res = $res . '<p class="content-copyright">本文链接：<a class="content-copyright" href="' . $url . '">' . $url . '</a></p>';
    	}

    	if (isset($widget->fields->notice)) {
    		$notice = $widget->fields->notice;
            if($notice) {
    		  $res = $res . '<p class="content-copyright">' . $notice .'</p>';
            }
    	}
    	else if ($notice = Typecho_Widget::widget('Widget_Options')->plugin('Copyright')->notice) {
    		$res = $res . '<p class="content-copyright">' . $notice . '</p>';
    	}

    	$res = $res . '</blockquote>';
        return $content . $res;
    }
}
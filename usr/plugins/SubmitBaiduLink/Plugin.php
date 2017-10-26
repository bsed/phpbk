<?php 
/**
 * 发布、更新文章后主动提交链接给百度收录
 * 
 * @package SubmitBaiduLink
 * @author dada
 * @version 1.0.1
 * @link https://liuliudehou.com
 */
class SubmitBaiduLink_Plugin implements Typecho_Plugin_Interface {
    /* 激活插件方法 */
    public static function activate(){
        Typecho_Plugin::factory('Widget_Contents_Post_Edit')->finishPublish = array(__CLASS__, 'render');
        Typecho_Plugin::factory('Widget_Contents_Page_Edit')->finishPublish = array(__CLASS__, 'render');
        return _t('哒哒提示：请设置 <b>站点域名</b> 和 <b>密钥</b>');
    }
     
    /* 禁用插件方法 */
    public static function deactivate(){}
     
    /* 插件配置方法 */
    public static function config(Typecho_Widget_Helper_Form $form){
        preg_match("/^(http(s)?:\/\/)?([^\/]+)/i", Helper::options()->siteUrl, $matches);
        $domain = $matches[2] ? $matches[2] : '';
        $site = new Typecho_Widget_Helper_Form_Element_Text('site', NULL, $domain, _t('站点域名'), _t('站长工具中添加的域名'));
        $form->addInput($site->addRule('required', _t('请填写站点域名')));

        $token = new Typecho_Widget_Helper_Form_Element_Text('token', NULL, '', _t('准入密钥'), _t('更新密钥后，请同步修改此处密钥，否则身份校验不通过将导致数据发送失败。'));
        $form->addInput($token->addRule('required', _t('请填写准入密钥')));
    }
     
    /* 个人用户的配置方法 */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
     
    /* 插件实现方法 */
    public static function render($contents, $widget){
        $options = Helper::options();
        $site = $options->plugin('SubmitBaiduLink')->site;
        $token = $options->plugin('SubmitBaiduLink')->token;
        $urls = array( $widget->permalink );
        $api = sprintf('http://data.zz.baidu.com/urls?site=%s&token=%s', $site, $token);

        $client = Typecho_Http_Client::get();
        if ($client) {
            $client->setData( implode(PHP_EOL, $urls ) )
                ->setHeader('Content-Type', 'text/plain')
                ->setTimeout(30)
                ->send($api);
            $status = $client->getResponseStatus();
            $rs = $client->getResponseBody();
            return true;
        }
        return false;
    }   
}

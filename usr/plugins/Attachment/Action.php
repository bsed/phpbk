<?php
class Attachment_Action extends Typecho_Widget implements Widget_Interface_Do
{
	public function action()
	{
		$db = Typecho_Db::get();
		$options = Typecho_Widget::widget('Widget_Options');
		$cid = intval($this->request->get("cid"));
		$attach = $db->fetchRow($db->select()->from('table.contents')->where('type = \'attachment\' AND cid = ?', $cid));
		if (empty($attach)) {
			throw new Typecho_Widget_Exception("附件文件不存在或无法读入，请与管理员联系。");
		}
		$attach_text = unserialize($attach['text']);
		$attach_url = Typecho_Common::url($attach_text['path'], $options->index);
		if (isset($options->plugins['activated']['Stat'])) {
			Stat_Plugin::viewStat($cid);
		}
		$this->response->redirect($attach_url);
	}
}

<?php
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<div class="wrap">
    <div class="container" id="searchpage">
        <div class="archive-title">
            <h3>- <?php $this->archiveTitle(array(
                'category'  =>  _t('分类 %s 下的文章'),
                'search'    =>  _t('包含关键字 %s 的内容'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
            ), '', ''); ?> -</h3>
        </div>
    </div>
</div>

<div class="wrap">
	<div class="container">
        <div class="archive">
            <ul>
                <?php if ($this->have()): ?>
                    <?php while($this->next()): ?>
                        <li><span><?php $this->date('Y/m/d'); ?></span><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></li>    
                    <?php endwhile; ?>
                <?php else: ?>
                <li>空空的什么都没有 :(</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<div class="page-nav">
    <?php $this->pageNav(); ?>
</div>
<?php if($this->is('search')): ?>
<script>
function keyLight(id, key, fontColor, bgColor){
  var oDiv = document.getElementById(id),
      oChilds  = oDiv.childNodes,
      fontColor = fontColor || "red",
      bgColor = bgColor || "transparent",
      sKey = "<strong style='color: "+fontColor+"; background-color: "+bgColor+"; font-weight: normal;'>"+key+"</strong>",
      rStr = new RegExp(key, "g");
  for(var i =0; i<oChilds.length-1; i++){
    if(oChilds[i].nodeType == 3 && /\s/.test(oChilds[i].nodeValue)){  //删除空白的节点
      oChilds[i].parentNode.removeChild(oChilds[i]);
    }
     oChilds[i].innerHTML = oChilds[i].innerHTML.replace(rStr,sKey);  //替换key
  }
}
var key1 = keyLight('searchpage','<?php $this->archiveTitle(' &raquo; ', '', ''); ?>');
// var key2 = keyLight('searchpage','微信','#fff','#f00'); 
// 高亮区域ID, 关键字,  背景透明
//支持多关键词、默认字体颜色：红
</script>
<?php endif; ?>
<?php $this->need('footer.php'); ?>

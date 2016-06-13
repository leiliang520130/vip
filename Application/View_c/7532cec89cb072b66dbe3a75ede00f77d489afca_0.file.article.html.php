<?php
/* Smarty version 3.1.29, created on 2016-05-11 09:29:04
  from "F:\web\baidu\matao\Application\View\Admin\article\article.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57328ae0c0b426_90190291',
  'file_dependency' => 
  array (
    '7532cec89cb072b66dbe3a75ede00f77d489afca' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Admin\\article\\article.html',
      1 => 1462929848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_57328ae0c0b426_90190291 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_1087457328ae0bff3b2_33056923',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:article/article.html */
function block_1087457328ae0bff3b2_33056923($_smarty_tpl, $_blockParentStack) {
?>

<!--百度编辑器导入-->
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="./Public/ueditor/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="./Public/ueditor/ueditor.all.min.js"> <?php echo '</script'; ?>
>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="./Public/ueditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<!--百度编辑器导入结束-->
<div>
<h1>发布活动</h1>
<form action="index.php?p=Admin&c=article&a=insert" method="post" class="am-form-inline" role="form">
    <span>活动标题:</span><input name="title" type="text" class="am-form-field" placeholder="" />
    <span>发布者:</span><input name="username" type="text" readonly="readonly" class="am-form-field" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
"/>
    <span>开始时间:</span><div class="am-form-group am-form-icon">
    <i class="am-icon-calendar"></i>
    <input type="date" name="start" class="am-form-field am-input-sm" placeholder="时间">
    </div>
    <span>结束时间:</span><div class="am-form-group am-form-icon">
    <i class="am-icon-calendar"></i>
    <input type="date" name="end" class="am-form-field am-input-sm" placeholder="时间">
    </div>
    <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:980px;height:300px;" name="content"><?php echo '</script'; ?>
>
    <button type="submit" class="am-btn am-btn-default am-radius" style="width: 980px;">一键发布活动</button>
</form>

<?php echo '<script'; ?>
 type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
<?php echo '</script'; ?>
>
</div>
<?php
}
/* {/block 'content'} */
}

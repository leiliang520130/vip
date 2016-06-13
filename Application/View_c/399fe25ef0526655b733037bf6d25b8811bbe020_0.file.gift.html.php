<?php
/* Smarty version 3.1.29, created on 2016-05-17 14:52:41
  from "F:\web\baidu\matao\Application\View\Admin\gift\gift.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_573abfb9d2ad34_07705324',
  'file_dependency' => 
  array (
    '399fe25ef0526655b733037bf6d25b8811bbe020' => 
    array (
      0 => 'F:\\web\\baidu\\matao\\Application\\View\\Admin\\gift\\gift.html',
      1 => 1463467945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index.html' => 1,
  ),
),false)) {
function content_573abfb9d2ad34_07705324 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'content', array (
  0 => 'block_24110573abfb9cead44_23898817',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:gift/gift.html */
function block_24110573abfb9cead44_23898817($_smarty_tpl, $_blockParentStack) {
?>

<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-add">
    <div class="am-modal-dialog">
        <div class="am-modal-hd"> 添加商品
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <form class="am-form" action="index.php?p=Admin&c=gift&a=add" method="post" enctype="multipart/form-data">
                <div>
                    <label for="doc-select-1">商品</label>
                    <input name="introduce" type="text" class="am-form-field am-radius" placeholder=""  />
                </div>
                <div>
                    <label for="doc-select-1">积分</label>
                    <input name="integral" type="text" class="am-form-field am-radius" placeholder="" />
                </div>
                <div>
                    <label for="doc-select-1">库存</label>
                    <input name="stock" type="text" class="am-form-field am-radius" placeholder=""  />
                </div>
                <div>
                    <label for="doc-select-1">图片</label>
                    <input name="file" type="file" class="am-form-field am-radius" placeholder="" />
                </div>
                <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
            </form>
        </div>
    </div>
</div>
<style>
    .am-g img{
        width: 220px;
        height: 220px;
    }
</style>
<div class="am-g">
    <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row_0_saved_item = isset($_smarty_tpl->tpl_vars['row']) ? $_smarty_tpl->tpl_vars['row'] : false;
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$__foreach_row_0_saved_local_item = $_smarty_tpl->tpl_vars['row'];
?>
    <div class="am-u-sm-4">
        <div class="am-thumbnail">
            <img src="./Public/Upload/<?php echo $_smarty_tpl->tpl_vars['row']->value['img'];?>
" alt=""/>
            <div class="am-thumbnail-caption">
                <h3><?php echo $_smarty_tpl->tpl_vars['row']->value['introduce'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['integral'];?>
积分</h3>
                &nbsp &nbsp &nbsp
                <button
                type="button"
                class="am-btn am-btn-primary"
                data-am-modal="{ target: '#doc-modal-<?php echo $_smarty_tpl->tpl_vars['row']->value['gift_id'];?>
', closeViaDimmer: 0, width: 400, height: 400 }">
                更改商品
                </button>
                &nbsp  &nbsp &nbsp
                <a href="index.php?p=Admin&c=gift&a=remove&id=<?php echo $_smarty_tpl->tpl_vars['row']->value['gift_id'];?>
" onclick="return confirm('你确定要删除?')"><button
                        type="button"
                        class="am-btn am-btn-primary">
                    删除商品
                </button></a>

                <div style="float: right;">库存 <?php echo $_smarty_tpl->tpl_vars['row']->value['stock'];?>
</div>
            </div>
        </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_local_item;
}
if ($__foreach_row_0_saved_item) {
$_smarty_tpl->tpl_vars['row'] = $__foreach_row_0_saved_item;
}
?>
    <button
            type="button"
            class="am-btn am-btn-primary"
            data-am-modal="{ target: '#doc-modal-add', closeViaDimmer: 0, width: 400, height: 400 }">
        添加商品
    </button>
    <?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_row1_1_saved_item = isset($_smarty_tpl->tpl_vars['row1']) ? $_smarty_tpl->tpl_vars['row1'] : false;
$_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['row1']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->value) {
$_smarty_tpl->tpl_vars['row1']->_loop = true;
$__foreach_row1_1_saved_local_item = $_smarty_tpl->tpl_vars['row1'];
?>
    <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-<?php echo $_smarty_tpl->tpl_vars['row1']->value['gift_id'];?>
">
        <div class="am-modal-dialog">
            <div class="am-modal-hd"> 更改商品信息
                <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
            </div>
            <div class="am-modal-bd">
                <form class="am-form" action="index.php?p=Admin&c=gift&a=edit" method="post" enctype="multipart/form-data">
                    <div>
                        <label for="doc-select-1">商品</label>
                        <input name="introduce" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['introduce'];?>
" />
                    </div>
                    <div>
                        <label for="doc-select-1">积分</label>
                        <input name="integral" type="text" class="am-form-field am-radius" placeholder=""  value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['integral'];?>
"/>
                    </div>
                    <div>
                        <label for="doc-select-1">库存</label>
                        <input name="stock" type="text" class="am-form-field am-radius" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['stock'];?>
" />
                    </div>
                    <div>
                    <label for="doc-select-1">图片</label>
                    <input name="file" type="file" class="am-form-field am-radius" placeholder="" />
            </div>
                    <input type="hidden" name="gift_id" value="<?php echo $_smarty_tpl->tpl_vars['row1']->value['gift_id'];?>
">
                    <p><button type="submit" class="am-btn am-btn-default">提交</button></p>
                </form>
            </div>
        </div>
    </div>
    <?php
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_1_saved_local_item;
}
if ($__foreach_row1_1_saved_item) {
$_smarty_tpl->tpl_vars['row1'] = $__foreach_row1_1_saved_item;
}
?>
</div>
<?php
}
/* {/block 'content'} */
}
